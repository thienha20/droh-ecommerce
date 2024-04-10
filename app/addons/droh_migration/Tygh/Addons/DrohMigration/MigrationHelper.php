<?php

namespace Tygh\Addons\DrohMigration;

use Tygh\Tygh;
use Exception;

class MigrationHelper
{
    /**
     * @var string
     */
    private string $_path = __DIR__ . '/../../../sql';

    public function __construct()
    {
    }

    private function getFolderNames(): array
    {
        $directories = array();
        foreach (scandir($this->_path) as $file) {
            if ($file == '.' || $file == '..') continue;
            $dir = $this->_path . DIRECTORY_SEPARATOR . $file;
            if (is_dir($dir)) {
                $ex = explode("_", $file);
                $directories[] = [
                    "date" => $this->createDate($ex[0]),
                    "name" => $file
                ];
            }
        }
        usort($directories, function($first, $second) {
            return $first['date'] > $second['date'];
        });
        return $directories;
    }

    private function createDate(string $date)
    {
        $d = "";
        if (!empty(substr($date, 0, 4))) $d .= substr($date, 0, 4) . "-";
        if (!empty(substr($date, 4, 2))) $d .= substr($date, 4, 2) . "-";
        if (!empty(substr($date, 6, 2))) $d .= substr($date, 6, 2);
        if (!empty(substr($date, 8, 2))) $d .= " " . substr($date, 8, 2);
        if (!empty(substr($date, 10, 2))) $d .= ":" . substr($date, 10, 2);
        if (!empty(substr($date, 12, 2))) $d .= ":" . substr($date, 12, 2);
        return date_create($d);
    }

    public function rollback(array $features): bool
    {
        if (empty($features)) return false;
        foreach ($features as $f) {
            $file = $this->_path . DIRECTORY_SEPARATOR . $f . '/rollback.sql';
            if (!file_exists($file)) {
                echo 'Lổi không tìm thấy file rollback: {' . $f . '}' . PHP_EOL;
                continue;
            }
            $content = trim(file_get_contents($file));
            if ($content) {
                $arrStatement = explode(';', $content);
                db_query("START TRANSACTION;");
                db_query("SET autocommit = 1");
                try {
                    $new_migrate_id = db_get_field("SELECT migrate_id FROM ?:droh_migrations WHERE name = ?s", $f);
                    echo 'Starting rollback: {' . $f . '}' . PHP_EOL;
                    foreach ($arrStatement as $query) {
                        $query = trim($query);
                        echo $query . PHP_EOL;
                        db_query($query);
                    }
                    db_query("UPDATE ?:droh_migrations SET ?u WHERE migrate_id=?i", [
                        "rolled_at" => date('Y-m-d H:i:s')
                    ], $new_migrate_id);
                    echo 'End rollback: {' . $f . '}' . PHP_EOL;
                    db_query("COMMIT");
                } catch (Exception $e) {
                    db_query("ROLLBACK");
                    echo 'Error rollback: {' . $f . '}' . PHP_EOL;
                    echo '**************************************' . PHP_EOL;
                    echo $e->getMessage() . PHP_EOL;
                    echo '**************************************' . PHP_EOL;
                    exit;
                }
            }
        }
        echo 'Database của bạn đã được rollback hoàn tất' . PHP_EOL;
        return true;
    }

    public function runMigration(): bool
    {
        $arrData = db_get_array("SELECT * FROM ?:droh_migrations");
        $migrationFolder = $this->getFolderNames();
        $folderRun = array_column($arrData, 'name');
        if (empty($migrationFolder)) return false;
        foreach ($migrationFolder as $f) {
            if (!in_array($f['name'], $folderRun)) {
                $file = $this->_path . DIRECTORY_SEPARATOR . $f['name'] . '/run.sql';
                if (!file_exists($file)) {
                    echo 'Lổi không tìm thấy file migrate: {' . $f['name'] . '}' . PHP_EOL;
                    continue;
                }
                $content = trim(file_get_contents($file));
                if ($content) {
                    $arrStatement = explode(';', $content);
                    db_query("SET autocommit = 0");
                    db_query("START TRANSACTION;");
                    try {
                        $new_migrate_id = db_query("INSERT INTO ?:droh_migrations ?e", [
                            "name" => $f["name"],
                            "started_at" => date('Y-m-d H:i:s')
                        ]);
                        echo 'Starting migration: {' . $f['name'] . '}' . PHP_EOL;
                        foreach ($arrStatement as $query) {
                            $query = trim($query);
                            echo $query . PHP_EOL;
                            db_query($query);
                        }
                        db_query("UPDATE ?:droh_migrations SET ?u WHERE migrate_id=?i", [
                            "finished_at" => date('Y-m-d H:i:s')
                        ], $new_migrate_id);
                        echo 'End migration: {' . $f['name'] . '}' . PHP_EOL;
                        db_query("COMMIT;");
                    } catch (Exception $e) {
                        db_query("ROLLBACK;");
                        echo 'Error migration: {' . $f['name'] . '}' . PHP_EOL;
                        echo '**************************************' . PHP_EOL;
                        echo $e->getMessage() . PHP_EOL;
                        echo '**************************************' . PHP_EOL;
                        exit;
                    }
                }
                else{
                    echo 'File migrate không có nội dung: {' . $f['name'] . '}' . PHP_EOL;
                }
            }
        }
        echo 'Database của bạn đã cập nhật phiên bản mới nhất' . PHP_EOL;
        return true;
    }

    public function addMigration(string $name)
    {
        $name = date('YmdHis') . "_" . $name;
        if (!file_exists($this->_path . DIRECTORY_SEPARATOR . $name)) {
            fn_mkdir($this->_path . DIRECTORY_SEPARATOR . $name);
            $run = fopen($this->_path . DIRECTORY_SEPARATOR . $name. "/run.sql", "w") or die("Unable to open file!");
            fwrite($run, '');
            fclose($run);
            $rollback = fopen($this->_path . DIRECTORY_SEPARATOR . $name. "/rollback.sql", "w") or die("Unable to open file!");
            fwrite($rollback, '');
            fclose($rollback);
        }
        echo "Migrate new name: {$name}";
        return $name;
    }
}
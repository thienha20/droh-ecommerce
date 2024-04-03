<?php

use Tygh\Addons\DrohMigration\MigrationHelper;

/** @var  $mode */
if (!defined('STDIN')) {
    die(__('access_denied'));
}
// create folder migrate in folder 'sql' (folder name pattern Date{YmdHis}_String{feature}) have run.sql and rollback.sql(optional)
// php admin.php --dispatch=migration

$migrationHelper = new MigrationHelper();

if ($mode == 'add') {
    $feature = $_REQUEST['feature'] ?? '';
    $migrationHelper->addMigration($feature);
    exit;
}

if ($mode == 'rollback') {
    $feature = $_REQUEST['feature'] ?? '';
    $migrationHelper->rollback(explode(",", $feature));
    exit;
}

$migrationHelper->runMigration();
exit;
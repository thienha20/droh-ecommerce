<?php

use addons\droh_migration\Tygh\Addons\DrohMigration\MigrationHelper;
use Tygh\Registry;

/** @var  $mode */

$access_key = Registry::get('addons.droh_migration.access_key');
if ((!isset($_REQUEST['access_key']) || $access_key != $_REQUEST['access_key']) && (!empty($access_key))) {
    die(__('access_denied'));
}
unset($access_key);

if(!defined('STDIN')){
    die(__('access_denied'));
}

// php admin.php --dispatch=droh_migration --access_key={key}

$migrationHelper = MigrationHelper::getInstance();

if($mode == 'new'){
    $feature = $_REQUEST['feature'] ?? '';
    $migrationHelper->createMigrationScript($feature);
    exit;
}

$migrationHelper->runMigration();
exit;
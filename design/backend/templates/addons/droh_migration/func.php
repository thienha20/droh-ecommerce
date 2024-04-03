<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

#region ADDON SETTING
function fn_droh_migration_get_access_key_info()
{
    $new_script = 'php admin.php --dispatch=droh_migration.new';
    $run_script = 'php admin.php --dispatch=droh_migration';
    if (!empty(Registry::get('addons.droh_migration.access_key'))) {
        $new_script .= ' --access_key=' . Registry::get('addons.droh_migration.access_key');
        $run_script .= ' --access_key=' . Registry::get('addons.droh_migration.access_key');
    }
    $new_script .= ' [--feature=task_name]';

    return '
<div class="control-group setting-wide">
    <div class="controls">
        <p class="muted" id="addon_option_droh_migration_access_key_info">Nhập mã truy cập để cho phép chạy migration</p>
        <p class="muted">Để trống nếu luôn cho phép chạy migration</p>
        <p class="muted">Tạo mới script: ' . $new_script . '</p>
        <p class="muted">Cập nhật database: ' . $run_script . '</p>
    </div>
</div>
    ';
}

#endregion
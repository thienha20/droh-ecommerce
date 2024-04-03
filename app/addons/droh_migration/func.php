<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

#region ADDON SETTING
function fn_droh_migration_get_info(): string
{
    $run_script = 'php admin.php --dispatch=migration';
    $rollback_script = 'php admin.php --dispatch=migration.rollback';
    $add_script = 'php admin.php --dispatch=migration.add';
    return '
        <div class="control-group setting-wide">
            <div class="controls">
                <p class="muted">Chạy migration: <strong>' . $run_script . '</strong></p>
                <p class="muted">Chạy rollback: <strong>' . $rollback_script . '</strong></p>
                <p class="muted">Thêm 1 migration: <strong>' . $add_script . '</strong></p>
            </div>
        </div>
    ';
}

#endregion
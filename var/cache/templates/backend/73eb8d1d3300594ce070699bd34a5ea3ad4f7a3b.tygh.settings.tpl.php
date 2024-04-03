<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:10:07
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\setup_wizard\components\tabs\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8621989876603c64f29e713-85297436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73eb8d1d3300594ce070699bd34a5ea3ad4f7a3b' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\setup_wizard\\components\\tabs\\settings.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8621989876603c64f29e713-85297436',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c64f2a9d66_05643113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c64f2a9d66_05643113')) {function content_6603c64f2a9d66_05643113($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.admin_notifications','sw.configure','sw.vendor_notifications','sw.configure'));
?>
<div id="sw_settings_extra">
    <div class="sw-columns-block">
        <div class="form-horizontal">
            <div class="control-icon sw_notifications_icon"></div>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("sw.admin_notifications");?>
:</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"notification_settings.manage?receiver_type=A",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0);?>

                </div>
            </div>
        </div>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <div class="form-horizontal">
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("sw.vendor_notifications");?>
:</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"notification_settings.manage?receiver_type=V",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0);?>

                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<!--sw_settings_extra--></div>
<?php }} ?>

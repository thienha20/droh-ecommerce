<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 09:57:15
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_panel_configurator\hooks\menu\profile_menu_extra_item.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11685172736603c34b555ed0-57746120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d7c604e0182a38c4286091e305737d3cb5e4bc5' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_panel_configurator\\hooks\\menu\\profile_menu_extra_item.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11685172736603c34b555ed0-57746120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c34b56bd69_29474940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c34b56bd69_29474940')) {function content_6603c34b56bd69_29474940($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_panel_configurator.seller_info'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php if (fn_check_view_permissions("companies.update","GET")) {?>  
        <li><a href="<?php echo htmlspecialchars(fn_url("companies.update&company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_panel_configurator.seller_info");?>
</a></li>
    <?php }?>
<?php }?><?php }} ?>
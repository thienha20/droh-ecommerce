<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:15:43
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\advanced_import\hooks\products\tools_list_items.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3178847396603c79f185541-23165317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dafc0238f4a0fec821521f33170822ae1fb483e4' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\advanced_import\\hooks\\products\\tools_list_items.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3178847396603c79f185541-23165317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c79f18d942_68639518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c79f18d942_68639518')) {function content_6603c79f18d942_68639518($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['import_product_href'] = new Smarty_variable("import_presets.manage&object_type=products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['import_product_href'] = clone $_smarty_tpl->tpl_vars['import_product_href'];?>
    <?php $_smarty_tpl->tpl_vars['has_permission_an_import'] = new Smarty_variable(fn_check_permissions("import_presets","update","admin","POST"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['has_permission_an_import'] = clone $_smarty_tpl->tpl_vars['has_permission_an_import'];?>
<?php }?>
<?php }} ?>

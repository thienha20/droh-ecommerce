<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 09:57:14
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_panel_configurator\hooks\index\content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12359465116603c34a21dff7-92556578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '913ae309f8c3d5e919b3249b591d2a3b7cc0284e' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_panel_configurator\\hooks\\index\\content_top.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12359465116603c34a21dff7-92556578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'select_languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c34a22e6b6_85825980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c34a22e6b6_85825980')) {function content_6603c34a22e6b6_85825980($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable($_smarty_tpl->tpl_vars['select_languages']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_languages'] = clone $_smarty_tpl->tpl_vars['select_languages'];?>
<?php }?>
<?php }} ?>
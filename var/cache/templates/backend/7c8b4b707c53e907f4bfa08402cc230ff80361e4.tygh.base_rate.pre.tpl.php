<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:20:28
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\store_locator\hooks\shippings\base_rate.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2623491786603c8bc48fa24-51630414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c8b4b707c53e907f4bfa08402cc230ff80361e4' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\store_locator\\hooks\\shippings\\base_rate.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2623491786603c8bc48fa24-51630414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
    'store_locator_shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c8bc493661_64161743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c8bc493661_64161743')) {function content_6603c8bc493661_64161743($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['can_specify_base_rate'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['rate_calculation']=="M"||$_smarty_tpl->tpl_vars['store_locator_shipping']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['can_specify_base_rate'] = clone $_smarty_tpl->tpl_vars['can_specify_base_rate'];?>
<?php }} ?>

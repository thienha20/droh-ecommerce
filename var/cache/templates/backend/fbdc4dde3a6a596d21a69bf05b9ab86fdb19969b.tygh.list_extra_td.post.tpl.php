<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:17:01
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_rating\hooks\companies\list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20889088576603c7eda9ea95-32217414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbdc4dde3a6a596d21a69bf05b9ab86fdb19969b' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_rating\\hooks\\companies\\list_extra_td.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20889088576603c7eda9ea95-32217414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7edaa0a69_01222763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7edaa0a69_01222763')) {function content_6603c7edaa0a69_01222763($_smarty_tpl) {?><td width="19%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
</td>
<?php }} ?>

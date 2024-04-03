<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:13:23
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_bundles\hooks\product_picker\table_header.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16783340606603c713746ea0-29700092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f37c6ab7aff94f3ab954e85b801a7b8a9c92ed' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_bundles\\hooks\\product_picker\\table_header.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16783340606603c713746ea0-29700092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'extra_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c71374f656_95141934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c71374f656_95141934')) {function content_6603c71374f656_95141934($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price','discount','value','discounted_price','product_bundles.show_on_product_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']==="product_bundles"||$_smarty_tpl->tpl_vars['extra_mode']->value==="product_bundles") {?>
    <th><?php echo $_smarty_tpl->__("price");?>
</th>
    <th><?php echo $_smarty_tpl->__("discount");?>
</th>
    <th><?php echo $_smarty_tpl->__("value");?>
</th>
    <th><?php echo $_smarty_tpl->__("discounted_price");?>
</th>
    <th><?php echo $_smarty_tpl->__("product_bundles.show_on_product_page");?>
</th>
<?php }?><?php }} ?>

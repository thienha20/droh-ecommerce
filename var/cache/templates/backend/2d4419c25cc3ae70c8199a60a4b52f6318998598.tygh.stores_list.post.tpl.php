<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:49:14
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\warehouses\hooks\store_locator\stores_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161923537966078bba5670a3-16181812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d4419c25cc3ae70c8199a60a4b52f6318998598' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\warehouses\\hooks\\store_locator\\stores_list.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161923537966078bba5670a3-16181812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loc' => 0,
    'store_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078bba56bb37_56894506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078bba56bb37_56894506')) {function content_66078bba56bb37_56894506($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.store_type'));
?>
<td data-th="<?php echo $_smarty_tpl->__("warehouses.store_type");?>
">
    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_type'], ENT_QUOTES, 'UTF-8');?>
" name="store_locators[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
][store_type]"/>
    <span class="row-status">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_types']->value[$_smarty_tpl->tpl_vars['loc']->value['store_type']], ENT_QUOTES, 'UTF-8');?>

    </span>
</td>
<?php }} ?>

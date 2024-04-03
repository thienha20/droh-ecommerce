<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:47:13
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\warehouses\hooks\products\update_product_amount.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41166676066078b41556e96-64134256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5d9cb54c13d78edadf7fa7f4d5ee1b41ad4f54a' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\warehouses\\hooks\\products\\update_product_amount.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '41166676066078b41556e96-64134256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_warehouses_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078b41577fa6_22262248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078b41577fa6_22262248')) {function content_66078b41577fa6_22262248($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('in_stock'));
?>
<?php if (isset($_smarty_tpl->tpl_vars['product_warehouses_amount']->value)) {?>
    <div class="control-group">
        <label class="control-label" for="elm_in_stock"><?php echo $_smarty_tpl->__("in_stock");?>
:</label>
        <div class="controls">
            <input type="text" name="product_data[amount]" id="elm_in_stock" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_warehouses_amount']->value, ENT_QUOTES, 'UTF-8');?>
" disabled class="input-small" />
        </div>
    </div>
<?php }?>
<?php }} ?>

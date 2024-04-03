<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:47:09
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\warehouses\hooks\products\list_quantity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19305460366078b3d7d36e6-29498167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b667bb085639551b1e7ac697b571952789b40eb' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\warehouses\\hooks\\products\\list_quantity.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19305460366078b3d7d36e6-29498167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078b3d7d8129_39096208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078b3d7d8129_39096208')) {function content_66078b3d7d8129_39096208($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['warehouse_amount'])) {?>
    <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['warehouse_amount'], ENT_QUOTES, 'UTF-8');?>
" disabled class="input-full input-hidden" />
<?php }?>
<?php }} ?>

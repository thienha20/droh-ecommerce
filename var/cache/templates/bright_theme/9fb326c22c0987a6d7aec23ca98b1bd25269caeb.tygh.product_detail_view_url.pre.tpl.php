<?php /* Smarty version Smarty-3.1.21, created on 2024-04-10 16:00:52
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\wishlist\hooks\products\product_detail_view_url.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125115467966165544e2fae8-29504334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fb326c22c0987a6d7aec23ca98b1bd25269caeb' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\products\\product_detail_view_url.pre.tpl',
      1 => 1711522884,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125115467966165544e2fae8-29504334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'product_detail_view_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66165544e476d5_52333131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66165544e476d5_52333131')) {function content_66165544e476d5_52333131($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?>
    <?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_detail_view_url']->value,"combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']))), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_detail_view_url'] = clone $_smarty_tpl->tpl_vars['product_detail_view_url'];?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_detail_view_url.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_detail_view_url.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?>
    <?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_detail_view_url']->value,"combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']))), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_detail_view_url'] = clone $_smarty_tpl->tpl_vars['product_detail_view_url'];?>
<?php }
}?><?php }} ?>

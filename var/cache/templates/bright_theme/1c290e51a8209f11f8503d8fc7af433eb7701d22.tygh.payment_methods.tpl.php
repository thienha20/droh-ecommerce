<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:17:44
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\views\checkout\components\payments\payment_methods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5451608386603c8182cebb4-68513289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c290e51a8209f11f8503d8fc7af433eb7701d22' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\views\\checkout\\components\\payments\\payment_methods.tpl',
      1 => 1711520232,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5451608386603c8182cebb4-68513289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c8182e6f85_18421841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c8182e6f85_18421841')) {function content_6603c8182e6f85_18421841($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/repay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/payments/payment_methods.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/payments/payment_methods.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/repay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:41
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\vendor_communication\hooks\products\view_main_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13043614736603c5f9608853-13398110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318e7fdc1ee15c05e63766839b0974fd3e3f6115' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\hooks\\products\\view_main_info.pre.tpl',
      1 => 1711522866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13043614736603c5f9608853-13398110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'quick_view_additional_container' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c5f9641b45_42257053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c5f9641b45_42257053')) {function content_6603c5f9641b45_42257053($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['quick_view_additional_container'] = new Smarty_variable(($_smarty_tpl->tpl_vars['quick_view_additional_container']->value).(",product_vendor_communication_thread_form"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['quick_view_additional_container'] = clone $_smarty_tpl->tpl_vars['quick_view_additional_container'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/products/view_main_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/products/view_main_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['quick_view_additional_container'] = new Smarty_variable(($_smarty_tpl->tpl_vars['quick_view_additional_container']->value).(",product_vendor_communication_thread_form"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['quick_view_additional_container'] = clone $_smarty_tpl->tpl_vars['quick_view_additional_container'];
}?><?php }} ?>

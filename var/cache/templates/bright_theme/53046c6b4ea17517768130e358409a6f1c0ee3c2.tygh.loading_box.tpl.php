<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 09:55:05
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\common\loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17276774946603c2c93d6e82-80214714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53046c6b4ea17517768130e358409a6f1c0ee3c2' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\common\\loading_box.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17276774946603c2c93d6e82-80214714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c2c93f4f92_86018682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c2c93f4f92_86018682')) {function content_6603c2c93f4f92_86018682($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="ajax_overlay" class="ty-ajax-overlay"></div>
<div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/loading_box.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/loading_box.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="ajax_overlay" class="ty-ajax-overlay"></div>
<div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
<?php }?><?php }} ?>

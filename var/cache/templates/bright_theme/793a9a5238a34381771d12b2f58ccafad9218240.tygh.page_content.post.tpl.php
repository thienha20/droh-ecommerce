<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 09:55:07
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\tags\hooks\pages\page_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618565734660665cbe89650-82530543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '793a9a5238a34381771d12b2f58ccafad9218240' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\tags\\hooks\\pages\\page_content.post.tpl',
      1 => 1711522865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '618565734660665cbe89650-82530543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'page' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660665cbec3a66_12344282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660665cbec3a66_12344282')) {function content_660665cbec3a66_12344282($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'object'=>$_smarty_tpl->tpl_vars['page']->value), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/hooks/pages/page_content.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/hooks/pages/page_content.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'object'=>$_smarty_tpl->tpl_vars['page']->value), 0);?>

<?php }
}?><?php }} ?>
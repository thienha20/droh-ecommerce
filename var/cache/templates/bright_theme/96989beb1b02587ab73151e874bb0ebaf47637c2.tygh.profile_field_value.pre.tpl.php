<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:01:42
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\vendor_plans\hooks\companies\profile_field_value.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7065408236603d2666c1b38-84559686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96989beb1b02587ab73151e874bb0ebaf47637c2' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\vendor_plans\\hooks\\companies\\profile_field_value.pre.tpl',
      1 => 1711522867,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7065408236603d2666c1b38-84559686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'field_data' => 0,
    'data_source' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603d2666db125_23301950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603d2666db125_23301950')) {function content_6603d2666db125_23301950($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===(defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['data_source']->value['plan'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['field_value'] = clone $_smarty_tpl->tpl_vars['field_value'];?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/hooks/companies/profile_field_value.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/hooks/companies/profile_field_value.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===(defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['data_source']->value['plan'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['field_value'] = clone $_smarty_tpl->tpl_vars['field_value'];?>
<?php }?>
<?php }?><?php }} ?>

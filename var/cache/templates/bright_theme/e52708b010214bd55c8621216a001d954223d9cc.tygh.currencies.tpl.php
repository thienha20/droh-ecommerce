<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 09:55:05
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\blocks\currencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20117055426603c2c9995ed0-63334850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e52708b010214bd55c8621216a001d954223d9cc' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\blocks\\currencies.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20117055426603c2c9995ed0-63334850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'currencies' => 0,
    'dropdown_limit' => 0,
    'text' => 0,
    'config' => 0,
    'code' => 0,
    'secondary_currency' => 0,
    'format' => 0,
    'currency' => 0,
    'uid' => 0,
    'key_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c2c9bddb04_13629981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c2c9bddb04_13629981')) {function content_6603c2c9bddb04_13629981($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(uniqid(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['currencies']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
    <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value>0&&smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value)<=$_smarty_tpl->tpl_vars['dropdown_limit']->value) {?>
        <div class="ty-currencies hidden-phone hidden-tablet">
            <?php if ($_smarty_tpl->tpl_vars['text']->value) {?><div class="ty-currencies__txt"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
:</div><?php }?>
            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency=".((string)$_smarty_tpl->tpl_vars['code']->value))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-currencies__item <?php if ($_smarty_tpl->tpl_vars['secondary_currency']->value==$_smarty_tpl->tpl_vars['code']->value) {?>ty-currencies__active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];?>
)<?php } else {
echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];
}?></a>
            <?php } ?>
        </div>
        <div class="visible-phone visible-tablet ty-select-wrapper"><?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'suffix'=>"currency_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value), 0);?>
</div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable("description", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <div class="ty-select-wrapper"><?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'suffix'=>"currency_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value), 0);?>
</div>
    <?php }?>
<?php }?>

<!--currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/currencies.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/currencies.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(uniqid(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['currencies']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
    <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value>0&&smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value)<=$_smarty_tpl->tpl_vars['dropdown_limit']->value) {?>
        <div class="ty-currencies hidden-phone hidden-tablet">
            <?php if ($_smarty_tpl->tpl_vars['text']->value) {?><div class="ty-currencies__txt"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
:</div><?php }?>
            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency=".((string)$_smarty_tpl->tpl_vars['code']->value))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-currencies__item <?php if ($_smarty_tpl->tpl_vars['secondary_currency']->value==$_smarty_tpl->tpl_vars['code']->value) {?>ty-currencies__active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];?>
)<?php } else {
echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];
}?></a>
            <?php } ?>
        </div>
        <div class="visible-phone visible-tablet ty-select-wrapper"><?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'suffix'=>"currency_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value), 0);?>
</div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable("description", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <div class="ty-select-wrapper"><?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'suffix'=>"currency_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value), 0);?>
</div>
    <?php }?>
<?php }?>

<!--currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?><?php }} ?>

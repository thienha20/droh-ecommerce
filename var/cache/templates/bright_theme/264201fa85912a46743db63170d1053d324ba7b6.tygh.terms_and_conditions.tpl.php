<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:17:44
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\blocks\lite_checkout\terms_and_conditions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11451211136603c81861e511-85619589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '264201fa85912a46743db63170d1053d324ba7b6' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\blocks\\lite_checkout\\terms_and_conditions.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11451211136603c81861e511-85619589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'suffix' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c818634515_00803898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c818634515_00803898')) {function content_6603c818634515_00803898($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__container">
    <?php if (!$_smarty_tpl->tpl_vars['suffix']->value) {?>
        <?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable(uniqid(''), null, 0);?>
    <?php }?>

    <div class="litecheckout__item">
        <div class="litecheckout__terms" id="litecheckout_terms">
            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/terms_and_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('suffix'=>$_smarty_tpl->tpl_vars['suffix']->value), 0);?>

        <!--litecheckout_terms--></div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/terms_and_conditions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/terms_and_conditions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__container">
    <?php if (!$_smarty_tpl->tpl_vars['suffix']->value) {?>
        <?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable(uniqid(''), null, 0);?>
    <?php }?>

    <div class="litecheckout__item">
        <div class="litecheckout__terms" id="litecheckout_terms">
            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/terms_and_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('suffix'=>$_smarty_tpl->tpl_vars['suffix']->value), 0);?>

        <!--litecheckout_terms--></div>
    </div>
</div>
<?php }?><?php }} ?>

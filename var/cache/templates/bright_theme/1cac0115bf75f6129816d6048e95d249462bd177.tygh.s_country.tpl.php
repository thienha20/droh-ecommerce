<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:17:43
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\views\checkout\components\profile_fields\s_country.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17515503446603c8176588c3-33043866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cac0115bf75f6129816d6048e95d249462bd177' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\views\\checkout\\components\\profile_fields\\s_country.tpl',
      1 => 1711520232,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17515503446603c8176588c3-33043866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'user_data' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c817680998_31728049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c817680998_31728049')) {function content_6603c817680998_31728049($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select_country','country','select_country','country'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_country")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_country"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="litecheckout__field litecheckout__field--auto">
    <select data-ca-lite-checkout-field="user_data.s_country"
            class="cm-country cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="country"
            data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country'], ENT_QUOTES, 'UTF-8');?>
"
            required
            id="litecheckout_country"
    >
        <option disabled data-ca-rebuild-states="skip" <?php if (!$_smarty_tpl->tpl_vars['user_data']->value['s_country']) {?>selected<?php }?>><?php echo $_smarty_tpl->__("select_country");?>
</option>
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>

    <label class="litecheckout__label cm-required" for="litecheckout_country"><?php echo $_smarty_tpl->__("country");?>
: </label>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_country"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/s_country.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields/s_country.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_country")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_country"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="litecheckout__field litecheckout__field--auto">
    <select data-ca-lite-checkout-field="user_data.s_country"
            class="cm-country cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="country"
            data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country'], ENT_QUOTES, 'UTF-8');?>
"
            required
            id="litecheckout_country"
    >
        <option disabled data-ca-rebuild-states="skip" <?php if (!$_smarty_tpl->tpl_vars['user_data']->value['s_country']) {?>selected<?php }?>><?php echo $_smarty_tpl->__("select_country");?>
</option>
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>

    <label class="litecheckout__label cm-required" for="litecheckout_country"><?php echo $_smarty_tpl->__("country");?>
: </label>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_country"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>

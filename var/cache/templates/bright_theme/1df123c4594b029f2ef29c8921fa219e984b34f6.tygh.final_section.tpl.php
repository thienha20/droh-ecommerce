<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:17:45
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\views\checkout\components\final_section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6620772726603c8193448d2-27257038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df123c4594b029f2ef29c8921fa219e984b34f6' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\views\\checkout\\components\\final_section.tpl',
      1 => 1711520232,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6620772726603c8193448d2-27257038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'auth' => 0,
    'recalculate' => 0,
    'show_place_order' => 0,
    'is_payment_step' => 0,
    'iframe_mode' => 0,
    'continue_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c819373f81_68336852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c819373f81_68336852')) {function content_6603c819373f81_68336852($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['show_place_order'] = new Smarty_variable(false, null, 0);?>

<?php if (fn_allow_place_order($_smarty_tpl->tpl_vars['cart']->value,$_smarty_tpl->tpl_vars['auth']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['show_place_order'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['recalculate']->value&&!$_smarty_tpl->tpl_vars['cart']->value['amount_failed']) {?>
    <?php $_smarty_tpl->tpl_vars['show_place_order'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_place_order']->value) {?>

    <div class="clearfix <?php if (!$_smarty_tpl->tpl_vars['is_payment_step']->value) {?> checkout__block ty-checkout-block-terms<?php }?>">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:final_section_customer_notes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:final_section_customer_notes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:final_section_customer_notes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <input type="hidden" name="update_steps" value="1" />
    
    <?php if (!$_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <div class="litecheckout__item litecheckout__item--full litecheckout__submit-order">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.place_order]",'but_role'=>"big",'but_id'=>"litecheckout_place_order"), 0);?>

        </div>
    <?php }?>

<?php } else { ?>

    <div class="litecheckout__item litecheckout__submit-order">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0);?>

    </div>
    
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/final_section.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/final_section.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['show_place_order'] = new Smarty_variable(false, null, 0);?>

<?php if (fn_allow_place_order($_smarty_tpl->tpl_vars['cart']->value,$_smarty_tpl->tpl_vars['auth']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['show_place_order'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['recalculate']->value&&!$_smarty_tpl->tpl_vars['cart']->value['amount_failed']) {?>
    <?php $_smarty_tpl->tpl_vars['show_place_order'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_place_order']->value) {?>

    <div class="clearfix <?php if (!$_smarty_tpl->tpl_vars['is_payment_step']->value) {?> checkout__block ty-checkout-block-terms<?php }?>">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:final_section_customer_notes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:final_section_customer_notes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:final_section_customer_notes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <input type="hidden" name="update_steps" value="1" />
    
    <?php if (!$_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <div class="litecheckout__item litecheckout__item--full litecheckout__submit-order">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.place_order]",'but_role'=>"big",'but_id'=>"litecheckout_place_order"), 0);?>

        </div>
    <?php }?>

<?php } else { ?>

    <div class="litecheckout__item litecheckout__submit-order">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0);?>

    </div>
    
<?php }?>
<?php }?><?php }} ?>

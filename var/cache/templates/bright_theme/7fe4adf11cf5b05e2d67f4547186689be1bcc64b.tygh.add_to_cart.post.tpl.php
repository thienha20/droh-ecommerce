<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:41
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\call_requests\hooks\products\add_to_cart.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9535408276603c5f9932d45-31481646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fe4adf11cf5b05e2d67f4547186689be1bcc64b' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\call_requests\\hooks\\products\\add_to_cart.post.tpl',
      1 => 1711522882,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9535408276603c5f9932d45-31481646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hide_form' => 0,
    'addons' => 0,
    'auth' => 0,
    'settings' => 0,
    'show_buy_now' => 0,
    'product' => 0,
    'option' => 0,
    'product_amount' => 0,
    'show_product_options' => 0,
    'is_not_required_option' => 0,
    'details_page' => 0,
    'obj_prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c5f9a43291_31050435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c5f9a43291_31050435')) {function content_6603c5f9a43291_31050435($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click','call_requests.buy_now_with_one_click'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']==smarty_modifier_enum("YesNo::YES")&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="allow_shopping")&&(($tmp = @$_smarty_tpl->tpl_vars['show_buy_now']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['is_not_required_option'] = new Smarty_variable(true, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['option']->value['required']===smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->tpl_vars['is_not_required_option'] = new Smarty_variable(false, null, 0);?>
            <?php break 1;?>
        <?php }?>
    <?php } ?>
    <?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']==smarty_modifier_enum("YesNo::NO")||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']==smarty_modifier_enum("YesNo::YES")||($_smarty_tpl->tpl_vars['product_amount']->value>0&&$_smarty_tpl->tpl_vars['product_amount']->value>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])||$_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")||$_smarty_tpl->tpl_vars['product']->value['is_edp']==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']==smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"call_requests:call_request_button")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"call_requests:call_request_button"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value||($_smarty_tpl->tpl_vars['is_not_required_option']->value||$_smarty_tpl->tpl_vars['details_page']->value)) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__text ty-cr-product-button cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"call_request")), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"btn ty-btn ty-btn__text ty-cr-product-button"), 0);?>

            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"call_requests:call_request_button"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/products/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/products/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']==smarty_modifier_enum("YesNo::YES")&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']=="allow_shopping")&&(($tmp = @$_smarty_tpl->tpl_vars['show_buy_now']->value)===null||$tmp==='' ? true : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['is_not_required_option'] = new Smarty_variable(true, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['option']->value['required']===smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->tpl_vars['is_not_required_option'] = new Smarty_variable(false, null, 0);?>
            <?php break 1;?>
        <?php }?>
    <?php } ?>
    <?php if (($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']==smarty_modifier_enum("YesNo::NO")||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']==smarty_modifier_enum("YesNo::YES")||($_smarty_tpl->tpl_vars['product_amount']->value>0&&$_smarty_tpl->tpl_vars['product_amount']->value>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])||$_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")||$_smarty_tpl->tpl_vars['product']->value['is_edp']==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']==smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"call_requests:call_request_button")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"call_requests:call_request_button"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value||($_smarty_tpl->tpl_vars['is_not_required_option']->value||$_smarty_tpl->tpl_vars['details_page']->value)) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'link_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__text ty-cr-product-button cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->tpl_vars['product']->value['product_id'],"data-ca-dialog-purpose"=>"call_request")), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("call_requests.buy_now_with_one_click"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text",'but_id'=>"buy_now_with_one_click_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"btn ty-btn ty-btn__text ty-cr-product-button"), 0);?>

            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"call_requests:call_request_button"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php }
}?><?php }} ?>

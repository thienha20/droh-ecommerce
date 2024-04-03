<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:16:23
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_bundles\components\common\bundle_total.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11931472516603c7c798c953-45742171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00faa1831b18ae70dfc2cf89665f3366fd827b42' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\components\\common\\bundle_total.tpl',
      1 => 1711522868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11931472516603c7c798c953-45742171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'bundle' => 0,
    'auth' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7c7a16349_93474805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7c7a16349_93474805')) {function content_6603c7c7a16349_93474805($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.price_for_all','product_bundles.order_discount','product_bundles.add_all_to_cart','product_bundles.sign_in_to_view_price','product_bundles.price_for_all','product_bundles.order_discount','product_bundles.add_all_to_cart','product_bundles.sign_in_to_view_price'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['bundle']->value['total_price']) {?>

    <div class="ty-product-bundles-bundle-form__total">
        <div class="ty-product-bundles-bundle-form__total-inner">
            
            <strong class="ty-product-bundles-bundle-form__total-title ty-subheader">
                <?php echo $_smarty_tpl->__("product_bundles.price_for_all");?>

            </strong>

            
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']!=="hide_price_and_add_to_cart") {?>

                
                <div class="ty-product-bundles-bundle-form__price"
                    id="product_bundles_bundle_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
                    
                    <div class="ty-product-bundles-bundle-form__price-discount">
                        <span class="ty-product-bundles-bundle-form__price-discount-title">
                            <?php echo $_smarty_tpl->__("product_bundles.order_discount");?>
:
                        </span>
                        <span class="ty-product-bundles-bundle-form__price-discount-price">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>($_smarty_tpl->tpl_vars['bundle']->value['total_price']-$_smarty_tpl->tpl_vars['bundle']->value['discounted_price'])), 0);?>

                        </span>
                    </div>
                    <span class="ty-product-bundles-bundle-form__price-old ty-strike">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['total_price']), 0);?>

                    </span>
                    <span class="ty-product-bundles-bundle-form__price-new">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['discounted_price']), 0);?>

                    </span>
                <!--product_bundles_bundle_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

                
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']!=="hide_add_to_cart_button") {?>
                    <div class="ty-product-bundles-bundle-form__submit" id="wrap_chain_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_bundles.add_all_to_cart"),'but_id'=>"bundle_button_".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'but_meta'=>"ty-btn__secondary cm-dialog-closer",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action"), 0);?>

                    </div>
                <?php }?>
            <?php } else { ?>
                
                <p><?php echo $_smarty_tpl->__("product_bundles.sign_in_to_view_price");?>
</p>
            <?php }?>
        </div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/bundle_total.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/bundle_total.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['bundle']->value['total_price']) {?>

    <div class="ty-product-bundles-bundle-form__total">
        <div class="ty-product-bundles-bundle-form__total-inner">
            
            <strong class="ty-product-bundles-bundle-form__total-title ty-subheader">
                <?php echo $_smarty_tpl->__("product_bundles.price_for_all");?>

            </strong>

            
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']!=="hide_price_and_add_to_cart") {?>

                
                <div class="ty-product-bundles-bundle-form__price"
                    id="product_bundles_bundle_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
                    
                    <div class="ty-product-bundles-bundle-form__price-discount">
                        <span class="ty-product-bundles-bundle-form__price-discount-title">
                            <?php echo $_smarty_tpl->__("product_bundles.order_discount");?>
:
                        </span>
                        <span class="ty-product-bundles-bundle-form__price-discount-price">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>($_smarty_tpl->tpl_vars['bundle']->value['total_price']-$_smarty_tpl->tpl_vars['bundle']->value['discounted_price'])), 0);?>

                        </span>
                    </div>
                    <span class="ty-product-bundles-bundle-form__price-old ty-strike">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['total_price']), 0);?>

                    </span>
                    <span class="ty-product-bundles-bundle-form__price-new">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['bundle']->value['discounted_price']), 0);?>

                    </span>
                <!--product_bundles_bundle_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

                
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']!=="hide_add_to_cart_button") {?>
                    <div class="ty-product-bundles-bundle-form__submit" id="wrap_chain_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_bundles.add_all_to_cart"),'but_id'=>"bundle_button_".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'but_meta'=>"ty-btn__secondary cm-dialog-closer",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action"), 0);?>

                    </div>
                <?php }?>
            <?php } else { ?>
                
                <p><?php echo $_smarty_tpl->__("product_bundles.sign_in_to_view_price");?>
</p>
            <?php }?>
        </div>
    </div>
<?php }?>
<?php }?><?php }} ?>

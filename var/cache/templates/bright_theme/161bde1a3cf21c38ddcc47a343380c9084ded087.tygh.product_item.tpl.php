<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:16:23
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_bundles\components\common\product_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2790950516603c7c726cc00-98715037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '161bde1a3cf21c38ddcc47a343380c9084ded087' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\components\\common\\product_item.tpl',
      1 => 1711522868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2790950516603c7c726cc00-98715037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'bundle' => 0,
    'bundle_product' => 0,
    'thumbnail_coefficient' => 0,
    'settings' => 0,
    'thumbnail_width' => 0,
    'thumbnail_height' => 0,
    'bundle_product_key' => 0,
    'auth' => 0,
    'has_required_options' => 0,
    'selected_options' => 0,
    'config' => 0,
    'product_bundle_options_after' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7c7465915_39807287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7c7465915_39807287')) {function content_6603c7c7465915_39807287($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.specify_options','product_bundles.specify_options','product_bundles.specify_options','product_bundles.specify_options'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['bundle']->value&&$_smarty_tpl->tpl_vars['bundle_product']->value) {?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_coefficient'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value)===null||$tmp==='' ? "0.75" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value, null, 0);?>

    <div class="ty-product-bundles-product-item ty-scroller__item"
        style="--ty-product-lists-thumbnail-width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
            --ty-product-lists-thumbnail-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
        id="product_bundles_product_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />

        <div class="ty-product-bundles-product-item__content">

            
            <div class="ty-product-bundles-product-item__image"
                id="product_bundles_product_item_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">

                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-product-bundles-product-item__image-link"
                >
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['thumbnail_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['thumbnail_height']->value,'obj_id'=>((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['bundle_product']->value['main_pair'],'class'=>"ty-product-bundles-product-item__image-content"), 0);?>

                </a>
            <!--product_bundles_product_item_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

            
            <div class="ty-product-bundles-product-item__info">

                
                <div class="ty-product-bundles-product-item__name">
                    <bdi>
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                            class="ty-product-bundles-product-item__name-link"
                        >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_name'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </bdi>
                </div>

                
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/options/variation_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'bundle_product'=>$_smarty_tpl->tpl_vars['bundle_product']->value,'bundle_product_key'=>$_smarty_tpl->tpl_vars['bundle_product_key']->value), 0);?>


                
                <div class="ty-product-bundles-product-item__price"
                    id="product_bundles_product_item_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['amount']>1) {?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']!=="hide_price_and_add_to_cart") {?>
                        <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['price']!==$_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price']) {?>
                            <span class="ty-list-price ty-nowrap ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['price'],'class'=>"ty-list-price ty-nowrap"), 0);?>
</span>
                        <?php }?>
                        <span class="ty-price">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price'],'class'=>"ty-price-num"), 0);?>

                        </span>
                    <?php }?>
                <!--product_bundles_product_item_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                
                <?php $_smarty_tpl->_capture_stack[0][] = array("product_bundles_control", null, null); ob_start(); ?>
                    
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_bundles:product_control")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_bundles:product_control"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['product_options']&&$_smarty_tpl->tpl_vars['bundle_product']->value['aoc']===smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->tpl_vars['selected_options'] = new Smarty_variable(array("selected_options"=>array_column($_smarty_tpl->tpl_vars['bundle_product']->value['product_options'],"value","option_id")), null, 0);?>
                            <a id="opener_product_bundle_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                class="cm-dialog-opener cm-dialog-auto-size ty-product-bundles-product-item__control-link
                                    <?php if ($_smarty_tpl->tpl_vars['has_required_options']->value) {?>ty-product-bundles-product-item__control-link--required<?php }?>"
                                href="<?php echo htmlspecialchars(fn_url("product_bundles.get_option_variants?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])."&bundle_product_key=".((string)$_smarty_tpl->tpl_vars['bundle_product_key']->value)."&".((string)http_build_query($_smarty_tpl->tpl_vars['selected_options']->value))."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-target-id="content_product_bundle_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-dialog-title="<?php echo $_smarty_tpl->__("product_bundles.specify_options");?>
"
                                rel="nofollow"
                            >
                                <?php echo $_smarty_tpl->__("product_bundles.specify_options");?>

                            </a>

                            
                            <?php echo $_smarty_tpl->tpl_vars['product_bundle_options_after']->value;?>

                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_bundles:product_control"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']['product_bundles_control'])) {?>
                    <div class="ty-product-bundles-product-item__control">
                        <?php echo Smarty::$_smarty_vars['capture']['product_bundles_control'];?>

                    </div>
                <?php }?>

            </div>

        </div>

    <!--product_bundles_product_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/product_item.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/product_item.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['bundle']->value&&$_smarty_tpl->tpl_vars['bundle_product']->value) {?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_coefficient'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value)===null||$tmp==='' ? "0.75" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value, null, 0);?>

    <div class="ty-product-bundles-product-item ty-scroller__item"
        style="--ty-product-lists-thumbnail-width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
            --ty-product-lists-thumbnail-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
        id="product_bundles_product_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />

        <div class="ty-product-bundles-product-item__content">

            
            <div class="ty-product-bundles-product-item__image"
                id="product_bundles_product_item_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">

                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-product-bundles-product-item__image-link"
                >
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['thumbnail_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['thumbnail_height']->value,'obj_id'=>((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['bundle_product']->value['main_pair'],'class'=>"ty-product-bundles-product-item__image-content"), 0);?>

                </a>
            <!--product_bundles_product_item_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

            
            <div class="ty-product-bundles-product-item__info">

                
                <div class="ty-product-bundles-product-item__name">
                    <bdi>
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                            class="ty-product-bundles-product-item__name-link"
                        >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_name'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </bdi>
                </div>

                
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/options/variation_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'bundle_product'=>$_smarty_tpl->tpl_vars['bundle_product']->value,'bundle_product_key'=>$_smarty_tpl->tpl_vars['bundle_product_key']->value), 0);?>


                
                <div class="ty-product-bundles-product-item__price"
                    id="product_bundles_product_item_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['amount']>1) {?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']!=="hide_price_and_add_to_cart") {?>
                        <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['price']!==$_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price']) {?>
                            <span class="ty-list-price ty-nowrap ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['price'],'class'=>"ty-list-price ty-nowrap"), 0);?>
</span>
                        <?php }?>
                        <span class="ty-price">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['bundle_product']->value['discounted_price'],'class'=>"ty-price-num"), 0);?>

                        </span>
                    <?php }?>
                <!--product_bundles_product_item_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                
                <?php $_smarty_tpl->_capture_stack[0][] = array("product_bundles_control", null, null); ob_start(); ?>
                    
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_bundles:product_control")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_bundles:product_control"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['product_options']&&$_smarty_tpl->tpl_vars['bundle_product']->value['aoc']===smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->tpl_vars['selected_options'] = new Smarty_variable(array("selected_options"=>array_column($_smarty_tpl->tpl_vars['bundle_product']->value['product_options'],"value","option_id")), null, 0);?>
                            <a id="opener_product_bundle_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                class="cm-dialog-opener cm-dialog-auto-size ty-product-bundles-product-item__control-link
                                    <?php if ($_smarty_tpl->tpl_vars['has_required_options']->value) {?>ty-product-bundles-product-item__control-link--required<?php }?>"
                                href="<?php echo htmlspecialchars(fn_url("product_bundles.get_option_variants?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])."&bundle_product_key=".((string)$_smarty_tpl->tpl_vars['bundle_product_key']->value)."&".((string)http_build_query($_smarty_tpl->tpl_vars['selected_options']->value))."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-target-id="content_product_bundle_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-dialog-title="<?php echo $_smarty_tpl->__("product_bundles.specify_options");?>
"
                                rel="nofollow"
                            >
                                <?php echo $_smarty_tpl->__("product_bundles.specify_options");?>

                            </a>

                            
                            <?php echo $_smarty_tpl->tpl_vars['product_bundle_options_after']->value;?>

                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_bundles:product_control"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']['product_bundles_control'])) {?>
                    <div class="ty-product-bundles-product-item__control">
                        <?php echo Smarty::$_smarty_vars['capture']['product_bundles_control'];?>

                    </div>
                <?php }?>

            </div>

        </div>

    <!--product_bundles_product_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php }?><?php }} ?>

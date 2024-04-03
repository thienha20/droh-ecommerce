<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:16:23
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_bundles\components\common\bundle_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17414991686603c7c70b89e8-52539372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35d9c8b24bd439a7a4b327c395ec900e862c5b69' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\components\\common\\bundle_form.tpl',
      1 => 1711522868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17414991686603c7c70b89e8-52539372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'bundle' => 0,
    'show_header' => 0,
    'show_description' => 0,
    'thumbnail_coefficient' => 0,
    'settings' => 0,
    'thumbnail_width' => 0,
    'thumbnail_height' => 0,
    'config' => 0,
    'scroller_item_attrs' => 0,
    'bundle_product' => 0,
    'bundle_product_key' => 0,
    'bundle_block' => 0,
    'item_quantity_responsive' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7c7164050_03164721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7c7164050_03164721')) {function content_6603c7c7164050_03164721($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['bundle']->value['products']) {?>
    <?php $_smarty_tpl->tpl_vars['show_header'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_header']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_description'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_description']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_coefficient'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value)===null||$tmp==='' ? 0.75 : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value, null, 0);?>

    
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/common/bundle_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value), 0);?>


    
    <div class="ty-product-bundles-bundle-form"
        style="--ty-product-lists-thumbnail-width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
            --ty-product-lists-thumbnail-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
    >
        
        <?php if ($_smarty_tpl->tpl_vars['show_header']->value&&$_smarty_tpl->tpl_vars['bundle']->value['storefront_name']) {?>
            <h4 class="ty-product-bundles-bundle-form__header ty-subheader">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['storefront_name'], ENT_QUOTES, 'UTF-8');?>

            </h4>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['show_description']->value&&$_smarty_tpl->tpl_vars['bundle']->value['description']) {?>
            <div class="ty-product-bundles-bundle-form__description ty-wysiwyg-content">
                <?php echo $_smarty_tpl->tpl_vars['bundle']->value['description'];?>

            </div>
        <?php }?>

        
        <form class="cm-ajax cm-ajax-full-render ty-product-bundles-bundle-form__form"
            action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
            method="post"
            name="bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
            enctype="multipart/form-data"
            id="bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,product_bundles_bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="bundle_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"/>

            
            <div class="ty-product-bundles-bundle-form__form-inner"
                data-ca-product-bundles="formInner"
                id="product_bundles_bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">

                
                <div id="scroll_list_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
                    class="owl-carousel ty-scroller-list ty-scroller ty-product-bundles-bundle-form__products"
                    data-ca-product-bundles="scroller"
                    <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['scroller_item_attrs']->value);?>

                >
                    <?php  $_smarty_tpl->tpl_vars['bundle_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle_product']->_loop = false;
 $_smarty_tpl->tpl_vars['bundle_product_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bundle']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle_product']->key => $_smarty_tpl->tpl_vars['bundle_product']->value) {
$_smarty_tpl->tpl_vars['bundle_product']->_loop = true;
 $_smarty_tpl->tpl_vars['bundle_product_key']->value = $_smarty_tpl->tpl_vars['bundle_product']->key;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/common/product_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'bundle_product'=>$_smarty_tpl->tpl_vars['bundle_product']->value,'bundle_product_key'=>$_smarty_tpl->tpl_vars['bundle_product_key']->value), 0);?>

                    <?php } ?>
                </div>

                
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/common/bundle_total.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value), 0);?>


            <!--product_bundles_bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
        </form>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('block'=>$_smarty_tpl->tpl_vars['bundle_block']->value,'item_quantity_responsive'=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/bundle_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/bundle_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['bundle']->value['products']) {?>
    <?php $_smarty_tpl->tpl_vars['show_header'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_header']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_description'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_description']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_coefficient'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value)===null||$tmp==='' ? 0.75 : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['thumbnail_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']*$_smarty_tpl->tpl_vars['thumbnail_coefficient']->value, null, 0);?>

    
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/common/bundle_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value), 0);?>


    
    <div class="ty-product-bundles-bundle-form"
        style="--ty-product-lists-thumbnail-width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
            --ty-product-lists-thumbnail-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail_height']->value, ENT_QUOTES, 'UTF-8');?>
px;"
    >
        
        <?php if ($_smarty_tpl->tpl_vars['show_header']->value&&$_smarty_tpl->tpl_vars['bundle']->value['storefront_name']) {?>
            <h4 class="ty-product-bundles-bundle-form__header ty-subheader">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['storefront_name'], ENT_QUOTES, 'UTF-8');?>

            </h4>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['show_description']->value&&$_smarty_tpl->tpl_vars['bundle']->value['description']) {?>
            <div class="ty-product-bundles-bundle-form__description ty-wysiwyg-content">
                <?php echo $_smarty_tpl->tpl_vars['bundle']->value['description'];?>

            </div>
        <?php }?>

        
        <form class="cm-ajax cm-ajax-full-render ty-product-bundles-bundle-form__form"
            action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
            method="post"
            name="bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
            enctype="multipart/form-data"
            id="bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,product_bundles_bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="bundle_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"/>

            
            <div class="ty-product-bundles-bundle-form__form-inner"
                data-ca-product-bundles="formInner"
                id="product_bundles_bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
">

                
                <div id="scroll_list_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
"
                    class="owl-carousel ty-scroller-list ty-scroller ty-product-bundles-bundle-form__products"
                    data-ca-product-bundles="scroller"
                    <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['scroller_item_attrs']->value);?>

                >
                    <?php  $_smarty_tpl->tpl_vars['bundle_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle_product']->_loop = false;
 $_smarty_tpl->tpl_vars['bundle_product_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bundle']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle_product']->key => $_smarty_tpl->tpl_vars['bundle_product']->value) {
$_smarty_tpl->tpl_vars['bundle_product']->_loop = true;
 $_smarty_tpl->tpl_vars['bundle_product_key']->value = $_smarty_tpl->tpl_vars['bundle_product']->key;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/common/product_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'bundle_product'=>$_smarty_tpl->tpl_vars['bundle_product']->value,'bundle_product_key'=>$_smarty_tpl->tpl_vars['bundle_product_key']->value), 0);?>

                    <?php } ?>
                </div>

                
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/common/bundle_total.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value), 0);?>


            <!--product_bundles_bundle_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
        </form>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('block'=>$_smarty_tpl->tpl_vars['bundle_block']->value,'item_quantity_responsive'=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value), 0);?>

<?php }?>
<?php }?><?php }} ?>

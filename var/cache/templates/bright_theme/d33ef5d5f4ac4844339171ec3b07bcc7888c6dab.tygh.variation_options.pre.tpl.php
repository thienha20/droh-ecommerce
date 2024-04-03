<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:16:23
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_bundles\addons\product_variations\hooks\product_bundles\variation_options.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20859150376603c7c77f61a7-66836550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33ef5d5f4ac4844339171ec3b07bcc7888c6dab' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\addons\\product_variations\\hooks\\product_bundles\\variation_options.pre.tpl',
      1 => 1711522868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20859150376603c7c77f61a7-66836550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'bundle_product' => 0,
    'bundle' => 0,
    'feature' => 0,
    'variants' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7c785ceb3_56836941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7c785ceb3_56836941')) {function content_6603c7c785ceb3_56836941($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['any_variation']&&($_smarty_tpl->tpl_vars['bundle_product']->value['parent_variation_product']||($_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features_variants']&&$_smarty_tpl->tpl_vars['bundle']->value['parent_bundle_id']))) {?>
    
    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']!==constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM")) {?>
            <?php continue 1;?>
        <?php }?>

        <?php $_smarty_tpl->createLocalArrayVariable('variants', null, 0);
$_smarty_tpl->tpl_vars['variants']->value[] = $_smarty_tpl->tpl_vars['feature']->value['variant'];?>
    <?php } ?>

    
    <?php $_smarty_tpl->tpl_vars['variants'] = new Smarty_variable($_smarty_tpl->tpl_vars['variants']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['variants'] = clone $_smarty_tpl->tpl_vars['variants'];?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/addons/product_variations/hooks/product_bundles/variation_options.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/addons/product_variations/hooks/product_bundles/variation_options.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['any_variation']&&($_smarty_tpl->tpl_vars['bundle_product']->value['parent_variation_product']||($_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features_variants']&&$_smarty_tpl->tpl_vars['bundle']->value['parent_bundle_id']))) {?>
    
    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']!==constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM")) {?>
            <?php continue 1;?>
        <?php }?>

        <?php $_smarty_tpl->createLocalArrayVariable('variants', null, 0);
$_smarty_tpl->tpl_vars['variants']->value[] = $_smarty_tpl->tpl_vars['feature']->value['variant'];?>
    <?php } ?>

    
    <?php $_smarty_tpl->tpl_vars['variants'] = new Smarty_variable($_smarty_tpl->tpl_vars['variants']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['variants'] = clone $_smarty_tpl->tpl_vars['variants'];?>
<?php }?>
<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:16:23
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_bundles\components\options\variation_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15480442636603c7c765e378-73148668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e2ec85381cd4f1099fea1126e41310b9fe75110' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\components\\options\\variation_options.tpl',
      1 => 1711522868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15480442636603c7c765e378-73148668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'variant_characters_threshold' => 0,
    'bundle_product' => 0,
    'variants' => 0,
    'bundle' => 0,
    'bundle_product_key' => 0,
    'product_option' => 0,
    'file' => 0,
    'variant' => 0,
    'has_required_options' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7c779a983_75533144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7c779a983_75533144')) {function content_6603c7c779a983_75533144($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.specify_options_first','product_bundles.specify_options_first'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['variant_characters_threshold'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['variant_characters_threshold']->value)===null||$tmp==='' ? 40 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['variants'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_required_options'] = new Smarty_variable(false, null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_bundles:variation_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_bundles:variation_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['product_options']||$_smarty_tpl->tpl_vars['variants']->value) {?>

        <div class="ty-product-bundles-variation-options"
            id="product_bundles_product_item_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

            
            <?php  $_smarty_tpl->tpl_vars['product_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundle_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->key => $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->_loop = true;
?>
                <input type="hidden"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                    name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                />

                
                <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['product_option']->value['option_id']]) {?>
                    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundle_product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['product_option']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                        <?php $_smarty_tpl->createLocalArrayVariable('variants', null, 0);
$_smarty_tpl->tpl_vars['variants']->value[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);?>
                    <?php } ?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product_option']->value['variants'][$_smarty_tpl->tpl_vars['product_option']->value['value']]['variant_name']) {?>
                    
                    <?php $_smarty_tpl->createLocalArrayVariable('variants', null, 0);
$_smarty_tpl->tpl_vars['variants']->value[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_option']->value['variants'][$_smarty_tpl->tpl_vars['product_option']->value['value']]['variant_name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['variant_name']) {?>
                    
                    <?php $_smarty_tpl->createLocalArrayVariable('variants', null, 0);
$_smarty_tpl->tpl_vars['variants']->value[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_option']->value['variant_name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['required']===smarty_modifier_enum("YesNo::YES")&&!$_smarty_tpl->tpl_vars['product_option']->value['value']) {?>
                    <?php $_smarty_tpl->tpl_vars['has_required_options'] = new Smarty_variable(true, null, 0);?>
                <?php }?>
            <?php } ?>

            <div class="ty-product-bundles-variation-options__content">
                <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                    <span class="ty-product-bundles-variation-options__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } ?>
            </div>

        <!--product_bundles_product_item_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_bundles:variation_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("product_bundle_options_after", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['has_required_options']->value) {?>
        <label for="product_bundle_options_required_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="cm-required hidden"
                data-ca-validator-error-message="<?php echo $_smarty_tpl->__("product_bundles.specify_options_first");?>
"
                data-ca-product-bundles="optionsRequired"
        ></label>
        <input id="product_bundle_options_required_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="hidden"
                value=""
        />
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['has_required_options'] = new Smarty_variable($_smarty_tpl->tpl_vars['has_required_options']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['has_required_options'] = clone $_smarty_tpl->tpl_vars['has_required_options'];?>
<?php $_smarty_tpl->tpl_vars['product_bundle_options_after'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['product_bundle_options_after'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_bundle_options_after'] = clone $_smarty_tpl->tpl_vars['product_bundle_options_after'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/options/variation_options.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/options/variation_options.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['variant_characters_threshold'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['variant_characters_threshold']->value)===null||$tmp==='' ? 40 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['variants'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_required_options'] = new Smarty_variable(false, null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_bundles:variation_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_bundles:variation_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['product_options']||$_smarty_tpl->tpl_vars['variants']->value) {?>

        <div class="ty-product-bundles-variation-options"
            id="product_bundles_product_item_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
">

            
            <?php  $_smarty_tpl->tpl_vars['product_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundle_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->key => $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->_loop = true;
?>
                <input type="hidden"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                    name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]"
                />

                
                <?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['product_option']->value['option_id']]) {?>
                    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundle_product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['product_option']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                        <?php $_smarty_tpl->createLocalArrayVariable('variants', null, 0);
$_smarty_tpl->tpl_vars['variants']->value[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);?>
                    <?php } ?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product_option']->value['variants'][$_smarty_tpl->tpl_vars['product_option']->value['value']]['variant_name']) {?>
                    
                    <?php $_smarty_tpl->createLocalArrayVariable('variants', null, 0);
$_smarty_tpl->tpl_vars['variants']->value[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_option']->value['variants'][$_smarty_tpl->tpl_vars['product_option']->value['value']]['variant_name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['variant_name']) {?>
                    
                    <?php $_smarty_tpl->createLocalArrayVariable('variants', null, 0);
$_smarty_tpl->tpl_vars['variants']->value[] = smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_option']->value['variant_name'],$_smarty_tpl->tpl_vars['variant_characters_threshold']->value);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product_option']->value['required']===smarty_modifier_enum("YesNo::YES")&&!$_smarty_tpl->tpl_vars['product_option']->value['value']) {?>
                    <?php $_smarty_tpl->tpl_vars['has_required_options'] = new Smarty_variable(true, null, 0);?>
                <?php }?>
            <?php } ?>

            <div class="ty-product-bundles-variation-options__content">
                <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                    <span class="ty-product-bundles-variation-options__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } ?>
            </div>

        <!--product_bundles_product_item_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_bundles:variation_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("product_bundle_options_after", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['has_required_options']->value) {?>
        <label for="product_bundle_options_required_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="cm-required hidden"
                data-ca-validator-error-message="<?php echo $_smarty_tpl->__("product_bundles.specify_options_first");?>
"
                data-ca-product-bundles="optionsRequired"
        ></label>
        <input id="product_bundle_options_required_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="hidden"
                value=""
        />
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->tpl_vars['has_required_options'] = new Smarty_variable($_smarty_tpl->tpl_vars['has_required_options']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['has_required_options'] = clone $_smarty_tpl->tpl_vars['has_required_options'];?>
<?php $_smarty_tpl->tpl_vars['product_bundle_options_after'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['product_bundle_options_after'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_bundle_options_after'] = clone $_smarty_tpl->tpl_vars['product_bundle_options_after'];?>
<?php }?><?php }} ?>

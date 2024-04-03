<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:44
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_bundles\components\common\product_bundles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9540652896603c5fce56e68-65187367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1107261524784cf63ff3a3074fcb54636762bc14' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\components\\common\\product_bundles.tpl',
      1 => 1711522868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9540652896603c5fce56e68-65187367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'bundles' => 0,
    'show_block_header' => 0,
    'enable_padding' => 0,
    'bundle' => 0,
    'obj_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c5fce942e6_36837865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c5fce942e6_36837865')) {function content_6603c5fce942e6_36837865($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.product_bundles','product_bundles.product_bundles'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_block_header'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_block_header']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['enable_padding'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_padding']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

    <div class="ty-product-bundles-product-bundles <?php if ($_smarty_tpl->tpl_vars['enable_padding']->value) {?>ty-product-bundles-product-bundles--padding<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['show_block_header']->value) {?>
            <h2 class="ty-product-bundles-product-bundles__header">
                <?php echo $_smarty_tpl->__("product_bundles.product_bundles");?>

            </h2>
        <?php }?>
        <div class="ty-product-bundles-product-bundles__body">
            <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/common/bundle_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0);?>

            <?php } ?>
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/product_bundles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/product_bundles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_block_header'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_block_header']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['enable_padding'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_padding']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

    <div class="ty-product-bundles-product-bundles <?php if ($_smarty_tpl->tpl_vars['enable_padding']->value) {?>ty-product-bundles-product-bundles--padding<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['show_block_header']->value) {?>
            <h2 class="ty-product-bundles-product-bundles__header">
                <?php echo $_smarty_tpl->__("product_bundles.product_bundles");?>

            </h2>
        <?php }?>
        <div class="ty-product-bundles-product-bundles__body">
            <?php  $_smarty_tpl->tpl_vars['bundle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bundle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->key => $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_bundles/components/common/bundle_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0);?>

            <?php } ?>
        </div>
    </div>
<?php }?>
<?php }?><?php }} ?>

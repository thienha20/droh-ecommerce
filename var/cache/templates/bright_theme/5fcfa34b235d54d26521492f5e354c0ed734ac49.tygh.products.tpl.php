<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:39:52
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\bestsellers\views\products\components\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10404052496603cd48b27bf0-79698143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fcfa34b235d54d26521492f5e354c0ed734ac49' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\bestsellers\\views\\products\\components\\products.tpl',
      1 => 1711522869,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10404052496603cd48b27bf0-79698143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'products' => 0,
    'category_data' => 0,
    'settings' => 0,
    'selected_layout' => 0,
    'layouts' => 0,
    'product_columns' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603cd48ba2436_75614189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603cd48ba2436_75614189')) {function content_6603cd48ba2436_75614189($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('products_found','text_no_matching_products_found','products_found','text_no_matching_products_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title_extra"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0);?>

        <?php }?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <span class="ty-mainbox-title__left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/bestsellers/views/products/components/products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/bestsellers/views/products/components/products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title_extra"] = new Smarty_variable($_tmp2.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0);?>

        <?php }?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <span class="ty-mainbox-title__left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>

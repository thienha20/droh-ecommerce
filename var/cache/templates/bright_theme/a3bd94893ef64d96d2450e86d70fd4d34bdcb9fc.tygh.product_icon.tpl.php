<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:01:14
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\views\products\components\product_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16602757416603c43ae554b5-40885515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3bd94893ef64d96d2450e86d70fd4d34bdcb9fc' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\views\\products\\components\\product_icon.tpl',
      1 => 1711520232,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16602757416603c43ae554b5-40885515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'product_detail_view_url' => 0,
    'obj_id_prefix' => 0,
    'settings' => 0,
    'show_gallery' => 0,
    'image_pair' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c43b078a08_06526797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c43b078a08_06526797')) {function content_6603c43b078a08_06526797($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["product_detail_view_url"] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("product_detail_view_url", null, null); ob_start(); ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_view_url")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'UTF-8');?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['product_detail_view_url']), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("main_icon", null, null); ob_start(); ?>
    <a href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['product_detail_view_url']->value)), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']&&$_smarty_tpl->tpl_vars['show_gallery']->value) {?>
<div class="ty-center-block">
    <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery ty-scroller"
        data-ca-items-count="1"
        data-ca-items-responsive="true"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
        id="icons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
            <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                <?php echo Smarty::$_smarty_vars['capture']['main_icon'];?>

            </div>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
                <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                    <a href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['product_detail_view_url']->value)), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'lazy_load'=>true), 0);?>

                    </a>
                </div>
            <?php }?>
        <?php } ?>
    </div>
</div>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['main_icon'];?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_icon.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_icon.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["product_detail_view_url"] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("product_detail_view_url", null, null); ob_start(); ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_view_url")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'UTF-8');?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['product_detail_view_url']), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("main_icon", null, null); ob_start(); ?>
    <a href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['product_detail_view_url']->value)), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']&&$_smarty_tpl->tpl_vars['show_gallery']->value) {?>
<div class="ty-center-block">
    <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery ty-scroller"
        data-ca-items-count="1"
        data-ca-items-responsive="true"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
        id="icons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
            <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                <?php echo Smarty::$_smarty_vars['capture']['main_icon'];?>

            </div>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
                <div class="cm-gallery-item cm-item-gallery ty-scroller__item">
                    <a href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['product_detail_view_url']->value)), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'lazy_load'=>true), 0);?>

                    </a>
                </div>
            <?php }?>
        <?php } ?>
    </div>
</div>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['main_icon'];?>

<?php }
}?><?php }} ?>

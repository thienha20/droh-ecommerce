<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:45
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\post_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10457169936603c5fdbca772-74864397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b28b04f07b42763620527a989e4d2789a549b94' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\post_footer.tpl',
      1 => 1711522883,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10457169936603c5fdbca772-74864397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_review' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c5fdbe8e35_89979047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c5fdbe8e35_89979047')) {function content_6603c5fdbe8e35_89979047($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <footer class="ty-product-review-post-footer">

        <div class="ty-product-review-post-footer__primary">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product_review']->value['images'],'preview_id'=>uniqid($_smarty_tpl->tpl_vars['product']->value['product_id'])), 0);?>

        </div>
        
        <div class="ty-product-review-post-footer__secondary">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_votes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_id'=>$_smarty_tpl->tpl_vars['product_review']->value['product_review_id'],'vote_up'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_up'],'vote_down'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_down']), 0);?>

        </div>
    </footer>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_footer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_footer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <footer class="ty-product-review-post-footer">

        <div class="ty-product-review-post-footer__primary">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product_review']->value['images'],'preview_id'=>uniqid($_smarty_tpl->tpl_vars['product']->value['product_id'])), 0);?>

        </div>
        
        <div class="ty-product-review-post-footer__secondary">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_votes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_id'=>$_smarty_tpl->tpl_vars['product_review']->value['product_review_id'],'vote_up'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_up'],'vote_down'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_down']), 0);?>

        </div>
    </footer>
<?php }?>
<?php }?><?php }} ?>

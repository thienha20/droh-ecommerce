<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:46
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\product_reviews_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20650839656603c5fe16ed59-97029208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de5af2e9c833621279f91b9051f82ff94c2266bd' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\product_reviews_sidebar.tpl',
      1 => 1711522883,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20650839656603c5fe16ed59-97029208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_reviews' => 0,
    'product' => 0,
    'product_id' => 0,
    'locate_to_product_review_tab' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c5fe195e15_90452807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c5fe195e15_90452807')) {function content_6603c5fe195e15_90452807($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_review','product_reviews.write_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<aside class="ty-product-review-reviews-sidebar
    <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
        ty-product-review-reviews-sidebar--with-reviews    
    <?php }?>
    ">

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['ratings'],'average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total']), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/write_product_review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("product_reviews.write_review"),'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value), 0);?>


</aside><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<aside class="ty-product-review-reviews-sidebar
    <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
        ty-product-review-reviews-sidebar--with-reviews    
    <?php }?>
    ">

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['ratings'],'average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total']), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/write_product_review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("product_reviews.write_review"),'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value), 0);?>


</aside><?php }?><?php }} ?>

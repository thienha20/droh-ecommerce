<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:46
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\product_star_line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20578030816603c5fe267ce2-37814544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c4f78d831a1eb21fb20a023d49fcd1a9976b58' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\product_star_line.tpl',
      1 => 1711522883,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20578030816603c5fe267ce2-37814544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'quantity' => 0,
    'percentage' => 0,
    'count' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c5fe27f5e5_96887789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c5fe27f5e5_96887789')) {function content_6603c5fe27f5e5_96887789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.n_stars','product_reviews.reviews','product_reviews.n_stars','product_reviews.reviews'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-product-review-product-star-line">

    <div class="ty-product-review-product-star-line__quantity">
        <?php echo $_smarty_tpl->__("product_reviews.n_stars",array($_smarty_tpl->tpl_vars['quantity']->value));?>

    </div>

    <progress
        class="ty-product-review-product-star-line__line"
        max="100"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['percentage']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo $_smarty_tpl->__("product_reviews.reviews",array($_smarty_tpl->tpl_vars['count']->value));?>
"
    ></progress>


    <div class="ty-product-review-product-star-line__percentage">
        <?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['percentage']->value), ENT_QUOTES, 'UTF-8');?>
%
    </div>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_star_line.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_star_line.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-product-review-product-star-line">

    <div class="ty-product-review-product-star-line__quantity">
        <?php echo $_smarty_tpl->__("product_reviews.n_stars",array($_smarty_tpl->tpl_vars['quantity']->value));?>

    </div>

    <progress
        class="ty-product-review-product-star-line__line"
        max="100"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['percentage']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo $_smarty_tpl->__("product_reviews.reviews",array($_smarty_tpl->tpl_vars['count']->value));?>
"
    ></progress>


    <div class="ty-product-review-product-star-line__percentage">
        <?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['percentage']->value), ENT_QUOTES, 'UTF-8');?>
%
    </div>

</div>
<?php }?><?php }} ?>

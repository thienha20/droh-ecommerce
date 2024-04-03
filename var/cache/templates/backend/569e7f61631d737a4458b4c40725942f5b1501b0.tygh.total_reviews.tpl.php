<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:42:47
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\rating\total_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1659579509660670f7b507c7-86500875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '569e7f61631d737a4458b4c40725942f5b1501b0' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\rating\\total_reviews.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1659579509660670f7b507c7-86500875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_product_reviews' => 0,
    'scroll_to_elm' => 0,
    'external_click_id' => 0,
    'link' => 0,
    'product_id' => 0,
    'meta' => 0,
    'total_product_reviews_text' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660670f7b95b99_81508148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660670f7b95b99_81508148')) {function content_660670f7b95b99_81508148($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.n_reviews','product_reviews.show_reviews','product_reviews.scroll_to_reviews'));
?>


<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value>0) {?>

    <?php $_smarty_tpl->tpl_vars['scroll_to_elm'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['scroll_to_elm']->value)===null||$tmp==='' ? "content_product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['external_click_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['external_click_id']->value)===null||$tmp==='' ? "reviews" : $tmp), null, 0);?>
    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.n_reviews",array($_smarty_tpl->tpl_vars['total_product_reviews']->value));
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_product_reviews_text'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['total_product_reviews']->value)." ".$_tmp1, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value===true) {?>
        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&selected_section=product_reviews", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.show_reviews");?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="cm-external-click <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.scroll_to_reviews");?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </button>
    <?php } else { ?>
        <span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </span>
    <?php }?>

<?php }?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:52:54
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_reviews\hooks\common\sidebar_product.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972978086660673562f4417-65315551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f91f6d79066c9efdce9b295e853a606414f19e' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_reviews\\hooks\\common\\sidebar_product.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '972978086660673562f4417-65315551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'total_product_reviews' => 0,
    'create_new_product_reviews' => 0,
    'product_id' => 0,
    'product_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660673562fec80_83030451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660673562fec80_83030451')) {function content_660673562fec80_83030451($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['product_data']->value) {?>
    <li>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['product_data']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'link'=>true), 0);?>

    </li>
    <?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
        <li>
            <?php if ($_smarty_tpl->tpl_vars['create_new_product_reviews']->value) {?>
                <?php $_smarty_tpl->createLocalArrayVariable('product_review', null, 0);
$_smarty_tpl->tpl_vars['product_review']->value['product']['product_id'] = $_smarty_tpl->tpl_vars['product_id']->value;?>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_review']->value['product']['product_id'],'link'=>true), 0);?>

        </li>
    <?php }?>
<?php }?>
<?php }} ?>

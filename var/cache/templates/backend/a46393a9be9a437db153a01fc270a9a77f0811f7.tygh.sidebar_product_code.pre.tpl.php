<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:52:54
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_variations\hooks\common\sidebar_product_code.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1553273351660673562e2933-78948743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46393a9be9a437db153a01fc270a9a77f0811f7' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\common\\sidebar_product_code.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1553273351660673562e2933-78948743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660673562e7b73_31432877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660673562e7b73_31432877')) {function content_660673562e7b73_31432877($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product_data']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>

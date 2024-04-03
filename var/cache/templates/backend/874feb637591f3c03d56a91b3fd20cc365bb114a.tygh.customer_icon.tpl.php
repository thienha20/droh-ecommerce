<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:02:03
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\customer_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2005471116603d27b29ba26-62903807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '874feb637591f3c03d56a91b3fd20cc365bb114a' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\customer_icon.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2005471116603d27b29ba26-62903807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603d27b2a9920_43110850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603d27b2a9920_43110850')) {function content_6603d27b2a9920_43110850($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.verified_purchase','anonymous'));
?>


<?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']||$_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']===smarty_modifier_enum("YesNo::YES")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok-sign muted",'title'=>$_smarty_tpl->__("product_reviews.verified_purchase")),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_anon']) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-eye-close muted",'title'=>$_smarty_tpl->__("anonymous")),$_smarty_tpl);?>

    <?php }?>

<?php }?>
<?php }} ?>

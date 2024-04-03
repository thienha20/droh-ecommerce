<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:02:03
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\review_tools_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10137699366603d27b2f9856-08891854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01dce63b51fd6e492b9ceef5e84ff1ee9fd0e08' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\review_tools_list.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10137699366603d27b2f9856-08891854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_id' => 0,
    'is_allowed_to_delete_product_reviews' => 0,
    'auth' => 0,
    'current_redirect_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603d27b30deb1_87791665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603d27b30deb1_87791665')) {function content_6603d27b30deb1_87791665($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit','delete'));
?>


<?php if ($_smarty_tpl->tpl_vars['product_review_id']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)));?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_delete_product_reviews']->value&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"product_reviews.delete?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value),'method'=>"POST"));?>

        </li>
    <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php }?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:02:57
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_communication\hooks\orders\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17861503976603d2b1cdf592-77021743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ba4219d6ce255f448bbaa527a3926c978518b00' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\orders\\tabs_extra.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17861503976603d2b1cdf592-77021743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_vendor_to_customer_thread' => 0,
    'is_user_can_manage_customer_order_thread' => 0,
    'config' => 0,
    'order_vendor_to_admin_thread' => 0,
    'is_user_can_manage_vendor_order_thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603d2b1ce9b61_32971906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603d2b1ce9b61_32971906')) {function content_6603d2b1ce9b61_32971906($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_customer_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_vendor_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

<?php }?>
<?php }} ?>

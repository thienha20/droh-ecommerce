<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:02:58
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_communication\hooks\orders\details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18186575266603d2b2371ed1-24953412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '348c6fcf67fbd9416cb1ce22a5fab3206244ba43' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\orders\\details_tools.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18186575266603d2b2371ed1-24953412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_user_can_manage_customer_order_thread' => 0,
    'order_vendor_to_customer_thread' => 0,
    'order_info' => 0,
    'config' => 0,
    'communication_type' => 0,
    'return_url' => 0,
    'is_user_can_manage_vendor_order_thread' => 0,
    'order_vendor_to_admin_thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603d2b238d1b4_92912481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603d2b238d1b4_92912481')) {function content_6603d2b238d1b4_92912481($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.contact_customer'));
?>
<?php if ($_smarty_tpl->tpl_vars['is_user_can_manage_customer_order_thread']->value&&!$_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value&&$_smarty_tpl->tpl_vars['order_info']->value['user_id']) {?>
    <?php $_smarty_tpl->tpl_vars['communication_type'] = new Smarty_variable(smarty_modifier_enum("Addons\VendorCommunication\CommunicationTypes::VENDOR_TO_CUSTOMER"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=vendor_communication_".((string)$_smarty_tpl->tpl_vars['communication_type']->value)), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("vendor_communication.contact_customer"),'communication_type'=>$_smarty_tpl->tpl_vars['communication_type']->value,'object_type'=>(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'menu_button'=>true,'divider'=>true,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['is_user_can_manage_vendor_order_thread']->value&&!$_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value) {?>
    <?php $_smarty_tpl->tpl_vars['communication_type'] = new Smarty_variable(smarty_modifier_enum("Addons\VendorCommunication\CommunicationTypes::VENDOR_TO_ADMIN"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=vendor_communication_".((string)$_smarty_tpl->tpl_vars['communication_type']->value)), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('communication_type'=>$_smarty_tpl->tpl_vars['communication_type']->value,'object_type'=>(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'menu_button'=>true,'divider'=>true,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0);?>

<?php }?><?php }} ?>

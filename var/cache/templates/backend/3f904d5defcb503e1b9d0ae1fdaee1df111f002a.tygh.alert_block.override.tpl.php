<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 09:57:25
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_debt_payout\hooks\index\alert_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9633526686603c355ad1597-75494014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f904d5defcb503e1b9d0ae1fdaee1df111f002a' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\index\\alert_block.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9633526686603c355ad1597-75494014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboard_alert' => 0,
    'is_block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c355af1cb4_37691178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c355af1cb4_37691178')) {function content_6603c355af1cb4_37691178($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
    <div class="alert alert-block <?php if ($_smarty_tpl->tpl_vars['is_block_alert']->value) {?>alert-error debt-notification<?php }?>">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

        </div>
    </div>
<?php }?><?php }} ?>

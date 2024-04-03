<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:13:04
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_debt_payout\views\vendor_debt_payout\components\refill_balance_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19862999126603c700a09ec4-32132144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdee60db9825e07d522354dccd4912fe49dbb9a3' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_debt_payout\\views\\vendor_debt_payout\\components\\refill_balance_button.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19862999126603c700a09ec4-32132144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c700a0e3c6_91409691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c700a0e3c6_91409691')) {function content_6603c700a0e3c6_91409691($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.refill_balance'));
?>
<?php ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.refill_balance");
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"btn btn-primary cm-new-window",'form'=>"refill_balance",'dispatch'=>"dispatch[debt.refill_balance]",'text'=>$_tmp2));?>
<?php }} ?>

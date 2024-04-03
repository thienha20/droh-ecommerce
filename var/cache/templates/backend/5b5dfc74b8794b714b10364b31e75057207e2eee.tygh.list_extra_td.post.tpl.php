<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:17:01
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_plans\hooks\companies\list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17544454716603c7edaa92b8-26467510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b5dfc74b8794b714b10364b31e75057207e2eee' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\companies\\list_extra_td.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17544454716603c7edaa92b8-26467510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7edaaadb5_45695016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7edaaadb5_45695016')) {function content_6603c7edaaadb5_45695016($_smarty_tpl) {?><td width="10%" class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td><?php }} ?>

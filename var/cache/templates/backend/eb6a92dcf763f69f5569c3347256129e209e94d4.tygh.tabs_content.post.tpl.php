<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:20:28
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\store_locator\hooks\shippings\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12332497546603c8bc8881e8-15052968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb6a92dcf763f69f5569c3347256129e209e94d4' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\store_locator\\hooks\\shippings\\tabs_content.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12332497546603c8bc8881e8-15052968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_store_locator_configure_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c8bc88b926_32057383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c8bc88b926_32057383')) {function content_6603c8bc88b926_32057383($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_store_locator_configure_tab']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <input type="hidden"
           data-ca-store-locator-show-configure-tab="true"
    />
<?php }?>
<?php }} ?>

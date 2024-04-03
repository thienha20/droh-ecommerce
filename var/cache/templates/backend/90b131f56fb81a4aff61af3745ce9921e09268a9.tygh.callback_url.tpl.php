<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 12:39:45
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\hybrid_auth\components\callback_url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10214670646603e9611ea318-06522696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90b131f56fb81a4aff61af3745ce9921e09268a9' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\hybrid_auth\\components\\callback_url.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10214670646603e9611ea318-06522696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'provider' => 0,
    'providers_schema' => 0,
    'provider_data' => 0,
    'all_storefront_ids' => 0,
    'callback_urls' => 0,
    'callback_url' => 0,
    'storefront_ids' => 0,
    'provider_name' => 0,
    'storefront_id' => 0,
    'protocol' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603e961215f01_37782453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603e961215f01_37782453')) {function content_6603e961215f01_37782453($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php $_smarty_tpl->tpl_vars['protocol'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']===smarty_modifier_enum("YesNo::YES") ? "https" : "http", null, 0);?>
<?php $_smarty_tpl->tpl_vars['provider_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['provider'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['provider'] = new Smarty_variable($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['provider_data']->value['storefront_ids']) {?>
    <?php $_smarty_tpl->tpl_vars['storefront_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['provider_data']->value['storefront_ids'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['storefront_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['all_storefront_ids']->value, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['callback_urls']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['callback_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['callback_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['callback_urls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['callback_url']->key => $_smarty_tpl->tpl_vars['callback_url']->value) {
$_smarty_tpl->tpl_vars['callback_url']->_loop = true;
?>
        <div class="control-group">
            <?php echo $_smarty_tpl->getSubTemplate ("common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('widget_copy_code_text'=>$_smarty_tpl->tpl_vars['callback_url']->value), 0);?>

        </div>
    <?php } ?>
<?php } else { ?>
    <?php  $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storefront_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefront_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storefront_id']->key => $_smarty_tpl->tpl_vars['storefront_id']->value) {
$_smarty_tpl->tpl_vars['storefront_id']->_loop = true;
?>
        <div class="control-group">
            <?php echo $_smarty_tpl->getSubTemplate ("common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('widget_copy_code_text'=>fn_url(((($tmp = @$_smarty_tpl->tpl_vars['callback_url']->value)===null||$tmp==='' ? "auth.process?hauth_done=".((string)$_smarty_tpl->tpl_vars['provider_name']->value)."&storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value) : $tmp)),(smarty_modifier_enum("SiteArea::STOREFRONT")),$_smarty_tpl->tpl_vars['protocol']->value)), 0);?>

        </div>
    <?php } ?>
<?php }?>
<?php }} ?>

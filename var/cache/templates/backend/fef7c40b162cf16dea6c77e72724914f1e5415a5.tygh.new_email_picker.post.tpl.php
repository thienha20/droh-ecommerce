<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:47:16
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\warehouses\hooks\product_subscribers\new_email_picker.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98658788866078b4452ea61-68820488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef7c40b162cf16dea6c77e72724914f1e5415a5' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\warehouses\\hooks\\product_subscribers\\new_email_picker.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '98658788866078b4452ea61-68820488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'destinations' => 0,
    'destination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078b44535142_76253509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078b44535142_76253509')) {function content_66078b44535142_76253509($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('rate_area'));
?>
<?php if ($_smarty_tpl->tpl_vars['destinations']->value) {?>
    <div class="control-group">
        <label for="users_destination" class="control-label"><?php echo $_smarty_tpl->__("rate_area");?>
</label>
        <div class="controls">
            <select name="add_subscriber[destination_id]" id="users_destination" class="input-medium">
                <option> -- </option>
                <?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
<?php }?><?php }} ?>

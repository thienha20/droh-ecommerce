<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:51:52
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\advanced_import\views\import_presets\components\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176949176966067318f16142-39796345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebbe74cc359489ee65860b355e4fe43fabe9e76f' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\form.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '176949176966067318f16142-39796345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preffix' => 0,
    'wrapper_extra_id' => 0,
    'object_type' => 0,
    'wrapper_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66067318f1b2e8_13667581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66067318f1b2e8_13667581')) {function content_66067318f1b2e8_13667581($_smarty_tpl) {?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="manage_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preffix']->value, ENT_QUOTES, 'UTF-8');?>
_import_presets_form"
        enctype="multipart/form-data"
        class="cm-skip-check-items import-preset cm-ajax cm-comet"
        data-ca-advanced-import-element="management_form"
        id="manage_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preffix']->value, ENT_QUOTES, 'UTF-8');?>
_import_presets_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_extra_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <?php echo $_smarty_tpl->tpl_vars['wrapper_content']->value;?>

</form><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:51:56
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\advanced_import\views\import_presets\components\option_fileeditor_open.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19254722646606731ce3d023-51338552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '854340ae4c4344eeadffecdc4319d8b672617f78' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\option_fileeditor_open.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19254722646606731ce3d023-51338552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_id' => 0,
    'field_name_prefix' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6606731ce42748_39563118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6606731ce42748_39563118')) {function content_6606731ce42748_39563118($_smarty_tpl) {?><div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
_dialog" class="hidden"></div>
<input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
"
       class="input-large"
       type="text"
       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
       value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['option']->value['selected_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
/><?php }} ?>

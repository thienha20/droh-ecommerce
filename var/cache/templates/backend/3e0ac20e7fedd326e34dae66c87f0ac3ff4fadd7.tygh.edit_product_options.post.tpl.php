<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:15:52
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\reward_points\hooks\product_options\edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5173957826603c7a83f1f00-81611257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0ac20e7fedd326e34dae66c87f0ac3ff4fadd7' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\reward_points\\hooks\\product_options\\edit_product_options.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5173957826603c7a83f1f00-81611257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7a84034e4_28861889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7a84034e4_28861889')) {function content_6603c7a84034e4_28861889($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('earned_point_modifier','type','points_lower'));
?>
<div class="control-group">
    <label class="control-label" for="point_modifier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("earned_point_modifier");?>
&nbsp;/ <?php echo $_smarty_tpl->__("type");?>
:</label>
    <div class="controls flex-vertical-centered--on-mobile">
    	<input type="text" id="point_modifier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][point_modifier]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['point_modifier'], ENT_QUOTES, 'UTF-8');
} else { ?>0.000<?php }?>" size="5" class="input-mini" />&nbsp;/&nbsp;<select name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][point_modifier_type]">
    	    <option value="A" <?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'])&&$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type']=="A") {?>selected="selected"<?php }?>>(<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
    	    <option value="P" <?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'])&&$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type']=="P") {?>selected="selected"<?php }?>>(%)</option>
    	</select>
    </div>
</div><?php }} ?>

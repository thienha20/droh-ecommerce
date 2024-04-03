<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:50:17
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\seo\hooks\product_features\feature_code.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1553400986660672b9e79668-13207391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ca9d62fc73c19109f60b214647eb79645050354' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\seo\\hooks\\product_features\\feature_code.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1553400986660672b9e79668-13207391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'feature_codes' => 0,
    'feature_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660672b9e80299_50974524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660672b9e80299_50974524')) {function content_660672b9e80299_50974524($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('seo.product_feature.feature_code.notice'));
?>
<div id="elm_feature_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_description" class="muted description">
    <p><?php echo $_smarty_tpl->__("seo.product_feature.feature_code.notice");?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['feature_codes']->value) {?>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['feature_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature_code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature_code']->key => $_smarty_tpl->tpl_vars['feature_code']->value) {
$_smarty_tpl->tpl_vars['feature_code']->_loop = true;
?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_code']->value['name'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_code']->value['description'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
        </ul>
    <?php }?>
</div><?php }} ?>

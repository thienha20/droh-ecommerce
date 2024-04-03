<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:41:37
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_variations\views\product_variations\components\group_code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2094842894660670b10f1885-54136489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2486aab40ad5d52c6fcd59f37b1cb3db505e65' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\group_code.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2094842894660670b10f1885-54136489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660670b11119c4_25096982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660670b11119c4_25096982')) {function content_660670b11119c4_25096982($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.group_code','product_variations.group_code.description','product_variations.group_code.placeholder'));
?>
<input type="hidden" name="variation_group[id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" />
<div class="input-prepend shift-left product-variations__toolbar-code-wrapper">
    <span class="add-on product-variations__toolbar-code-addon"><?php echo $_smarty_tpl->__("product_variations.group_code");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("product_variations.group_code.description")), 0);?>
</span>
    <input class="product-variations__toolbar-code" id="prependedInput" type="text" name="variation_group[code]" data-ca-meta-class="product-variations__toolbar-code product-variations__toolbar-code--text" placeholder="<?php echo $_smarty_tpl->__("product_variations.group_code.placeholder");?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->getCode(), ENT_QUOTES, 'UTF-8');?>
">
</div><?php }} ?>

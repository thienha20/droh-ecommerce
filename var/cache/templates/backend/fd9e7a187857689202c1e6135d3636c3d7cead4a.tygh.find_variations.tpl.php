<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:42:56
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_variations\views\product_variations\find_variations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91049655266067100d61972-63580396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9e7a187857689202c1e6135d3636c3d7cead4a' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\find_variations.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '91049655266067100d61972-63580396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66067100d87377_68992067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66067100d87377_68992067')) {function content_66067100d87377_68992067($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.add_variations'));
?>
<div id="content_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/search_product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div id="tools_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_variations.add_variations"),'but_role'=>"submit-link",'but_name'=>"dispatch[product_variations.link]",'but_meta'=>"btn-primary",'but_target_form'=>"add_product_to_group_form"), 0);?>

    <?php }?>
<!--tools_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>

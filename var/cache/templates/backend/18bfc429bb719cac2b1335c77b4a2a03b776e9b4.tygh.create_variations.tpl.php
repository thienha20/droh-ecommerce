<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:42:56
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_variations\views\product_variations\create_variations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1496445570660671000e6911-46380344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18bfc429bb719cac2b1335c77b4a2a03b776e9b4' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\create_variations.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1496445570660671000e6911-46380344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_allow_generate_variations' => 0,
    'product_data' => 0,
    'new_combinations_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6606710014fea2_99455452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6606710014fea2_99455452')) {function content_6606710014fea2_99455452($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.create_new','product_variations.link_existing','cancel','product_variations.generator.create_btn'));
?>
<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
            <li id="tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js active">
                <a><?php echo $_smarty_tpl->__("product_variations.create_new");?>
</a>
            </li>
        <?php }?>
        <li id="tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-js cm-ajax <?php if (!$_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>active<?php }?>">
            <a href="<?php echo htmlspecialchars(fn_url("product_variations.find_variations?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_variations.link_existing");?>
</a>
        </li>
    </ul>
</div>
<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
        <div id="content_tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/generate_variations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php }?>
    <div id="content_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;
    <!--content_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
</div>
<div class="buttons-container product-variations__add-variations-buttons-container">
    <div>
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_generate_variations']->value) {?>
        <div class="cm-tab-tools" id="tools_tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['new_combinations_count']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_variations.generator.create_btn",array($_smarty_tpl->tpl_vars['new_combinations_count']->value)),'but_role'=>"submit-link",'but_name'=>"dispatch[product_variations.generate]",'but_meta'=>"btn-primary",'but_target_form'=>"generate_product_to_group_form"), 0);?>

            <?php }?>
        <!--tools_tab_create_new_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
    <div class="cm-tab-tools" id="tools_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <!--tools_tab_link_existing_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
</div>
<?php }} ?>

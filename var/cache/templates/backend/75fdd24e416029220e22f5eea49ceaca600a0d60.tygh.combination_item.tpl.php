<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:42:56
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_variations\views\product_variations\components\combination_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5351224846606710024ced8-96314464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fdd24e416029220e22f5eea49ceaca600a0d60' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\combination_item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5351224846606710024ced8-96314464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'combination' => 0,
    'combinations_count' => 0,
    'product_data' => 0,
    'variant_name' => 0,
    'primary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660671002803b8_00787365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660671002803b8_00787365')) {function content_660671002803b8_00787365($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','name','product_variations.mark_main_product','sku','price','quantity'));
?>
<tr
    class="cm-variations-generator__parent-combination-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['parent_combination_id'], ENT_QUOTES, 'UTF-8');?>
 cm-variations-generator__combination-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
 cm-variations-generator__combination-row"
    data-ca-combination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-parent-combination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['parent_combination_id'], ENT_QUOTES, 'UTF-8');?>
"
>
    <td width="40">
        <input type="hidden" value="0" name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][active]" />
        <input type="checkbox"
            value="1"
            name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][active]"
            <?php if ($_smarty_tpl->tpl_vars['combination']->value['active']) {?>checked="checked" <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['combination']->value['linked']||$_smarty_tpl->tpl_vars['combinations_count']->value===1) {?>disabled="disabled" <?php }?>
            class="cm-item cm-variations-generator__combination-activity-checbox"
        />
        <?php if ($_smarty_tpl->tpl_vars['combination']->value['linked']||$_smarty_tpl->tpl_vars['combinations_count']->value===1) {?>
            <input type="hidden" value="1" name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][active]" />
        <?php }?>
    </td>
    <td width="40">
        <?php if (!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_id']&&$_smarty_tpl->tpl_vars['combination']->value['has_children']) {?>
            <button alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="sw_product_variations_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
" aaaid="on_variations" class="cm-combinations cm-product-variations__collapse product-variations__collapse-btn product-variations__collapse-btn--collapsed" type="button">
                <span class="icon-caret-down" data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
"> </span>
                <span class="icon-caret-right hidden" data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
"> </span>
            </button>
        <?php } else { ?>
            &nbsp;
        <?php }?>
    </td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_id']==$_smarty_tpl->tpl_vars['combination']->value['product_id']) {?>
            <strong>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['variant_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['combination']->value['variant_names']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['variant_name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['variant_name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['variant_name']->key => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_name']->iteration++;
 $_smarty_tpl->tpl_vars['variant_name']->last = $_smarty_tpl->tpl_vars['variant_name']->iteration === $_smarty_tpl->tpl_vars['variant_name']->total;
?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['variant_name']->last) {?> • <?php }?>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_id']==$_smarty_tpl->tpl_vars['combination']->value['product_id']) {?>
            </strong>
        <?php }?>
    </td>
    <td <?php if (!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_id']) {?>data-th="<?php echo $_smarty_tpl->__("name");?>
"<?php }?>>
        <?php if (!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_id']) {?>
            <input type="text" name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][product_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['product_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden" />

            <?php if (!$_smarty_tpl->tpl_vars['combination']->value['exists']||!$_smarty_tpl->tpl_vars['combination']->value['linked']) {?>
                <input type="hidden" class="cm-variations-generator__combination-set-as-default-input" name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][set_as_default]" value="1"/>
            <?php }?>
        <?php } elseif (!$_smarty_tpl->tpl_vars['combination']->value['exists']&&$_smarty_tpl->tpl_vars['combination']->value['active']&&!$_smarty_tpl->tpl_vars['combination']->value['parent_combination_exists']) {?>
            <input type="hidden" class="cm-variations-generator__combination-set-as-default-input" name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][set_as_default]" value="1" id="combination_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
_set_as_default_input" disabled="disabled" />
            <a hre="#" data-ca-input-selector="#combination_item_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
_set_as_default_input" class="hidden-tools cm-variations-generator__combination-set-default-link"><?php echo $_smarty_tpl->__("product_variations.mark_main_product");?>
</a>
        <?php }?>
    </td>

    <td width="13%" data-th="<?php echo $_smarty_tpl->__("sku");?>
">
        <input type="text" name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][product_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden" />
    </td>

    <td width="13%" data-th="<?php echo $_smarty_tpl->__("price");?>
">
        <input type="text" name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][product_price]" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['combination']->value['product_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden"/>
    </td>
    <td width="9%" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
        <input type="text" name="combinations_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['combination_id'], ENT_QUOTES, 'UTF-8');?>
][product_amount]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['product_amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden" />
    </td>
</tr>
<?php }} ?>

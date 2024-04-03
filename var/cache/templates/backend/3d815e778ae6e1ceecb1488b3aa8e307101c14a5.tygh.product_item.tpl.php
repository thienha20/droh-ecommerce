<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:41:37
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_variations\views\product_variations\components\product_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300970773660670b1135856-05610452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d815e778ae6e1ceecb1488b3aa8e307101c14a5' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\product_item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '300970773660670b1135856-05610452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'runtime' => 0,
    'no_hide_input_if_shared_product' => 0,
    'product_id' => 0,
    'is_form_readonly' => 0,
    'selected_features' => 0,
    'feature' => 0,
    'variant' => 0,
    'show_update_for_all' => 0,
    'primary_currency' => 0,
    'redirect_url' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660670b128fbe3_64745912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660670b128fbe3_64745912')) {function content_660670b128fbe3_64745912($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','name','sku','price','quantity','product_variations.mark_main_product','edit','product_variations.remove_variation','product_variations.delete_product','status'));
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['product']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
    data-ca-longtap-action="setCheckBox"
    data-ca-longtap-target="input.cm-item"
    data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_variations:manage_body")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_variations:manage_body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php $_smarty_tpl->tpl_vars['show_update_for_all'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product']->value['shared_product']===smarty_modifier_enum("YesNo::YES"), null, 0);?>
    <?php }?>

    <td>
        <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['product']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
    </td>
    <td>
        <?php if (!$_smarty_tpl->tpl_vars['product']->value['parent_product_id']&&$_smarty_tpl->tpl_vars['product']->value['has_children']) {?>
            <button alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="sw_product_variations_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" aaaid="on_variations" class="cm-combinations cm-product-variations__collapse product-variations__collapse-btn product-variations__collapse-btn--collapsed" type="button">
                <span class="icon-caret-down" data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"> </span>
                <span class="icon-caret-right hidden" data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"> </span>
            </button>
        <?php } else { ?>
            &nbsp;
        <?php }?>
    </td>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['parent_product_id']) {?>
        <td>
            <div class="product-variations__table-img product-variations__table-img--main">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>40,'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']))), 0);?>

            </div>
        </td>
    <?php } else { ?>
        <td>
            <div class="product-variations__table-img product-variations__table-img--main">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>70,'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']))), 0);?>

            </div>
        </td>
    <?php }?>

    <td class="product-variations__table-name" data-th="<?php echo $_smarty_tpl->__("name");?>
">
        <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
"/>

        <?php if ($_smarty_tpl->tpl_vars['product_id']->value==$_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
            <strong class="product-variations__table-name--text"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</strong>
        <?php } else { ?>
            <a class="product-variations__table-name--link" href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    </td>

    <td data-th="<?php echo $_smarty_tpl->__("sku");?>
">
        <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value||!$_smarty_tpl->tpl_vars['product']->value['product_type_instance']->isFieldAvailable("product_code")) {?>
            <div class="product-variations__table-code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</div>
        <?php } else { ?>
            <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden product-variations__table-code" />
        <?php }?>
    </td>

    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value||!$_smarty_tpl->tpl_vars['product']->value['product_type_instance']->isFieldAvailable("variation_features")) {?>
            <td data-th="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_features'][$_smarty_tpl->tpl_vars['feature']->value['feature_id']]['variant'], ENT_QUOTES, 'UTF-8');?>
</span></td>
        <?php } else { ?>
            <td data-th="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
"><select
                        name="products_variation_feature_values[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]"
                        class="input-hidden product-variations__table-select js-product-variation-feature-item"
                        data-ca-feature-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                >
            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features'][$_smarty_tpl->tpl_vars['feature']->value['feature_id']]['variant_id']==$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" selected><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php }?>
            <?php } ?>
            </select></td>
        <?php }?>
    <?php } ?>

    <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" width="16%" data-th="<?php echo $_smarty_tpl->__("price");?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"update_all_vendors[price][".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'component'=>"products.price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), 0);?>

        <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>input-mini<?php } else { ?>input-small<?php }?> input-hidden product-variations__table-price"/>
    </td>
    <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_variations:list_quantity")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_variations:list_quantity"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
                <div class="product-variations__table-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php } else { ?>
                <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden product-variations__table-quantity" />
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_variations:list_quantity"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </td>
    <td class="nowrap mobile-hide">
        <div class="hidden-tools cm-hide-with-inputs">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php if (!$_smarty_tpl->tpl_vars['is_form_readonly']->value&&$_smarty_tpl->tpl_vars['product']->value['parent_product_id']&&$_smarty_tpl->tpl_vars['product']->value['status']==="A") {?>
                    <li><?php ob_start();
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['redirect_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'id'=>"mark_main_product_product_from_group_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_smarty_tpl->__("product_variations.mark_main_product"),'class'=>"cm-post cm-confirm",'href'=>"product_variations.mark_main_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".$_tmp1,'method'=>"POST"));?>
</li>
                <?php }?>
                <li><?php ob_start();
echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>$_tmp2));?>
</li>
                <?php if (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
                    <li><?php ob_start();
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['redirect_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'id'=>"remove_product_from_group_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_smarty_tpl->__("product_variations.remove_variation"),'class'=>"cm-post cm-confirm",'href'=>"product_variations.delete_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".$_tmp3,'method'=>"POST"));?>
</li>
                    <li class="divider"></li>
                    <li><?php ob_start();
if ($_smarty_tpl->tpl_vars['product_id']->value==$_smarty_tpl->tpl_vars['product']->value['product_id']) {?><?php echo "products.manage";?><?php } else { ?><?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['redirect_url']->value), ENT_QUOTES, 'UTF-8');?>
<?php }
$_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'id'=>"delete_product_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_smarty_tpl->__("product_variations.delete_product"),'class'=>"cm-post cm-confirm",'href'=>"products.delete?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".$_tmp4,'method'=>"POST"));?>
</li>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/status_on_manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_status_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'status'=>$_smarty_tpl->tpl_vars['product']->value['status'],'hidden'=>true,'object_id_name'=>"product_id",'table'=>"products",'st_return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url'],'st_result_ids'=>"content_variations"), 0);?>

    </td>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_variations:manage_body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</tr>
<?php }} ?>

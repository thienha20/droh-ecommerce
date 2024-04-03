<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:20:28
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\shippings\additional_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12069317686603c8bc4eeb60-09094423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b303dcb681b5f0009a7fb0cb551cb4fd1fb86a' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\shippings\\additional_settings.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12069317686603c8bc4eeb60-09094423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
    'taxes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c8bc5077e8_76934129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c8bc5077e8_76934129')) {function content_6603c8bc5077e8_76934129($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('shipping.pricing','taxes','use_for_free_shipping','tt_views_shippings_update_use_for_free_shipping','customer_information','is_address_required'));
?>
<div id="content_additional_settings">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:additional_settings")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:additional_settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("shipping.pricing"),'target'=>"#shipping_pricing"), 0);?>

<fieldset id="shipping_pricing" class="collapse-visible collapse in">

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("taxes");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"shipping_data[tax_ids]",'input_id'=>"elm_shippings_taxes",'item_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['tax_ids'],'items'=>$_smarty_tpl->tpl_vars['taxes']->value,'id_field'=>"tax_id",'name_field'=>"tax",'type'=>"taxes",'class_prefix'=>"taxes",'close_on_select'=>"false",'list_mode'=>false), 0);?>

        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="free_shipping"><?php echo $_smarty_tpl->__("use_for_free_shipping");?>
:</label>
        <div class="controls">
            <input type="hidden" name="shipping_data[free_shipping]" value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
 />
            <input type="checkbox" name="shipping_data[free_shipping]" id="free_shipping" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['free_shipping']==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
 />
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_shippings_update_use_for_free_shipping");?>
</p>
        </div>
    </div>

</fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("customer_information"),'target'=>"#customer_information"), 0);?>

<fieldset id="customer_information" class="collapse-visible collapse in">

    <div class="control-group">
        <label class="control-label" for="elm_is_address_required"
        ><?php echo $_smarty_tpl->__("is_address_required");?>
:</label>
        <div class="controls">
            <input type="hidden"
                   name="shipping_data[is_address_required]"
                   value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>

            />
            <input type="checkbox"
                   name="shipping_data[is_address_required]"
                   id="is_address_required"
                   <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['is_address_required'])===null||$tmp==='' ? $_tmp3 : $tmp)===smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>
                   value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>

            />
        </div>
    </div>

</fieldset>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:additional_settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!--content_additional_settings--></div><?php }} ?>

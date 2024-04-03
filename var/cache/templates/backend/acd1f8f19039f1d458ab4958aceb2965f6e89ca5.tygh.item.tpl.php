<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:49:09
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\warehouses\components\picker\destinations\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77819742166078bb5e9f353-30034760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acd1f8f19039f1d458ab4958aceb2965f6e89ca5' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\warehouses\\components\\picker\\destinations\\item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '77819742166078bb5e9f353-30034760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_mode' => 0,
    'type' => 0,
    'item_meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078bb5eb5a65_62811055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078bb5eb5a65_62811055')) {function content_66078bb5eb5a65_62811055($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.rate_area','warehouses.shipping_delay','warehouses.warn_about_delay'));
?>
<?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external"&&$_smarty_tpl->tpl_vars['type']->value==="selection") {?>
    <?php $_smarty_tpl->tpl_vars['item_meta'] = new Smarty_variable("object-picker__selection-extended-item object-picker__selection-extended-item--table", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="selection") {?>
    <?php $_smarty_tpl->tpl_vars['item_meta'] = new Smarty_variable("object-picker__selection-item", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="result") {?>
    <?php $_smarty_tpl->tpl_vars['item_meta'] = new Smarty_variable("object-picker__result-item", null, 0);?>
<?php }?>

<div class="object-picker__destinations-main <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("warehouses.rate_area");?>
">
    <div class="object-picker__name">
        <?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external"&&$_smarty_tpl->tpl_vars['type']->value==="selection") {?>
            <a href="${data.url}" class="object-picker__name-content object-picker__name-content--link">${data.destination}</a>
        <?php } else { ?>
            <div class="object-picker__name-content">${data.destination}</div>
        <?php }?>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['type']->value==="selection") {?>
    <div class="object-picker__shipping-delay <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("warehouses.shipping_delay");?>
">
        <input type="hidden"
               name="store_location_data[shipping_destinations][${data.destination_id}][destination_id]"
               value="${data.destination_id}"
        />
        <input type="hidden"
               name="store_location_data[shipping_destinations][${data.destination_id}][position]"
               value="${data.position}"
        />
        <input type="text"
               name="store_location_data[shipping_destinations][${data.destination_id}][shipping_delay]"
               value="${data.shipping_delay}"
               class="input-small"
               ${data.is_disabled ? 'disabled': ''}
        />
    </div>
    <div class="object-picker__warn-about-delay <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("warehouses.warn_about_delay");?>
">
        <input type="hidden"
               name="store_location_data[shipping_destinations][${data.destination_id}][warn_about_delay]"
               value="0"
        />
        <input type="checkbox"
               name="store_location_data[shipping_destinations][${data.destination_id}][warn_about_delay]"
               value="1"
               
                   ${data.warn_about_delay
                       ? `checked="checked"`
                       : ``
                   }
               
               ${data.is_disabled ? 'disabled': ''}
        />
    </div>
<?php }?>
<?php }} ?>

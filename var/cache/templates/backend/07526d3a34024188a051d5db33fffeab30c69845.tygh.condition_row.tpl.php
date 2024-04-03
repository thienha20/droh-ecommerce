<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:20:28
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\shippings\components\condition_row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8117825466603c8bc49f6a3-74826654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07526d3a34024188a051d5db33fffeab30c69845' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\shippings\\components\\condition_row.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8117825466603c8bc49f6a3-74826654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'primary_currency' => 0,
    'currencies' => 0,
    'allow_save' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c8bc4df6c5_90316538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c8bc4df6c5_90316538')) {function content_6603c8bc4df6c5_90316538($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('shipping_surcharge_discount','shipping_rate_absolute','shipping_rate_percent'));
?>
<tbody>
    <tr class="table-rate__row">
        <td width="55%">  
            <div class="control-group shipping-rate-range">      
                <div class="shipping-rate-range__content">
                    <div class="control-group  shipping-rate-range__start-${data.destinationId}-${data.type}-${data.index}">
                        <label class="hidden shipping-rate-range-start-label" for="start_range_${data.destinationId}_${data.type}_${data.index}"></label>
                        <input type="text"
                            id="start_range_${data.destinationId}_${data.type}_${data.index}"
                            name="shipping_data[rates][${data.destinationId}][rate_value][${data.type}][${data.index}][range_from_value]"
                            data-ca-type="start"
                            data-p-sign="${data.currencySymbolPlacement}"
                            data-a-sign="${data.unit}" 
                            data-a-dec="." 
                            data-a-sep=","
                            data-m-dec="${data.type == '<?php echo htmlspecialchars(smarty_modifier_enum("ShippingRateTypes::WEIGHT"), ENT_QUOTES, 'UTF-8');?>
' ? 3 : `${data.type == '<?php echo htmlspecialchars(smarty_modifier_enum("ShippingRateTypes::COST"), ENT_QUOTES, 'UTF-8');?>
' ? 2 : 0}`}"
                            value="${data.rateValue ? data.rateValue.range_from_value : ''}" 
                            class="input-hidden cm-numeric shipping-rate__input-large shipping-rate-start-range"
                            placeholder="${data.placeholderFrom}"
                            ${data.disabled}
                        />
                    </div>
                    
                    <div class="shipping-rate-range__content-delimiter">&ndash;</div>
                    
                    <div class="control-group shipping-rate-range__end-${data.destinationId}-${data.type}-${data.index}">
                        <label class="hidden shipping-rate-range-end-label" for="end_range_${data.destinationId}_${data.type}_${data.index}"></label>
                        <input type="text" 
                            id="end_range_${data.destinationId}_${data.type}_${data.index}"
                            name="shipping_data[rates][${data.destinationId}][rate_value][${data.type}][${data.index}][range_to_value]" 
                            data-ca-type="end"
                            data-a-sign="${data.unit}"
                            data-p-sign="${data.currencySymbolPlacement}"
                            data-a-dec="." 
                            data-a-sep=","
                            data-m-dec="${data.type == '<?php echo htmlspecialchars(smarty_modifier_enum("ShippingRateTypes::WEIGHT"), ENT_QUOTES, 'UTF-8');?>
' ? 3 : `${data.type == '<?php echo htmlspecialchars(smarty_modifier_enum("ShippingRateTypes::COST"), ENT_QUOTES, 'UTF-8');?>
' ? 2 : 0}`}"
                            value="${data.rateValue ? data.rateValue.range_to_value : ''}" 
                            class="input-hidden cm-numeric shipping-rate__input-large shipping-rate-end-range"
                            placeholder="${data.placeholderTo}"
                            ${data.disabled}
                        />
                    </div>
                </div>
                
                <label class="hidden shipping-rate-range-label" for="shipping_rate_range_${data.destinationId}_${data.type}_${data.index}"></label> 
                <input type="text" class="hidden" id="shipping_rate_range_${data.destinationId}_${data.type}_${data.index}" ${data.disabled}/>
            </div>
        </td>
        <td>
            <div class="input-append shipping-rate__input-append shipping-rate__input-append--per-unit">
                <input type="text" 
                    name="shipping_data[rates][${data.destinationId}][rate_value][${data.type}][${data.index}][value]"
                    value="${data.rateValue ? data.rateValue.value : ''}" 
                    class="shipping-rate__surcharge-discount cm-numeric shipping-rate__input-append--large input-hidden" 
                    placeholder="<?php echo $_smarty_tpl->__("shipping_surcharge_discount",array("[object]"=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'])));?>
"
                    data-destination-id="${data.destinationId}"
                    data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
" 
                    data-a-dec="." 
                    data-a-sep=","
                    <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after']=="Y") {?>data-p-sign="s"<?php }?>
                    ${data.disabled}
                />

                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <div class="btn-group shipping-rate_${data.index}_per-unit">
                        <input type="hidden" name="shipping_data[rates][${data.destinationId}][rate_value][${data.type}][${data.index}][type]" value="F" />
                        <input 
                            id="shipping_rate_${data.type}_${data.destinationId}_type_${data.index}"
                            type="checkbox" 
                            name="shipping_data[rates][${data.destinationId}][rate_value][${data.type}][${data.index}][type]" 
                            value="P"
                            class="cm-item-percentage-${data.type}-${data.destinationId}-${data.index} hide" 
                        />

                        <button class="btn btn-default dropdown-toggle button-hidden" data-toggle="dropdown">
                            <span class="text"></span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu shipping-rate__input-append-list">
                            <li id="shipping_rate_absolute_item_${data.type}_${data.destinationId}_${data.index}" 
                                data-ca-percentage-type="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
"
                            >
                                <a class="cm-check-items cm-off" data-ca-target="percentage-${data.type}-${data.destinationId}-${data.index}"><?php ob_start();?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->__("shipping_rate_absolute",array("[currency]"=>$_tmp2));?>
</a>
                            </li>
                            <li id="shipping_rate_percentage_item_${data.type}_${data.destinationId}_${data.index}" 
                                data-ca-percentage-type="%" 
                                data-ca-percentage-type-after="true"
                            >
                                <a class="cm-check-items cm-on" data-ca-target="percentage-${data.type}-${data.destinationId}-${data.index}"><?php echo $_smarty_tpl->__("shipping_rate_percent");?>
</a>
                            </li>
                            
                                ${data.type == "W" || data.type == "I"
                                ? `
                                    <li class="shipping-rate__input-append-checkbox">
                                        <input type="hidden"
                                            name="shipping_data[rates][${data.destinationId}][rate_value][${data.type}][${data.index}][per_unit]"
                                            value="N"
                                            ${data.disabled}
                                        />
                                        <input type="checkbox"
                                            id="shipping_rate_${data.destinationId}_per_unit_${data.index}" 
                                            name="shipping_data[rates][${data.destinationId}][rate_value][${data.type}][${data.index}][per_unit]" 
                                            value="Y"
                                            class="cm-item"
                                            ${data.disabled}
                                        />
                                        ${data.perUnit}                        
                                    </li>
                                `: ``}
                            
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="shipping-rate_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['index'], ENT_QUOTES, 'UTF-8');?>
_per-unit">
                        <span class="text"></span>
                    </div>
                <?php }?>
            </div>    
        </td>
        <td>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/remove_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>"Y",'but_class'=>"cm-delete-row",'simple'=>"true"), 0);?>

        </td>
    </tr>
</tbody><?php }} ?>

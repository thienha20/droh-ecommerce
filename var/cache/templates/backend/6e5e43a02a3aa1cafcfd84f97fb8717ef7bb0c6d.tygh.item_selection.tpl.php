<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:20:28
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\shippings\components\picker\rates\item_selection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1602869156603c8bc334977-03657569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5e43a02a3aa1cafcfd84f97fb8717ef7bb0c6d' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\shippings\\components\\picker\\rates\\item_selection.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1602869156603c8bc334977-03657569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ldelim' => 0,
    'rdelim' => 0,
    'destination_id' => 0,
    'shipping' => 0,
    'can_specify_base_rate' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'allow_save' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c8bc3aaad7_69184574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c8bc3aaad7_69184574')) {function content_6603c8bc3aaad7_69184574($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('shipping_time','shipping_rate','calculated_automatically','shipping_add_conditions','shipping_hide_conditions','tools','shipping_add_price_condition','shipping_remove_price_condition','shipping_add_weight_condition','shipping_remove_weight_condition','shipping_add_items_condition','shipping_remove_items_condition','shipping_remove_rate_area'));
?>
<div class="object-picker__shipping-rate-main ${data.additional_class}">
    <?php $_smarty_tpl->tpl_vars['destination_id'] = new Smarty_variable("$".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."data.destination_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value), null, 0);?>

    <div class="shipping-rate" id="shipping_rate_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="shipping-rate__container">
            <div class="shipping-rate__main-content">
                <h4 class="shipping-rate__header">${data.destination}</h4>
                <div class="shipping-rate__delivery-time">
                    <label><?php echo $_smarty_tpl->__("shipping_time");?>
:</label>
                    <input type="text" 
                        class="input-small input-hidden"
                        name="shipping_data[rates][delivery_time][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
]" 
                        value="$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
data.delivery_time<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
"
                        ${data.is_disabled ? 'readonly': ''}
                    />             
                </div>
                <div class="shipping-rate__base-rate">
                    <label><?php echo $_smarty_tpl->__("shipping_rate");?>
:</label>
                    <?php $_smarty_tpl->tpl_vars['can_specify_base_rate'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['rate_calculation']=="M", null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:base_rate")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:base_rate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['can_specify_base_rate']->value) {?>
                            <input type="text"
                                name="shipping_data[rates][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
][base_rate]"
                                value="$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
data.price<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
"
                                class="cm-numeric input-small input-hidden"
                                data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
"
                                data-a-dec="."
                                data-a-sep=","
                                <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after']=="Y") {?>data-p-sign="s"<?php }?>
                                ${data.is_disabled ? 'readonly' : ''}
                            />
                        <?php } else { ?>
                            <input type="hidden" name="shipping_data[rates][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
][base_rate]" ${data.is_disabled ? 'readonly' : ''}/>
                            <?php echo $_smarty_tpl->__("calculated_automatically");?>

                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:base_rate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <div class="shipping-rate__button-list" data-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-types-conditions="C,W,I" data-disabled="${data.is_disabled ? 'readonly' : ''}">
                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <a id="sw_add_cond_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combinations shipping-rate__empty-conditions-tool shipping-rate__add-conditions">
                                <?php echo $_smarty_tpl->__("shipping_add_conditions");?>

                                <span class="icon-caret-down hidden" data-ca-switch-id="add_cond_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
"> </span>
                                <span class="icon-caret-right" data-ca-switch-id="add_cond_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
"> </span>
                            </a>
                        <?php }?>
                        <a class="shipping-rate__not-empty-conditions-tool shipping-rate__show-conditions hidden">
                            <span class="shipping-rate__range"></span>
                            <span class="icon-caret-down"> </span>
                        </a>
                        <a class="shipping-rate__not-empty-conditions-tool shipping-rate__hide-conditions hidden">
                            <span><?php echo $_smarty_tpl->__("shipping_hide_conditions");?>
</span>
                            <span class="icon-caret-down"> </span>
                        </a>
                    </div>
                </div>


                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <div class="shipping-rate__tools" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
                            <li class="shipping-rate-tools__add-table shipping-rate-area__tools-item" data-type="C" data-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a><?php echo $_smarty_tpl->__("shipping_add_price_condition");?>
</a>
                            </li>
                            <li class="shipping-rate-tools__remove-table hidden shipping-rate-area__tools-item" data-type="C" data-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a class="cm-confirm"><?php echo $_smarty_tpl->__("shipping_remove_price_condition");?>
</a>
                            </li>

                            <li class="shipping-rate-tools__add-table shipping-rate-area__tools-item" data-type="W" data-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a><?php echo $_smarty_tpl->__("shipping_add_weight_condition");?>
</a>
                            </li>
                            <li class="shipping-rate-tools__remove-table hidden shipping-rate-area__tools-item" data-type="W" data-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a class="cm-confirm"><?php echo $_smarty_tpl->__("shipping_remove_weight_condition");?>
</a>
                            </li>

                            <li class="shipping-rate-tools__add-table shipping-rate-area__tools-item" data-type="I" data-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a><?php echo $_smarty_tpl->__("shipping_add_items_condition");?>
</a>
                            </li>
                            <li class="shipping-rate-tools__remove-table hidden shipping-rate-area__tools-item" data-type="I" data-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a class="cm-confirm"><?php echo $_smarty_tpl->__("shipping_remove_items_condition");?>
</a>
                            </li>
                            <li class="divider shipping-rate-area__tools-item"></li>
                            <li><?php ob_start();
echo htmlspecialchars(fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['destination_id']->value)), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>$_tmp1,'text'=>$_smarty_tpl->__('shipping_edit_rate_area')));?>
</li>
                            <li class="rate-tools__remove-shipping-rate" data-destination-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a class="cm-object-picker-remove-object object-picker__shipping-rate-delete"><?php echo $_smarty_tpl->__("shipping_remove_rate_area");?>
</a>
                            </li>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <div class="hidden-tools" >
                            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

                        </div>
                    </div>
                <?php }?>
            </div>

            <div class="shipping-rate__description">
                <label>${data.description}</label>
            </div> 
        </div>
        
        <div id="tables_rate_condition_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden tables-rate-condition">
        </div>               
    </div>
</div><?php }} ?>

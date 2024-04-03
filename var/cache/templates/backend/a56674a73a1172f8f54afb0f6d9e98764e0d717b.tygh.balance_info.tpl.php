<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:13:25
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\companies\components\balance_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6447309026603c715f31ef6-80623829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a56674a73a1172f8f54afb0f6d9e98764e0d717b' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\companies\\components\\balance_info.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6447309026603c715f31ef6-80623829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'totals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7160087b3_60962593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7160087b3_60962593')) {function content_6603c7160087b3_60962593($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('totals','vendor_payouts.income_carried_forward','vendor_payouts.income','vendor_payouts.balance_carried_forward','vendor_payouts.balance'));
?>
<div class="statistic-list pull-right clearfix" id="balance_total">
    <div class="table-wrapper">
        <table width="100%">
            <thead>
            <tr>
                <th></th>
                <th width="15%" class="right"><h4><?php echo $_smarty_tpl->__("totals");?>
</h4></th>
            </tr>
            </thead>
            <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['income_carried_forward'])) {?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("vendor_payouts.income_carried_forward");?>
:</td>
                    <td class="shift-right"><span class="statistic-list-item__price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['income_carried_forward']), 0);?>
</span></td>
                </tr>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['income'])) {?>
                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("vendor_payouts.income");?>
:</h4></td>
                    <td class="shift-right"><h4 class="statistic-list-item__price text-<?php if ($_smarty_tpl->tpl_vars['totals']->value['income']>0) {?>success<?php } else { ?>error<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['income']), 0);?>
</h4></td>
                </tr>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['balance_carried_forward'])) {?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("vendor_payouts.balance_carried_forward");?>
:</td>
                    <td class="shift-right"><span class="statistic-list-item__price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['balance_carried_forward']), 0);?>
</span></td>
                </tr>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['balance'])) {?>
                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("vendor_payouts.balance");?>
:</h4></td>
                    <td class="shift-right"><h4 class="statistic-list-item__price text-<?php if ($_smarty_tpl->tpl_vars['totals']->value['balance']>0) {?>success<?php } else { ?>error<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['balance']), 0);?>
</h4></td>
                </tr>
            <?php }?>
        </table>
    </div>
<!--balance_total--></div>
<?php }} ?>

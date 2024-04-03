<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:10:07
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\setup_wizard\components\tabs\sections\vendor_registration_flow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17947038536603c64f083be6-26774447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a4f9687710e1b00a6ec4531a550ab2560396101' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\setup_wizard\\components\\tabs\\sections\\vendor_registration_flow.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17947038536603c64f083be6-26774447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'available_registration_flow_types' => 0,
    'registration_flow_type' => 0,
    'current_registration_flow_type' => 0,
    'registration_flow_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c64f094a11_16223681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c64f094a11_16223681')) {function content_6603c64f094a11_16223681($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.vendor_registration_flow','sw.set_up_vendor_profile_fields','sw.configure'));
?>
<?php $_smarty_tpl->tpl_vars['available_registration_flow_types'] = new Smarty_variable(fn_get_schema("setup_wizard","registration_flow"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['current_registration_flow_type'] = new Smarty_variable(fn_setup_wizard_get_current_registration_flow_type(), null, 0);?>

<div id="sw_registration_flow" class="business_model">
    <div class="control-group">
        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.vendor_registration_flow");?>
</h2>
    </div>
    <?php  $_smarty_tpl->tpl_vars['registration_flow_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['registration_flow_data']->_loop = false;
 $_smarty_tpl->tpl_vars['registration_flow_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_registration_flow_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['registration_flow_data']->key => $_smarty_tpl->tpl_vars['registration_flow_data']->value) {
$_smarty_tpl->tpl_vars['registration_flow_data']->_loop = true;
 $_smarty_tpl->tpl_vars['registration_flow_type']->value = $_smarty_tpl->tpl_vars['registration_flow_data']->key;
?>
        <div class="sw-columns-block-line">
            <div class="control-group">
                <label class="control-label control-label-radio" for="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['registration_flow_type']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="radio"
                           name="registration_flow_type"
                           id="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['registration_flow_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                           class="cm-submit ladda-button"
                           data-ca-target-form="setup_wizard_vendors_form_elm"
                           data-ca-dispatch="dispatch[setup_wizard.change_registration_flow]"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['registration_flow_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                           <?php if ($_smarty_tpl->tpl_vars['current_registration_flow_type']->value===$_smarty_tpl->tpl_vars['registration_flow_type']->value) {?>checked<?php }?>
                    />
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['registration_flow_data']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    <p>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['registration_flow_data']->value['description'], ENT_QUOTES, 'UTF-8');?>

                    </p>
                </label>
            </div>
        </div>
    <?php } ?>
</div>

<div id="container_sw_vendor_profile_fields" class="control-group sw_size_2 vendor_profile_fields">
    <label class="control-label"><?php echo $_smarty_tpl->__("sw.set_up_vendor_profile_fields");?>
</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"profile_fields.manage?profile_type=S",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0);?>

    </div>
</div>
<?php }} ?>

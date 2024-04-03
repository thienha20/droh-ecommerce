<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:10:07
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\setup_wizard\components\tabs\business_model.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9815980246603c64f009753-53938472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f35351c3aa0f2854e5bab244d453eaa9d9d695d' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\setup_wizard\\components\\tabs\\business_model.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9815980246603c64f009753-53938472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'available_business_models' => 0,
    'business_model_id' => 0,
    'current_business_model' => 0,
    'business_model_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c64f017160_92654642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c64f017160_92654642')) {function content_6603c64f017160_92654642($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.configure','sw.select_money_transfer_methods'));
?>
<?php $_smarty_tpl->tpl_vars['available_business_models'] = new Smarty_variable(fn_setup_wizard_get_available_business_models(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['current_business_model'] = new Smarty_variable(fn_setup_wizard_get_current_business_model(), null, 0);?>

<div class="sw-right-block">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"payments.manage",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0);?>

</div>
<div class="sw-columns-block">
    <div id="sw_money_transfer_from">
        <form name="sw_money_transfer_from" class="form-horizontal cm-ajax cm-ajax-force" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="dispatch" value="setup_wizard.change_money_transfer" />
            <input type="hidden" name="result_ids" value="sw_money_transfer_from" />

            <div class="control-group">
                <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.select_money_transfer_methods");?>
</h2>
            </div>
            <?php  $_smarty_tpl->tpl_vars['business_model_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['business_model_data']->_loop = false;
 $_smarty_tpl->tpl_vars['business_model_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_business_models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['business_model_data']->key => $_smarty_tpl->tpl_vars['business_model_data']->value) {
$_smarty_tpl->tpl_vars['business_model_data']->_loop = true;
 $_smarty_tpl->tpl_vars['business_model_id']->value = $_smarty_tpl->tpl_vars['business_model_data']->key;
?>
                <div class="sw-columns-block-line">
                    <div class="control-group">
                        <label class="control-label control-label-radio">
                            <input type="radio"
                                   name="money_transfer_type"
                                   id="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['business_model_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   class="cm-submit ladda-button"
                                   data-ca-target-form="sw_money_transfer_from"
                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['business_model_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['current_business_model']->value===$_smarty_tpl->tpl_vars['business_model_id']->value) {?>checked<?php }?>
                            />
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['business_model_data']->value['name'], ENT_QUOTES, 'UTF-8');?>

                            <p>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['business_model_data']->value['description'], ENT_QUOTES, 'UTF-8');?>

                            </p>
                        </label>
                    </div>
                </div>
            <?php } ?>
        </form>
    <!--sw_money_transfer_from--></div>
</div>
<?php }} ?>

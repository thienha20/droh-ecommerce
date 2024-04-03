<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:10:06
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\setup_wizard\components\setup_wizard_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7021198456603c64ec10b39-92747795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9c6373b6f75823ff638d01f9bb9eaf75ded4803' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\setup_wizard\\components\\setup_wizard_form.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7021198456603c64ec10b39-92747795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_id' => 0,
    'tab' => 0,
    'sect' => 0,
    'sect_id' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c64ec5ad65_24928975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c64ec5ad65_24928975')) {function content_6603c64ec5ad65_24928975($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.activate','save'));
?>
<div id="setup_wizard_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_form">
    <form name="setup_wizard_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_form_elm" class="form-horizontal cm-ajax cm-ajax-force" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
        <input type="hidden" name="dispatch" value="setup_wizard.update" />
        <input type="hidden" name="result_ids" value="setup_wizard_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_form" />

        <?php  $_smarty_tpl->tpl_vars['sect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sect']->_loop = false;
 $_smarty_tpl->tpl_vars['sect_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sect']->key => $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->_loop = true;
 $_smarty_tpl->tpl_vars['sect_id']->value = $_smarty_tpl->tpl_vars['sect']->key;
?>
            <div class="sw-columns-block">
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['template']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sect']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                    <?php continue 1;?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['header']) {?>
                    <div class="control-group">
                        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['sect']->value['header']));?>
</h2>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['show_submit_button']===smarty_modifier_enum("YesNo::YES")) {?>
                    <div class="pull-right">
                        <button class="btn btn-primary btn-large ladda-button" type="submit" data-style="slide-right"><span class="ladda-label"><?php echo $_smarty_tpl->__("sw.activate");?>
</span></button>
                        <div class="sw-notifications-box"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['decoration_class']) {?>
                    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sect']->value['decoration_class'], ENT_QUOTES, 'UTF-8');?>
"></div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sect']->value['hidden_items']) {?>
                    <div class="sw-toggle-hidden" ><a id="sw_sect_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sect_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="#" class="cm-combination"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['sect']->value['show_hidden_text']);?>
</a></div>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sect']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/setup_wizard/components/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>((string)$_smarty_tpl->tpl_vars['item']->value['decoration_class']),'item'=>$_smarty_tpl->tpl_vars['item']->value['setting_data'],'html_id'=>"sw_".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name']),'html_name'=>"settings[".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name'])."]",'label_extra'=>$_smarty_tpl->tpl_vars['item']->value['label_extra'],'placeholder'=>$_smarty_tpl->tpl_vars['item']->value['placeholder'],'field_extra_description'=>$_smarty_tpl->tpl_vars['item']->value['field_extra_description'],'field_extra_link'=>$_smarty_tpl->tpl_vars['item']->value['field_extra_link']), 0);?>

                <?php } ?>
                <div id="sect_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sect_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sect']->value['hidden_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/setup_wizard/components/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>((string)$_smarty_tpl->tpl_vars['item']->value['decoration_class']),'item'=>$_smarty_tpl->tpl_vars['item']->value['setting_data'],'html_id'=>"sw_".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name']),'html_name'=>"settings[".((string)$_smarty_tpl->tpl_vars['item']->value['setting_data']['name'])."]"), 0);?>

                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_submit_button']!==smarty_modifier_enum("YesNo::NO")) {?>
            <div class="apply-button">
                <button class="btn btn-primary btn-large ladda-button" type="submit" data-style="slide-right"><span class="ladda-label"><?php echo $_smarty_tpl->__("save");?>
</span></button>
                <span class="sw-notifications-box"></span>
            </div>
        <?php }?>
    </form>
<!--setup_wizard_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_form--></div><?php }} ?>

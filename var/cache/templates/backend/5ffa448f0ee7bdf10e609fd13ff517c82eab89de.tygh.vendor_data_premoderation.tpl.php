<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:10:07
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\setup_wizard\components\tabs\sections\vendor_data_premoderation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323696506603c64f13e4d9-34220492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ffa448f0ee7bdf10e609fd13ff517c82eab89de' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\setup_wizard\\components\\tabs\\sections\\vendor_data_premoderation.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '323696506603c64f13e4d9-34220492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'schema' => 0,
    'setting_name' => 0,
    'setting' => 0,
    'disable_input' => 0,
    'addon_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c64f18eb78_19252418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c64f18eb78_19252418')) {function content_6603c64f18eb78_19252418($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.','sw.configure'));
?>
<?php $_smarty_tpl->tpl_vars['schema'] = new Smarty_variable(fn_get_schema("setup_wizard","vendor_data_premoderation"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['addon_settings'] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['schema']->value['header']) {?>
    <div class="control-group">
        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['schema']->value['header']));?>
</h2>
    </div>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting']->_loop = false;
 $_smarty_tpl->tpl_vars['setting_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schema']->value['settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->_loop = true;
 $_smarty_tpl->tpl_vars['setting_name']->value = $_smarty_tpl->tpl_vars['setting']->key;
?>
    <div id="container_sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group sw_size_2 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_name']->value, ENT_QUOTES, 'UTF-8');?>
">
        <label for="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label ">
            <?php echo $_smarty_tpl->__("sw.".((string)$_smarty_tpl->tpl_vars['setting_name']->value));?>
:
        </label>
        <div class="controls">
            <input type="hidden" name="vendor_data_premoderation[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
            <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>($_smarty_tpl->tpl_vars['addon_settings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]===$_smarty_tpl->tpl_vars['setting']->value['value']),'input_name'=>"vendor_data_premoderation[".((string)$_smarty_tpl->tpl_vars['setting_name']->value)."]",'input_value'=>$_smarty_tpl->tpl_vars['setting']->value['value'],'input_id'=>"sw_".((string)$_smarty_tpl->tpl_vars['setting_name']->value),'input_class'=>"cm-submit",'input_attrs'=>array('data-ca-target-id'=>'setup_wizard_vendors_form',"data-ca-dispatch"=>"dispatch[setup_wizard.change_vendor_data_premoderation]")), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['setting']->value['configure']&&$_smarty_tpl->tpl_vars['addon_settings']->value[$_smarty_tpl->tpl_vars['setting_name']->value]===$_smarty_tpl->tpl_vars['setting']->value['value']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['setting']->value['configure']['href'],'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank",'but_meta'=>"shift-left"), 0);?>

            <?php }?>
        </div>
    </div>
<?php } ?>
<?php }} ?>

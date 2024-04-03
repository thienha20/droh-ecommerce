<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:51:59
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\advanced_import\views\import_presets\get_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11644509646606731f5e1b04-38948451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecb2616b13da09b0c8826d27e1533dc950476afb' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\get_fields.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11644509646606731f5e1b04-38948451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_only' => 0,
    'show_buttons_container' => 0,
    'allow_href' => 0,
    'fields' => 0,
    'preset' => 0,
    'allow_href_backup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6606731f60f3e2_63259966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6606731f60f3e2_63259966')) {function content_6606731f60f3e2_63259966($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('import'));
?>
<div id="content_fields">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/fields_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('view_only'=>$_smarty_tpl->tpl_vars['view_only']->value), 0);?>

<!--content_fields--></div>
<?php if ($_smarty_tpl->tpl_vars['show_buttons_container']->value) {?>
    <div class="buttons-container">
        <?php $_smarty_tpl->tpl_vars['allow_href_backup'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_href']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['allow_href'] = new Smarty_variable(true, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'hide_first_button'=>!(($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp),'but_text'=>$_smarty_tpl->__("import"),'but_meta'=>"cm-submit",'but_onclick'=>"$".".ceAdvancedImport('setFieldsForImport', ".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']).")",'but_name'=>"dispatch[advanced_import.import]"), 0);?>

        <?php $_smarty_tpl->tpl_vars['allow_href'] = new Smarty_variable($_smarty_tpl->tpl_vars['allow_href_backup']->value, null, 0);?>
    </div>
<?php }?><?php }} ?>

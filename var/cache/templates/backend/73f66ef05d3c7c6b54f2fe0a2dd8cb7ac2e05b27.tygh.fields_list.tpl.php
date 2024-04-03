<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:51:59
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\advanced_import\views\import_presets\components\fields_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6244031996606731f61ca68-20845331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f66ef05d3c7c6b54f2fe0a2dd8cb7ac2e05b27' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\fields_list.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6244031996606731f61ca68-20845331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'relations' => 0,
    'fields' => 0,
    'preset' => 0,
    'detailed_preset_page' => 0,
    'view_only' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6606731f643e73_39339516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6606731f643e73_39339516')) {function content_6606731f643e73_39339516($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.fields_mapping.description','advanced_import.modifiers_list','advanced_import.modifiers_list','advanced_import.column_header','advanced_import.product_property','advanced_import.first_line_import_value','advanced_import.modifier','no_data'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    Tygh.advanced_import = {
        relations: <?php echo json_encode($_smarty_tpl->tpl_vars['relations']->value);?>
,
        fields: <?php echo json_encode($_smarty_tpl->tpl_vars['fields']->value);?>
,
        preset_fields: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['fields'])===null||$tmp==='' ? array() : $tmp));?>

    };
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->tpl_vars['detailed_preset_page'] = new Smarty_variable(false, null, 0);?>
<div data-ca-advanced-import-preset-file-extension="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['file_extension'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
     class="preview-fields-mapping__wrapper clearfix"
>

    <p class="pull-left p-notice"><?php echo $_smarty_tpl->__("advanced_import.fields_mapping.description",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
    <div class="btn-bar btn-toolbar pull-right">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action1",'but_target_id'=>"advanced_import_modifiers_list_popup",'but_text'=>$_smarty_tpl->__("advanced_import.modifiers_list"),'but_href'=>"advanced_import.modifiers_list",'but_meta'=>"btn adv-buttons pull-right cm-dialog-opener"), 0);?>

        <div id="advanced_import_modifiers_list_popup" class="hidden" title="<?php echo $_smarty_tpl->__("advanced_import.modifiers_list");?>
"></div>
    </div>

    <div class="clearfix"></div>

    <div class="span16 table-responsive-wrapper">
        <table width="100%" class="table table--relative table-responsive">
            <thead>
            <tr>
                <th class="import-field__name">
                    <?php echo $_smarty_tpl->__("advanced_import.column_header");?>

                </th>
                <th class="import-field__related_object">
                    <?php echo $_smarty_tpl->__("advanced_import.product_property",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

                </th>
                <?php if (!$_smarty_tpl->tpl_vars['detailed_preset_page']->value) {?>
                    <th class="import-field__preview">
                        <?php echo $_smarty_tpl->__("advanced_import.first_line_import_value");?>

                    </th>
                <?php }?>
                <th class="import-field__modifier">
                    <?php echo $_smarty_tpl->__("advanced_import.modifier");?>

                </th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('view_only'=>$_smarty_tpl->tpl_vars['view_only']->value,'detailed_preset_page'=>$_smarty_tpl->tpl_vars['detailed_preset_page']->value), 0);?>

            <?php }
if (!$_smarty_tpl->tpl_vars['name']->_loop) {
?>
                <tr>
                    <td colspan="4">
                        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="clearfix"></div>
</div>
<?php }} ?>

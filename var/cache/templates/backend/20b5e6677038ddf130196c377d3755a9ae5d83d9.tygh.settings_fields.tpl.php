<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:10:06
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\setup_wizard\components\settings_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:673514536603c64ec73d09-41731868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b5e6677038ddf130196c377d3755a9ae5d83d9' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\setup_wizard\\components\\settings_fields.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '673514536603c64ec73d09-41731868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'settings' => 0,
    'app' => 0,
    'parent_item' => 0,
    'parent_item_html_id' => 0,
    'html_id' => 0,
    'class' => 0,
    'highlight' => 0,
    'label_extra' => 0,
    'html_name' => 0,
    'disable_input' => 0,
    'default_unchecked_value' => 0,
    'default_checked_value' => 0,
    'false_checkbox_value' => 0,
    'true_checkbox_value' => 0,
    'k' => 0,
    'v' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'placeholder' => 0,
    'field_extra_description' => 0,
    'field_extra_link' => 0,
    'section' => 0,
    'total' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c64ef14973_13603638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c64ef14973_13603638')) {function content_6603c64ef14973_13603638($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_items','multiple_selectbox_notice','no_items','select_country','select_state','browse','no_items'));
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['update_for_all']&&($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']==="not_active"||fn_allowed_for("MULTIVENDOR"))&&$_smarty_tpl->tpl_vars['app']->value['storefront.repository']->getCount(array('cache'=>true))>1) {?>
    <?php $_smarty_tpl->tpl_vars['disable_input'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['parent_item']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
        (function($, _) {
            $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_item_html_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('click', function() {
                $('#container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
').toggle();
            });
        }(Tygh.$, Tygh));
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::INFO")) {?>
    <div><?php echo $_smarty_tpl->tpl_vars['item']->value['info'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::TEMPLATE")) {?>
    <div><?php echo $_smarty_tpl->getSubTemplate ("addons/".((string)$_REQUEST['addon'])."/settings/".((string)$_smarty_tpl->tpl_vars['item']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::PERMANENT_TEMPLATE")) {?>
    <div><?php echo $_smarty_tpl->getSubTemplate ("addons/".((string)$_REQUEST['addon'])."/settings/".((string)$_smarty_tpl->tpl_vars['item']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('skip_addon_check'=>true), 0);?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::HEADER")) {?>
    <?php if (Smarty::$_smarty_vars['capture']['sw_header_first']==="true") {?>
        </fieldset>
        </div>
    <?php }?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sw_header_first", null, null); ob_start(); ?>true<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['item']->value['description'],'target'=>"#collapsable_".((string)$_smarty_tpl->tpl_vars['html_id']->value)), 0);?>

<div id="collapsable_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
    <fieldset>
        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']!==smarty_modifier_enum("SettingTypes::HIDDEN")&&$_smarty_tpl->tpl_vars['item']->value['type']!==smarty_modifier_enum("SettingTypes::SELECTABLE_BOX")) {?>
        
        <div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['section_name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['parent_item']->value&&$_smarty_tpl->tpl_vars['parent_item']->value['value']!=smarty_modifier_enum("YesNo::YES")) {?>hidden<?php }?>">
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['highlight']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['item']->value['name'],$_smarty_tpl->tpl_vars['highlight']->value)) {?>highlight<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];
if ($_smarty_tpl->tpl_vars['item']->value['tooltip']) {
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['item']->value['tooltip']), 0);
}?>:
                <?php if ($_smarty_tpl->tpl_vars['label_extra']->value) {?>
                    <p><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['label_extra']->value);?>
</p>
                <?php }?>
            </label>

            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::PASSWORD")) {?>
                    <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="password" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::TEXTAREA")) {?>
                    <textarea id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" rows="5" cols="19" class="input-large" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::CHECKBOX")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['name']==="global_tracking"||$_smarty_tpl->tpl_vars['item']->value['name']==="default_tracking") {?>
                        <?php $_smarty_tpl->tpl_vars['default_checked_value'] = new Smarty_variable(smarty_modifier_enum("ProductTracking::TRACK"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['default_unchecked_value'] = new Smarty_variable(smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"), null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['default_checked_value'] = new Smarty_variable(smarty_modifier_enum("YesNo::YES"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['default_unchecked_value'] = new Smarty_variable(smarty_modifier_enum("YesNo::NO"), null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['false_checkbox_value'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['false_checkbox_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_unchecked_value']->value : $tmp), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['true_checkbox_value'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['true_checkbox_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_checked_value']->value : $tmp), null, 0);?>
                    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['false_checkbox_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                    <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>($_smarty_tpl->tpl_vars['item']->value['value']==$_smarty_tpl->tpl_vars['true_checkbox_value']->value),'input_name'=>$_smarty_tpl->tpl_vars['html_name']->value,'input_value'=>$_smarty_tpl->tpl_vars['true_checkbox_value']->value,'input_id'=>$_smarty_tpl->tpl_vars['html_id']->value,'input_disabled'=>$_smarty_tpl->tpl_vars['disable_input']->value), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::SELECTBOX")) {?>
                    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value']===$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::RADIOGROUP")) {?>
                    <div class="select-field" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <label for="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio">
                                <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value']===$_smarty_tpl->tpl_vars['k']->value) {?>checked="checked"<?php }?> id="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                            </label>
                        <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                            <?php echo $_smarty_tpl->__("no_items");?>

                        <?php } ?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::MULTIPLE_SELECT")) {?>
                    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" multiple="multiple" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value]===smarty_modifier_enum("YesNo::YES")) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                    <?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::MULTIPLE_CHECKBOXES")) {?>
                    <div class="select-field" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="N" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <label for="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                                <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value]==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                            </label>
                        <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                            <?php echo $_smarty_tpl->__("no_items");?>

                        <?php } ?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::COUNTRY")) {?>
                    <select class="cm-country cm-location-sw-billing" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php $_smarty_tpl->tpl_vars['countries'] = new Smarty_variable(fn_get_simple_countries(''), null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value===$_smarty_tpl->tpl_vars['item']->value['value']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::STATE")) {?>
                    <select class="cm-state cm-location-sw-billing" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                    </select>
                    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" size="32" maxlength="64" disabled="disabled" class="cm-state cm-location-sw-billing hidden" />
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::FILE")) {?>
                    <div class="input-append">
                        <input id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" size="30" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <button id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="button" class="btn" onclick="Tygh.fileuploader.init('box_server_upload', this.id);" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->__("browse");?>
</button>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::MULTIPLE_CHECKBOXES_FOR_SELECTBOX")) {?>
                    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <label for="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                                <input type="checkbox" class="cm-combo-checkbox" id="variant_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value]===smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                            </label>
                        <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                            <?php echo $_smarty_tpl->__("no_items");?>

                        <?php } ?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::SELECTBOX_WITH_SOURCE")) {?>
                    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combo-select" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value']===$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                <?php } else { ?>
                    <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::NUMBER")) {?> cm-value-integer<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']===smarty_modifier_enum("SettingTypes::PHONE")) {?> cm-mask-phone<?php }?>" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['placeholder']->value) {?>placeholder="<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['placeholder']->value);?>
"<?php }?> />
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field_extra_description']->value) {?>
                    <p><?php if ($_smarty_tpl->tpl_vars['field_extra_link']->value) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['field_extra_link']->value), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php }
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_extra_description']->value);
if ($_smarty_tpl->tpl_vars['field_extra_link']->value) {?></a><?php }?></p>
                <?php }?>
                <div class="right update-for-all">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['item']->value['update_for_all'],'object_id'=>$_smarty_tpl->tpl_vars['item']->value['object_id'],'name'=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]",'hide_element'=>$_smarty_tpl->tpl_vars['html_id']->value), 0);?>

                </div>
            </div>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']==smarty_modifier_enum("SettingTypes::SELECTABLE_BOX")) {?>
        <div class="control-group">
            <?php echo $_smarty_tpl->getSubTemplate ("common/selectable_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addon'=>$_smarty_tpl->tpl_vars['section']->value,'name'=>$_smarty_tpl->tpl_vars['html_name']->value,'id'=>$_smarty_tpl->tpl_vars['html_id']->value,'fields'=>$_smarty_tpl->tpl_vars['item']->value['variants'],'selected_fields'=>$_smarty_tpl->tpl_vars['item']->value['value']), 0);?>

        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['total']->value===$_smarty_tpl->tpl_vars['index']->value&&Smarty::$_smarty_vars['capture']['sw_header_first']==="true") {?>
    </fieldset>
</div>
<?php }?>
<?php }} ?>

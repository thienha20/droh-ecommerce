<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:12:00
         compiled from "C:\wamp64\www\cscart\design\backend\templates\common\adaptive_object_selection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13220433416603c6c0951b25-07652798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79fe212be8917e6b03233bad798aea071178ccd3' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\common\\adaptive_object_selection.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13220433416603c6c0951b25-07652798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items_limit' => 0,
    'items' => 0,
    'item_ids' => 0,
    'storefront_id' => 0,
    'type' => 0,
    'id_field' => 0,
    'name_field' => 0,
    'load_items_url' => 0,
    'input_name' => 0,
    'class_prefix' => 0,
    'close_on_select' => 0,
    'is_disabled' => 0,
    'template_result_selector' => 0,
    'template_result_new_selector' => 0,
    'allow_add' => 0,
    'input_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c6c0964b82_03247609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c6c0964b82_03247609')) {function content_6603c6c0964b82_03247609($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.count.php';
?>

<?php $_smarty_tpl->tpl_vars['items_limit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['items_limit']->value)===null||$tmp==='' ? 5 : $tmp), null, 0);?>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value)>$_smarty_tpl->tpl_vars['items_limit']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/multiple_select_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'storefront_id'=>$_smarty_tpl->tpl_vars['storefront_id']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'id_field'=>$_smarty_tpl->tpl_vars['id_field']->value,'name_field'=>$_smarty_tpl->tpl_vars['name_field']->value,'load_items_url'=>$_smarty_tpl->tpl_vars['load_items_url']->value,'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[]",'class_prefix'=>$_smarty_tpl->tpl_vars['class_prefix']->value,'close_on_select'=>$_smarty_tpl->tpl_vars['close_on_select']->value,'is_disabled'=>$_smarty_tpl->tpl_vars['is_disabled']->value,'template_result_selector'=>$_smarty_tpl->tpl_vars['template_result_selector']->value,'template_result_new_selector'=>$_smarty_tpl->tpl_vars['template_result_new_selector']->value,'allow_add'=>$_smarty_tpl->tpl_vars['allow_add']->value), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/multiple_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'input_id'=>$_smarty_tpl->tpl_vars['input_id']->value,'item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'items'=>$_smarty_tpl->tpl_vars['items']->value,'id_field'=>$_smarty_tpl->tpl_vars['id_field']->value,'name_field'=>$_smarty_tpl->tpl_vars['name_field']->value), 0);?>

<?php }?><?php }} ?>

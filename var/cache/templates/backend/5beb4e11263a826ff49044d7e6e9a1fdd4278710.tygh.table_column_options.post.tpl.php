<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:13:23
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_bundles\hooks\product_picker\table_column_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8888033246603c713817cd0-13360396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5beb4e11263a826ff49044d7e6e9a1fdd4278710' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_bundles\\hooks\\product_picker\\table_column_options.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8888033246603c713817cd0-13360396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'extra_mode' => 0,
    'product_info' => 0,
    'item' => 0,
    'delete_id' => 0,
    'input_name' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'clone' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c713858657_81035548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c713858657_81035548')) {function content_6603c713858657_81035548($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('absolute','percent','absolute','percent'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']==="product_bundles"||$_smarty_tpl->tpl_vars['extra_mode']->value==="product_bundles")&&$_smarty_tpl->tpl_vars['product_info']->value) {?>
    <td>
        <input type="hidden" id="item_price_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_info']->value['price'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product_info']->value['price']), 0);?>

    </td>
    <td>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier_type]" class="input-medium" id="item_modifier_type_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="by_fixed" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['modifier_type']=="by_fixed") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
  (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
            <option value="by_percentage" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['modifier_type']=="by_percentage") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
        </select>
    </td>
    <td>
        <input type="hidden" class="cm-bundle-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier]" id="item_modifier_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="4" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_info']->value['modifier'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-mini">
    </td>
    <td>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['product_info']->value['discounted_price'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_info']->value['price'] : $tmp),'span_id'=>"item_discounted_price_product_bundle_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['delete_id']->value)."_"), 0);?>

    </td>
    <td>
        <input type="hidden" id="item_show_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_product_bundle_id" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
">
        <input type="checkbox" id="item_show_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_product_bundle_id" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['show_on_product_page']!==smarty_modifier_enum("YesNo::NO")) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
">
    </td>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']==="product_bundles"||$_smarty_tpl->tpl_vars['extra_mode']->value==="product_bundles")&&$_smarty_tpl->tpl_vars['clone']->value) {?>
    <td>
        <input type="text" class="hidden" id="item_price_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
price<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('span_id'=>"item_display_price_product_bundle_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_bundle_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."_"), 0);?>

    </td>
    <td>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier_type]" class="input-medium" id="item_modifier_type_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="by_fixed"><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
            <option value="by_percentage"><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
        </select>
    </td>
    <td>
        <input type="text" class="cm-bundle-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
 hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" class="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier]" id="item_modifier_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" size="4" value="0" class="input-mini">
    </td>
    <td>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('span_id'=>"item_discounted_price_product_bundle_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_bundle_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."_"), 0);?>

    </td>
    <td>
        <input type="checkbox" id="item_show_product_bundle_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" checked="checked">
    </td>
<?php }?><?php }} ?>

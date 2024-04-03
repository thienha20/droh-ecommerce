<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:46:35
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\warehouses\hooks\store_locator\content_detailed.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177072914566078b1b874233-74582205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1402d7d6eab37d9327e0b76836d302ece117334c' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\warehouses\\hooks\\store_locator\\content_detailed.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '177072914566078b1b874233-74582205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'store_location' => 0,
    'store_types' => 0,
    'type_code' => 0,
    'store_type' => 0,
    'type_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078b1b881794_46909171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078b1b881794_46909171')) {function content_66078b1b881794_46909171($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.store_type'));
?>
<div class="control-group">
    <label for="elm_name" class="cm-required control-label"><?php echo $_smarty_tpl->__("warehouses.store_type");?>
:</label>
    <div class="controls">
        <input type="hidden" name="store_location_data[store_type]" value="P">
        <select name="store_location_data[store_type]" id="store_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->tpl_vars['store_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['store_location']->value['store_type'])===null||$tmp==='' ? $_REQUEST['store_type'] : $tmp), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['type_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_name']->key => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['type_code']->value = $_smarty_tpl->tpl_vars['type_name']->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_code']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['type_code']->value==$_smarty_tpl->tpl_vars['store_type']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function(_, $) {
        var $selectedCompanyId = $('#company_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');
        var $storeType = $('#store_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');

        $.ceEvent('on', 'ce.commoninit', function () {
            if ($selectedCompanyId.val() == 0) {
                $storeType.prop('disabled', true);
                $storeType.val('P');
            } else {
                $storeType.prop('disabled', null);
            }
        });

        $selectedCompanyId.change(function () {
            if ($selectedCompanyId.val() == 0) {
                $storeType.prop('disabled', true);
                $storeType.val('P');
            } else {
                $storeType.prop('disabled', null);
            }
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>

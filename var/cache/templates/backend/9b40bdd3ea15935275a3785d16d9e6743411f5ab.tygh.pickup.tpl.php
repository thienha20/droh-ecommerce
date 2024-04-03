<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:49:14
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\store_locator\views\store_locator\components\context_menu\pickup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20166796766078bba611307-25125945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b40bdd3ea15935275a3785d16d9e6743411f5ab' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\store_locator\\views\\store_locator\\components\\context_menu\\pickup.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20166796766078bba611307-25125945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'destinations' => 0,
    'destination' => 0,
    'params' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078bba621f65_23342723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078bba621f65_23342723')) {function content_66078bba621f65_23342723($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('reset','apply'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array('default', "content", null); ob_start(); ?>
    <div class="bulk-edit-inner__header">
        <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>
</span>
    </div>

    <div class="bulk-edit-inner__body">
        <div class="bulk-edit-inner__input-group">
            <select class="input-medium input-hidden"
                    data-ca-bulkedit-pickup-changer
            >
                <option value="0"> -- </option>
                <?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn bulkedit-pickup-cancel"
                role="button"
                data-ca-bulkedit-pickup-cancel
                data-ca-bulkedit-pickup-reset-changer="[data-ca-bulkedit-pickup-changer]"
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-pickup-update"
                role="button"
                data-ca-bulkedit-pickup-update
                data-ca-bulkedit-pickup-values="[data-ca-bulkedit-pickup-changer]"
                data-ca-bulkedit-pickup-target-form="[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
]"
                data-ca-bulkedit-pickup-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-pickup-dispatch="store_locator.m_update_pickup"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("components/context_menu/items/dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'id'=>"pickup"), 0);?>

<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:21:47
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\store_locator\hooks\destinations\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20778004406603c90b023936-01411825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81af62f31e80e8a6286abe36a86e2de2f1bf740d' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\store_locator\\hooks\\destinations\\tabs_content.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20778004406603c90b023936-01411825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pickup_locations' => 0,
    'store' => 0,
    'destination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c90b0430f8_18627773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c90b0430f8_18627773')) {function content_6603c90b0430f8_18627773($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.name','store_locator.main_destination','store_locator.name','store_locator.main_destination','no_data'));
?>
<div class="hidden" id="content_pickup">
    <?php if ($_smarty_tpl->tpl_vars['pickup_locations']->value) {?>
        <div id="pickup_list">
            <div class="table-responsive-wrapper">
                <table class="table table--relative table-responsive" data-ca-sortable="true" data-ca-sort-list="[[0, 0]]">
                    <thead>
                    <tr>
                        <th data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("store_locator.name");?>
</th>
                        <th data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("store_locator.main_destination");?>
</th>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:tab_list_extra_th")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:tab_list_extra_th"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:tab_list_extra_th"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pickup_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                        <tr class="cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['store']->value['status']), ENT_QUOTES, 'UTF-8');?>
">
                            <td data-th="<?php echo $_smarty_tpl->__("store_locator.name");?>
">
                                <a href="<?php echo htmlspecialchars(fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['store']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                   class="row-status"
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['store']->value), 0);?>

                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("store_locator.main_destination");?>
"
                            >
                                <?php if ($_smarty_tpl->tpl_vars['store']->value['main_destination_id']==$_smarty_tpl->tpl_vars['destination']->value['destination_id']) {?>
                                    <span class="row-status">
                                        <?php echo htmlspecialchars(fn_get_destination_name($_smarty_tpl->tpl_vars['store']->value['main_destination_id']), ENT_QUOTES, 'UTF-8');?>

                                    </span>
                                <?php } else { ?>
                                    <a href="<?php echo htmlspecialchars(fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['store']->value['main_destination_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                       class="row-status"
                                    ><?php echo htmlspecialchars(fn_get_destination_name($_smarty_tpl->tpl_vars['store']->value['main_destination_id']), ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php }?>
                            </td>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:tab_list_extra_td")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:tab_list_extra_td"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:tab_list_extra_td"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
</div>
<?php }} ?>

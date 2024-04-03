<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:20:57
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\countries\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13992472086603c8d9133672-72615941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1109d84c06b2b9933ec718f7050dd4aa31bc957' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\countries\\manage.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13992472086603c8d9133672-72615941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'has_permission' => 0,
    'country_statuses' => 0,
    'countries' => 0,
    'country' => 0,
    'has_permission_update_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c8d91a5226_35630072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c8d91a5226_35630072')) {function content_6603c8d91a5226_35630072($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_block_component')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.component.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('code','code','code','country','region','status','code','code','code','country','region','status','countries'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="countries_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

<?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("countries","m_activate","admin","POST",array("table"=>"countries"))&&fn_check_permissions("countries","m_disable","admin","POST",array("table"=>"countries")), null, 0);?>
<?php $_smarty_tpl->tpl_vars['country_statuses'] = new Smarty_variable(fn_get_default_statuses('',false), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<div data-ca-longtap>
    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"countries:context_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"countries:context_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"context_menu.context_menu",'object'=>"countries",'form'=>"countries_form")); $_block_repeat=true; echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>"countries",'form'=>"countries_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"context_menu.context_menu",'object'=>"countries",'form'=>"countries_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"countries:context_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <div class="table-responsive-wrapper longtap-selection">
        <table width="100%" class="table table-middle table--relative table-responsive">
        <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
            <tr>
                <th width="6%" class="left mobile-hide">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? ($_smarty_tpl->tpl_vars['country_statuses']->value) : ''), 0);?>


                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("code");?>
</th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("code");?>
&nbsp;A3</th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("code");?>
&nbsp;N3</th>
                <th><?php echo $_smarty_tpl->__("country");?>
</th>
                <th width="10%" class="center"><?php echo $_smarty_tpl->__("region");?>
</th>
                <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
        <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['country']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
            <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
        <td width="6%" class="center">
                
                <input type="checkbox" name="countries[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['country']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
            </td>  
            <td width="10%" class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td width="10%" class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
&nbsp;A3">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code_A3'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td width="10%" class="center row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
&nbsp;N3">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code_N3'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td data-th="<?php echo $_smarty_tpl->__("country");?>
"> 
                <input type="text" name="country_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>
][country]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['country'], ENT_QUOTES, 'UTF-8');?>
" class="span4 input-hidden" />
            </td>
            <td width="10%" class="center row-status" data-th="<?php echo $_smarty_tpl->__("region");?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['region'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                <?php $_smarty_tpl->tpl_vars['has_permission_update_status'] = new Smarty_variable(fn_check_permissions("tools","update_status","admin","GET",array("table"=>"countries")), null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['country']->value['code'],'status'=>$_smarty_tpl->tpl_vars['country']->value['status'],'hidden'=>'','object_id_name'=>"code",'table'=>"countries",'non_editable'=>!$_smarty_tpl->tpl_vars['has_permission_update_status']->value), 0);?>

            </td>
        </tr>
        <?php } ?>
        </table>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[countries.m_update]",'but_role'=>"submit-link",'but_target_form'=>"countries_form"), 0);?>



    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
 

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("countries"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>

<?php }} ?>

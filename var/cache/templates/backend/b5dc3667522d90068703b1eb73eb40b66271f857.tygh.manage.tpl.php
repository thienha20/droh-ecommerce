<?php /* Smarty version Smarty-3.1.21, created on 2024-03-28 10:38:17
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\droh_common\views\district\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23805241066051e2ef34711-89960762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5dc3667522d90068703b1eb73eb40b66271f857' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\droh_common\\views\\district\\manage.tpl',
      1 => 1711611494,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '23805241066051e2ef34711-89960762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66051e2f06cef8_83295964',
  'variables' => 
  array (
    'districts' => 0,
    'district' => 0,
    'no_hide_input' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66051e2f06cef8_83295964')) {function content_66051e2f06cef8_83295964($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position','name','code','status','edit','delete','no_data','add_district','district'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/droh_common/views/district/components/districts_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"district.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="districts_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />

<?php if ($_smarty_tpl->tpl_vars['districts']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>

<table class="table table-middle">
<thead>
<tr>
    <th width="1%" class="left">
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"cm-no-hide-input"), 0);?>
</th>
    <th><?php echo $_smarty_tpl->__("position");?>
</th>
	<th><?php echo $_smarty_tpl->__("name");?>
</th>
    <th><?php echo $_smarty_tpl->__("code");?>
</th>
    
    <th width='6%'>&nbsp;</th>
    <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['district'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['district']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['districts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['district']->key => $_smarty_tpl->tpl_vars['district']->value) {
$_smarty_tpl->tpl_vars['district']->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['district']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
    
    <td class="left">
        <input type="checkbox" name="district_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['district_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td><input type="text" name="district_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['district_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="span2 input-hidden" /></td>
    
	<td>
       <input type="text" name="district_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['district_id'], ENT_QUOTES, 'UTF-8');?>
][name]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="span4 input-hidden" />
    </td>
    <td><input type="text" name="district_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['district_id'], ENT_QUOTES, 'UTF-8');?>
][code]" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['code'], ENT_QUOTES, 'UTF-8');?>
" class="span2 input-hidden" /></td>
    
    <td>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"district.update?district_id=".((string)$_smarty_tpl->tpl_vars['district']->value['district_id'])));?>
</li>        
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-post",'text'=>$_smarty_tpl->__("delete"),'href'=>"district.delete?district_id=".((string)$_smarty_tpl->tpl_vars['district']->value['district_id'])));?>
</li>        
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <td class="right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['district']->value['district_id'],'status'=>$_smarty_tpl->tpl_vars['district']->value['status'],'hidden'=>false,'object_id_name'=>"district_id",'table'=>"districts",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value)." dropleft"), 0);?>

    </td>
</tr>
<?php } ?>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[district.m_update]",'but_role'=>"submit-link",'but_target_form'=>"districts_form"), 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>        
        <?php if ($_smarty_tpl->tpl_vars['districts']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[district.m_delete]",'form'=>"districts_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"district.add",'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_district"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("district"),'content_id'=>"manage_district",'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>


<?php }} ?>

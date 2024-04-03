<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 09:52:53
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\droh_common\views\district\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123074019466066545dc54b7-84062155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be9d5381ad1214c00128ff2b7c5e4dc7c37c74f' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\droh_common\\views\\district\\update.tpl',
      1 => 1711598003,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '123074019466066545dc54b7-84062155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'district' => 0,
    'allow_save' => 0,
    'id' => 0,
    'countries' => 0,
    'c' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66066545ec28e2_71300949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66066545ec28e2_71300949')) {function content_66066545ec28e2_71300949($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('district','code','country','state','position_short','new_district','editing_district'));
?>
<?php if ($_smarty_tpl->tpl_vars['district']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['district']->value['district_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['district']->value,"district"), null, 0);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php echo smarty_function_script(array('src'=>"js/addons/droh_common/func_admin.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type='text/javascript'>var state_code=true;$(function(){$.local_load_all($('#country_id').val(),$('#temp_city').val(),0,"code")})<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit  <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" name="district_form" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
<input type="hidden" class="cm-no-hide-input" name="district_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<div id="content_general">
    <div class="control-group">
        <label for="elm_district_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("district");?>
</label>
        <div class="controls">
        <input type="text" name="district_data[name]" id="elm_district_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['name'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" /></div>
    </div>
    
    <div class="control-group">
        <label for="elm_district_code" class="control-label"><?php echo $_smarty_tpl->__("code");?>
</label>
        <div class="controls">
        <input type="text" name="district_data[code]" id="elm_district_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['code'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" /></div>
    </div>

    <div class="control-group">
        <label class="control-label cm-required" for='country_id'><?php echo $_smarty_tpl->__("country");?>
</label>
        <div class="controls"><select id="country_id" name="district_data[country_code]">
            <option value="">--</option>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['district']->value['country_code']==$_smarty_tpl->tpl_vars['c']->value['code']) {?>selected='selected'<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['country'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            </select></div>
    </div>
            
    <div class="control-group">
        <label class="control-label cm-required" for='state_id'><?php echo $_smarty_tpl->__("state");?>
</label>
        <div class="controls"><select name="district_data[state_code]" id='state_id'>
            <option value="">--</option>
            </select>
        </div>
        <input type='hidden' value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['district']->value['state_code'], ENT_QUOTES, 'UTF-8');?>
' id="temp_city" />
    </div>

    <div class="control-group">
        <label for="elm_district_position" class="control-label"><?php echo $_smarty_tpl->__("position_short");?>
</label>
        <div class="controls">
            <input type="text" name="district_data[position]" id="elm_district_position" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['district']->value['position'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="3"/>
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"district_data[status]",'id'=>"elm_district_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['district']->value,'hidden'=>false), 0);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"district_form",'but_name'=>"dispatch[district.update]"), 0);?>

    <?php } else { ?>
        <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
            <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
            <?php $_smarty_tpl->tpl_vars["hide_second_button"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[district.update]",'but_role'=>"submit-link",'but_target_form'=>"district_form",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php }?>
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


<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("new_district"), null, 0);?>
<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->__("editing_district");
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['district']->value['name']), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>



<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:12:44
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\profiles\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16838142686603c6ec5a70b9-34284191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682f8e2fadbeb88cdf846cc249653fe0d0b8e19f' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\profiles\\update.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16838142686603c6ec5a70b9-34284191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'runtime' => 0,
    'id' => 0,
    'auth' => 0,
    'hide_inputs' => 0,
    'selected_section' => 0,
    'user_type' => 0,
    'zero_company_id_name_lang_var' => 0,
    'is_activated_free' => 0,
    'settings' => 0,
    'helpdesk_disconnect_url' => 0,
    'helpdesk_connect_url' => 0,
    'profile_fields' => 0,
    'navigation' => 0,
    'usergroups' => 0,
    'usergroup' => 0,
    'ug_status' => 0,
    'hide_for_vendor' => 0,
    'show_api_tab' => 0,
    'hide_api_checkbox' => 0,
    'new_api_key' => 0,
    '_user_desc' => 0,
    'redirect_url' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c6ec855344_58068188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c6ec855344_58068188')) {function content_6603c6ec855344_58068188($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('helpdesk_account.helpdesk_account','helpdesk_account.activate_free_license_message','activate','helpdesk_account.helpdesk_account','helpdesk_account.signed_in_message','helpdesk_account.sign_out','helpdesk_account.signed_out_message','helpdesk_account.sign_in','contact_information','user_profile_info','text_multiprofile_notice','billing_address','shipping_address','shipping_address','usergroup','status','usergroup','status','notify_user','no_data','api_access_for_user','api_key','generate_new_api_key','please_copy_api_key','new_profile','view_all_orders','log_in_as_user','text_anonymize_question','anonymize','delete','create','notify_user'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['user_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form name="profile_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="admin-content-external-form form-horizontal form-edit <?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['user_data']->value['company_id']!=$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['id']->value!=$_smarty_tpl->tpl_vars['auth']->value['user_id'])||$_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>">
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(false, null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']==$_smarty_tpl->tpl_vars['auth']->value['user_type']&&$_smarty_tpl->tpl_vars['user_data']->value['is_root']=='Y'&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']!=$_smarty_tpl->tpl_vars['auth']->value['user_id']&&(!$_smarty_tpl->tpl_vars['user_data']->value['company_id']||$_smarty_tpl->tpl_vars['user_data']->value['company_id']==$_smarty_tpl->tpl_vars['auth']->value['company_id'])) {?>
        <?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php if (fn_allowed_for("ULTIMATE")&&!fn_allow_save_object($_smarty_tpl->tpl_vars['user_data']->value,"users")&&$_smarty_tpl->tpl_vars['id']->value&&!Tygh\SmartyEngine\Filters::smartyHandlerProcessing($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']!=$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php if (fn_allowed_for("MULTIVENDOR")&&(!fn_allow_save_object($_smarty_tpl->tpl_vars['user_data']->value,"users")||$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&($_REQUEST['user_type']=='C'||fn_string_not_empty($_smarty_tpl->tpl_vars['user_data']->value['company_id'])&&$_smarty_tpl->tpl_vars['user_data']->value['company_id']!=$_smarty_tpl->tpl_vars['runtime']->value['company_id']))&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']!=$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" class="cm-no-hide-input" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" class="cm-no-hide-input" name="user_type" value="<?php echo htmlspecialchars($_REQUEST['user_type'], ENT_QUOTES, 'UTF-8');?>
" />

    <div id="content_general">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:general_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:general_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if ((fn_allowed_for("ULTIMATE")||$_smarty_tpl->tpl_vars['user_type']->value=="V")&&$_smarty_tpl->tpl_vars['id']->value!=$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>

                <?php $_smarty_tpl->tpl_vars['zero_company_id_name_lang_var'] = new Smarty_variable(false, null, 0);?>
                <?php if (fn_allowed_for("ULTIMATE")&&fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_type']->value)) {?>
                    <?php $_smarty_tpl->tpl_vars['zero_company_id_name_lang_var'] = new Smarty_variable('all_vendors', null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"user_data[company_id]",'id'=>"user_data_company_id",'selected'=>$_smarty_tpl->tpl_vars['user_data']->value['company_id'],'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value,'disable_company_picker'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0);?>


            <?php } else { ?>
                <input type="hidden" name="user_data[company_id]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['company_id'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['user_data']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")&&$_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                <?php if (fn_allowed_for("ULTIMATE:FREE")&&$_smarty_tpl->tpl_vars['is_activated_free']->value!==smarty_modifier_enum("YesNo::YES")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['is_root']===smarty_modifier_enum("YesNo::YES")&&!$_smarty_tpl->tpl_vars['auth']->value['company_id']&&$_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
                        <div class="control-group">
                            <label for="helpdesk_account_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("helpdesk_account.helpdesk_account");?>
</label>
                            <div class="controls">
                                <p><?php echo $_smarty_tpl->__("helpdesk_account.activate_free_license_message");?>
</p>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('btn_href'=>"helpdesk_connector.activate_license_mail_request",'btn_text'=>$_smarty_tpl->__("activate"),'btn_class'=>"cm-ajax"), 0);?>

                            </div>
                        </div>
                    <?php }?>
                <?php } else { ?>
                    <div class="control-group">
                        <label for="helpdesk_account_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("helpdesk_account.helpdesk_account");?>
</label>
                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['helpdesk_user_id']) {?>
                            <div class="controls">
                                <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_in_message");?>
</p>
                                <p>
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('btn_href'=>fn_url($_smarty_tpl->tpl_vars['helpdesk_disconnect_url']->value),'btn_text'=>$_smarty_tpl->__("helpdesk_account.sign_out")), 0);?>

                                </p>
                            </div>
                        <?php } else { ?>
                            <div class="controls">
                                <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_out_message");?>
</p>
                                <p>
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('btn_href'=>fn_url($_smarty_tpl->tpl_vars['helpdesk_connect_url']->value),'btn_text'=>$_smarty_tpl->__("helpdesk_account.sign_in")), 0);?>

                                </p>
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:general_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>"C",'title'=>$_smarty_tpl->__("contact_information")), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles']=="Y"&&$_smarty_tpl->tpl_vars['id']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("user_profile_info")), 0);?>

            <p class="form-note"><?php echo $_smarty_tpl->__("text_multiprofile_notice");?>
</p>
            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/multiple_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>"B",'title'=>$_smarty_tpl->__("billing_address")), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>"S",'title'=>$_smarty_tpl->__("shipping_address"),'body_id'=>"sa",'shipping_flag'=>fn_compare_shipping_billing($_smarty_tpl->tpl_vars['profile_fields']->value)), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>"S",'title'=>$_smarty_tpl->__("shipping_address"),'shipping_flag'=>false), 0);?>

        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']['usergroups']) {?>
        <div id="content_usergroups" class="cm-hide-save-button">
            <?php if ($_smarty_tpl->tpl_vars['usergroups']->value) {?>
            <div class="table-responsive-wrapper">
                <table width="100%" class="table table-middle table-responsive">
                <thead>
                <tr>
                    <th width="50%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                    <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['usergroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usergroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->key => $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->_loop = true;
?>
                    <tr>
                        <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
"><a href="<?php echo htmlspecialchars(fn_url("usergroups.manage#group".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                        <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                            <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(false, null, 0);?>
                            <?php if (!fn_check_view_permissions("usergroups.manage","POST")) {?>
                                <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(true, null, 0);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['usergroups'][$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']]) {?>
                                <?php $_smarty_tpl->tpl_vars["ug_status"] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['usergroups'][$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']]['status'], null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["ug_status"] = new Smarty_variable("F", null, 0);?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],'status'=>$_smarty_tpl->tpl_vars['ug_status']->value,'hidden'=>'','items_status'=>fn_get_predefined_statuses("profiles"),'extra'=>"&user_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'update_controller'=>"usergroups",'notify'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value), 0);?>

                        </td>
                    </tr>
                <?php } ?>
                </table>
            </div>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
        </div>
    <?php }?>

    <div id="content_addons">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:detailed_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:detailed_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:detailed_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['show_api_tab']->value) {?>
        <div id="content_api">
            <?php if (!$_smarty_tpl->tpl_vars['hide_api_checkbox']->value) {?>
                <div class="control-group">
                    <label for="sw_api_container" class="control-label"><?php echo $_smarty_tpl->__("api_access_for_user");?>
</label>
                    <div class="controls">
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['user_data']->value['api_key']) {?><?php echo "false";?><?php } else { ?><?php echo "true";?><?php }
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>$_smarty_tpl->tpl_vars['user_data']->value['api_key']!='','input_id'=>"sw_api_container",'input_name'=>"user_api_status",'input_value'=>smarty_modifier_enum("YesNo::YES"),'input_attrs'=>array("data-ca-api-key-container-id"=>"api_container","data-ca-show-api-key-warning"=>$_tmp1)), 0);?>

                    </div>
                </div>
            <?php }?>

            <div id="api_container"<?php if ($_smarty_tpl->tpl_vars['user_data']->value['api_key']==='') {?> class="hidden"<?php }?>>
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("api_key");?>
</label>
                    <div class="controls">
                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['api_key']) {?>
                            <?php ob_start();
echo $_smarty_tpl->__("generate_new_api_key");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_id'=>"refresh_api_key",'but_target'=>"api_key_holder",'but_text'=>$_tmp2,'but_meta'=>"btn-indent"), 0);?>

                            <input type="text" class="input-large" name="user_data[raw_api_key]" value="*************************" disabled id="api_key_holder"/>
                        <?php } else { ?>
                            <input type="text" class="input-large js-new-api-key" name="user_data[raw_api_key]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_api_key']->value, ENT_QUOTES, 'UTF-8');?>
" readonly="readonly"  disabled />
                        <?php }?>
                        <div class="well well-small help-block<?php if ($_smarty_tpl->tpl_vars['user_data']->value['api_key']) {?> hidden<?php }?>">
                            <?php echo $_smarty_tpl->__("please_copy_api_key");?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php echo smarty_function_script(array('src'=>"js/tygh/backend/api_access.js"),$_smarty_tpl);?>

    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if (!fn_allow_save_object($_smarty_tpl->tpl_vars['user_data']->value,"users")&&$_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']!=$_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
        <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_smarty_tpl->tpl_vars['selected_section']->value,'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['_user_desc'] = new Smarty_variable(fn_get_user_type_description($_smarty_tpl->tpl_vars['user_type']->value), null, 0);?>

    <?php ob_start();
echo $_smarty_tpl->__("new_profile");
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_tmp3.": ".((string)$_smarty_tpl->tpl_vars['_user_desc']->value), null, 0);?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['firstname']) {?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_data']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['lastname']), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['b_firstname']) {?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_data']->value['b_firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['b_lastname']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_data']->value['email']), null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['redirect_url'] = new Smarty_variable("profiles.manage%26user_type=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_type']), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profile:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profile:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profile_orders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profile:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:update_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:update_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C") {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_all_orders"),'href'=>"orders.manage?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)));?>
</li>
        <?php }?>
        <?php if (fn_user_need_login($_smarty_tpl->tpl_vars['user_data']->value['user_type'])&&(!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['company_id']==$_smarty_tpl->tpl_vars['auth']->value['company_id'])&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']!=$_smarty_tpl->tpl_vars['auth']->value['user_id']&&!($_smarty_tpl->tpl_vars['user_data']->value['user_type']=='A'&&$_smarty_tpl->tpl_vars['user_data']->value['is_root']=='Y'&&!$_smarty_tpl->tpl_vars['user_data']->value['company_id'])) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("log_in_as_user"),'href'=>"profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)));?>
</li>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"update_tools_list:anonymization")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"update_tools_list:anonymization"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']===smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
                    <li><?php ob_start();
echo $_smarty_tpl->__("text_anonymize_question");
$_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("anonymize"),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp4),'href'=>"profiles.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"update_tools_list:anonymization"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <li class="divider"></li>
            <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profiles.delete?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_url']->value),'method'=>"POST"));?>
</li>
            <?php }?>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:update_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value&&trim(Smarty::$_smarty_vars['capture']['tools_list'])!=='') {?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
<div class="btn-group btn-hover dropleft">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:update_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:update_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"dropdown-toggle",'but_role'=>"submit-link",'but_name'=>"dispatch[profiles.".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])."]",'but_target_form'=>"profile_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("create"),'but_meta'=>"dropdown-toggle",'but_role'=>"submit-link",'but_name'=>"dispatch[profiles.".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])."]",'but_target_form'=>"profile_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        <?php }?>
        <ul class="dropdown-menu">
            <li><a><input type="checkbox" name="notify_customer" value="Y" checked="checked"  id="notify_customer" />
                <?php echo $_smarty_tpl->__("notify_user");?>
</a></li>
        </ul>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:update_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

</form>
<?php }} ?>

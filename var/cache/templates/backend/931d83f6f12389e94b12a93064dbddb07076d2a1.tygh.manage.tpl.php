<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:00:10
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\profiles\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9519064426603c3fa4294d1-76587199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931d83f6f12389e94b12a93064dbddb07076d2a1' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\profiles\\manage.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9519064426603c3fa4294d1-76587199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'can_view_orders' => 0,
    'users' => 0,
    'no_hide_input' => 0,
    'person_name_col_width' => 0,
    'email_col_width' => 0,
    'search' => 0,
    'user' => 0,
    'allow_save' => 0,
    'auth' => 0,
    'settings' => 0,
    'orders_stats' => 0,
    'settled_statuses' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
    'return_current_url' => 0,
    'list_extra_links' => 0,
    'user_edit_link' => 0,
    'u_id' => 0,
    'popup_additional_class' => 0,
    'non_editable' => 0,
    'can_add_user' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c3faa20376_97814524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c3faa20376_97814524')) {function content_6603c3faa20376_97814524($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_format_price')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.format_price.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('person_name','phone','type','orders','status','view','id','person_name','email','last_login','phone','orders','type','administrator','vendor_administrator','customer','affiliate','view_all_orders','log_in_as_user','text_anonymize_question','anonymize','edit','delete','status','notify_user','no_data','users','add_user'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable("cm-no-hide-input", null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="userlist_form" id="userlist_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!fn_allowed_for("ULTIMATE")) {?>cm-hide-inputs<?php }?>">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="user_type" value="<?php echo htmlspecialchars($_REQUEST['user_type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php $_smarty_tpl->tpl_vars['person_name_col_width'] = new Smarty_variable($_REQUEST['user_type']==smarty_modifier_enum("UserTypes::CUSTOMER")&&$_smarty_tpl->tpl_vars['can_view_orders']->value ? "15%" : "23%", null, 0);?>
<?php $_smarty_tpl->tpl_vars['email_col_width'] = new Smarty_variable($_REQUEST['user_type']==smarty_modifier_enum("UserTypes::CUSTOMER")&&$_smarty_tpl->tpl_vars['can_view_orders']->value ? "15%" : "22%", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("profiles_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden">
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
            <tr>
                <th class="center <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide table__check-items-column">
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>fn_get_default_status_filters('',true),'meta'=>"table__check-items"), 0);?>


                    <?php if (fn_check_view_permissions("orders.manage","GET")||fn_check_view_permissions("profiles.export_range","POST")||fn_check_permissions("profiles","m_delete","admin","POST",array("user_type"=>$_REQUEST['user_type']))||(fn_check_permissions("profiles","m_activate","admin","POST",array("user_type"=>$_REQUEST['user_type']))&&fn_check_permissions("profiles","m_disable","admin","POST",array("user_type"=>$_REQUEST['user_type'])))) {?>
                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            data-ca-bulkedit-dispatch-parameter="user_ids[]"
                        />
                    <?php }?>
                </th>
                <th width="10%" class="nowrap">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"id"), 0);?>

                </th>
                <th width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['person_name_col_width']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"name",'text'=>$_smarty_tpl->__("person_name")), 0);?>

                </th>
                <th width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email_col_width']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"email"), 0);?>

                </th>
                <th width="14%">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"last_login"), 0);?>

                </th>
                <th width="15%">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->__("phone")), 0);?>

                </th>
                <?php if (!$_smarty_tpl->tpl_vars['search']->value['user_type']) {?>
                    <th width="14%">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->__("type")), 0);?>

                    </th>
                <?php }?>
                <?php if ($_REQUEST['user_type']===smarty_modifier_enum("UserTypes::CUSTOMER")&&$_smarty_tpl->tpl_vars['can_view_orders']->value) {?>
                    <th width="17%">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->__("orders")), 0);?>

                    </th>
                <?php }?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <th width="5%" class="right mobile-hide">
                    &nbsp;
                </th>
                <th width="9%" class="right">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"status",'title'=>$_smarty_tpl->__("status")), 0);?>

                </th>

            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>

            <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['user']->value,"users"), null, 0);?>

            <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value&&!defined("RESTRICTED_ADMIN")&&$_smarty_tpl->tpl_vars['auth']->value['is_root']!='Y') {?>
                <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['popup_additional_class'] = new Smarty_variable('', null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['allow_save']->value||defined("RESTRICTED_ADMIN")||$_smarty_tpl->tpl_vars['auth']->value['is_root']=='Y') {?>
                <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['popup_additional_class'] = new Smarty_variable("cm-no-hide-input", null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['popup_additional_class'] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable('', null, 0);?>
            <?php }?>

            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['user']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target <?php if ((fn_allowed_for("ULTIMATE")&&(!$_smarty_tpl->tpl_vars['allow_save']->value||($_smarty_tpl->tpl_vars['user']->value['user_id']==$_SESSION['auth']['user_id'])))) {?> cm-hide-inputs<?php }?>"
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <td class="center <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide table__check-items-cell">
                    <input type="checkbox" name="user_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['user']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                <td width="10%" data-th="<?php echo $_smarty_tpl->__("id");?>
" class="table__first-column"><a class="row-status" href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_smarty_tpl->tpl_vars['user']->value['user_type'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                <td width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['person_name_col_width']->value, ENT_QUOTES, 'UTF-8');?>
" class="row-status wrap" data-th="<?php echo $_smarty_tpl->__("person_name");?>
"><?php if ($_smarty_tpl->tpl_vars['user']->value['firstname']||$_smarty_tpl->tpl_vars['user']->value['lastname']) {?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_smarty_tpl->tpl_vars['user']->value['user_type'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?>-<?php }
if ($_smarty_tpl->tpl_vars['user']->value['company_id']) {
echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['user']->value), 0);
}?></td>
                <td width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email_col_width']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("email");?>
"><a class="row-status" href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['user']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                <td width="14%" class="row-status" data-th="<?php echo $_smarty_tpl->__("last_login");?>
"><?php if ($_smarty_tpl->tpl_vars['user']->value['last_login']) {
echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['last_login'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');
} else {
}?></td>
                <td width="15%" class="row-status" data-th="<?php echo $_smarty_tpl->__("phone");?>
">
                    <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></a>
                </td>
                <?php if ($_REQUEST['user_type']==smarty_modifier_enum("UserTypes::CUSTOMER")&&$_smarty_tpl->tpl_vars['can_view_orders']->value) {?>
                    <td width="17%" class="row-status" data-th="<?php echo $_smarty_tpl->__("orders");?>
"><a href="<?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user']->value['user_id']]['total_orders'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
</a> / <a href="<?php ob_start();
echo htmlspecialchars(http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&".$_tmp1), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user']->value['user_id']]['total_settled_orders'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
</a> / <a href="<?php ob_start();
echo htmlspecialchars(http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&".$_tmp2), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @smarty_modifier_format_price($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user']->value['user_id']]['total_spend'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]))===null||$tmp==='' ? 0 : $tmp);?>
</a></td>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['search']->value['user_type']) {?>
                <td width="14%" class="row-status" data-th="<?php echo $_smarty_tpl->__("type");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="A") {
echo $_smarty_tpl->__("administrator");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="V") {
echo $_smarty_tpl->__("vendor_administrator");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {
echo $_smarty_tpl->__("customer");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="P") {
echo $_smarty_tpl->__("affiliate");
}?>
                </td>
                <?php }?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <td width="5%" class="right nowrap mobile-hide">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->tpl_vars['list_extra_links'] = new Smarty_variable(false, null, 0);?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_all_orders"),'href'=>"orders.manage?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])));?>
</li>
                                <?php $_smarty_tpl->tpl_vars['list_extra_links'] = new Smarty_variable(true, null, 0);?>
                            <?php }?>
                            <?php if (fn_user_need_login($_smarty_tpl->tpl_vars['user']->value['user_type'])&&(!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||fn_check_permission_manage_profiles($_smarty_tpl->tpl_vars['user']->value['user_type']))&&$_smarty_tpl->tpl_vars['user']->value['user_id']!=$_smarty_tpl->tpl_vars['auth']->value['user_id']&&!($_smarty_tpl->tpl_vars['user']->value['user_type']===$_smarty_tpl->tpl_vars['auth']->value['user_type']&&$_smarty_tpl->tpl_vars['user']->value['is_root']===smarty_modifier_enum("YesNo::YES")&&(!$_smarty_tpl->tpl_vars['user']->value['company_id']||$_smarty_tpl->tpl_vars['user']->value['company_id']==$_smarty_tpl->tpl_vars['auth']->value['company_id']))) {?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("log_in_as_user"),'href'=>"profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])));?>
</li>
                                <?php $_smarty_tpl->tpl_vars['list_extra_links'] = new Smarty_variable(true, null, 0);?>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"list_extra_links:anonymization")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"list_extra_links:anonymization"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']===smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
                                    <li><?php ob_start();
echo $_smarty_tpl->__("text_anonymize_question");
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("anonymize"),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp3),'href'=>"profiles.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'method'=>"POST"));?>
</li>
                                <?php }?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"list_extra_links:anonymization"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php if ($_smarty_tpl->tpl_vars['list_extra_links']->value) {?>
                            <li class="divider"></li>
                        <?php }?>

                        <?php if ($_REQUEST['user_type']) {?>
                            <?php $_smarty_tpl->tpl_vars['user_edit_link'] = new Smarty_variable("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_REQUEST['user_type']), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['user_edit_link'] = new Smarty_variable("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_smarty_tpl->tpl_vars['user']->value['user_type']), null, 0);?>
                        <?php }?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>$_smarty_tpl->tpl_vars['user_edit_link']->value));?>
</li>

                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_delete", null, null); ob_start(); ?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profiles.delete?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'method'=>"POST"));?>
</li>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['user_id']!=$_SESSION['auth']['user_id']) {?>
                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!($_smarty_tpl->tpl_vars['user']->value['user_type']=="A"&&$_smarty_tpl->tpl_vars['user']->value['is_root']=="Y")) {?>
                                <?php echo Smarty::$_smarty_vars['capture']['tools_delete'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                <?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['user']->value['user_type']=="V"&&$_smarty_tpl->tpl_vars['user']->value['is_root']=="N") {?>
                                    <?php echo Smarty::$_smarty_vars['capture']['tools_delete'];?>

                                <?php }?>

                                <?php if (fn_allowed_for("ULTIMATE")) {?>
                                    <?php echo Smarty::$_smarty_vars['capture']['tools_delete'];?>

                                <?php }?>
                            <?php }?>
                        <?php }?>
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
                <td width="9%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <input type="hidden" name="user_types[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['is_root']=="Y"&&($_smarty_tpl->tpl_vars['user']->value['user_type']=="A"||$_smarty_tpl->tpl_vars['user']->value['user_type']=="V"&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']==$_smarty_tpl->tpl_vars['user']->value['company_id'])) {?>
                        <?php $_smarty_tpl->tpl_vars['u_id'] = new Smarty_variable('', null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['u_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value['user_id'], null, 0);?>
                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(false, null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['is_root']=="Y"&&$_smarty_tpl->tpl_vars['user']->value['user_type']==$_smarty_tpl->tpl_vars['auth']->value['user_type']&&(!$_smarty_tpl->tpl_vars['user']->value['company_id']||$_smarty_tpl->tpl_vars['user']->value['company_id']==$_smarty_tpl->tpl_vars['auth']->value['company_id'])||$_smarty_tpl->tpl_vars['user']->value['user_id']==$_smarty_tpl->tpl_vars['auth']->value['user_id']||(fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&($_smarty_tpl->tpl_vars['user']->value['user_type']=='C'||$_smarty_tpl->tpl_vars['user']->value['company_id']&&$_smarty_tpl->tpl_vars['user']->value['company_id']!=$_smarty_tpl->tpl_vars['runtime']->value['company_id']))) {?>
                        <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(true, null, 0);?>
                    <?php }?>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['u_id']->value,'status'=>$_smarty_tpl->tpl_vars['user']->value['status'],'hidden'=>'','update_controller'=>"profiles",'notify'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['popup_additional_class']->value)." dropleft",'non_editable'=>$_smarty_tpl->tpl_vars['non_editable']->value), 0);?>

                </td>
            </tr>
            <?php } ?>
            </table>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"userlist_form",'object'=>"profiles",'items'=>Smarty::$_smarty_vars['capture']['profiles_table']), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"mobile-hide bulkedit-dropdown--legacy hide"));?>

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

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_REQUEST['user_type']) {?>
        <?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(fn_get_user_type_description($_REQUEST['user_type'],true), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable($_smarty_tpl->__("users"), null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:manage_adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:manage_adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_REQUEST['user_type']) {?>
            <?php if ($_smarty_tpl->tpl_vars['can_add_user']->value) {?>
                <a class="btn cm-tooltip" href="<?php echo htmlspecialchars(fn_url("profiles.add?user_type=".((string)$_REQUEST['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add_user");?>
">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus"),$_smarty_tpl);?>

                </a>
            <?php }?>
        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:manage_adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"profiles.manage",'view_type'=>"users"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/users_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"profiles.manage"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content_id'=>"manage_users"), 0);?>

<?php }} ?>

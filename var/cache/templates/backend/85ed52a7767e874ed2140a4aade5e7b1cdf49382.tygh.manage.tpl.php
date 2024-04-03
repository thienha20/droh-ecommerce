<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:01:59
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\call_requests\views\call_requests\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12814209156603d277bbee41-36191875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85ed52a7767e874ed2140a4aade5e7b1cdf49382' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\call_requests\\views\\call_requests\\manage.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12814209156603d277bbee41-36191875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'call_requests' => 0,
    'call_request_statuses' => 0,
    'request' => 0,
    'settings' => 0,
    'order_statuses' => 0,
    'responsibles' => 0,
    'user_id' => 0,
    'name' => 0,
    'return_url' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603d277d06699_43623186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603d277d06699_43623186')) {function content_6603d277d06699_43623186($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.person_name_and_phone','status','call_requests.responsible','id','date','call_requests.person_name_and_phone','call_requests.no_name_specified','order','call_requests.responsible','delete','status','call_requests.requested_product','products_in_cart','call_requests.notes','call_requests.convenient_time','product','quantity','price','product','quantity','price','no_data','call_requests'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/call_requests/bulk_edit.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_call_requests_form" class="form-horizontal form-edit cm-ajax" id="manage_call_requests_form">
<input type="hidden" name="result_ids" value="pagination_contents,tools_call_request_buttons" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['call_requests']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("call_requests_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table-responsive table--overflow-hidden">
            <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
            >
                <tr>
                    <th class="left table__check-items-column">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['call_request_statuses']->value,'meta'=>"table__check-items"), 0);?>


                        <input type="checkbox"
                               class="bulkedit-toggler hide"
                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="15%">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"id"), 0);?>

                    <th width="17%">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"date"), 0);?>

                    </th>
                    <th width="23%">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"name",'text'=>$_smarty_tpl->__("call_requests.person_name_and_phone")), 0);?>

                    </th>
                    <th width="20%">
                        <div class="th-text-overflow-wrapper">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"order"), 0);?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"order_status",'text'=>$_smarty_tpl->__("status")), 0);?>

                        </div>
                    </th>
                    <th width="10%">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"user",'text'=>$_smarty_tpl->__("call_requests.responsible")), 0);?>

                    </th>
                    <th>&nbsp;</th>
                    <th width="10%" class="right">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"status"), 0);?>

                    </th>
                </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['request'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['request']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['call_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['request']->key => $_smarty_tpl->tpl_vars['request']->value) {
$_smarty_tpl->tpl_vars['request']->_loop = true;
?>
                <tbody class="cm-row-item cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['request']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                       data-ca-longtap-action="setCheckBox"
                       data-ca-longtap-target="input.cm-item"
                       data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
"
                >
                    <tr>
                        <td class="left mobile-hide table__check-items-cell">
                            <input type="checkbox" name="request_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['request']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                        </td>
                        <td width="15%" data-th="<?php echo $_smarty_tpl->__("id");?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>

                            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['request']->value), 0);?>

                        </td>
                        <td width="17%" data-th="<?php echo $_smarty_tpl->__("date");?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['request']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td width="23%" data-th="<?php echo $_smarty_tpl->__("call_requests.person_name_and_phone");?>
">
                            <?php if ($_smarty_tpl->tpl_vars['request']->value['name']) {?>
                                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong><br>
                            <?php } else { ?>
                                <div>
                                    <i><?php echo $_smarty_tpl->__("call_requests.no_name_specified");?>
</i>
                                </div>
                            <?php }?>
                            <span><bdi><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></bdi></span>
                        </td>
                        <td width="20%" data-th="<?php echo $_smarty_tpl->__("order");?>
" class="nowrap">
                            <div class="cr-table-status">
                                <input type="text" name="call_requests[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
][order_id]" size="3" value="<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['order_id'], ENT_QUOTES, 'UTF-8');
}?>" class="input-mini input-hidden right" />
                                <?php if ($_smarty_tpl->tpl_vars['request']->value['order_id']) {?>
                                    / <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['request']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['request']->value['order_status']]['description'], ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php }?>
                            </div>
                        </td>
                        <td width="10%" data-th="<?php echo $_smarty_tpl->__("call_requests.responsible");?>
">
                            <select name="call_requests[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
][user_id]" class="input-medium input-hidden">
                                <option> -- </option>
                                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['user_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['responsibles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['user_id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['user_id']->value==$_smarty_tpl->tpl_vars['request']->value['user_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                        <td class="nowrap">
                            <div class="hidden-tools">
                                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'href'=>"call_requests.delete?request_id=".((string)$_smarty_tpl->tpl_vars['request']->value['request_id']),'class'=>"cm-confirm",'method'=>"POST"));?>
</li>
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                            </div>
                        </td>
                        <td width="10%" data-th="<?php echo $_smarty_tpl->__("status");?>
" class="right nowrap">
                            <div id="call_requests_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['request']->value['request_id'],'status'=>$_smarty_tpl->tpl_vars['request']->value['status'],'update_controller'=>"call_requests",'items_status'=>$_smarty_tpl->tpl_vars['call_request_statuses']->value,'btn_meta'=>mb_strtolower("btn btn-info btn-small cr-btn-status-".((string)$_smarty_tpl->tpl_vars['request']->value['status']), 'UTF-8'),'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'st_result_ids'=>"call_requests_status_".((string)$_smarty_tpl->tpl_vars['request']->value['request_id'])), 0);?>

                            <!--call_requests_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
                        </td>
                    </tr>
                    <tr class="cr-table-detail">
                        <td class="mobile-hide table__check-items-cell">&nbsp;</td>
                        <td colspan="3" valign="top" <?php if (!$_smarty_tpl->tpl_vars['request']->value['product_id']&&!$_smarty_tpl->tpl_vars['request']->value['cart_products']) {?>class="mobile-hide"<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['request']->value['product_id']) {?>
                                <div>
                                    <span><?php echo $_smarty_tpl->__("call_requests.requested_product");?>
:</span><br>
                                    <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['request']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['request']->value['cart_products']) {?>
                                <div>
                                    <button type="button"
                                        class="cm-combination cr-switch"
                                        id="sw_call_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    >
                                        <?php echo $_smarty_tpl->__("products_in_cart");?>

                                    </button>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-caret-down cm-combination",'id'=>"on_call_req_".((string)$_smarty_tpl->tpl_vars['request']->value['request_id'])),$_smarty_tpl);?>

                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-caret-up cm-combination hidden",'id'=>"off_call_req_".((string)$_smarty_tpl->tpl_vars['request']->value['request_id'])),$_smarty_tpl);?>

                                </div>
                            <?php }?>
                        </td>

                        <td colspan="3" valign="top" class="noborder--mobile cr-table-products-note">
                            <textarea name="call_requests[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
][notes]" class="input-hidden" cols="20" rows="3" placeholder="<?php echo $_smarty_tpl->__("call_requests.notes");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['notes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            <div class="cr-time">
                                <span><?php echo $_smarty_tpl->__("call_requests.convenient_time");?>
:</span>
                                <span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['request']->value['time_from'])===null||$tmp==='' ? "09:00" : $tmp), ENT_QUOTES, 'UTF-8');?>
</span> - <span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['request']->value['time_to'])===null||$tmp==='' ? "20:00" : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        </td>

                        <td class="mobile-hide">&nbsp;</td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['request']->value['cart_products']) {?>
                        <tr id="call_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden cr-table-products">
                            <td class="mobile-hide">&nbsp;</td>
                            <td colspan="6" class="cr-table-products__body">
                                <div class="table-responsive-wrapper">
                                    <table width="100%" class="table table-middle table-responsive table-rq-products">
                                        <thead>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->__("product");?>
</th>
                                                <th class="nowrap center" width="10%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                                <th class="right" width="20%"><?php echo $_smarty_tpl->__("price");?>
</th>
                                            </tr>
                                        </thead>
                                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['request']->value['cart_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                            <tr>
                                                <td data-th="<?php echo $_smarty_tpl->__("product");?>
">
                                                    <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
                                                </td>
                                                <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
" class="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                <td data-th="<?php echo $_smarty_tpl->__("price");?>
" class="right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);?>
</td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    <?php }?>
                </tbody>
            <?php } ?>
            </table>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"manage_call_requests_form",'object'=>"call_requests",'items'=>Smarty::$_smarty_vars['capture']['call_requests_table']), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['call_requests']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[call_requests.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_call_requests_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>

</div>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"call_requests.manage",'view_type'=>"call_requests"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/call_requests/views/call_requests/components/requests_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"call_requests.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("call_requests"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content_id'=>"call_request"), 0);?>

<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:51:52
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\advanced_import\views\import_presets\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156382744566067318ca46f4-24020282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '870e746e87a66aa7ed7b7318abc2789a4daf29f7' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\manage.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '156382744566067318ca46f4-24020282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'config' => 0,
    'common_presets' => 0,
    'rev_common' => 0,
    'company_id' => 0,
    'context_menu_id' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'allowed_ext' => 0,
    'preset' => 0,
    'presets' => 0,
    'rev' => 0,
    'object_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66067318e09359_46910236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66067318e09359_46910236')) {function content_66067318e09359_46910236($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.common_presets','name','advanced_import.last_launch','advanced_import.last_status','advanced_import.file','advanced_import.has_modifiers','advanced_import.your_presets','name','advanced_import.last_launch','advanced_import.last_status','advanced_import.file','advanced_import.has_modifiers','no_data','advanced_import.add_preset','advanced_import.import_'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['rev_common'] = new Smarty_variable("common_preset_contents", null, 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"import_presets:list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"import_presets:list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_content_common", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['common_presets']->value) {?>
                <?php $_smarty_tpl->tpl_vars['show_notification'] = new Smarty_variable(true, null, 0);?>
                <?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['context_menu_id'] = new Smarty_variable("context_menu_".$_tmp1, null, 0);?>

                <h4 class="subheader">
                    <?php echo $_smarty_tpl->__("advanced_import.common_presets");?>

                </h4>

                <?php $_smarty_tpl->_capture_stack[0][] = array("common_presets_table", null, null); ob_start(); ?>
                    <div class="table-responsive-wrapper longtap-selection" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <table width="100%" class="table table-middle table--relative table-responsive">
                            <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th class="left import-preset__checker mobile-hide">
                                    <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_check_all_shown'=>true,'elms_container'=>"#".((string)$_smarty_tpl->tpl_vars['context_menu_id']->value)), 0);?>


                                        <input type="checkbox"
                                            class="bulkedit-toggler hide"
                                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                        />
                                    <?php }?>
                                </th>
                                <th class="import-preset__preset"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

                                <th class="import-preset__last-launch"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_import&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("advanced_import.last_launch");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="last_import") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__last-status"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("advanced_import.last_status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__file"><?php echo $_smarty_tpl->__("advanced_import.file");?>
</th>
                                <th class="import-preset__has-modifiers"><?php echo $_smarty_tpl->__("advanced_import.has_modifiers");?>
</th>
                                <th class="import-preset__run">&nbsp;</th>
                                <th class="import-preset__tools">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['preset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['preset']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['common_presets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['preset']->key => $_smarty_tpl->tpl_vars['preset']->value) {
$_smarty_tpl->tpl_vars['preset']->_loop = true;
?>
                                <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars['allowed_ext'] = new Smarty_variable(array('csv','xml'), null, 0);?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/preset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('allowed_ext'=>$_smarty_tpl->tpl_vars['allowed_ext']->value), 0);?>

                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['allowed_ext'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['preset']->value['file_extension']), null, 0);?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/common_preset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('allowed_ext'=>$_smarty_tpl->tpl_vars['allowed_ext']->value), 0);?>

                                <?php }?>
                            <?php } ?>
                            </tbody>
                        </table>
                    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev_common']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hook'=>"common_import_presets:context_menu",'id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_common_import_presets_form",'object'=>"import_presets",'items'=>Smarty::$_smarty_vars['capture']['common_presets_table'],'is_check_all_shown'=>true), 0);?>


                <h4 class="subheader">
                    <?php echo $_smarty_tpl->__("advanced_import.your_presets");?>

                </h4>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wrapper_content'=>Smarty::$_smarty_vars['capture']['mainbox_content_common'],'wrapper_extra_id'=>'','preffix'=>"common"), 0);?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_content_vendors", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['presets']->value) {?>
                <?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['context_menu_id'] = new Smarty_variable("context_menu_".$_tmp2, null, 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php $_smarty_tpl->_capture_stack[0][] = array("vendor_presets_table", null, null); ob_start(); ?>
                    <div class="table-responsive-wrapper longtap-selection">
                        <table width="100%" class="table table-middle table--relative table-responsive">
                            <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th class="left import-preset__checker mobile-hide">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_check_all_shown'=>true), 0);?>


                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th class="import-preset__preset"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__last-launch"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_import&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("advanced_import.last_launch");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="last_import") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__last-status"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("advanced_import.last_status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                                <th class="import-preset__file"><?php echo $_smarty_tpl->__("advanced_import.file");?>
</th>
                                <th class="import-preset__has-modifiers"><?php echo $_smarty_tpl->__("advanced_import.has_modifiers");?>
</th>
                                <th class="import-preset__run">&nbsp;</th>
                                <th class="import-preset__tools">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['preset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['preset']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['presets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['preset']->key => $_smarty_tpl->tpl_vars['preset']->value) {
$_smarty_tpl->tpl_vars['preset']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['company_id']->value===$_smarty_tpl->tpl_vars['preset']->value['company_id']) {?>
                                    <?php $_smarty_tpl->tpl_vars['allowed_ext'] = new Smarty_variable(array("csv","xml"), null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['allowed_ext'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['preset']->value['file_extension']), null, 0);?>
                                <?php }?>
                                <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/preset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'allowed_ext'=>$_smarty_tpl->tpl_vars['allowed_ext']->value), 0);?>

                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_vendor_import_presets_form",'object'=>"import_presets",'items'=>Smarty::$_smarty_vars['capture']['vendor_presets_table'],'is_check_all_shown'=>true), 0);?>


                <div class="clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>

                </div>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wrapper_content'=>Smarty::$_smarty_vars['capture']['mainbox_content_vendors'],'wrapper_extra_id'=>'','preffix'=>"vendor"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"import_presets:list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"advanced_import:presets_manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"advanced_import:presets_manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"advanced_import:presets_manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"import_presets.add?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value),'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->__("advanced_import.add_preset"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("advanced_import.import_".((string)$_smarty_tpl->tpl_vars['object_type']->value)),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>


<?php echo Smarty::$_smarty_vars['capture']['popups'];?>

<?php }} ?>

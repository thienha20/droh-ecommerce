<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:56:23
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\addons\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16426572756603df377dfe44-05783239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea110dc2207919406bfbd7f36f12f6d51ff09c3e' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\addons\\manage.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16426572756603df377dfe44-05783239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'is_activated_free' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603df37813267_44323029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603df37813267_44323029')) {function content_6603df37813267_44323029($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('activate','helpdesk_account.activate_free_license_message','helpdesk_account.signed_out_message.marketplace','addons'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/addons_manage.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div class="items-container" id="addons_list">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:manage")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:manage"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")&&!$_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id']) {?>
        <?php if (fn_allowed_for("ULTIMATE:FREE")&&$_smarty_tpl->tpl_vars['is_activated_free']->value!==smarty_modifier_enum("YesNo::YES")) {?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['is_root']===smarty_modifier_enum("YesNo::YES")&&!$_smarty_tpl->tpl_vars['auth']->value['company_id']&&$_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
                <div class="well well-small help-block">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('btn_class'=>"pull-right cm-ajax",'btn_text'=>$_smarty_tpl->__("activate"),'btn_href'=>"helpdesk_connector.activate_license_mail_request"), 0);?>

                    <p><?php echo $_smarty_tpl->__("helpdesk_account.activate_free_license_message");?>
</p>
                </div>
            <?php }?>
        <?php } else { ?>
            <div class="well well-small help-block">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('btn_class'=>"pull-right"), 0);?>

                <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_out_message.marketplace");?>
</p>
            </div>
        <?php }?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/addons_disabled_msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:manage"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--addons_list--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/manage_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/manage_adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/manage_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>($_tmp1),'adv_buttons'=>($_tmp2),'buttons'=>($_tmp3),'select_storefront'=>true,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), 0);?>

<?php }} ?>

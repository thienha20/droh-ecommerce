<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 05:27:35
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\addons\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200231108466062717f14cc7-69962083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a8b3f89058fe50b8584715348683987d3ff6fa' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\addons\\update.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '200231108466062717f14cc7-69962083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'addon' => 0,
    'is_activated_free' => 0,
    'settings' => 0,
    '_addon' => 0,
    'runtime' => 0,
    'select_storefront' => 0,
    'show_all_storefront' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660627180b6393_02518126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660627180b6393_02518126')) {function content_660627180b6393_02518126($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('activate','helpdesk_account.activate_free_license_message','helpdesk_account.signed_out_message.marketplace_single_addon'));
?>
<?php $_smarty_tpl->tpl_vars['_addon'] = new Smarty_variable($_REQUEST['addon'], null, 0);?>
<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/addons/update.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")&&!$_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id']&&$_smarty_tpl->tpl_vars['addon']->value['marketplace_id']) {?>
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

            <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_out_message.marketplace_single_addon");?>
</p>
        </div>
    <?php }?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_general.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_subscription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/header/addon_header_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['addon']->value['name'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>($_tmp1),'buttons'=>($_tmp2),'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value,'storefront_switcher_param_name'=>"storefront_id"), 0);?>

<?php }} ?>

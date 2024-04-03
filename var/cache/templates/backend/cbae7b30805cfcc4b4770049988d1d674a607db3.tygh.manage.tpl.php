<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:10:06
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\setup_wizard\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15065872926603c64ebcbeb6-10910313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbae7b30805cfcc4b4770049988d1d674a607db3' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\setup_wizard\\manage.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15065872926603c64ebcbeb6-10910313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'setup_wizard' => 0,
    'tab_id' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c64ebe8929_91270726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c64ebe8929_91270726')) {function content_6603c64ebe8929_91270726($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.marketplace_setup_wizard'));
?>
<div class="setup-wizard-content" id="sw_wizard_container">
    <div class="hidden" id="sw_wizard_subcontainer">
        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>


        <div class="wizard-title"><h1><?php echo $_smarty_tpl->__("sw.marketplace_setup_wizard");?>
</h1></div>

        <div class="liquid-slider" id="setup-wizard-main-slider">
            <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['setup_wizard']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab_id']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_tab">
                    <h2 class="title hidden"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['tab']->value['title']);?>
</h2>
                    <div class="head-wrap">
                        <div class="head-text">
                            <h3><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['tab']->value['header']);?>
</h3>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['extra']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tab']->value['extra'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['sections']&&!(($tmp = @$_smarty_tpl->tpl_vars['tab']->value['show_section_in_extra'])===null||$tmp==='' ? false : $tmp)) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/setup_wizard/components/setup_wizard_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                <!--sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_tab--></div>
            <?php } ?>

        </div>
    </div>
<!--sw_wizard_container--></div>

<?php }} ?>

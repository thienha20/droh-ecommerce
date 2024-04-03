<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 12:33:38
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\languages\update_translation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15185480456603e7f2cdf285-29678474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0159626150c34638a903e6beff85e495b10474ef' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\languages\\update_translation.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15185480456603e7f2cdf285-29678474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_data' => 0,
    'id' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603e7f2dcd585_76293958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603e7f2dcd585_76293958')) {function content_6603e7f2dcd585_76293958($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('update'));
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang_data']->value['lang_id'], null, 0);?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_variables" class="install-addon">

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_language_translations_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal<?php if (!fn_allow_save_object('',"languages")) {?> cm-hide-inputs<?php }?>" enctype="multipart/form-data">
        <input type="hidden" name="language_data[lang_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_data']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
">


        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />
            
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"language_data[po_file]",'prefix'=>"variables_".((string)$_smarty_tpl->tpl_vars['id']->value),'allowed_ext'=>"po, zip"), 0);?>


        </div>


        <?php if (fn_allow_save_object('',"languages")) {?>
            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.update_translation]",'but_text'=>$_smarty_tpl->__("update"),'cancel_action'=>"close"), 0);?>

            </div>
        <?php }?>
    </form>

<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_variables--></div><?php }} ?>

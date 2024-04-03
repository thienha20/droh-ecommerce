<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:46:35
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\store_locator\addons\geo_maps\hooks\store_locator\select_coordinates.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131280117066078b1b8ea804-34510128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7745b0c48c8e74313c3f6f56b5b2881abedc58be' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\store_locator\\addons\\geo_maps\\hooks\\store_locator\\select_coordinates.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '131280117066078b1b8ea804-34510128',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078b1b8edb91_69477737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078b1b8edb91_69477737')) {function content_66078b1b8edb91_69477737($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_target_id'=>"map_picker",'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-opener cm-hide-with-inputs",'but_id'=>"store_locator_picker_opener"), 0);?>
<?php }} ?>

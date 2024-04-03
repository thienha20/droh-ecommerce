<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:51:56
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\vendor_communication\hooks\advanced_import\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11218251776606731cf3bc10-98055705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140c5cbfd1275cf305ee596bdcc93a9b17e34b2b' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\advanced_import\\update_tools_list.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11218251776606731cf3bc10-98055705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'preset' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6606731d003527_08027874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6606731d003527_08027874')) {function content_6606731d003527_08027874($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['id']->value!=0&&($_smarty_tpl->tpl_vars['preset']->value['company_id']!=0||$_smarty_tpl->tpl_vars['preset']->value['company_id']==0&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_IMPORT_PRESET') ? constant('VC_OBJECT_TYPE_IMPORT_PRESET') : null),'object_id'=>$_smarty_tpl->tpl_vars['id']->value,'menu_button'=>true), 0);?>

<?php }?><?php }} ?>

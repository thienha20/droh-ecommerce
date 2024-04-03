<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:41:35
         compiled from "C:\wamp64\www\cscart\design\backend\templates\buttons\clone_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132874888660670afe48614-54582813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01002e5442e1dcb7dfd8b7256d4eb3eeefd072e2' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\buttons\\clone_delete.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2132874888660670afe48614-54582813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href_clone' => 0,
    'href_delete' => 0,
    'id' => 0,
    'no_confirm' => 0,
    'microformats' => 0,
    'delete_target_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660670afe827d1_85652689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660670afe827d1_85652689')) {function content_660670afe827d1_85652689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['href_clone']->value) {?>
    <a class="btn clone-item"
       title="<?php echo $_smarty_tpl->__("remove");?>
"
       href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_clone']->value), ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>

    </a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['href_delete']->value) {?>
    <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="rm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
       class="btn delete-item <?php if (!$_smarty_tpl->tpl_vars['no_confirm']->value) {?>cm-confirm<?php }
if ($_smarty_tpl->tpl_vars['microformats']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['microformats']->value, ENT_QUOTES, 'UTF-8');
}?>"
       title="<?php echo $_smarty_tpl->__("remove");?>
"
       <?php if ($_smarty_tpl->tpl_vars['href_delete']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_delete']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
       <?php if ($_smarty_tpl->tpl_vars['delete_target_id']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    >
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>

    </a>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['href_delete']->value&&!$_smarty_tpl->tpl_vars['href_clone']->value) {?>
    <button type="button"
            class="btn delete-item <?php if (!$_smarty_tpl->tpl_vars['no_confirm']->value) {?>cm-confirm<?php }
if ($_smarty_tpl->tpl_vars['microformats']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['microformats']->value, ENT_QUOTES, 'UTF-8');
}?>"
            title="<?php echo $_smarty_tpl->__("remove");?>
"
            <?php if ($_smarty_tpl->tpl_vars['delete_target_id']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    >
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>

    </button>
<?php }?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:15:53
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\categories\components\categories_select2_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9194889476603c7a96285d2-06121049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74e0eaaf59b019c7673b31b173d973ee0826604c' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\categories\\components\\categories_select2_item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9194889476603c7a96285d2-06121049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'parent' => 0,
    'parent_names' => 0,
    'parent_path' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7a963f532_66816363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7a963f532_66816363')) {function content_6603c7a963f532_66816363($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['parent_names'] = new Smarty_variable(array(), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['parents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('parent_names', null, 0);
$_smarty_tpl->tpl_vars['parent_names']->value[] = $_smarty_tpl->tpl_vars['parent']->value['category'];?>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['parent_names']->value) {?>
    <?php $_smarty_tpl->tpl_vars['parent_path'] = new Smarty_variable(implode(" / ",$_smarty_tpl->tpl_vars['parent_names']->value), null, 0);?>
<?php }?>
<span class="select2-selection__choice__handler"></span>
<div class="select2__category-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</div>
<div class="select2__category-parents"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_path']->value, ENT_QUOTES, 'UTF-8');?>
</div>
<?php if ($_smarty_tpl->tpl_vars['category']->value['company']&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
    <div class="select2__category-company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['company'], ENT_QUOTES, 'UTF-8');?>
</div>
<?php }?><?php }} ?>

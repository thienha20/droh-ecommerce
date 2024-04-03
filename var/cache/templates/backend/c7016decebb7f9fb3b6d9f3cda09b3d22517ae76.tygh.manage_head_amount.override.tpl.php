<?php /* Smarty version Smarty-3.1.21, created on 2024-03-30 06:47:09
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\warehouses\hooks\products\manage_head_amount.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28176018466078b3d52ac46-55308463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7016decebb7f9fb3b6d9f3cda09b3d22517ae76' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\warehouses\\hooks\\products\\manage_head_amount.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '28176018466078b3d52ac46-55308463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'c_url' => 0,
    'rev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66078b3d55ae32_41386471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66078b3d55ae32_41386471')) {function content_66078b3d55ae32_41386471($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('quantity_long','quantity'));
?>
<th width="9%" class="nowrap">
    <a class="cm-ajax th-text-overflow <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="complex_amount") {?>th-text-overflow--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>"
        href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>

        title="<?php echo $_smarty_tpl->__("quantity_long");?>
"
    >
        <?php echo $_smarty_tpl->__("quantity");?>

    </a>
</th>
<?php }} ?>

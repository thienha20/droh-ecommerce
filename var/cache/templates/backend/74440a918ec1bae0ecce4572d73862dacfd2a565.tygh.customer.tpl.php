<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:02:03
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16465972436603d27b2796d7-93937697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74440a918ec1bae0ecce4572d73862dacfd2a565' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\customer.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16465972436603d27b2796d7-93937697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_customer' => 0,
    'user_data' => 0,
    'NAME_CHARACTERS_THRESHOLD' => 0,
    'customer_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603d27b28ee01_71057591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603d27b28ee01_71057591')) {function content_6603d27b28ee01_71057591($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('anonymous'));
?>


<?php $_smarty_tpl->tpl_vars['show_customer'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_customer']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['customer_name'] = new Smarty_variable(smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_data']->value['name'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD'] = new Smarty_variable(30, null, 0);?>

<span>
    <?php if ($_smarty_tpl->tpl_vars['show_customer']->value&&$_smarty_tpl->tpl_vars['user_data']->value['is_authorized']) {?>
        <a href=<?php echo htmlspecialchars(fn_url("profiles.update&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>

            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['show_customer']->value&&$_smarty_tpl->tpl_vars['user_data']->value['name']) {?>
        <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>

        </span>

    <?php } elseif ($_smarty_tpl->tpl_vars['show_customer']->value) {?>
        <span class="muted">
            <?php echo $_smarty_tpl->__("anonymous");?>

        </span>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value), 0);?>

</span>
<?php }} ?>

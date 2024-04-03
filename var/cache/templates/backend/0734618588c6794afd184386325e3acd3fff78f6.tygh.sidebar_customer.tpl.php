<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:52:54
         compiled from "C:\wamp64\www\cscart\design\backend\templates\common\sidebar\sidebar_customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7170197066606735630d415-57104667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0734618588c6794afd184386325e3acd3fff78f6' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\common\\sidebar\\sidebar_customer.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7170197066606735630d415-57104667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'user_default_name' => 0,
    'customer_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6606735633c9d2_63692553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6606735633c9d2_63692553')) {function content_6606735633c9d2_63692553($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('customer','customer_info_sidebar','ip_address','phone'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value) {?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['firstname']||$_smarty_tpl->tpl_vars['user_data']->value['lastname']) {?>
        <?php $_smarty_tpl->tpl_vars['customer_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_data']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['lastname']), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['name']) {?>
        <?php $_smarty_tpl->tpl_vars['customer_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['name'], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['customer_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['user_default_name']->value)===null||$tmp==='' ? $_smarty_tpl->__("customer") : $tmp), null, 0);?>
    <?php }?>
    
    <div class="sidebar-row sidebar-customer">
        <h6><?php echo $_smarty_tpl->__("customer_info_sidebar");?>
</h6>
        <ul class="unstyled">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"common:sidebar_customer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"common:sidebar_customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <?php if (($_smarty_tpl->tpl_vars['user_data']->value['firstname']||$_smarty_tpl->tpl_vars['user_data']->value['lastname']||$_smarty_tpl->tpl_vars['user_data']->value['name'])&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']>0) {?>
                        <a href=<?php echo htmlspecialchars(fn_url("profiles.update&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
>
                            <?php echo $_smarty_tpl->tpl_vars['customer_name']->value;
if ($_smarty_tpl->tpl_vars['user_data']->value['city']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['city'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['user_data']->value['country']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['country'], ENT_QUOTES, 'UTF-8');
}?>
                        </a>
                    <?php } else { ?>
                        <span class="sidebar-customer__customer-name">
                            <?php echo $_smarty_tpl->tpl_vars['customer_name']->value;
if ($_smarty_tpl->tpl_vars['user_data']->value['city']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['city'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['user_data']->value['country']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['country'], ENT_QUOTES, 'UTF-8');
}?>
                        </span>
                    <?php }?>
                    <span>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"common:sidebar_customer_icon")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"common:sidebar_customer_icon"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"common:sidebar_customer_icon"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </span>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['email']) {?>
                    <li>
                        <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_country']) {?>
                    <li>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
</span><span>,</span>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ip_address']) {?>
                    <li>
                        <span>
                            <?php echo $_smarty_tpl->__("ip_address");?>
:
                        </span>
                        <span>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>

                        </span>
                    </li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['phone']) {?>
                    <li>
                        <span>
                            <?php echo $_smarty_tpl->__("phone");?>
:
                        </span>
                        <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
">
                            <bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</bdi>
                        </a>
                    </li>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"common:sidebar_customer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
<?php }?>
<?php }} ?>

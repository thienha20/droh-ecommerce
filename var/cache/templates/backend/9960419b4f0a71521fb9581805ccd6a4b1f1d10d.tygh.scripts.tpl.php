<?php /* Smarty version Smarty-3.1.21, created on 2024-04-10 15:53:46
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\geo_maps\components\scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15781247896616539a6f41e7-77751485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9960419b4f0a71521fb9581805ccd6a4b1f1d10d' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\geo_maps\\components\\scripts.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15781247896616539a6f41e7-77751485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'provider' => 0,
    'api_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6616539a714a29_08945558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6616539a714a29_08945558')) {function content_6616539a714a29_08945558($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','geo_maps.cannot_select_location'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/maps.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/code.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/locate.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['provider'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['provider']->value=="yandex") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/index.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/maps.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/code.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/locate.js"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['provider']->value=="google") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/index.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/maps.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/code.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/locate.js"),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/func.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['api_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['geo_maps'][$_smarty_tpl->tpl_vars['provider']->value][((string)$_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'])."_api_key"], null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        _.geo_maps = {
            provider: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            api_key: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['api_key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            yandex_commercial: <?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['yandex']['yandex_commercial']=="Y") {?>true<?php } else { ?>false<?php }?>,
            language: "<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
",
        };

        _.tr({
            geo_maps_google_search_bar_placeholder: '<?php echo strtr($_smarty_tpl->__("admin_search_field"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            geo_maps_cannot_select_location: '<?php echo strtr($_smarty_tpl->__("geo_maps.cannot_select_location"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:16:34
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\blocks\categories\categories_dropdown_vertical.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19942190406603c7d2bfc0d2-57257420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '630c88a864360977287763f2b16e2619a2c2b4bc' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\blocks\\categories\\categories_dropdown_vertical.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19942190406603c7d2bfc0d2-57257420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7d2c1a2d8_13452964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7d2c1a2d8_13452964')) {function content_6603c7d2c1a2d8_13452964($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('menu','menu'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-menu ty-menu-vertical  ty-menu-vertical__dropdown">
    <ul id="vmenu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__items cm-responsive-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation']=="Y") {?> rtl<?php }?>">
        <li class="ty-menu__item ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
            <a class="ty-menu__item-link">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

                <span><?php echo $_smarty_tpl->__("menu");?>
</span>
            </a>
        </li>
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"category",'item_id'=>"category_id",'childs'=>"subcategories"), 0);?>

    </ul>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/categories/categories_dropdown_vertical.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/categories/categories_dropdown_vertical.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-menu ty-menu-vertical  ty-menu-vertical__dropdown">
    <ul id="vmenu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__items cm-responsive-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation']=="Y") {?> rtl<?php }?>">
        <li class="ty-menu__item ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
            <a class="ty-menu__item-link">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

                <span><?php echo $_smarty_tpl->__("menu");?>
</span>
            </a>
        </li>
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"category",'item_id'=>"category_id",'childs'=>"subcategories"), 0);?>

    </ul>
</div>
<?php }?><?php }} ?>

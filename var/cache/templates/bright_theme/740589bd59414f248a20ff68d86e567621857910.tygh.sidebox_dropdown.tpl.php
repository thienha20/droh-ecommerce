<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:16:34
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\blocks\sidebox_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:874214986603c7d2c23bd8-50201354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '740589bd59414f248a20ff68d86e567621857910' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\blocks\\sidebox_dropdown.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '874214986603c7d2c23bd8-50201354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'iid' => 0,
    'items' => 0,
    'foreach_name' => 0,
    'childs' => 0,
    'item' => 0,
    'block' => 0,
    'level' => 0,
    'item_url' => 0,
    'name' => 0,
    'item_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7d2ce7493_18095951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7d2ce7493_18095951')) {function content_6603c7d2ce7493_18095951($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["foreach_name"] = new Smarty_variable("item_".((string)$_smarty_tpl->tpl_vars['iid']->value), null, 0);
$_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown_element")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<li class="ty-menu__item cm-menu-item-responsive <?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>dropdown-vertical__dir<?php }
if ($_smarty_tpl->tpl_vars['item']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }?> menu-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><div class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-menu__icon-open"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-menu__icon-hide"),$_smarty_tpl);?>
</div><div class="ty-menu__item-arrow hidden-phone"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open"),$_smarty_tpl);?>
</div><?php }
$_smarty_tpl->tpl_vars["item_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><div class="ty-menu__submenu-item-header"><a<?php if ($_smarty_tpl->tpl_vars['item_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?>target="_blank"<?php }?> class="ty-menu__item-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown_childs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ty-menu__submenu"><ul class="ty-menu__submenu-items cm-responsive-menu-submenu"><?php echo $_smarty_tpl->getSubTemplate ("blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value],'separated'=>true,'submenu'=>true,'iid'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['item_id']->value],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), 0);?>
</ul></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/sidebox_dropdown.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/sidebox_dropdown.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["foreach_name"] = new Smarty_variable("item_".((string)$_smarty_tpl->tpl_vars['iid']->value), null, 0);
$_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown_element")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<li class="ty-menu__item cm-menu-item-responsive <?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>dropdown-vertical__dir<?php }
if ($_smarty_tpl->tpl_vars['item']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }?> menu-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><div class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-menu__icon-open"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-menu__icon-hide"),$_smarty_tpl);?>
</div><div class="ty-menu__item-arrow hidden-phone"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open"),$_smarty_tpl);?>
</div><?php }
$_smarty_tpl->tpl_vars["item_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><div class="ty-menu__submenu-item-header"><a<?php if ($_smarty_tpl->tpl_vars['item_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?>target="_blank"<?php }?> class="ty-menu__item-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:sidebox_dropdown_childs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ty-menu__submenu"><ul class="ty-menu__submenu-items cm-responsive-menu-submenu"><?php echo $_smarty_tpl->getSubTemplate ("blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value],'separated'=>true,'submenu'=>true,'iid'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['item_id']->value],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), 0);?>
</ul></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>

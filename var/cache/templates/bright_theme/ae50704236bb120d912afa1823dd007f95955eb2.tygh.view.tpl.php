<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 09:55:07
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\views\pages\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1373420319660665cb951cb4-94493364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae50704236bb120d912afa1823dd007f95955eb2' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\views\\pages\\view.tpl',
      1 => 1711520232,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1373420319660665cb951cb4-94493364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_660665cb99d783_16867811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_660665cb99d783_16867811')) {function content_660665cb99d783_16867811($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_live_edit')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-wysiwyg-content">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:page_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div <?php echo smarty_function_live_edit(array('name'=>"page:description:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:page_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:page_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:page_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/pages/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/pages/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-wysiwyg-content">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:page_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div <?php echo smarty_function_live_edit(array('name'=>"page:description:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:page_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:page_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:page_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 09:55:08
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\common\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2203252306603c2cc16bdf9-54942238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6603314fef6a2363c1e798e340360499b70d1e24' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\common\\search.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2203252306603c2cc16bdf9-54942238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'search' => 0,
    'search_title' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c2cc315eb6_29234400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c2cc315eb6_29234400')) {function content_6603c2cc315eb6_29234400($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_search_general','search_products','storefront_search_button','storefront_search_button','storefront_search_general','search_products','storefront_search_button','storefront_search_button'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-search-block">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"search:additional_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"search:additional_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->tpl_vars["search_title"] = new Smarty_variable($_smarty_tpl->__("storefront_search_general"), null, 0);
} else {
$_smarty_tpl->tpl_vars["search_title"] = new Smarty_variable($_smarty_tpl->__("search_products"), null, 0);
}?><input type="text" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" id="search_input<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['search_input_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
echo $_smarty_tpl->getSubTemplate ("buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0);
} else {
echo $_smarty_tpl->getSubTemplate ("buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0);
}?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("search_input_id", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    </form>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-search-block">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"search:additional_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"search:additional_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->tpl_vars["search_title"] = new Smarty_variable($_smarty_tpl->__("storefront_search_general"), null, 0);
} else {
$_smarty_tpl->tpl_vars["search_title"] = new Smarty_variable($_smarty_tpl->__("search_products"), null, 0);
}?><input type="text" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" id="search_input<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['search_input_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
echo $_smarty_tpl->getSubTemplate ("buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0);
} else {
echo $_smarty_tpl->getSubTemplate ("buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0);
}?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("search_input_id", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    </form>
</div>
<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:44
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\views\tabs\components\product_popup_tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18669288156603c5fcbf3df1-80875302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bde3f1e5f2645637302657581685f8e0b826484' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\views\\tabs\\components\\product_popup_tabs.tpl',
      1 => 1711520232,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18669288156603c5fcbf3df1-80875302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'tabs' => 0,
    'tab' => 0,
    'tab_id' => 0,
    'tab_content_capture' => 0,
    'product_tab_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c5fccb5da2_72550241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c5fccb5da2_72550241')) {function content_6603c5fccb5da2_72550241($_smarty_tpl) {?><?php if (!is_callable('smarty_function_render_block')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.render_block.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->_capture_stack[0][] = array("popupsbox", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars["tab"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tab"]->_loop = false;
 $_smarty_tpl->tpl_vars["tab_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tab"]->key => $_smarty_tpl->tpl_vars["tab"]->value) {
$_smarty_tpl->tpl_vars["tab"]->_loop = true;
 $_smarty_tpl->tpl_vars["tab_id"]->value = $_smarty_tpl->tpl_vars["tab"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup']=="Y"&&$_smarty_tpl->tpl_vars['tab']->value['status']=="A") {?>
            <?php $_smarty_tpl->tpl_vars["product_tab_id"] = new Smarty_variable("product_tab_".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["tab_content_capture"] = new Smarty_variable("tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value), null, 0);?>

            <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='B') {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='T') {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_tab_id'=>$_smarty_tpl->tpl_vars['product_tab_id']->value,'force_ajax'=>true), 0);?>

                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value])) {?>
                <li class="ty-popup-tabs__item"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-popup ty-popup-tabs__icon"),$_smarty_tpl);?>
<a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener" data-ca-target-id="content_block_popup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <div id="content_block_popup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-ca-keep-in-place="true">
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value];?>

                </div>
            <?php }?>
        <?php }?>
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("popupsbox_content", null, null); ob_start(); ?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['popupsbox'])) {?>
        <ul class="ty-popup-tabs">
            <?php echo Smarty::$_smarty_vars['capture']['popupsbox'];?>

        </ul>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/tabs/components/product_popup_tabs.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/tabs/components/product_popup_tabs.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->_capture_stack[0][] = array("popupsbox", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars["tab"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tab"]->_loop = false;
 $_smarty_tpl->tpl_vars["tab_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tab"]->key => $_smarty_tpl->tpl_vars["tab"]->value) {
$_smarty_tpl->tpl_vars["tab"]->_loop = true;
 $_smarty_tpl->tpl_vars["tab_id"]->value = $_smarty_tpl->tpl_vars["tab"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup']=="Y"&&$_smarty_tpl->tpl_vars['tab']->value['status']=="A") {?>
            <?php $_smarty_tpl->tpl_vars["product_tab_id"] = new Smarty_variable("product_tab_".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["tab_content_capture"] = new Smarty_variable("tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value), null, 0);?>

            <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='B') {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='T') {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_tab_id'=>$_smarty_tpl->tpl_vars['product_tab_id']->value,'force_ajax'=>true), 0);?>

                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value])) {?>
                <li class="ty-popup-tabs__item"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-popup ty-popup-tabs__icon"),$_smarty_tpl);?>
<a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener" data-ca-target-id="content_block_popup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <div id="content_block_popup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-ca-keep-in-place="true">
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value];?>

                </div>
            <?php }?>
        <?php }?>
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("popupsbox_content", null, null); ob_start(); ?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['popupsbox'])) {?>
        <ul class="ty-popup-tabs">
            <?php echo Smarty::$_smarty_vars['capture']['popupsbox'];?>

        </ul>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:31
         compiled from "C:\wamp64\www\cscart\design\themes\bright_theme\templates\addons\discussion\blocks\testimonials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11335241786603c308739804-76897965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7874fd86b2a1801a5ab4511210e8e23306d558a2' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\bright_theme\\templates\\addons\\discussion\\blocks\\testimonials.tpl',
      1 => 1711522883,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11335241786603c308739804-76897965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c30887db38_42691678',
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'discussion' => 0,
    'post' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c30887db38_42691678')) {function content_6603c30887db38_42691678($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\wamp64\\www\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_all','view_all'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion(0,"E",true,$_smarty_tpl->tpl_vars['block']->value['properties']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D"&&$_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <div class="ty-discussion-post__content">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <span class="ty-discussion-post__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="ty-caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>

            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B"&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
                <div class="clearfix ty-discussion-post__rating">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
                <div class="ty-discussion-post__message"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</div>
            <?php }?>

        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php } ?>

<div class="ty-mtb-s ty-left ty-uppercase">
    <a href="<?php echo htmlspecialchars(fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/blocks/testimonials.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/blocks/testimonials.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion(0,"E",true,$_smarty_tpl->tpl_vars['block']->value['properties']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D"&&$_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <div class="ty-discussion-post__content">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <span class="ty-discussion-post__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="ty-caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>

            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B"&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
                <div class="clearfix ty-discussion-post__rating">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
                <div class="ty-discussion-post__message"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</div>
            <?php }?>

        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php } ?>

<div class="ty-mtb-s ty-left ty-uppercase">
    <a href="<?php echo htmlspecialchars(fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
</div>
<?php }?>
<?php }?><?php }} ?>

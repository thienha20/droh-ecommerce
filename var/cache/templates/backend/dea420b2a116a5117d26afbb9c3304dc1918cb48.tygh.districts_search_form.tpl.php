<?php /* Smarty version Smarty-3.1.21, created on 2024-03-28 10:38:17
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\droh_common\views\district\components\districts_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57477057766051e69c61b07-28308405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea420b2a116a5117d26afbb9c3304dc1918cb48' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\droh_common\\views\\district\\components\\districts_search_form.tpl',
      1 => 1711598072,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '57477057766051e69c61b07-28308405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'form_meta' => 0,
    'search' => 0,
    'countries' => 0,
    'c' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66051e69cd9982_15228527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66051e69cd9982_15228527')) {function content_66051e69cd9982_15228527($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','district','code','country','city','status','active','disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
<div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type='text/javascript'>var state_code=true;<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/addons/droh_common/func_admin.js"),$_smarty_tpl);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="pages_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>

<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("district");?>
</label>
    <input type="text" name="name" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("code");?>
</label>
    <input type="text" name="code" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['code'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("country");?>
</label>
    <select name="country_id" id="country_id">
        <option value="">--</option>
        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['country_id']==$_smarty_tpl->tpl_vars['c']->value['code']) {?>selected='selected'<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['country'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
</div>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("city");?>
</label>
    <select name="state_id" id="state_id">
        <option value="">--</option>
    </select>
</div>
<div class="sidebar-field">
    <label class="control-label"><?php echo $_smarty_tpl->__("status");?>
</label>
    <div class="controls">
        <select name="status">
            <option value="">--</option>
            <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
            <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"district",'in_popup'=>true), 0);?>


</form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }?><?php }} ?>

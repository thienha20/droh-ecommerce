<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:12:00
         compiled from "C:\wamp64\www\cscart\design\backend\templates\common\select_usergroups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9604227996603c6c0842d36-23835651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94bb76aae6312b922c14b2766fbac0deefc52f32' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\common\\select_usergroups.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9604227996603c6c0842d36-23835651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usergroup_ids' => 0,
    'show_default' => 0,
    'name' => 0,
    'input_extra' => 0,
    'usergroups_default' => 0,
    'select_mode' => 0,
    'list_mode' => 0,
    'id' => 0,
    'usergroup' => 0,
    'ug_ids' => 0,
    'usergroups' => 0,
    'title' => 0,
    'ug_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c6c08a7220_28770250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c6c08a7220_28770250')) {function content_6603c6c08a7220_28770250($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.in_array.php';
if (!is_callable('smarty_modifier_count')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['usergroup_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['ug_ids'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['usergroup_ids']->value), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['show_default'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_default']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:select_usergroups")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:select_usergroups"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="0" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
/>
<?php $_smarty_tpl->_capture_stack[0][] = array("usergroups_list", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars['usergroups_default'] = new Smarty_variable(fn_get_default_usergroups(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['show_default']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['usergroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usergroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups_default']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->key => $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?><li><a>
        <?php } else { ?><label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>
        <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if (($_smarty_tpl->tpl_vars['ug_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value))||(!$_smarty_tpl->tpl_vars['ug_ids']->value&&$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']==(defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null))) {?> checked="checked"<?php }?> <?php if ((!$_smarty_tpl->tpl_vars['ug_ids']->value||($_smarty_tpl->tpl_vars['ug_ids']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value)==1&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value)))&&$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']==(defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null)) {?> disabled="disabled"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
 onclick="fn_switch_default_box(this, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null), ENT_QUOTES, 'UTF-8');?>
);" />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>


        <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?></a></li>
        <?php } else { ?></label>
        <?php }?>
    <?php } ?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['usergroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usergroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->key => $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?><li><a>
    <?php } else { ?><label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

        <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['ug_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value)) {?> checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
 onclick="fn_switch_default_box(this, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null), ENT_QUOTES, 'UTF-8');?>
);" />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>


    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?></a></li>
    <?php } else { ?></label>
    <?php }?>

<?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:select_usergroups"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?>
    <div class="btn-group">
    <a class="btn-text dropdown-toggle" data-toggle="dropdown">
    <?php if ($_smarty_tpl->tpl_vars['ug_ids']->value) {?>
        <?php $_smarty_tpl->tpl_vars["ug_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["ug_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value), null, 0);?>
    <?php }?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-user"),$_smarty_tpl);?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
 <span class="cm-ug-amount">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ug_count']->value, ENT_QUOTES, 'UTF-8');?>
)</span>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <?php echo Smarty::$_smarty_vars['capture']['usergroups_list'];?>

    </ul>
    </div>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['usergroups_list'];?>

<?php }?>

<?php if (!defined("SMARTY_USERGROUPS_LOADED")) {?>
    <?php $_smarty_tpl->tpl_vars["tmp"] = new Smarty_variable(define("SMARTY_USERGROUPS_LOADED",true), null, 0);?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
        
        function fn_switch_default_box(holder, prefix, default_id)
        {
            var $ = Tygh.$;
            var p = $(holder).parents(':not(li,a,label,ul):first');

            var default_box = $('input[id^=' + prefix + '_' + default_id + ']', p);
            var checked_groups = $('input[id^=' + prefix + '_][type=checkbox]:checked', p).not(default_box).not(holder).length + (holder.checked ? 1 : 0);

            default_box.prop('disabled', (checked_groups == 0));
            if (checked_groups == 0) {
                default_box.prop('checked', true);
            }

            fn_calculate_usergroups(p);
            return true;
        }

        function fn_calculate_usergroups(holder)
        {
            var $ = Tygh.$;
            if ($(holder).length) {
                var note = $('.cm-ug-amount', $(holder));
            } else {
                var note = $('.cm-ug-amount');
            }

            note.each(function(){
                var p = $(this).parents(':not(li,a,label,ul):first');
                var total_checked = $('input[type=checkbox]:checked', p).length;
                $(this).html('(' + total_checked + ')');
            });

        }
        
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>

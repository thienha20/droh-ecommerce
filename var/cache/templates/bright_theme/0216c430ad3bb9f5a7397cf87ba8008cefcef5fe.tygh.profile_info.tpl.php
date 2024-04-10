<?php /* Smarty version Smarty-3.1.21, created on 2024-04-10 15:56:14
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\blocks\static_templates\profile_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8982143126616542e9923c6-06780808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0216c430ad3bb9f5a7397cf87ba8008cefcef5fe' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\blocks\\static_templates\\profile_info.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8982143126616542e9923c6-06780808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'images_dir' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6616542e9b26e0_11619838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6616542e9b26e0_11619838')) {function content_6616542e9b26e0_11619838($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_profile_benefits','text_profile_details','text_profile_benefits','text_profile_details'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['runtime']->value['controller']==='profiles') {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']==='add') {?>
    <div class="ty-account-benefits">
        <?php echo $_smarty_tpl->__("text_profile_benefits");?>

    </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='update') {?>
        <div class="ty-account-detail">
            <div>
                <?php echo $_smarty_tpl->__("text_profile_details");?>

            </div>
            <div class="ty-account-detail__image">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>array("image_path"=>((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/profile_details.png","image_x"=>183,"image_y"=>206)), 0);?>

            </div>
        </div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/profile_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/profile_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['controller']==='profiles') {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']==='add') {?>
    <div class="ty-account-benefits">
        <?php echo $_smarty_tpl->__("text_profile_benefits");?>

    </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='update') {?>
        <div class="ty-account-detail">
            <div>
                <?php echo $_smarty_tpl->__("text_profile_details");?>

            </div>
            <div class="ty-account-detail__image">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>array("image_path"=>((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/profile_details.png","image_x"=>183,"image_y"=>206)), 0);?>

            </div>
        </div>
    <?php }?>
<?php }
}?><?php }} ?>

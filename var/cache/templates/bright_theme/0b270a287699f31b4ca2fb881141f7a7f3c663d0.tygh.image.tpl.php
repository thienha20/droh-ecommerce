<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 09:55:07
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\common\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12198671096603c2cb8e7cb5-39677441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b270a287699f31b4ca2fb881141f7a7f3c663d0' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\common\\image.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12198671096603c2cb8e7cb5-39677441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'capture_image' => 0,
    'images' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'image_data' => 0,
    'external' => 0,
    'show_no_image' => 0,
    'image_additional_attrs' => 0,
    'image_link_additional_attrs' => 0,
    'obj_id' => 0,
    'image_id' => 0,
    'show_detailed_link' => 0,
    'link_class' => 0,
    'no_ids' => 0,
    'image_attributes' => 0,
    'generate_image' => 0,
    'images_dir' => 0,
    'lazy_load' => 0,
    'image_initial_src' => 0,
    'image_onclick' => 0,
    'valign' => 0,
    'class' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c2cbeac242_97915155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c2cbeac242_97915155')) {function content_6603c2cbeac242_97915155($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
$_smarty_tpl->_capture_stack[0][] = array("image", null, null); ob_start();
}
$_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
$_smarty_tpl->tpl_vars['generate_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['generate_image']&&!$_smarty_tpl->tpl_vars['external']->value, null, 0);
$_smarty_tpl->tpl_vars['show_no_image'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_no_image']->value)===null||$tmp==='' ? true : $tmp), null, 0);
$_smarty_tpl->tpl_vars['image_additional_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_additional_attrs']->value)===null||$tmp==='' ? array() : $tmp), null, 0);
$_smarty_tpl->tpl_vars['image_link_additional_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_link_additional_attrs']->value)===null||$tmp==='' ? array() : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['image_data']->value) {
$_smarty_tpl->createLocalArrayVariable('image_additional_attrs', null, 0);
$_smarty_tpl->tpl_vars['image_additional_attrs']->value["alt"] = $_smarty_tpl->tpl_vars['image_data']->value['alt'];
$_smarty_tpl->createLocalArrayVariable('image_additional_attrs', null, 0);
$_smarty_tpl->tpl_vars['image_additional_attrs']->value["title"] = $_smarty_tpl->tpl_vars['image_data']->value['alt'];
$_smarty_tpl->createLocalArrayVariable('image_link_additional_attrs', null, 0);
$_smarty_tpl->tpl_vars['image_link_additional_attrs']->value["title"] = $_smarty_tpl->tpl_vars['images']->value['detailed']['alt'];
}
if (!$_smarty_tpl->tpl_vars['obj_id']->value) {
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable(crc32($_smarty_tpl->tpl_vars['image_data']->value['image_path']), null, 0);
} elseif ($_smarty_tpl->tpl_vars['image_id']->value) {
$_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable(crc32($_smarty_tpl->tpl_vars['image_id']->value), null, 0);
} else {
$_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable(uniqid(), null, 0);
}
}
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"common:image")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><a id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']&&$_smarty_tpl->tpl_vars['image_id']->value) {?>data-ca-image-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['image_x'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['image_y'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_link_additional_attrs']->value);
}?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_image_object")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_image_object"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars['image_attributes'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_additional_attrs']->value)===null||$tmp==='' ? array() : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['obj_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['id'] = "det_img_".((string)$_smarty_tpl->tpl_vars['obj_id']->value);
}
if ($_smarty_tpl->tpl_vars['image_data']->value['width']&&!$_smarty_tpl->tpl_vars['image_attributes']->value['width']) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['width'] = $_smarty_tpl->tpl_vars['image_data']->value['width'];
}
if ($_smarty_tpl->tpl_vars['image_data']->value['height']&&!$_smarty_tpl->tpl_vars['image_attributes']->value['height']) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['height'] = $_smarty_tpl->tpl_vars['image_data']->value['height'];
}
if ($_smarty_tpl->tpl_vars['generate_image']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
}
if ($_smarty_tpl->tpl_vars['generate_image']->value) {
$_smarty_tpl->tpl_vars['image_initial_src'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/icons/spacer.gif", null, 0);
} else {
$_smarty_tpl->tpl_vars['image_initial_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['image_path'], null, 0);
}
if ($_smarty_tpl->tpl_vars['lazy_load']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value["data-src"] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
} else {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['src'] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
}
if ($_smarty_tpl->tpl_vars['image_onclick']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['onclick'] = $_smarty_tpl->tpl_vars['image_onclick']->value;
}?><img class="ty-pict <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 /><?php if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><svg class="ty-pict__container" aria-hidden="true" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" viewBox="0 0 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;"><rect fill="transparent" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
"></rect></svg><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_image_object"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} elseif ($_smarty_tpl->tpl_vars['show_no_image']->value) {?><span class="ty-no-image" style="height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; "><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image ty-no-image__icon",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {
if ($_smarty_tpl->tpl_vars['images']->value['detailed_id']) {?><span class="ty-previewer__icon hidden-phone"></span><?php }?></a><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"common:image"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array("icon_image_path", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array("detailed_image_path", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/image.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/image.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
$_smarty_tpl->_capture_stack[0][] = array("image", null, null); ob_start();
}
$_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
$_smarty_tpl->tpl_vars['generate_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['generate_image']&&!$_smarty_tpl->tpl_vars['external']->value, null, 0);
$_smarty_tpl->tpl_vars['show_no_image'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_no_image']->value)===null||$tmp==='' ? true : $tmp), null, 0);
$_smarty_tpl->tpl_vars['image_additional_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_additional_attrs']->value)===null||$tmp==='' ? array() : $tmp), null, 0);
$_smarty_tpl->tpl_vars['image_link_additional_attrs'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_link_additional_attrs']->value)===null||$tmp==='' ? array() : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['image_data']->value) {
$_smarty_tpl->createLocalArrayVariable('image_additional_attrs', null, 0);
$_smarty_tpl->tpl_vars['image_additional_attrs']->value["alt"] = $_smarty_tpl->tpl_vars['image_data']->value['alt'];
$_smarty_tpl->createLocalArrayVariable('image_additional_attrs', null, 0);
$_smarty_tpl->tpl_vars['image_additional_attrs']->value["title"] = $_smarty_tpl->tpl_vars['image_data']->value['alt'];
$_smarty_tpl->createLocalArrayVariable('image_link_additional_attrs', null, 0);
$_smarty_tpl->tpl_vars['image_link_additional_attrs']->value["title"] = $_smarty_tpl->tpl_vars['images']->value['detailed']['alt'];
}
if (!$_smarty_tpl->tpl_vars['obj_id']->value) {
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable(crc32($_smarty_tpl->tpl_vars['image_data']->value['image_path']), null, 0);
} elseif ($_smarty_tpl->tpl_vars['image_id']->value) {
$_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable(crc32($_smarty_tpl->tpl_vars['image_id']->value), null, 0);
} else {
$_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable(uniqid(), null, 0);
}
}
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"common:image")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><a id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']&&$_smarty_tpl->tpl_vars['image_id']->value) {?>data-ca-image-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['image_x'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['image_y'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_link_additional_attrs']->value);
}?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_image_object")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_image_object"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars['image_attributes'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_additional_attrs']->value)===null||$tmp==='' ? array() : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['obj_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['id'] = "det_img_".((string)$_smarty_tpl->tpl_vars['obj_id']->value);
}
if ($_smarty_tpl->tpl_vars['image_data']->value['width']&&!$_smarty_tpl->tpl_vars['image_attributes']->value['width']) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['width'] = $_smarty_tpl->tpl_vars['image_data']->value['width'];
}
if ($_smarty_tpl->tpl_vars['image_data']->value['height']&&!$_smarty_tpl->tpl_vars['image_attributes']->value['height']) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['height'] = $_smarty_tpl->tpl_vars['image_data']->value['height'];
}
if ($_smarty_tpl->tpl_vars['generate_image']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
}
if ($_smarty_tpl->tpl_vars['generate_image']->value) {
$_smarty_tpl->tpl_vars['image_initial_src'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/icons/spacer.gif", null, 0);
} else {
$_smarty_tpl->tpl_vars['image_initial_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['image_path'], null, 0);
}
if ($_smarty_tpl->tpl_vars['lazy_load']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value["data-src"] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
} else {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['src'] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
}
if ($_smarty_tpl->tpl_vars['image_onclick']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value['onclick'] = $_smarty_tpl->tpl_vars['image_onclick']->value;
}?><img class="ty-pict <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 /><?php if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><svg class="ty-pict__container" aria-hidden="true" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" viewBox="0 0 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;"><rect fill="transparent" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
"></rect></svg><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_image_object"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} elseif ($_smarty_tpl->tpl_vars['show_no_image']->value) {?><span class="ty-no-image" style="height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; "><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image ty-no-image__icon",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {
if ($_smarty_tpl->tpl_vars['images']->value['detailed_id']) {?><span class="ty-previewer__icon hidden-phone"></span><?php }?></a><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"common:image"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array("icon_image_path", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array("detailed_image_path", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
<?php }?><?php }} ?>

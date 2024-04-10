<?php /* Smarty version Smarty-3.1.21, created on 2024-04-10 15:53:45
         compiled from "C:\wamp64\www\cscart\design\backend\templates\common\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1886897785661653995b4647-24378007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c98ed03432a92d0ccb4b89299f90779da2657b1' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\common\\image.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1886897785661653995b4647-24378007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'show_detailed_link' => 0,
    'image_data' => 0,
    'image_css_class' => 0,
    'image_id' => 0,
    'image_attributes' => 0,
    'href' => 0,
    'link_css_class' => 0,
    'no_image_css_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_661653995e4566_42086577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_661653995e4566_42086577')) {function content_661653995e4566_42086577($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_image'));
?>
<?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
$_smarty_tpl->tpl_vars['show_detailed_link'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_detailed_link']->value)===null||$tmp==='' ? true : $tmp), null, 0);
$_smarty_tpl->tpl_vars['image_attributes'] = new Smarty_variable(array("src"=>(($tmp = @$_smarty_tpl->tpl_vars['image_data']->value['image_path'])===null||$tmp==='' ? '' : $tmp),"width"=>(($tmp = @$_smarty_tpl->tpl_vars['image_data']->value['width'])===null||$tmp==='' ? '' : $tmp),"height"=>(($tmp = @$_smarty_tpl->tpl_vars['image_data']->value['height'])===null||$tmp==='' ? '' : $tmp),"alt"=>(($tmp = @$_smarty_tpl->tpl_vars['image_data']->value['alt'])===null||$tmp==='' ? '' : $tmp),"title"=>(($tmp = @$_smarty_tpl->tpl_vars['image_data']->value['alt'])===null||$tmp==='' ? '' : $tmp),"class"=>(($tmp = @$_smarty_tpl->tpl_vars['image_css_class']->value)===null||$tmp==='' ? '' : $tmp)), null, 0);
if ($_smarty_tpl->tpl_vars['image_id']->value) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value["id"] = $_smarty_tpl->tpl_vars['image_id']->value;
}
if ($_smarty_tpl->tpl_vars['image_data']->value['generate_image']) {
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value["class"] = "spinner ".((string)$_smarty_tpl->tpl_vars['image_attributes']->value['class']);
$_smarty_tpl->createLocalArrayVariable('image_attributes', null, 0);
$_smarty_tpl->tpl_vars['image_attributes']->value["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
}
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"common:image")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value&&($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value)) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image']->value['image_path'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['href']->value) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?><img <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 /><?php } else { ?><div class="no-image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value&&($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value)) {?></a><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"common:image"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>

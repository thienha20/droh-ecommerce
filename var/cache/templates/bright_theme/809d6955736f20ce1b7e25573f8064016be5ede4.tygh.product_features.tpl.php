<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:08:45
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\views\products\components\product_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11707422546603c5fd0c55e5-09625696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '809d6955736f20ce1b7e25573f8064016be5ede4' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\views\\products\\components\\product_features.tpl',
      1 => 1711520232,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11707422546603c5fd0c55e5-09625696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_features' => 0,
    'feature' => 0,
    'link_text_icon' => 0,
    'hide_affix' => 0,
    'settings' => 0,
    'var' => 0,
    'hide_variant_affix' => 0,
    'variant' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c5fd370819_44213989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c5fd370819_44213989')) {function content_6603c5fd370819_44213989($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']!=smarty_modifier_enum("ProductFeatures::GROUP")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle",'assign'=>'link_text_icon'),$_smarty_tpl);?>

        <div class="ty-product-feature">
        <div class="ty-product-feature__label"><?php echo $_smarty_tpl->tpl_vars['feature']->value['description'];
if (trim($_smarty_tpl->tpl_vars['feature']->value['full_description'])) {
echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'content'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'show_brackets'=>false,'link_text'=>"<span class=\"ty-tooltip-block\">".((string)$_smarty_tpl->tpl_vars['link_text_icon']->value)."</span>",'wysiwyg'=>true), 0);
}?>:</div>

        <?php $_smarty_tpl->tpl_vars['hide_affix'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"), null, 0);?>

        <div class="ty-product-feature__value"><?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']&&!$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?><span class="ty-compare-checkbox"><?php if ($_smarty_tpl->tpl_vars['feature']->value['value']===smarty_modifier_enum("YesNo::YES")) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);
}?></span><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")&&$_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="ty-product-feature__multiple"><?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
$_smarty_tpl->tpl_vars['hide_variant_affix'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['hide_affix']->value, null, 0);
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li class="ty-product-feature__multiple-item"><span class="ty-compare-checkbox"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);?>
</span><?php if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></li><?php }
} ?></ul><?php } elseif (in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),smarty_modifier_enum("ProductFeatures::EXTENDED"),smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")))) {
$_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
break 1;
}
}
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((($tmp = @floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']))===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['value'])===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix']&&!$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
        </div>
    <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")&&$_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <div class="ty-product-feature-group">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'tooltip'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'text'=>$_smarty_tpl->tpl_vars['feature']->value['description']), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0);?>

        </div>
    <?php }?>
<?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_features.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_features.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']!=smarty_modifier_enum("ProductFeatures::GROUP")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle",'assign'=>'link_text_icon'),$_smarty_tpl);?>

        <div class="ty-product-feature">
        <div class="ty-product-feature__label"><?php echo $_smarty_tpl->tpl_vars['feature']->value['description'];
if (trim($_smarty_tpl->tpl_vars['feature']->value['full_description'])) {
echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'content'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'show_brackets'=>false,'link_text'=>"<span class=\"ty-tooltip-block\">".((string)$_smarty_tpl->tpl_vars['link_text_icon']->value)."</span>",'wysiwyg'=>true), 0);
}?>:</div>

        <?php $_smarty_tpl->tpl_vars['hide_affix'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"), null, 0);?>

        <div class="ty-product-feature__value"><?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']&&!$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?><span class="ty-compare-checkbox"><?php if ($_smarty_tpl->tpl_vars['feature']->value['value']===smarty_modifier_enum("YesNo::YES")) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);
}?></span><?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")&&$_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="ty-product-feature__multiple"><?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
$_smarty_tpl->tpl_vars['hide_variant_affix'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['hide_affix']->value, null, 0);
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li class="ty-product-feature__multiple-item"><span class="ty-compare-checkbox"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-compare-checkbox__icon"),$_smarty_tpl);?>
</span><?php if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></li><?php }
} ?></ul><?php } elseif (in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),smarty_modifier_enum("ProductFeatures::EXTENDED"),smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")))) {
$_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
break 1;
}
}
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((($tmp = @floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']))===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['value'])===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix']&&!$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
        </div>
    <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")&&$_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <div class="ty-product-feature-group">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'tooltip'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'text'=>$_smarty_tpl->tpl_vars['feature']->value['description']), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0);?>

        </div>
    <?php }?>
<?php } ?>
<?php }?><?php }} ?>

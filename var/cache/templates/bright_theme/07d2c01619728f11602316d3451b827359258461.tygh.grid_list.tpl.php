<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:01:15
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\blocks\list_templates\grid_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3937175256603c43b38a227-67450587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d2c01619728f11602316d3451b827359258461' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\blocks\\list_templates\\grid_list.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3937175256603c43b38a227-67450587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'no_pagination' => 0,
    'no_sorting' => 0,
    'show_empty' => 0,
    'columns' => 0,
    'item_number' => 0,
    'settings' => 0,
    'splitted_products' => 0,
    'sproducts' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'show_features' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'product_labels' => 0,
    'cur_number' => 0,
    'name' => 0,
    'rating' => 0,
    'old_price' => 0,
    'price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'quick_nav_ids' => 0,
    'show_add_to_cart' => 0,
    'add_to_cart' => 0,
    'form_close' => 0,
    'iteration' => 0,
    'empty_count' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c43b97e775_91957721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c43b97e775_91957721')) {function content_6603c43b97e775_91957721($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_split')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.split.php';
if (!is_callable('smarty_function_math')) include 'C:\\wamp64\\www\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('empty','empty'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['products']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['show_empty']->value) {?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products",'skip_complete'=>true),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
    <?php }?>

    
    <?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y') {?>
        <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['products']->value,"product_id","product_id"), null, 0);?>
    <?php }?>
    <div class="grid-list">
        <?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["sproducts"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["sproducts"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
 $_smarty_tpl->tpl_vars["sproducts"]->iteration++;
 $_smarty_tpl->tpl_vars["sproducts"]->last = $_smarty_tpl->tpl_vars["sproducts"]->iteration === $_smarty_tpl->tpl_vars["sproducts"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sprod"]['last'] = $_smarty_tpl->tpl_vars["sproducts"]->last;
$_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['iteration']++;
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);
echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>
<div class="ty-grid-list__item ty-quick-view-button__wrapper<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y'||$_smarty_tpl->tpl_vars['show_features']->value) {?> ty-grid-list__item--overlay<?php }?>"><?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ty-grid-list__image"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>true), 0);
$_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>
</div><div class="ty-grid-list__item-name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?><span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
$_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><bdi><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</bdi></div><?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value]) {?><div class="grid-list__rating"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>
</div><?php }?><div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?>ty-grid-list__no-price<?php }?>"><?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}
$_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];
$_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];
$_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>
</div><?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data_wrapper", null, null); ob_start(); ?><div class="ty-grid-list__control"><?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list_control")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y') {
echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);
}
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?><div class="button-container"><?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'];?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'])) {
echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data_wrapper'];
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>
</div><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['show_empty']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['sprod']['last']) {
$_smarty_tpl->tpl_vars["iteration"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['iteration'], null, 0);
$_smarty_tpl->_capture_stack[0][] = array("iteration", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:products_multicolumns_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:products_multicolumns_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:products_multicolumns_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["iteration"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['iteration'], null, 0);
if ($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value!=0) {
echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['name'] = "empty_rows";
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total']);
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="ty-product-empty"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span></div></div><?php endfor; endif;
}
}
} ?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/grid_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/grid_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['products']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['show_empty']->value) {?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"splitted_products",'skip_complete'=>true),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "2" : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["cur_number"] = new Smarty_variable(1, null, 0);?>
    <?php }?>

    
    <?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y') {?>
        <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['products']->value,"product_id","product_id"), null, 0);?>
    <?php }?>
    <div class="grid-list">
        <?php  $_smarty_tpl->tpl_vars["sproducts"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sproducts"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["sproducts"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["sproducts"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["sproducts"]->key => $_smarty_tpl->tpl_vars["sproducts"]->value) {
$_smarty_tpl->tpl_vars["sproducts"]->_loop = true;
 $_smarty_tpl->tpl_vars["sproducts"]->iteration++;
 $_smarty_tpl->tpl_vars["sproducts"]->last = $_smarty_tpl->tpl_vars["sproducts"]->iteration === $_smarty_tpl->tpl_vars["sproducts"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sprod"]['last'] = $_smarty_tpl->tpl_vars["sproducts"]->last;
$_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sproducts"]['iteration']++;
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);
echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>
<div class="ty-grid-list__item ty-quick-view-button__wrapper<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y'||$_smarty_tpl->tpl_vars['show_features']->value) {?> ty-grid-list__item--overlay<?php }?>"><?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ty-grid-list__image"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>true), 0);
$_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>
</div><div class="ty-grid-list__item-name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?><span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
$_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><bdi><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</bdi></div><?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value]) {?><div class="grid-list__rating"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>
</div><?php }?><div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?>ty-grid-list__no-price<?php }?>"><?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}
$_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];
$_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];
$_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>
</div><?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data_wrapper", null, null); ob_start(); ?><div class="ty-grid-list__control"><?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list_control")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y') {
echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);
}
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?><div class="button-container"><?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'];?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'])) {
echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data_wrapper'];
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>
</div><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['show_empty']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['sprod']['last']) {
$_smarty_tpl->tpl_vars["iteration"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['sproducts']['iteration'], null, 0);
$_smarty_tpl->_capture_stack[0][] = array("iteration", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:products_multicolumns_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:products_multicolumns_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:products_multicolumns_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["iteration"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['iteration'], null, 0);
if ($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value!=0) {
echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['name'] = "empty_rows";
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["empty_rows"]['total']);
?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="ty-product-empty"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span></div></div><?php endfor; endif;
}
}
} ?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>

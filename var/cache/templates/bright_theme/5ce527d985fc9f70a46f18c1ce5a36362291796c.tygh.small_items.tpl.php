<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:11:14
         compiled from "C:\wamp64\www\cscart\design\themes\responsive\templates\blocks\list_templates\small_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14716355786603c69287bde3-56352515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce527d985fc9f70a46f18c1ce5a36362291796c' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\themes\\responsive\\templates\\blocks\\list_templates\\small_items.tpl',
      1 => 1711520231,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14716355786603c69287bde3-56352515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'products' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'obj_id_prefix' => 0,
    'block' => 0,
    'name' => 0,
    'show_price' => 0,
    'old_price' => 0,
    'price' => 0,
    'rating' => 0,
    'add_to_cart' => 0,
    'form_close' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c6929010f2_43176652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c6929010f2_43176652')) {function content_6603c6929010f2_43176652($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><ul class="ty-template-small">
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']++;
?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_small_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_small_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li class="ty-template-small__item clearfix">
        <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

            <div class="ty-template-small__item-img">
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true), 0);?>
</a>
            </div>
            <div class="ty-template-small__item-description">
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {
echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'], ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php }?>
                <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><bdi><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</bdi>

                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                <div class="ty-template-small__item-price">
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                    
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                </div>
                <?php }?>

                <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>


                <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value])) {?><p><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</p><?php }?>
            </div>
        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

    </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_small_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
</ul><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/small_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/small_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><ul class="ty-template-small">
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["products"]['iteration']++;
?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_small_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_small_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li class="ty-template-small__item clearfix">
        <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>

            <div class="ty-template-small__item-img">
                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'no_ids'=>true), 0);?>
</a>
            </div>
            <div class="ty-template-small__item-description">
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['item_number']=="Y") {
echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'], ENT_QUOTES, 'UTF-8');?>
.&nbsp;<?php }?>
                <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?><bdi><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</bdi>

                <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
                <div class="ty-template-small__item-price">
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                    
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                </div>
                <?php }?>

                <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>


                <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value])) {?><p><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</p><?php }?>
            </div>
        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

    </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_small_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
</ul><?php }?><?php }} ?>

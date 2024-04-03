<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:22:34
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\store_locator\components\search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11652737046603c93a9bb1b6-44409960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6987525e3ccbb318f94f879e520e7dc6cc66ebe0' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\store_locator\\components\\search_form.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11652737046603c93a9bb1b6-44409960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'search' => 0,
    'destinations' => 0,
    'code' => 0,
    'rate_area' => 0,
    'runtime' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c93a9dd1f5_38401342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c93a9dd1f5_38401342')) {function content_6603c93a9dd1f5_38401342($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','rate_area','store_locator.any_rate_area','owner','store_locator.any','marketplace','city','admin_search_button'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="stores_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:search")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="sidebar-field">
                <label for="elm_rate_area"><?php echo $_smarty_tpl->__("rate_area");?>
</label>
                <select id="elm_rate_area" name="main_destination_id">
                    <option value="" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['main_destination_id'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("store_locator.any_rate_area");?>
</option>
                    <?php  $_smarty_tpl->tpl_vars["rate_area"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["rate_area"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["rate_area"]->key => $_smarty_tpl->tpl_vars["rate_area"]->value) {
$_smarty_tpl->tpl_vars["rate_area"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["rate_area"]->key;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['search']->value['main_destination_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_area']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
            <?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="sidebar-field">
                    <label for="elm_owner"><?php echo $_smarty_tpl->__("owner");?>
</label>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"company_id",'show_advanced'=>false,'show_empty_variant'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_id'] ? array($_smarty_tpl->tpl_vars['search']->value['company_id']) : array(),'empty_variant_text'=>$_smarty_tpl->__("store_locator.any"),'predefined_variants'=>array("marketplace"=>$_smarty_tpl->__("marketplace"))), 0);?>

                </div>
            <?php }?>
            <div class="sidebar-field">
                <label for="elm_city"><?php echo $_smarty_tpl->__("city");?>
</label>
                <input type="text" name="city" id="elm_city" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['city'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("admin_search_button");?>
">
        </div>
    </form>
</div><?php }} ?>

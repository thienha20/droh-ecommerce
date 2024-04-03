<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 11:55:13
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\storefronts\components\search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6574000716603def1057141-03851493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e230a21743584a232a40e51dde3f83bcc3b9faa4' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\storefronts\\components\\search_form.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6574000716603def1057141-03851493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'class' => 0,
    'select_mode' => 0,
    'extra' => 0,
    'search' => 0,
    'languages' => 0,
    'currencies' => 0,
    'all_countries' => 0,
    'country_code' => 0,
    'country' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603def10936b4_85447744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603def10936b4_85447744')) {function content_6603def10936b4_85447744($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','name','url','status','all','languages','currencies','countries','vendors','all_vendors'));
?>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
        <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>
<form name="storefronts_search_form"
      action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
      method="get"
      class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden"
           name="select_mode"
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_mode']->value, ENT_QUOTES, 'UTF-8');?>
"
    />

    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


        <div class="sidebar-field">
            <label for="elm_name"
            ><?php echo $_smarty_tpl->__("name");?>
</label>
            <input type="text"
                   name="name"
                   id="elm_name"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
        <div class="sidebar-field">
            <label for="elm_url"
            ><?php echo $_smarty_tpl->__("url");?>
</label>
            <input type="text"
                   name="url"
                   id="elm_url"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
        <div class="sidebar-field">
            <label for="elm_status"
            ><?php echo $_smarty_tpl->__("status");?>
</label>
            <select name="status"
                    id="elm_status"
            >
                <option value=""
                ><?php echo $_smarty_tpl->__("all");?>
</option>
                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['status']===smarty_modifier_enum("StorefrontStatuses::OPEN")) {?>
                            selected
                        <?php }?>
                ><?php echo htmlspecialchars("ON", ENT_QUOTES, 'UTF-8');?>
</option>
                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['status']===smarty_modifier_enum("StorefrontStatuses::CLOSED")) {?>
                            selected
                        <?php }?>
                ><?php echo htmlspecialchars("OFF", ENT_QUOTES, 'UTF-8');?>
</option>
            </select>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
        <div class="row-fluid">
            <div class="group span6 form-horizontal">
                <div class="control-group">
                    <label class="control-label"
                           for="elm_languages"
                    ><?php echo $_smarty_tpl->__("languages");?>
</label>
                    <div class="controls advanced_search__localization">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"language_ids",'input_id'=>"elm_languages",'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['language_ids'],'items'=>$_smarty_tpl->tpl_vars['languages']->value,'id_field'=>"lang_id",'name_field'=>"name",'type'=>"languages",'load_items_url'=>"languages.selector",'class_prefix'=>"localization",'close_on_select'=>"false"), 0);?>

                    </div>
                </div>
            </div>
            <div class="group span6 form-horizontal">
                <div class="control-group">
                    <label class="control-label"
                           for="elm_currencies"
                    ><?php echo $_smarty_tpl->__("currencies");?>
</label>
                    <div class="controls advanced_search__localization">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"currency_ids",'input_id'=>"elm_currencis",'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['currency_ids'],'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'id_field'=>"currency_id",'name_field'=>"description",'type'=>"currencies",'load_items_url'=>"currencies.selector",'class_prefix'=>"localization",'close_on_select'=>"false"), 0);?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="group span12 form-horizontal">
                <div class="control-group">
                    <label for="elm_countries"
                           class="control-label"
                    ><?php echo $_smarty_tpl->__("countries");?>
</label>
                    <div class="controls">
                        <select name="country_codes[]"
                                multiple="multiple"
                                id="elm_countries"
                                size="10"
                        >
                            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['country_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['country_code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_code']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (in_array($_smarty_tpl->tpl_vars['country_code']->value,$_smarty_tpl->tpl_vars['search']->value['country_codes'])) {?>
                                            selected
                                        <?php }?>
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="group span12 form-horizontal">
                <div class="control-group">
                    <label for="elm_companies"
                           class="control-label"
                    ><?php echo $_smarty_tpl->__("vendors");?>
</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_ids'],'view_mode'=>"list",'input_name'=>"company_ids",'checkbox_name'=>"company_ids",'no_item_text'=>$_smarty_tpl->__("all_vendors")), 0);?>

                    </div>
                </div>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"storefronts",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value,'not_saved'=>true), 0);?>

</form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div>
<?php }?>
<?php }} ?>

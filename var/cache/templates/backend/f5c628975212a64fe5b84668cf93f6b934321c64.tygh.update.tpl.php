<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:51:56
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\advanced_import\views\import_presets\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13045816496606731ca65643-72369223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5c628975212a64fe5b84668cf93f6b934321c64' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\update.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13045816496606731ca65643-72369223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preset' => 0,
    'disable_picker' => 0,
    'start_import' => 0,
    'id' => 0,
    'auth' => 0,
    'runtime' => 0,
    'config' => 0,
    'id_var_name' => 0,
    'var_name' => 0,
    'allowed_ext' => 0,
    'images_path' => 0,
    'is_mve' => 0,
    'view_only' => 0,
    'auto_delimiter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6606731cc22d69_23841620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6606731cc22d69_23841620')) {function content_6606731cc22d69_23841620($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_to_json')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.to_json.php';
if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.run_import_via_cron_message','advanced_import.general_settings','file','name','images_directory','file_editor','advanced_import.text_popup_file_editor_notice_full_link','advanced_import.additional_settings','csv_delimiter','import','import','advanced_import.save_selected_file','clone','save','create','advanced_import.general_settings','advanced_import.additional_settings','advanced_import.new_preset'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['preset_id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['disable_picker'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['disable_picker']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              name="import_preset_update_form"
              id="import_preset_update_form"
              enctype="multipart/form-data"
              class="form-horizontal form-edit<?php if ($_smarty_tpl->tpl_vars['start_import']->value) {?> cm-ajax cm-comet<?php }?> import-preset-edit"
              data-ca-advanced-import-element="editor"
              data-ca-advanced-import-preset-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
              data-ca-advanced-import-preset-object-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"
              data-ca-advanced-import-preset-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset'], ENT_QUOTES, 'UTF-8');?>
"
        >

            <input type="hidden" name="preset_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="result_ids" value="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"/>
            <?php if ($_smarty_tpl->tpl_vars['start_import']->value) {?>
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars("import_presets.update&preset_id=".((string)$_smarty_tpl->tpl_vars['id']->value), ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>

            <div id="content_general">

                
                <?php if ($_smarty_tpl->tpl_vars['preset']->value['file']&&$_smarty_tpl->tpl_vars['auth']->value['is_root']=="Y"&&(!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'])) {?>
                    <p><?php echo $_smarty_tpl->__("advanced_import.run_import_via_cron_message");?>
</p>
		            <pre><code><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"advanced_import.import.import","preset_id"=>$_tmp1,"p")), ENT_QUOTES, 'UTF-8');?>
</code></pre>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("advanced_import.general_settings"),'target'=>"#information"), 0);?>


                <div id="information" class="in collapse">

                    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['preset']->value['file']) {?>cm-skip-validation<?php }?>">
                        <input type="hidden"
                               data-ca-advanced-import-element="file_type"
                               name="file_type"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['file_type'])===null||$tmp==='' ? (smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::LOCAL")) : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        />
                        <input type="hidden"
                               name="file"
                               data-ca-advanced-import-element="file"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['file'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        />

                        <?php $_smarty_tpl->tpl_vars['var_name'] = new Smarty_variable("upload[".((string)$_smarty_tpl->tpl_vars['id']->value)."]", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['id_var_name'] = new Smarty_variable("upload_".((string)$_smarty_tpl->tpl_vars['id']->value), null, 0);?>

                        <label for="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("file");?>
:</label>
                        <div class="controls import-preset__fileuploader">
                            <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>$_smarty_tpl->tpl_vars['var_name']->value,'id_var_name'=>$_smarty_tpl->tpl_vars['id_var_name']->value,'allowed_ext'=>(($tmp = @$_smarty_tpl->tpl_vars['allowed_ext']->value)===null||$tmp==='' ? array("csv","xml") : $tmp)), 0);?>

                        </div>
                    </div>

                    <div class="control-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['control_group_meta'], ENT_QUOTES, 'UTF-8');?>
" data-ca-default-hidden="<?php if ($_smarty_tpl->tpl_vars['preset']->value['file']) {?>false<?php } else { ?>true<?php }?>">
                        <label for="target_node" class="control-label">
                            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['title']);?>

                        </label>
                        <div class="controls">
                            <input class="input-large"
                                   type="text"
                                   name="options[target_node]"
                                   id="target_node"
                                   size="55"
                                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['selected_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['default_value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            />
                            <?php if ($_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['description']) {?>
                                <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['preset']->value['options']['target_node']['description']);?>
</p>
                            <?php }?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="elm_preset" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                        <div class="controls">
                            <input class="input-large"
                                   type="text"
                                   name="preset"
                                   id="elm_preset"
                                   size="55"
                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset'], ENT_QUOTES, 'UTF-8');?>
"
                            />
                        </div>
                    </div>

                    <div class="control-group">
                        <?php $_smarty_tpl->tpl_vars['images_path'] = new Smarty_variable($_smarty_tpl->tpl_vars['preset']->value['options']['images_path'], null, 0);?>
                        <label for="images_path" class="control-label"><?php echo $_smarty_tpl->__("images_directory");?>
:</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on" id="advanced_import_images_path_prefix" data-companies-image-directories="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['images_path']->value['companies_image_directories']), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_path']->value['input_prefix'], ENT_QUOTES, 'UTF-8');?>

                                </span>

                                <input id="images_path"
                                       class="input-large prefixed"
                                       type="text"
                                       name="options[images_path]"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_path']->value['display_value'], ENT_QUOTES, 'UTF-8');?>
"
                                />
                            </div>

                            <div id="images_path_dialog" class="hidden"></div>
                            <p class="muted description"><?php ob_start();?><?php echo $_smarty_tpl->__("file_editor");?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->__("advanced_import.text_popup_file_editor_notice_full_link",array("[target]"=>"images_path","[link_text]"=>$_tmp2));?>
</p>
                            <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['images_path']->value['description']);?>
</p>
                        </div>
                    </div>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"import_presets:options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"import_presets:options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"import_presets:options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php if ($_smarty_tpl->tpl_vars['is_mve']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"company_id",'id'=>"elm_company_id",'selected'=>$_smarty_tpl->tpl_vars['preset']->value['company_id'],'disable_company_picker'=>$_smarty_tpl->tpl_vars['disable_picker']->value,'js_action'=>"$".".ceAdvancedImport('changeCompanyId');",'required'=>false,'zero_company_id_name_lang_var'=>"advanced_import.common_preset"), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"company_id",'id'=>"elm_company_id",'selected'=>$_smarty_tpl->tpl_vars['preset']->value['company_id'],'js_action'=>"$".".ceAdvancedImport('changeCompanyId');",'required'=>true,'zero_company_id_name_lang_var'=>"none"), 0);?>

                    <?php }?>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("advanced_import.additional_settings"),'target'=>"#import_file",'meta'=>"collapsed"), 0);?>


                <div id="import_file" class="<?php if ($_smarty_tpl->tpl_vars['view_only']->value) {?>cm-hide-inputs<?php }?> out collapse">

                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("csv_delimiter");?>
:</label>
                        <div class="controls" data-ca-advanced-import-element="delimiter_container">
                            <?php $_smarty_tpl->tpl_vars['auto_delimiter'] = new Smarty_variable(smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO"), null, 0);?>
                            <?php ob_start();
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['options']['delimiter'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['auto_delimiter']->value : $tmp), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("views/exim/components/csv_delimiters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"options[delimiter]",'value'=>$_tmp3,'allow_auto_detect'=>true), 0);?>

                        </div>
                    </div>

                    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('options'=>(($tmp = @$_smarty_tpl->tpl_vars['preset']->value['options'])===null||$tmp==='' ? array() : $tmp),'field_name_prefix'=>"options",'display'=>true,'tab'=>"general"), 0);?>


                    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"advanced_import:update_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"advanced_import:update_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"advanced_import:update_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


                        <?php if ($_smarty_tpl->tpl_vars['start_import']->value) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("import"),'but_role'=>"action",'but_id'=>"advanced_import_start_import",'but_meta'=>"cm-submit hidden cm-advanced-import-start-import",'but_target_form'=>"import_preset_update_form",'but_name'=>"dispatch[advanced_import.import]"), 0);?>

                        <?php }?>
                        <?php ob_start();
echo $_smarty_tpl->__("import");
$_tmp4=ob_get_clean();?><?php ob_start();
if (!$_smarty_tpl->tpl_vars['id']->value||!$_smarty_tpl->tpl_vars['preset']->value['file']) {?><?php echo " hidden";?><?php }
$_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_tmp4,'but_role'=>"action",'but_id'=>"advanced_import_save_and_import",'but_name'=>"dispatch[import_presets.update.import]",'but_target_form'=>"import_preset_update_form",'but_meta'=>"cm-submit btn-primary".$_tmp5), 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['view_only']->value) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("advanced_import.save_selected_file"),'but_role'=>"action",'but_id'=>"advanced_import_upload",'but_meta'=>"btn-primary cm-submit cm-ajax cm-post hidden",'but_target_form'=>"import_preset_update_form",'but_name'=>"dispatch[import_presets.upload.detailed]"), 0);?>

                            <?php ob_start();
echo $_smarty_tpl->__("clone");
$_tmp6=ob_get_clean();?><?php ob_start();
if (!$_smarty_tpl->tpl_vars['id']->value) {?><?php echo " btn-primary";?><?php }
$_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_tmp6,'but_role'=>"action",'but_name'=>"dispatch[advanced_import.clone]",'but_target_form'=>"import_preset_update_form",'but_meta'=>"cm-submit".$_tmp7), 0);?>

                        <?php } else { ?>
                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['id']->value) {?><?php echo $_smarty_tpl->__("save");?>
<?php } else { ?><?php echo $_smarty_tpl->__("create");?>
<?php }
$_tmp8=ob_get_clean();?><?php ob_start();
if (!$_smarty_tpl->tpl_vars['id']->value) {?><?php echo " btn-primary";?><?php }
$_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_tmp8,'but_role'=>"action",'but_name'=>"dispatch[import_presets.update]",'but_target_form'=>"import_preset_update_form",'but_meta'=>"cm-submit".$_tmp9), 0);?>

                        <?php }?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                </div>

            <!--content_general--></div>

            <div class="hidden" id="content_fields">
            <!--content_fields--></div>

            <div class="hidden <?php if ($_smarty_tpl->tpl_vars['view_only']->value) {?>cm-hide-inputs<?php }?>" id="content_options">

                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("advanced_import.general_settings"),'target'=>"#settings_general"), 0);?>


                <div id="settings_general" class="out">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('options'=>(($tmp = @$_smarty_tpl->tpl_vars['preset']->value['options'])===null||$tmp==='' ? array() : $tmp),'field_name_prefix'=>"options",'display'=>true,'tab'=>"settings",'section'=>"general"), 0);?>

                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("advanced_import.additional_settings"),'target'=>"#settings_additional",'meta'=>"collapsed"), 0);?>


                <div id="settings_additional" class="out collapse">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('options'=>(($tmp = @$_smarty_tpl->tpl_vars['preset']->value['options'])===null||$tmp==='' ? array() : $tmp),'field_name_prefix'=>"options",'display'=>true,'tab'=>"settings",'section'=>"additional"), 0);?>

                </div>
            <!--content_options--></div>

        </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>"general"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['preset']->value['preset_id'] ? $_smarty_tpl->tpl_vars['preset']->value['preset'] : $_smarty_tpl->__("advanced_import.new_preset"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>

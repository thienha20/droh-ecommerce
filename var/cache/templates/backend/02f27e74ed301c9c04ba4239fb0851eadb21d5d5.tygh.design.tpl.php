<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:10:07
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\setup_wizard\components\tabs\design.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8456244826603c64f1c0590-93938763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02f27e74ed301c9c04ba4239fb0851eadb21d5d5' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\setup_wizard\\components\\tabs\\design.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8456244826603c64f1c0590-93938763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'app' => 0,
    'available_themes' => 0,
    'layout' => 0,
    'theme' => 0,
    'style' => 0,
    'images_dir' => 0,
    'cse_logo_types' => 0,
    'type' => 0,
    'cse_logos' => 0,
    'id' => 0,
    'image' => 0,
    'installed_theme' => 0,
    'theme_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c64f21dfa5_90988611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c64f21dfa5_90988611')) {function content_6603c64f21dfa5_90988611($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all_vendors','sw.selected_design','sw.edit_design','edit_content_on_site','sw.upload_logo','sw.logo_','sw.logo_','sw.logo_recommended_size_text','save','sw.select_right_design','sw.selected_design','sw.activate','no_themes_available'));
?>
<div id="sw_design_extra">

    <div class="sw-columns-block">
        <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/picker/presets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('config'=>array("current_url"=>fn_url("index.index")),'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'show_empty_variant'=>true,'empty_variant_text'=>$_smarty_tpl->__("all_vendors"),'selected_storefront_id'=>$_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id,'show_all_storefront'=>false,'storefront_picker_link_suffix'=>"#sw_wizard_opener"), 0);?>

    </div>

    <div class="sw-columns-block sw-themes sw-theme-and-logo">
        <?php $_smarty_tpl->tpl_vars['theme'] = new Smarty_variable($_smarty_tpl->tpl_vars['available_themes']->value['current'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['available_themes']->value['current']['theme_name'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme']->value['styles'][$_smarty_tpl->tpl_vars['layout']->value['style_id']], null, 0);?>

        <div class="first-column themes-available" id="sw_selected_design">
            <div>
                <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.selected_design");?>
</h2>
                <span class="pull-right sw-current-theme" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>

            <div class="theme theme-selected">
                <div class="theme-use">
                    <div>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['layout']->value['layout_id']),'but_text'=>$_smarty_tpl->__("sw.edit_design"),'but_role'=>"action",'but_target'=>"_blank",'but_meta'=>"btn-primary cm-post"), 0);?>

                    </div>
                    <div>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"customization.update_mode?type=live_editor&status=enable",'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>"btn-primary cm-post",'but_target'=>"_blank"), 0);?>

                    </div>
                </div>
                <div class="sw-current-theme-preview">
                    <img class="screenshot" src="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['style']->value['image'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/user_styles.png" : $tmp), ENT_QUOTES, 'UTF-8');?>
" alt="">
                </div>
            </div>
        <!--sw_selected_design--></div>

        <div class="second-column sw-logo-manage" id="sw_logos_form">
            <form name="logos_form" class="cm-ajax" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="dispatch" value="setup_wizard.update_logos" />
                <input type="hidden" name="result_ids" value="sw_logos_form" />
                <div class="sw-tabs cm-sw-tabs">
                    <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.upload_logo");?>
</h2>
                    <ul class="pull-right sw-pills">
                        <?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cse_logo_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['logo']->key;
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['type']->value=="theme") {?>class="active"<?php }?>><a data-ca-target-id="elm_sw_logo_section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("sw.logo_".((string)$_smarty_tpl->tpl_vars['type']->value));?>
"><span><?php echo $_smarty_tpl->__("sw.logo_".((string)$_smarty_tpl->tpl_vars['type']->value));?>
</span></a></li>
                        <?php } ?>
                    </ul>
                    <br /><span>(<?php echo $_smarty_tpl->__("sw.logo_recommended_size_text",array("[height]"=>210,"[width]"=>45));?>
)</span>

                    <?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cse_logo_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['logo']->key;
?>

                        <?php if ($_smarty_tpl->tpl_vars['cse_logos']->value&&$_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
                            <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['logo_id'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['cse_logos']->value[$_smarty_tpl->tpl_vars['type']->value]['image'], null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(0, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable(array(), null, 0);?>
                        <?php }?>

                        <div class="<?php if ($_smarty_tpl->tpl_vars['type']->value!="theme") {?>hidden<?php }?> cm-sw-tab-contents" id="elm_sw_logo_section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="text" class="hidden" name="sw_logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
                            <input type="text" class="hidden" name="sw_logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <div class="attach-images">
                                <div class="upload-box clearfix">

                                    <?php echo $_smarty_tpl->getSubTemplate ("views/setup_wizard/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"sw_logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]"), 0);?>


                                    <div class="pull-right">
                                        <button class="btn btn-primary ladda-button" type="submit" data-style="slide-right"><span class="ladda-label"><?php echo $_smarty_tpl->__("save");?>
</span></button>
                                    </div>

                                    <div class="image-wrap pull-left">
                                        <div class="sw-image">
                                            <div class="sw-bg-image cm-sw-logo" data-ca-image-area="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
'); background-repeat: no-repeat; background-position: center center;">
                                                <div class="cm-sw-dark-bg sw-dark-bg sw-bg-switcher"></div>
                                                <div class="cm-sw-light-bg sw-light-bg sw-bg-switcher"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </form>
        <!--sw_logos_form--></div>
    </div>

    <div class="sw-columns-block sw-themes sw-themes-list" id="sw_themes_form">

        <div class="themes-available">
            <h2 class="sw-block-title"><?php echo $_smarty_tpl->__("sw.select_right_design");?>
</h2>

            <?php  $_smarty_tpl->tpl_vars['installed_theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['installed_theme']->_loop = false;
 $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_themes']->value['installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['installed_theme']->key => $_smarty_tpl->tpl_vars['installed_theme']->value) {
$_smarty_tpl->tpl_vars['installed_theme']->_loop = true;
 $_smarty_tpl->tpl_vars['theme_name']->value = $_smarty_tpl->tpl_vars['installed_theme']->key;
?>

                <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value) {?>

                    <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value['styles']) {?>
                        <?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['installed_theme']->value['styles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
                            <div class="sw-theme-preview">

                                <div class="theme <?php if ($_smarty_tpl->tpl_vars['style']->value['style_id']==$_smarty_tpl->tpl_vars['layout']->value['style_id']&&$_smarty_tpl->tpl_vars['layout']->value['theme_name']==$_smarty_tpl->tpl_vars['theme_name']->value) {?>theme-selected<?php }?>">
                                    <div class="theme-title">
                                        <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['style']->value['style_id']==$_smarty_tpl->tpl_vars['layout']->value['style_id']&&$_smarty_tpl->tpl_vars['layout']->value['theme_name']==$_smarty_tpl->tpl_vars['theme_name']->value) {?>
                                        <div class="theme-use">
                                            <div class="sw_selected_design_text">
                                                <span><?php echo $_smarty_tpl->__("sw.selected_design");?>
</span>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="theme-use">
                                            <div>
                                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"setup_wizard.update_themes?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_name']->value)."&style=".((string)$_smarty_tpl->tpl_vars['style']->value['style_id']),'but_text'=>$_smarty_tpl->__("sw.activate"),'but_role'=>"action",'but_meta'=>"btn-primary ladda-button cm-ajax cm-post",'but_target_id'=>"sw_themes_form,sw_selected_design,sw_logos_form"), 0);?>

                                                <div class="sw-notifications-box"></div>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <img class="screenshot" src="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['style']->value['image'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/user_styles.png" : $tmp), ENT_QUOTES, 'UTF-8');?>
" alt="">
                                </div>
                            </div>
                        <?php } ?>

                    <?php }?>
                <?php }?>

            <?php }
if (!$_smarty_tpl->tpl_vars['installed_theme']->_loop) {
?>
                <div class="no-items">
                    <?php echo $_smarty_tpl->__("no_themes_available");?>

                </div>
            <?php } ?>

        </div>
    <!--sw_themes_form--></div>
<!--sw_design_extra--></div>
<?php }} ?>

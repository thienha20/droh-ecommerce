<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:00:10
         compiled from "C:\wamp64\www\cscart\design\backend\templates\common\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5703355576603c3faa60c58-29804415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57ff9ecd39c1357d097d0673911da8611ebbd544' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\common\\pagination.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5703355576603c3faa60c58-29804415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'div_id' => 0,
    'current_url' => 0,
    'config' => 0,
    'search' => 0,
    'show_pagination_open' => 0,
    'pagination_class' => 0,
    'id' => 0,
    'pagination' => 0,
    'save_current_page' => 0,
    'save_current_url' => 0,
    'disable_history' => 0,
    'min_per_page_range' => 0,
    'history_class' => 0,
    'c_url' => 0,
    'pg' => 0,
    'step' => 0,
    'rnd' => 0,
    'pagination_meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c3facd73e2_74908570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c3facd73e2_74908570')) {function content_6603c3facd73e2_74908570($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_math')) include 'C:\\wamp64\\www\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('objects_per_page','pagination_range'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"common:pagination")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"common:pagination"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['div_id']->value)===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove((($tmp = @$_smarty_tpl->tpl_vars['current_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp),"page"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["pagination"] = new Smarty_variable(fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_pagination_open'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_pagination_open']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

    <?php if (Smarty::$_smarty_vars['capture']['pagination_open']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["pagination_meta"] = new Smarty_variable(" paginate-top", null, 0);?>
    <?php }?>

    <?php if (Smarty::$_smarty_vars['capture']['pagination_open']!="Y") {?>
    <div class="cm-pagination-container<?php if ($_smarty_tpl->tpl_vars['pagination_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_class']->value, ENT_QUOTES, 'UTF-8');
}?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
        <?php $_smarty_tpl->tpl_vars["min_per_page_range"] = new Smarty_variable(min($_smarty_tpl->tpl_vars['pagination']->value['per_page_range']), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['save_current_page']->value) {?>
            <input type="hidden" name="page" value="<?php echo htmlspecialchars((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['search']->value['page'])===null||$tmp==='' ? $_REQUEST['page'] : $tmp))===null||$tmp==='' ? 1 : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['save_current_url']->value) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['disable_history']->value) {?>
            <?php $_smarty_tpl->tpl_vars["history_class"] = new Smarty_variable(" cm-history", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["history_class"] = new Smarty_variable(" cm-ajax-cache", null, 0);?>
        <?php }?>
        <?php if (Smarty::$_smarty_vars['capture']['pagination_open']!=="Y"&&$_smarty_tpl->tpl_vars['show_pagination_open']->value||Smarty::$_smarty_vars['capture']['pagination_open']==="Y") {?>
            <div class="pagination-wrap clearfix">

                
                <?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_items']>$_smarty_tpl->tpl_vars['min_per_page_range']->value) {?>
                    <div class="pagination pagination-start">
                        <ul>
                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['current_page']!="full_list"&&$_smarty_tpl->tpl_vars['pagination']->value['total_pages']>0) {?>

                            
                            <li class="<?php if (!$_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>disabled<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>cm-ajax<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>
                                        href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=1"), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="1"
                                        data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-double-angle-left"),$_smarty_tpl);?>

                                </a>
                            </li>

                            
                            <li class="<?php if (!$_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>disabled<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>cm-ajax<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['prev_page']) {?>
                                        href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['prev_page'])), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['prev_page'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-angle-left"),$_smarty_tpl);?>

                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>

                    
                    <div class="pagination-dropdown">

                        <?php  $_smarty_tpl->tpl_vars["pg"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["pg"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['navi_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["pg"]->key => $_smarty_tpl->tpl_vars["pg"]->value) {
$_smarty_tpl->tpl_vars["pg"]->_loop = true;
?>

                            <?php if ($_smarty_tpl->tpl_vars['pg']->value==$_smarty_tpl->tpl_vars['pagination']->value['current_page']) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("pagination_list", null, null); ob_start(); ?>
                                <?php $_smarty_tpl->tpl_vars["range_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['c_url']->value,"items_per_page"), null, 0);?>

                                <?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['per_page_range']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
?>
                                    <li>
                                        <a
                                            data-ca-scroll=".cm-pagination-container"
                                            class="cm-ajax<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-dropdown-per-page"
                                            href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['step']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                            data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->__("objects_per_page",array("[n]"=>$_smarty_tpl->tpl_vars['step']->value));?>

                                        </a>
                                    </li>
                                <?php } ?>

                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"pagination_".((string)$_smarty_tpl->tpl_vars['rnd']->value),'caret'=>true,'hide_actions'=>true,'tools_list'=>Smarty::$_smarty_vars['capture']['pagination_list'],'link_text'=>$_smarty_tpl->__("pagination_range",array("[pagination.range_from]"=>$_smarty_tpl->tpl_vars['pagination']->value['range_from'],"[pagination.range_to]"=>$_smarty_tpl->tpl_vars['pagination']->value['range_to'],"[pagination.total_items]"=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),'override_meta'=>"pagination-selector",'skip_check_permissions'=>"true",'tool_meta'=>((string)$_smarty_tpl->tpl_vars['pagination_meta']->value)), 0);?>

                            <?php }?>
                        <?php } ?>
                    </div>

                    
                    <div class="pagination pagination-end">
                        <ul>
                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['current_page']!="full_list"&&$_smarty_tpl->tpl_vars['pagination']->value['total_pages']>0) {?>

                            
                            <li class="<?php if (!$_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>disabled<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>cm-ajax<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>
                                        href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['next_page'])), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['next_page'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-angle-right"),$_smarty_tpl);?>

                                </a>
                            </li>

                            
                            <li class="<?php if (!$_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>disabled<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                                <a
                                    data-ca-scroll=".cm-pagination-container"
                                    class="<?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>cm-ajax<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['history_class']->value, ENT_QUOTES, 'UTF-8');?>
 pagination-item"
                                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['next_page']) {?>
                                        href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['pagination']->value['total_pages'])), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['total_pages'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-double-angle-right"),$_smarty_tpl);?>

                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    <?php }?>

    <?php if (Smarty::$_smarty_vars['capture']['pagination_open']=="Y") {?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php $_smarty_tpl->_capture_stack[0][] = array("pagination_open", null, null); ob_start(); ?>N<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php } elseif (Smarty::$_smarty_vars['capture']['pagination_open']!="Y") {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("pagination_open", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"common:pagination"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>

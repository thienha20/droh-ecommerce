<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:15:51
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\manage\reviews_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:998228916603c7a79c91a3-16996977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18f8ff9f9bdf4795c355ae12425298b2a5a4dd2d' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\manage\\reviews_table.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '998228916603c7a79c91a3-16996977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_product' => 0,
    'product_reviews_search' => 0,
    'config' => 0,
    'rev' => 0,
    'product_reviews' => 0,
    'product_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c7a79f8c69_29991126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c7a79f8c69_29991126')) {function content_6603c7a79f8c69_29991126($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','product_reviews.rating','message','product','customer','product_reviews.helpfulness','status','date','no_data'));
?>


<?php $_smarty_tpl->tpl_vars['show_product'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_product']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['search'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_reviews_search']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_product_reviews" : $tmp), null, 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_reviews_form" id="product_reviews_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_smarty_tpl->tpl_vars['rev']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("product_reviews_table", null, null); ob_start(); ?>
            <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden longtap-selection">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th class="center mobile-hide table__check-items-column table__check-items-column--disabled">
                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
                            <th width="10%"></th>
                        <?php }?>
                        <th width="43%">
                            <div class="th-text-overflow-wrapper">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"product_review_id",'text'=>$_smarty_tpl->__("id"),'class'=>"th-text-overflow--width-auto"), 0);?>

                                <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"rating_value",'text'=>$_smarty_tpl->__("product_reviews.rating")), 0);?>

                                <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->__("message")), 0);?>

                                <?php if ($_smarty_tpl->tpl_vars['show_product']->value) {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->__("product")), 0);?>

                                <?php }?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->__("customer")), 0);?>

                            </div>
                        </th>
                        <th width="13%">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"helpfulness",'text'=>$_smarty_tpl->__("product_reviews.helpfulness")), 0);?>

                        </th>
                        <th width="10%">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->__("status")), 0);?>

                        </th>
                        <th width="9%" class="mobile-hide">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>"&nbsp;"), 0);?>

                        </th>
                        <th width="15%">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"product_review_timestamp",'text'=>$_smarty_tpl->__("date")), 0);?>

                        </th>
                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['product_review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->key => $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/manage/review_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value,'show_product'=>$_smarty_tpl->tpl_vars['show_product']->value,'rev'=>$_smarty_tpl->tpl_vars['rev']->value), 0);?>

                <?php } ?>
            </table>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>'product_reviews_form','object'=>"product_reviews",'items'=>Smarty::$_smarty_vars['capture']['product_reviews_table']), 0);?>

    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_smarty_tpl->tpl_vars['rev']->value,'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>

</form>
<?php }} ?>

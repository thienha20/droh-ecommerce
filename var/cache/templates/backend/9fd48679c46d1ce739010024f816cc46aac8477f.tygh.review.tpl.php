<?php /* Smarty version Smarty-3.1.21, created on 2024-03-29 10:52:53
         compiled from "C:\wamp64\www\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\update\review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53058102566067355862de7-20972638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd48679c46d1ce739010024f816cc46aac8477f' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\update\\review.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53058102566067355862de7-20972638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'create_new_product_reviews' => 0,
    'product_review' => 0,
    'product_id' => 0,
    'product_reviews_ratings' => 0,
    'settings' => 0,
    'available_message_types' => 0,
    'message_type' => 0,
    'is_allowed_to_update_product_reviews' => 0,
    'user_data' => 0,
    'post_redirect_url' => 0,
    'product_review_data' => 0,
    'countries' => 0,
    'is_allowed_update_reply' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_66067355895ab3_82330247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66067355895ab3_82330247')) {function content_66067355895ab3_82330247($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/wamp64/www/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.rating','product_reviews.your_rating','product_reviews.date','product_reviews.helpfulness','product_reviews.','product_reviews.customer_photos','product_reviews.customer_photos'));
?>


<?php $_smarty_tpl->tpl_vars['MESSAGE_CHARACTERS_THRESHOLD'] = new Smarty_variable(400, null, 0);?>

<section class="cs-product-reviews-update-review">
    <section>
        <header>

            
            <div class="control-group">
                <?php if (!$_smarty_tpl->tpl_vars['create_new_product_reviews']->value) {?>
                    <label class="control-label"><?php echo $_smarty_tpl->__("product_reviews.rating");?>
:</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['product_review']->value['rating_value'],'size'=>"xlarge"), 0);?>

                    </div>
                <?php } else { ?>
                    <label for="<?php echo htmlspecialchars("rating_".((string)$_smarty_tpl->tpl_vars['product_id']->value), ENT_QUOTES, 'UTF-8');?>
" class="control-label ty-control-group__title cm-required cm-multiple-radios">
                        <?php echo $_smarty_tpl->__("product_reviews.your_rating");?>
:
                    </label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/update/review_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value,'size'=>"xlarge"), 0);?>

                    </div>
                <?php }?>
            </div>

            <?php if (!$_smarty_tpl->tpl_vars['create_new_product_reviews']->value) {?>
                
                <div class="control-group">
                    <label class="control-label">
                        <?php echo $_smarty_tpl->__("product_reviews.date");?>
:
                    </label>
                    <div class="controls">
                        <p>
                            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product_review']->value['product_review_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                        </p>
                    </div>
                </div>

                
                <div class="control-group">
                    <label class="control-label">
                        <?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
:
                    </label>
                    <div class="controls">
                        <p>
                            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('helpfulness'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']), 0);?>

                        </p>
                    </div>
                </div>
            <?php }?>
        </header>

        
        <?php  $_smarty_tpl->tpl_vars['message_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_message_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message_type']->key => $_smarty_tpl->tpl_vars['message_type']->value) {
$_smarty_tpl->tpl_vars['message_type']->_loop = true;
?>
            <div class="control-group">
                <label for="product_review_data_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_type']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['message_type']->value==='comment') {?> cm-required<?php }?>">
                    <?php echo $_smarty_tpl->__("product_reviews.".((string)$_smarty_tpl->tpl_vars['message_type']->value));?>
:
                </label>
                <div class="controls">
                    <textarea name="product_review_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_type']->value, ENT_QUOTES, 'UTF-8');?>
]"
                        id="product_review_data_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="input-full cs-textarea-adaptive cs-textarea-adaptive--with-sidebar"
                        style="--text-length: <?php echo htmlspecialchars(mb_strlen($_smarty_tpl->tpl_vars['product_review']->value['message'][$_smarty_tpl->tpl_vars['message_type']->value], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
;"
                    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['message'][$_smarty_tpl->tpl_vars['message_type']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
            </div>
        <?php } ?>

        <?php if (!$_smarty_tpl->tpl_vars['create_new_product_reviews']->value) {?>
            
            <?php if ($_smarty_tpl->tpl_vars['product_review']->value['images']) {?>
                <div class="control-group">
                    <label class="control-label">
                        <?php echo $_smarty_tpl->__("product_reviews.customer_photos");?>
:
                    </label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/review_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_images'=>$_smarty_tpl->tpl_vars['product_review']->value['images'],'show_delete'=>$_smarty_tpl->tpl_vars['is_allowed_to_update_product_reviews']->value&&(defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin",'size'=>"large"), 0);?>

                    </div>
                </div>
            <?php }?>
        <?php } else { ?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("product_reviews.customer_photos");?>
:</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"product_review_data[0]",'is_image'=>true,'multiupload'=>"Y"), 0);?>

                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/update/review_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'post_redirect_url'=>$_smarty_tpl->tpl_vars['post_redirect_url']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0);?>

        <?php }?>

    </section>

    <?php if (!$_smarty_tpl->tpl_vars['create_new_product_reviews']->value) {?>
        
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/update/post_vendor_reply.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_review_reply'=>$_smarty_tpl->tpl_vars['product_review']->value['reply'],'is_allowed_update_reply'=>$_smarty_tpl->tpl_vars['is_allowed_update_reply']->value), 0);?>

    <?php }?>

</section>
<?php }} ?>

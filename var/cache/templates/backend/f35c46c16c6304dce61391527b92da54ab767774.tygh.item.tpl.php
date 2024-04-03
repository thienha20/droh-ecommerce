<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 10:13:23
         compiled from "C:\wamp64\www\cscart\design\backend\templates\views\products\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:530966996603c71370d1c4-29050223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f35c46c16c6304dce61391527b92da54ab767774' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\views\\products\\components\\picker\\item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '530966996603c71370d1c4-29050223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_simple_product' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c713713283_03100645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c713713283_03100645')) {function content_6603c713713283_03100645($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['show_simple_product'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_simple_product']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['show_simple_product']->value) {?>

    ${data.image && data.image.image_path
        ? `<img src="${data.image.image_path}" width="30" height="30" alt="${data.image.alt}" class="object-picker__products-image"/>
        ` : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: 30px; height: 30px;"> <span class="cs-icon glyph-image"></span></div>`
    }

<?php }?>

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <div class="object-picker__products-name-content">
            <span class="object-picker__products-name-text">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
                
                    ${data.product ? data.product : data.text}
                 
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </span>
        </div>
    </div>
</div><?php }} ?>

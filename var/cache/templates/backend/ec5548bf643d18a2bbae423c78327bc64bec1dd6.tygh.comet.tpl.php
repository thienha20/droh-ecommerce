<?php /* Smarty version Smarty-3.1.21, created on 2024-03-27 09:56:34
         compiled from "C:\wamp64\www\cscart\design\backend\templates\common\comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16123552656603c322319585-57203792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec5548bf643d18a2bbae423c78327bc64bec1dd6' => 
    array (
      0 => 'C:\\wamp64\\www\\cscart\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16123552656603c322319585-57203792',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6603c322325465_62231597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6603c322325465_62231597')) {function content_6603c322325465_62231597($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>

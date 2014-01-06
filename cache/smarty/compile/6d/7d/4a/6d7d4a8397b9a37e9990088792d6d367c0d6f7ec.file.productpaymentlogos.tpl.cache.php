<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:53:28
         compiled from "C:\xampp\htdocs\e-commerce\modules\productpaymentlogos\productpaymentlogos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:631152cab558930623-94556638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d7d4a8397b9a37e9990088792d6d367c0d6f7ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\modules\\productpaymentlogos\\productpaymentlogos.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '631152cab558930623-94556638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'banner_title' => 0,
    'banner_link' => 0,
    'module_dir' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab558a48ef1_35894136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab558a48ef1_35894136')) {function content_52cab558a48ef1_35894136($_smarty_tpl) {?>

<!-- Block stores module -->
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
</div>
<div id="product_payment_logos">
	<div class="box-security">
    <h5 class="product-heading-h5"><?php echo $_smarty_tpl->tpl_vars['banner_title']->value;?>
</h5> 
  	<a href="<?php echo $_smarty_tpl->tpl_vars['banner_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['banner_img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner_title']->value;?>
"/></a>                 
  </div>
<?php }?>  



<!-- /Block stores module -->
<?php }} ?>
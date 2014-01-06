<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:08
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockwishlist\blockwishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067752caadc40fb011-14876010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b8dc86b574ea531319bb00901b2e48854003561' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockwishlist\\blockwishlist_top.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067752caadc40fb011-14876010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'wishlist_products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc4208423_79417557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc4208423_79417557')) {function content_52caadc4208423_79417557($_smarty_tpl) {?>
<script type="text/javascript">
	var isLoggedWishlist = <?php if ($_smarty_tpl->tpl_vars['logged']->value){?>true<?php }else{ ?>false<?php }?>;
	var wishlistProductsIds = [];
</script>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlist_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<script type="text/javascript">wishlistProductsIds.push(<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
);</script>
<?php } ?>
<?php }} ?>
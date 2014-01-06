<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:07
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockwishlist\blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2335652caadc3eb0973-56689403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6e38b68d3f07ce73713bc914e590ecc6e08d866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2335652caadc3eb0973-56689403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc3f24721_33268436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc3f24721_33268436')) {function content_52caadc3f24721_33268436($_smarty_tpl) {?>

<div class="wishlist">
	<a
	class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" 
	href="#" 
	rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" 
	onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;" >
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist"),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
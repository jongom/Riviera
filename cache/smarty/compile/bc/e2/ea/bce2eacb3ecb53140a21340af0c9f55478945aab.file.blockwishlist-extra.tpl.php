<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:07
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockwishlist\blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2331052caadc37c52c2-09555412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bce2eacb3ecb53140a21340af0c9f55478945aab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockwishlist\\blockwishlist-extra.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2331052caadc37c52c2-09555412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc3814da3_54770668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc3814da3_54770668')) {function content_52caadc3814da3_54770668($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	<a 
	id="wishlist_button" 
	href="#" 
	onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" 
	rel="nofollow"  
	title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>
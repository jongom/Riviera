<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:40
         compiled from "C:\xampp\htdocs\Reveria\themes\default-bootstrap\modules\blockwishlist\blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29816543447583f0e77-64272107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dd139d05dd46f87cd39da2cc98542ac658892fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\themes\\default-bootstrap\\modules\\blockwishlist\\blockwishlist-extra.tpl',
      1 => 1412712207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29816543447583f0e77-64272107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344758409d80_43379737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344758409d80_43379737')) {function content_54344758409d80_43379737($_smarty_tpl) {?>

<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>

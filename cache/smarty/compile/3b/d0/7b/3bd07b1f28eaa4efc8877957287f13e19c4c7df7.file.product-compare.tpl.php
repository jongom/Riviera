<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:31
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1914552caaddb97c7d4-40891317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bd07b1f28eaa4efc8877957287f13e19c4c7df7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\product-compare.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914552caaddb97c7d4-40891317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'paginationId' => 0,
    'compared_products' => 0,
    'product' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caaddbb8c898_34019496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caaddbb8c898_34019496')) {function content_52caaddbb8c898_34019496($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
	<?php if (!isset($_smarty_tpl->tpl_vars['paginationId']->value)||$_smarty_tpl->tpl_vars['paginationId']->value==''){?>
		<script type="text/javascript">
		// <![CDATA[
			var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
			var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
			var comparator_max_item = <?php echo $_smarty_tpl->tpl_vars['comparator_max_item']->value;?>
;
			var comparedProductsIds = [];
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['compared_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['product']->key;
?>comparedProductsIds.push(<?php echo $_smarty_tpl->tpl_vars['product']->value;?>
);<?php } ?>
		//]]>
		</script>
	<?php }?>
	<form method="post" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), 'html', 'UTF-8');?>
" onsubmit="true" class="compare-form">
		<button type="submit" class="btn btn-default button button-medium bt_compare bt_compare<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)){?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" disabled="disabled">
			<span><?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
 (<strong class="total-compare-val"><?php echo count($_smarty_tpl->tpl_vars['compared_products']->value);?>
</strong>)<i class="icon-chevron-right right"></i></span>
		</button>
		<input type="hidden" name="compare_product_count" class="compare_product_count" value="<?php echo count($_smarty_tpl->tpl_vars['compared_products']->value);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
	</form>
<?php }?><?php }} ?>
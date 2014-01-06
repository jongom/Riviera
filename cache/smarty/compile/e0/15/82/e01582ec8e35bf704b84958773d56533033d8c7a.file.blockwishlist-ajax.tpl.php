<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:07
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockwishlist\blockwishlist-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2791352caadc333f2e5-25433652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01582ec8e35bf704b84958773d56533033d8c7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockwishlist\\blockwishlist-ajax.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2791352caadc333f2e5-25433652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc36cda39_97969473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc36cda39_97969473')) {function content_52caadc36cda39_97969473($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
	<dl class="products">
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
			<dt class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>last_item<?php }else{ ?>item<?php }?>">
				<span class="quantity-formated">
					<span class="quantity"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
</span>x
				</span>
				<a 
				class="cart_block_product_name" 
				href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), 'html', 'UTF-8');?>
" 
				title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" >
					<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],13,'...'), 'html', 'UTF-8');?>

				</a>
				<a 
				class="ajax_cart_block_remove_link" 
				href="javascript:;" 
				onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
, '0');"
				rel="nofollow" 
				title="<?php echo smartyTranslate(array('s'=>'remove this product from my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
					<i class="icon-remove-sign"></i>
				</a>
			</dt>
			<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?>
			<dd class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>last_item<?php }else{ ?>item<?php }?>">
				<a 
				href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite']), 'html', 'UTF-8');?>
" 
				title="<?php echo smartyTranslate(array('s'=>'Product detail'),$_smarty_tpl);?>
">
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['attributes_small'], 'html', 'UTF-8');?>

				</a>
			</dd>
			<?php }?>
		<?php } ?>
	</dl>
<?php }else{ ?>
	<dl class="products no-products">
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value){?>
			<dt><?php echo smartyTranslate(array('s'=>'You must create a wishlist before adding products','mod'=>'blockwishlist'),$_smarty_tpl);?>
</dt>
		<?php }else{ ?>
			<dt><?php echo smartyTranslate(array('s'=>'No products','mod'=>'blockwishlist'),$_smarty_tpl);?>
</dt>
		<?php }?>
	</dl>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:09
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockwishlist\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2845652caadc52a26b1-25638418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '737ff7152a1e453b62155a7101a8748e43d5d1d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockwishlist\\view.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2845652caadc52a26b1-25638418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlists' => 0,
    'current_wishlist' => 0,
    'wishlist' => 0,
    'base_dir_ssl' => 0,
    'products' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'product' => 0,
    'link' => 0,
    'ajax' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc5eb7a12_78914671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc5eb7a12_78914671')) {function content_52caadc5eb7a12_78914671($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<div id="view_wishlist">
	<h1 class="page-heading bottom-indent">
		<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</h1>
	<?php if ($_smarty_tpl->tpl_vars['wishlists']->value){?>
		<p>
			<strong class="dark">
				<?php echo smartyTranslate(array('s'=>'Other wishlists of','mod'=>'blockwishlist'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['current_wishlist']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['current_wishlist']->value['lastname'];?>
:
			</strong>
			<?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['total'] = $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value){
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist']!=$_smarty_tpl->tpl_vars['current_wishlist']->value['id_wishlist']){?>
					<a 
					href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/blockwishlist/view.php?token=<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['token'];?>
"  
					rel="nofollow"
					title="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['name'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['name'];?>

					</a>
					<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>
						/
					<?php }?>
				<?php }?>
			<?php } ?>
		</p>
	<?php }?>

	<div class="wlp_bought">
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
		<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

		<ul class="row wlp_bought_list">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
			<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

			<?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0){?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0){?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, null, 0);?><?php }?>
				<li 
				id="wlp_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" 
				class="ajax_block_product col-xs-12 col-sm-6 col-md-4 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0){?> last-in-line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1){?> first-in-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)){?>last-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0){?>last-item-of-tablet-line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1){?>first-item-of-tablet-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['total']-$_smarty_tpl->tpl_vars['totModuloTablet']->value)){?>last-tablet-line<?php }?>">
					<div class="row">
						<div class="col-xs-6 col-sm-12">
						   <div class="product_image">
								<a 
								href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), 'html', 'UTF-8');?>
" 
								title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
									<img 
									class="replace-2x img-responsive" 
									src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'home_default'), 'html', 'UTF-8');?>
" 
									alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" />
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-12">
							<div class="product_infos">
								<p id="s_title" class="product-name">
									<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), 'html', 'UTF-8');?>

									<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?>
										<a 
										href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), 'html', 'UTF-8');?>
" 
										title="<?php echo smartyTranslate(array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
											<small><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['attributes_small'], 'html', 'UTF-8');?>
</small>
										</a>
									<?php }?>
								</p>
								<div class="wishlist_product_detail">
									<p class="form-group">
										<label for="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
">
											<?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl);?>
:
										</label>
										<input class="form-control grey" type="text" id="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
" size="3"  />
									</p>
									<p class="form-group selector1">
										<label><?php echo smartyTranslate(array('s'=>'Priority','mod'=>'blockwishlist'),$_smarty_tpl);?>
: </label>
										<select id="priority_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" class="form-control">
											<option value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==0){?> selected="selected"<?php }?>>
												<?php echo smartyTranslate(array('s'=>'High','mod'=>'blockwishlist'),$_smarty_tpl);?>

											</option>
											<option value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==1){?> selected="selected"<?php }?>>
												<?php echo smartyTranslate(array('s'=>'Medium','mod'=>'blockwishlist'),$_smarty_tpl);?>

											</option>
											<option value="2"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority']==2){?> selected="selected"<?php }?>>
												<?php echo smartyTranslate(array('s'=>'Low','mod'=>'blockwishlist'),$_smarty_tpl);?>

											</option>
										</select>
									</p>
									<div class="btn_action">
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['attribute_quantity']>=1||!isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_quantity']>=1){?>
											<?php if (!$_smarty_tpl->tpl_vars['ajax']->value){?>
												<form id="addtocart_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), 'html', 'UTF-8');?>
" method="post">
													<p class="hidden">
														<input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" id="product_page_product_id" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
														<input type="hidden" name="id_product_attribute" id="idCombination" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
" />
													</p>
												</form>
											<?php }?>
											<a
											href="javascript:void(0);"
											class="button ajax_add_to_cart_button btn btn-default"
											onclick="WishlistBuyProduct('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['token']->value, 'html', 'UTF-8');?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', this, <?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>
);"
											title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeatured'),$_smarty_tpl);?>
"
											rel="nofollow">
												<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
											</a>
										<?php }else{ ?>
											<span class="button ajax_add_to_cart_button btn btn-default disabled">
												<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
											</span>
										<?php }?>
										<a 
										class="button lnk_view btn btn-default"
										href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), 'html', 'UTF-8');?>
"
										title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>
"
										rel="nofollow">
											<span><?php echo smartyTranslate(array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
										</a>
									</div> <!-- .btn_action -->
								</div> <!-- .wishlist_product_detail -->
							</div> <!-- .product_infos -->
						</div>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div> 
</div> <!-- #view_wishlist --><?php }} ?>
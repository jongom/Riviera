<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:49:16
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200152cab45c32f668-83103129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbe4e61577519a31b56340229d9bee85128a6d45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\product-list.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200152cab45c32f668-83103129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'page_name' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'id' => 0,
    'class' => 0,
    'nbItemsPerLineMobile' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'totModuloMobile' => 0,
    'product' => 0,
    'link' => 0,
    'homeSize' => 0,
    'quick_view' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45d1e7e60_12397393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45d1e7e60_12397393')) {function content_52cab45d1e7e60_12397393($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)){?>
	
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='product'){?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(3, null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(3, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(2, null, 0);?>
	<?php }?>
	
	<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

	<!-- Products list -->
	<ul<?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value){?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="product_list grid row<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value){?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
		<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value,'assign'=>'totModuloMobile'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0){?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0){?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value==0){?><?php $_smarty_tpl->tpl_vars['totModuloMobile'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value, null, 0);?><?php }?>
		<li class="ajax_block_product <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'||$_smarty_tpl->tpl_vars['page_name']->value=='product'){?>col-xs-12 col-sm-4 col-md-3<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0){?> last-in-line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1){?> first-in-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)){?>last-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0){?>last-item-of-tablet-line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1){?>first-item-of-tablet-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==0){?>last-item-of-mobile-line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==1){?>first-item-of-mobile-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModuloMobile']->value)){?>last-mobile-line<?php }?>">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a
							class="product_img_link"
							href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'html', 'UTF-8');?>
"  
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
"
							itemprop="url">
							<img 
								class="replace-2x img-responsive" 
								src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), 'html', 'UTF-8');?>
" 
								alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'html', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
<?php }?>" 
								title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'html', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
<?php }?>" 
								<?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)){?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?>
								itemprop="image" />
						</a>
						<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value){?>
							<a  
								class="quick-view"
								href="#" 
								rel="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'html', 'UTF-8');?>
">
									<span>Quick view</span>
							</a>
						<?php }?>
						<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))){?>
							<div 
								class="content_price"
								itemprop="offers" 
								itemscope 
								itemtype="http://schema.org/Offer">
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?>
									<span itemprop="price" class="price product-price">
										<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
									</span>
									<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
									<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']){?>
										<span class="old-price product-price">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

										</span>
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage'){?>
											<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
										<?php }?>
									<?php }?>
								<?php }?>
							</div>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?>
							<span class="new-box">
								<span class="new-label"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span>
							</span>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
							<span class="sale-box">
								<span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span>
							</span>
						<?php }?>
					</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']){?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?>
						<a 
							class="product-name" 
							href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'html', 'UTF-8');?>
" 
							title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
"
							itemprop="url" >
							<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],45,'...'), 'html', 'UTF-8');?>

						</a>
					</h5>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

					<p class="product-desc" itemprop="description">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>

					</p>
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))){?>
					<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?>
							<span itemprop="price" class="price product-price">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
							</span>
							<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']){?>
								<span class="old-price product-price">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

								</span>
								<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage'){?>
									<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
								<?php }?>
							<?php }?>
						<?php }?>
					</div>
					<?php }?>
					<div class="button-container">
						<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
							<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)){?>
								<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)){?>
									<a
										class="button ajax_add_to_cart_button btn btn-default" 
										href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), 'html', 'UTF-8');?>
"
										rel="nofollow"
										title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"
										data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
										<span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
									</a>
								<?php }else{ ?>
									<a
										class="button ajax_add_to_cart_button btn btn-default"
										href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$product.id_product|intval}',false), 'html', 'UTF-8');?>
"
										rel="nofollow"
										title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"
										data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
										<span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
									</a>
								<?php }?>						
							<?php }else{ ?>
								<span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
								</span>
							<?php }?>
						<?php }?>
						<a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'], 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
">
							<span><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</span>
						</a>
					</div>
					
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['color_list'])){?>
						<div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['product']->value['color_list'];?>
 </div>
					<?php }?>

					<div class="product-flags">
						<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))){?>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']){?>
								<span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span>
							<?php }?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
							<?php }elseif(isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
								<span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
							<?php }?>
					</div>
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))){?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)){?>
							<span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
								<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)){?>
									<span class="available-now">
										<link itemprop="availability" href="http://schema.org/InStock" /><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>

									</span>
								<?php }elseif((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)){?>
									<span class="available-dif">
										<link itemprop="availability" href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options'),$_smarty_tpl);?>

									</span>
								<?php }else{ ?>
									<span class="out-of-stock">
										<link itemprop="availability" href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>

									</span>
								<?php }?>
							</span>
						<?php }?>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'){?>
	 				<div class="functional-buttons clearfix">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

						<?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
							<div class="compare">
								<a class="addToCompare" href="#" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" onClick="addToCompare('<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
'); return false;"><?php echo smartyTranslate(array('s'=>'Add to Compare'),$_smarty_tpl);?>
</a>
							</div>
						<?php }?>
					</div>
				<?php }?>
			</div><!-- .product-container> -->
		</li>
	<?php } ?>
	</ul>
<!-- Script for transformation Grid/List layouts -->
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product'){?>
	<script type="text/javascript">
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
		$('document').ready(function(){
			blockHover();
		});
	</script>
<?php }?>
<script type="text/javascript">
	function blockHover(status) {
		$('.product_list.grid li.ajax_block_product').each(function() {
			$(this).find('.product-container').hover(
			function(){
				if ($('body').find('.container').width() == 1170)
				$(this).parent().addClass('hovered'); 
			},
			function(){
				if ($('body').find('.container').width() == 1170)
				$(this).parent().removeClass('hovered');
			}
		)});	
	}
</script>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='product'){?>  <!--// excluding page for Grid/List-->
	<script type="text/javascript"><!--
		function display(view) {
			if (view == 'list') {
				$('ul.product_list').removeClass('grid').addClass('list row');
				$('.product_list > li').removeClass('col-xs-12 col-sm-6 col-md-4').addClass('col-xs-12');
				$('.product_list > li').each(function(index, element) {
					html = '';
					html = '<div class="product-container"><div class="row">';
						html += '<div class="left-block col-xs-4 col-xs-5 col-md-4">' + $(element).find('.left-block').html() + '</div>';
						html += '<div class="center-block col-xs-4 col-xs-7 col-md-4">';
							html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
							html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
							var rating = $(element).find('.comments_note').html(); // check : rating
							if (rating != null) { 
								html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div>';
							}
							html += '<p class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
							var colorList = $(element).find('.color-list-container').html();
							if (colorList != null) {
								html += '<div class="color-list-container">'+ colorList +'</div>';
							}
							var availability = $(element).find('.availability').html();	// check : catalog mode is enabled
							if (availability != null) {
								html += '<span class="availability">'+ availability +'</span>';
							}
						html += '</div>';	
						html += '<div class="right-block col-xs-4 col-xs-12 col-md-4"><div class="right-block-content row">';
							var price = $(element).find('.content_price').html();       // check : catalog mode is enabled
							if (price != null) { 
								html += '<div class="content_price col-xs-5 col-md-12">'+ price + '</div>';
							}
							html += '<div class="button-container col-xs-7 col-md-12">'+ $(element).find('.button-container').html() +'</div>';
							html += '<div class="functional-buttons clearfix col-sm-12">' + $(element).find('.functional-buttons').html() + '</div>';
						html += '</div>';
					html += '</div></div>';
				$(element).html(html);
				});		
				$('.display').find('li#list').addClass('selected');
				$('.display').find('li#grid').removeAttr('class');
				$.totalStorage('display', 'list');
				if (typeof ajaxCart != 'undefined')      // cart button reload
					ajaxCart.overrideButtonsInThePage();
				if (typeof quick_view != 'undefined') 	// qick view button reload
					quick_view();
			} else {
				$('ul.product_list').removeClass('list').addClass('grid row');
				$('.product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-md-4');
				$('.product_list > li').each(function(index, element) {
				html = '';
				html += '<div class="product-container">';
					html += '<div class="left-block">' + $(element).find('.left-block').html() + '</div>';
					html += '<div class="right-block">';
						html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
						html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
						var rating = $(element).find('.comments_note').html(); // check : rating
							if (rating != null) { 
								html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div>';
							}
						html += '<p itemprop="description" class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
						var price = $(element).find('.content_price').html(); // check : catalog mode is enabled
							if (price != null) { 
								html += '<div class="content_price">'+ price + '</div>';
							}
						html += '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="button-container">'+ $(element).find('.button-container').html() +'</div>';
						var colorList = $(element).find('.color-list-container').html();
						if (colorList != null) {
							html += '<div class="color-list-container">'+ colorList +'</div>';
						}
						var availability = $(element).find('.availability').html(); // check : catalog mode is enabled
						if (availability != null) {
							html += '<span class="availability">'+ availability +'</span>';
						}
					html += '</div>';
					html += '<div class="functional-buttons clearfix">' + $(element).find('.functional-buttons').html() + '</div>';
				html += '</div>';		
				$(element).html(html);
				});
				$('.display').find('li#grid').addClass('selected');
				$('.display').find('li#list').removeAttr('class');
				$.totalStorage('display', 'grid');			
				if (typeof ajaxCart != 'undefined') 	// cart button reload
					ajaxCart.overrideButtonsInThePage();
				if (typeof quick_view != 'undefined') 	// qick view button reload
					quick_view();
				blockHover();
			}	
		}
	view = $.totalStorage('display');
	if (view) {
		display(view);
	} else {
		display('grid');
	}
	//--></script>
<?php }?>
<?php }?><?php }} ?>
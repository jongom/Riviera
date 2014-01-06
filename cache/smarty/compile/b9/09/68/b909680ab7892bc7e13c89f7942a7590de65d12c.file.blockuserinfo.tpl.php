<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:06
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockuserinfo\blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1350652caadc2345a86-26555361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b909680ab7892bc7e13c89f7942a7590de65d12c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockuserinfo\\blockuserinfo.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1350652caadc2345a86-26555361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'order_process' => 0,
    'link' => 0,
    'cart_qties' => 0,
    'priceDisplay' => 0,
    'blockuser_cart_flag' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc28ff216_30695256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc28ff216_30695256')) {function content_52caadc28ff216_30695256($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<!-- Block user information module HEADER -->
<div id="header_user" <?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>class="header_user_catalog"<?php }?>>
	<div id="header_nav">
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
		<div id="shopping_cart">
			<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow"><b><?php echo smartyTranslate(array('s'=>'Cart:','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</b>
			<span class="ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> unvisible<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
			<span class="ajax_cart_product_txt<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value!=1){?> unvisible<?php }?>"><?php echo smartyTranslate(array('s'=>'product','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value<2){?> unvisible<?php }?>"><?php echo smartyTranslate(array('s'=>'products','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_total<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> unvisible<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?>
					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
						<?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

					<?php }?>
				<?php }?>
			</span>
			<span class="ajax_cart_no_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?> unvisible<?php }?>"><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			</a>
		</div>
		<?php }?>
	</div>
</div>
<!-- /Block user information module HEADER --><?php }} ?>
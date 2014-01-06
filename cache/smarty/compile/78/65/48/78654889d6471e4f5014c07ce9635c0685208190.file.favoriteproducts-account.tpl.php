<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:11
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\favoriteproducts\views\templates\front\favoriteproducts-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1087352caadc7cfb408-25212983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78654889d6471e4f5014c07ce9635c0685208190' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\front\\favoriteproducts-account.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1087352caadc7cfb408-25212983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'favoriteProducts' => 0,
    'favoriteProduct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc80d8882_09343787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc80d8882_09343787')) {function content_52caadc80d8882_09343787($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<script type="text/javascript">
$('document').ready(function()
{
	$('a[rel^=ajax_id_favoriteproduct_]').click(function()
	{
		var idFavoriteProduct =  $(this).attr('rel').replace('ajax_id_favoriteproduct_', '');
		var parent = $(this).parent().parent();

		$.ajax({
			url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),true));?>
",
			type: "POST",
			data: {
				'id_product': idFavoriteProduct,
				'ajax': true
			},
			success: function(result)
			{
				if (result == '0')
				{
					parent.fadeOut("normal", function()
					{
						parent.remove();
					});
				}
 		 	}
		});
	});
});
</script>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'html', 'UTF-8');?>
">
		<?php echo smartyTranslate(array('s'=>'My account','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</a>
		<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="favoriteproducts_block_account">
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['favoriteProducts']->value){?>
    	<ul class="row">
			<?php  $_smarty_tpl->tpl_vars['favoriteProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['favoriteProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favoriteProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['favoriteProduct']->key => $_smarty_tpl->tpl_vars['favoriteProduct']->value){
$_smarty_tpl->tpl_vars['favoriteProduct']->_loop = true;
?>
			<li class="col-xs-12">
            	<div class="favoriteproduct clearfix inner-content">
                    <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['favoriteProduct']->value['id_shop']), 'html', 'UTF-8');?>
" class="product_img_link">
                        <img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['favoriteProduct']->value['image'],'medium_default'), 'html', 'UTF-8');?>
" alt=""/></a>
                    <p class="s_title_block"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['favoriteProduct']->value['id_shop']), 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['favoriteProduct']->value['name'], 'html', 'UTF-8');?>
</a></p>
                    <div class="product_desc"><?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['favoriteProduct']->value['description_short']), 'html', 'UTF-8');?>
</div>
                    <div class="remove">
                    	<a href="#" onclick="return false" rel="ajax_id_favoriteproduct_<?php echo $_smarty_tpl->tpl_vars['favoriteProduct']->value['id_product'];?>
"><i class="icon-remove"></i></a>
                    </div>
                </div>
			</li>
			<?php } ?>
        </ul>
	<?php }else{ ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No favorite products have been determined just yet. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</p>
	<?php }?>

	<ul class="footer_links clearfix">
		<li>
			<a class="btn btn-default button button-small" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'html', 'UTF-8');?>
"><span><i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Back to your account','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span></a></li>
	</ul>
</div><?php }} ?>
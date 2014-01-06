<?php /*%%SmartyHeaderCode:1158352cab45b69cb43-71731451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c330da08f85bbf86366c9e8f79f9e050e8d171b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158352cab45b69cb43-71731451',
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45b757c57_53732748',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45b757c57_53732748')) {function content_52cab45b757c57_53732748($_smarty_tpl) {?><div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=334341610034299";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<div id="facebook_block" class="col-xs-4">
	<h4 >Suivez-nous sur Facebook!</h4>
	<div class="facebook-fanbox">
		<div
			class="fb-like-box"
			data-href="http://www.facebook.com/prestashop"
			data-colorscheme="light"
			data-show-faces="true"
			data-header="false"
			data-stream="false"
			data-show-border="false">
		</div>
	</div>
</div>
<?php }} ?>
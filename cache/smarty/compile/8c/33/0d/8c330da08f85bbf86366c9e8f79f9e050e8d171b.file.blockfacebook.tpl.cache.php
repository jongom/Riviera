<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:49:15
         compiled from "C:\xampp\htdocs\e-commerce\modules\blockfacebook\blockfacebook.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45b725860_06080845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45b725860_06080845')) {function content_52cab45b725860_06080845($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!=''){?>
<div id="fb-root"></div>
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
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div
			class="fb-like-box"
			data-href="http://www.facebook.com/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebookurl']->value, 'html', 'UTF-8');?>
"
			data-colorscheme="light"
			data-show-faces="true"
			data-header="false"
			data-stream="false"
			data-show-border="false">
		</div>
	</div>
</div>
<?php }?><?php }} ?>
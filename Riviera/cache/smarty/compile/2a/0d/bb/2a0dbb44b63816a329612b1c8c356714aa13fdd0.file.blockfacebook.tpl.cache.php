<?php /* Smarty version Smarty-3.1.19, created on 2014-10-14 00:18:27
         compiled from "C:\xampp\htdocs\Riviera\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28437543c4fb3ed7bb1-59309348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a0dbb44b63816a329612b1c8c356714aa13fdd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1413236928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28437543c4fb3ed7bb1-59309348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c4fb3ef26e1_99599875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c4fb3ef26e1_99599875')) {function content_543c4fb3ef26e1_99599875($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>

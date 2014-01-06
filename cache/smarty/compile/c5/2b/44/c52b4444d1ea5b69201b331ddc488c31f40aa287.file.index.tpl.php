<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:29
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1583352caad9d73edd1-96249837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c52b4444d1ea5b69201b331ddc488c31f40aa287' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\mobile\\index.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1583352caad9d73edd1-96249837',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caad9d75a5a5_32716286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caad9d75a5a5_32716286')) {function content_52caad9d75a5a5_32716286($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>
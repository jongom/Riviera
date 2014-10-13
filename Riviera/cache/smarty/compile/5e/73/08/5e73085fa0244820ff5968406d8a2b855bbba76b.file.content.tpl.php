<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:53:12
         compiled from "C:\xampp\htdocs\Riviera\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17898543c49c8ef6997-73919888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e73085fa0244820ff5968406d8a2b855bbba76b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1413236844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17898543c49c8ef6997-73919888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49c8f0a250_45864857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49c8f0a250_45864857')) {function content_543c49c8f0a250_45864857($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>

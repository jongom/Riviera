<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:07
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:749352caad87ae9fc0-77370281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b86b0fcfbfc785b6c2c070e3ba9803a0c65f7d43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\404.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749352caad87ae9fc0-77370281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
    'link' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caad87d47a07_92976464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caad87d47a07_92976464')) {function content_52caad87d47a07_92976464($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<div class="pagenotfound">
	<div class="img-404">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/img-404.jpg" alt="<?php echo smartyTranslate(array('s'=>'pagenotfound'),$_smarty_tpl);?>
" />
    </div>
	<h1><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h1>

	<p>
		<?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

	</p>

	<h3><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), 'html', 'UTF-8');?>
" method="post" class="std">
		<fieldset>
			<div>
				<label for="search_query"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
				<input id="search_query" name="search_query" type="text" class="form-control grey" />
                <button type="submit" name="Submit" value="OK" class="btn btn-default button button-small"><span><?php echo smartyTranslate(array('s'=>'Ok'),$_smarty_tpl);?>
</span></button>
			</div>
		</fieldset>
	</form>

	<div class="buttons"><a class="btn btn-default button button-medium" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><span><i class="icon-chevron-left left"></i><?php echo smartyTranslate(array('s'=>'Home page'),$_smarty_tpl);?>
</span></a></div>
</div><?php }} ?>
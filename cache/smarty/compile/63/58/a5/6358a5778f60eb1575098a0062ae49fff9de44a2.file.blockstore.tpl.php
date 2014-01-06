<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:05
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockstore\blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:696652caadc1a8b000-93184103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6358a5778f60eb1575098a0062ae49fff9de44a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockstore\\blockstore.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '696652caadc1a8b000-93184103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc1c2eb33_08468116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc1c2eb33_08468116')) {function content_52caadc1c2eb33_08468116($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a></p>
	<div class="block_content blockstore">
		<p class="store_image"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" /></a></p>
        <p class="store-description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.</p>
		<div>
			<a class="btn btn-default button button-small" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
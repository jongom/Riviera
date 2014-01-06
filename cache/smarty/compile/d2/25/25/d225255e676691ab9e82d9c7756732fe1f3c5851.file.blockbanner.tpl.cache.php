<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:49:18
         compiled from "C:\xampp\htdocs\e-commerce\modules\blockbanner\blockbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2564752cab45ee9e281-95155242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd225255e676691ab9e82d9c7756732fe1f3c5851' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\modules\\blockbanner\\blockbanner.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2564752cab45ee9e281-95155242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45f020735_89138713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45f020735_89138713')) {function content_52cab45f020735_89138713($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="banner_block_top">
	<div class="banner-top">
	<div class="container">
	  <a href="<?php echo $_smarty_tpl->tpl_vars['banner_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner_desc']->value;?>
">
		<?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)){?>
			<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['banner_img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner_desc']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner_desc']->value;?>
"/>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['banner_desc']->value;?>

		<?php }?>
	  </a>
	</div>
  </div>
</div>
<!-- /Block stores module --><?php }} ?>
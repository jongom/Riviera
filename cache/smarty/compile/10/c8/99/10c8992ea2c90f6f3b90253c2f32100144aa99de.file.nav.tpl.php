<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:06
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockuserinfo\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1710752caadc2a51c69-21309196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c8992ea2c90f6f3b90253c2f32100144aa99de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockuserinfo\\nav.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1710752caadc2a51c69-21309196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc2d20ce3_47579356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc2d20ce3_47579356')) {function content_52caadc2d20ce3_47579356($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?><!-- Block user information module NAV  -->
<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
	<div class="header_user_info">
		<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
	</div>
<?php }?>
<div class="header_user_info">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
		<a class="logout" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), 'html', 'UTF-8');?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>

		</a>
	<?php }else{ ?>
		<a class="login" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'html', 'UTF-8');?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign in'),$_smarty_tpl);?>

		</a>
	<?php }?>
</div>
<!-- /Block usmodule NAV --><?php }} ?>
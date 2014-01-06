<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:49:18
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockmyaccountfooter\blockmyaccountfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2458552cab45e57e6d1-24341427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04478838c966f9e221612c6587cb0737dafa1bc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2458552cab45e57e6d1-24341427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45e72bec1_36747588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45e72bec1_36747588')) {function content_52cab45e72bec1_36747588($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my customer account','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'List of my orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value){?><li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'List of my merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li><?php }?>
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'List of my credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'List of my addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my personal information','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value){?><li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'List of my vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li><?php }?>
			<?php echo $_smarty_tpl->tpl_vars['HOOK_BLOCK_MY_ACCOUNT']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['logged']->value){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li><?php }?>
		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
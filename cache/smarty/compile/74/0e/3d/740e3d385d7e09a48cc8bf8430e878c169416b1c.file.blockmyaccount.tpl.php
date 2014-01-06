<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:58
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockmyaccount\blockmyaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2326752caadba53f186-96347124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '740e3d385d7e09a48cc8bf8430e878c169416b1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockmyaccount\\blockmyaccount.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2326752caadba53f186-96347124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadba934784_31881450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadba934784_31881450')) {function content_52caadba934784_31881450($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block myaccount module -->
<div class="block myaccount-column">
	<p class="title_block"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></p>
	<div class="block_content list-block">
		<ul>
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value){?><li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li><?php }?>
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value){?><li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccount'),$_smarty_tpl);?>
</a></li><?php }?>
			<?php echo $_smarty_tpl->tpl_vars['HOOK_BLOCK_MY_ACCOUNT']->value;?>

		</ul>
		<div class="logout">
        	<a class="btn btn-default button button-small" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a>
        </div>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:24
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754152caae1096e7e5-42131012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ed2924d50a85e5e84ff1c790e3ef01db1b283c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\nav.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754152caae1096e7e5-42131012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
    'tabs' => 0,
    't' => 0,
    't2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae10ad1419_17786404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae10ad1419_17786404')) {function content_52caae10ad1419_17786404($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?><div class="bootstrap">
	<nav id="nav-sidebar" role="navigation">
	<?php if (!$_smarty_tpl->tpl_vars['tab']->value){?>
		<div class="mainsubtablist" style="display:none"></div>
	<?php }?>
		<span class="menu-collapse">
			<i class="icon-align-justify"></i>
		</span>

		<ul class="menu">
		<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['t']->value['active']){?>
			<li class="maintab <?php if ($_smarty_tpl->tpl_vars['t']->value['current']){?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])){?>has_submenu<?php }?>" id="maintab<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
">
				<a href="<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])){?><?php echo $_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['t']->value['href'];?>
<?php }?>" class="title" >
					<i class="icon-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
"></i>
					<span class="title"><?php if ($_smarty_tpl->tpl_vars['t']->value['name']==''){?><?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
<?php }?></span>
				</a>
				<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])){?>
					<ul class="submenu">
					<?php  $_smarty_tpl->tpl_vars['t2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t2']->key => $_smarty_tpl->tpl_vars['t2']->value){
$_smarty_tpl->tpl_vars['t2']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']){?>
						<li <?php if ($_smarty_tpl->tpl_vars['t2']->value['current']){?> class="active"<?php }?>>
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t2']->value['href'], 'html', 'UTF-8');?>
">
								<?php if ($_smarty_tpl->tpl_vars['t2']->value['name']==''){?><?php echo $_smarty_tpl->tpl_vars['t2']->value['class_name'];?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t2']->value['name'], 'html', 'UTF-8');?>
<?php }?>
							</a>
						</li>
						<?php }?>
					<?php } ?>
					</ul>
				<?php }?>
			</li>
			<?php }?>
		<?php } ?>
		</ul>
	</nav>
</div><?php }} ?>
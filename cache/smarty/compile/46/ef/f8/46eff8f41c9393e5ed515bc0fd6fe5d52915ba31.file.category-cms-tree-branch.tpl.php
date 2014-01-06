<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:25
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\mobile\category-cms-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:566052caad9972dc35-14218964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46eff8f41c9393e5ed515bc0fd6fe5d52915ba31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\mobile\\category-cms-tree-branch.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '566052caad9972dc35-14218964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caad99ad87f4_78357409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caad99ad87f4_78357409')) {function content_52caad99ad87f4_78357409($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>


<li <?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0||isset($_smarty_tpl->tpl_vars['node']->value['cms'])&&count($_smarty_tpl->tpl_vars['node']->value['cms'])>0){?>data-icon="more"<?php }?>>
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['link'], 'html', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['name'], 'html', 'UTF-8');?>
" data-ajax="false"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['name'], 'html', 'UTF-8');?>
</a>
	<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0){?>
		<ul data-inset="true">
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['child']->value['children'])&&count($_smarty_tpl->tpl_vars['child']->value['children'])>0||isset($_smarty_tpl->tpl_vars['child']->value['cms'])&&count($_smarty_tpl->tpl_vars['child']->value['cms'])>0){?>
				<?php echo $_smarty_tpl->getSubTemplate ("./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

			<?php }?>
		<?php } ?>
		<?php if (isset($_smarty_tpl->tpl_vars['node']->value['cms'])&&count($_smarty_tpl->tpl_vars['node']->value['cms'])>0){?>
			<?php  $_smarty_tpl->tpl_vars['cms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms']->key => $_smarty_tpl->tpl_vars['cms']->value){
$_smarty_tpl->tpl_vars['cms']->_loop = true;
?>
				<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms']->value['link'], 'html', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms']->value['meta_title'], 'html', 'UTF-8');?>
" data-ajax="false"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms']->value['meta_title'], 'html', 'UTF-8');?>
</a></li>
			<?php } ?>
		<?php }?>
		</ul>
	<?php }elseif(isset($_smarty_tpl->tpl_vars['node']->value['cms'])&&count($_smarty_tpl->tpl_vars['node']->value['cms'])>0){?>
		<ul data-inset="true">
		<?php  $_smarty_tpl->tpl_vars['cms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms']->key => $_smarty_tpl->tpl_vars['cms']->value){
$_smarty_tpl->tpl_vars['cms']->_loop = true;
?>
			<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms']->value['link'], 'html', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms']->value['meta_title'], 'html', 'UTF-8');?>
" data-ajax="false"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms']->value['meta_title'], 'html', 'UTF-8');?>
</a></li>
		<?php } ?>
		</ul>
	<?php }?>
</li>
<?php }} ?>
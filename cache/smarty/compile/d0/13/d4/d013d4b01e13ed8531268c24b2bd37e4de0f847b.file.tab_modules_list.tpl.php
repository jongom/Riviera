<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:56
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\modules\tab_modules_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3230552caadf445f371-12616166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd013d4b01e13ed8531268c24b2bd37e4de0f847b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\modules\\tab_modules_list.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3230552caadf445f371-12616166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_modules_list' => 0,
    'admin_module_favorites_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf4ccaa32_46571327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf4ccaa32_46571327')) {function content_52caadf4ccaa32_46571327($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\function.cycle.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)&&!empty($_smarty_tpl->tpl_vars['tab_modules_list']->value)){?>
	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-tabs">
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])){?>
					<li class="active">
						<a href="#tab_modules_list_installed" data-toggle="tab">
							<?php echo smartyTranslate(array('s'=>'Installed'),$_smarty_tpl);?>

						</a>
					</li>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])){?>
					<li<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])==0){?> class="active"<?php }?>>
						<a href="#tab_modules_list_not_installed" data-toggle="tab">
							<?php echo smartyTranslate(array('s'=>'Not Installed'),$_smarty_tpl);?>

						</a>
					</li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div id="modules_list_container_content" class="tab-content">
		<div class="tab-pane<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])){?> active<?php }?>" id="tab_modules_list_installed">
			<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])){?>
			<table id="tab_modules_list_installed" class="table">
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_modules_list']->value['installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
					<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class_row'=>$_tmp1), 0);?>

				<?php } ?>
			</table>
			<?php }?>
		</div>
		<div class="tab-pane<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])==0){?> active<?php }?>" id="tab_modules_list_not_installed">
			<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])){?>
			<table id="tab_modules_list_not_installed" class="table">
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
					<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class_row'=>$_tmp2), 0);?>

				<?php } ?>
			</table>
			<?php }?>
		</div>
	</div>
<?php }?>
<div class="alert alert-warning">
	<a href="<?php echo $_smarty_tpl->tpl_vars['admin_module_favorites_view']->value;?>
"><?php echo smartyTranslate(array('s'=>'More options'),$_smarty_tpl);?>
</a>
</div><?php }} ?>
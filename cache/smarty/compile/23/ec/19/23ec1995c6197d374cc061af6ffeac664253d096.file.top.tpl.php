<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:57
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\modules\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2114352caadf52b0c63-49479459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ec1995c6197d374cc061af6ffeac664253d096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\modules\\top.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2114352caadf52b0c63-49479459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'add_permission' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf52f2434_69946417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf52f2434_69946417')) {function content_52caadf52f2434_69946417($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['kpis']->value;?>


<div class="page-head">
	<h2 class="page-title">
		<?php echo smartyTranslate(array('s'=>'List of modules'),$_smarty_tpl);?>

	</h2>
	<div class="page-bar toolbarBox">
		<div class="btn-toolbar">
			<ul class="cc_button nav nav-pills pull-right">
				<?php if ($_smarty_tpl->tpl_vars['add_permission']->value=='1'){?>
				<li>
					<a id="desc-module-new" class="toolbar_btn" href="#top_container" onclick="$('#module_install').slideToggle();" title="<?php echo smartyTranslate(array('s'=>'Add a new module'),$_smarty_tpl);?>
">
						<i class="process-icon-new-module" ></i>
						<div><?php echo smartyTranslate(array('s'=>'Add a new module'),$_smarty_tpl);?>
</div>
					</a>
				</li>
				<?php }?>
			</ul>
		</div>
	</div>
</div><?php }} ?>
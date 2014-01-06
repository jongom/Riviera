<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:10
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1872752caae024b1896-66005911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3598b9fd4c304786dd6c61b06e49646a4dc193' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\error.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872752caae024b1896-66005911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_errors' => 0,
    'php_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae0252b0d9_20577382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae0252b0d9_20577382')) {function content_52caae0252b0d9_20577382($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)&&count($_smarty_tpl->tpl_vars['php_errors']->value)){?>
<div class="bootstrap">
	<div id="error-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="alert alert-danger clearfix">
				<?php  $_smarty_tpl->tpl_vars['php_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['php_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['php_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['php_error']->key => $_smarty_tpl->tpl_vars['php_error']->value){
$_smarty_tpl->tpl_vars['php_error']->_loop = true;
?>
					<?php echo smartyTranslate(array('s'=>'%1$s on line %2$s in file %3$s: [%4$s] %5$s','sprintf'=>array($_smarty_tpl->tpl_vars['php_error']->value['type'],$_smarty_tpl->tpl_vars['php_error']->value['errline'],$_smarty_tpl->tpl_vars['php_error']->value['errfile'],$_smarty_tpl->tpl_vars['php_error']->value['errno'],$_smarty_tpl->tpl_vars['php_error']->value['errstr'])),$_smarty_tpl);?>
<br /><br />
				<?php } ?>
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="icon-remove"></i> Close</button>
			</div>
		</div>
	</div>
</div>
<?php }?><?php }} ?>
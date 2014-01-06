<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:01
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\products\customization.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2465252caadf9d51697-85395707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb029a7ece94567dd4b9c640158c5cbf9deb80b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\products\\customization.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2465252caadf9d51697-85395707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
    'uploadable_files' => 0,
    'text_fields' => 0,
    'has_file_labels' => 0,
    'display_file_labels' => 0,
    'has_text_labels' => 0,
    'display_text_labels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf9e2df17_21009202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf9e2df17_21009202')) {function content_52caadf9e2df17_21009202($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['obj']->value->id)){?>
<div id="product-customization" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Customization" />
	<h3><?php echo smartyTranslate(array('s'=>'Add or modify customizable properties.'),$_smarty_tpl);?>
</h3>
	
	<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_tab'=>"Customization"), 0);?>


	<div class="form-group">		
		<label class="control-label col-lg-3" for="uploadable_files">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"uploadable_files",'type'=>"default"), 0);?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Number of upload file fields displayed'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'File fields:'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-1">
			<input type="text" name="uploadable_files" id="uploadable_files" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['uploadable_files']->value);?>
" />
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-lg-3" for="text_fields">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"text_fields",'type'=>"default"), 0);?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Number of text fields displayed'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Text fields:'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-1">
			<input type="text" name="text_fields" id="text_fields" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['text_fields']->value);?>
" />
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['has_file_labels']->value){?>
	<hr/>
	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo smartyTranslate(array('s'=>'Define the label of the file fields:'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-6">
			<?php echo $_smarty_tpl->tpl_vars['display_file_labels']->value;?>

		</div>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['has_text_labels']->value){?>
	<hr/>
	<div class="form-group">
		<label class="control-label col-lg-3">
			<?php echo smartyTranslate(array('s'=>'Define the label of the text fields:'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-6">
			<?php echo $_smarty_tpl->tpl_vars['display_text_labels']->value;?>

		</div>
	</div>
	<?php }?>
</div>
<?php }?><?php }} ?>
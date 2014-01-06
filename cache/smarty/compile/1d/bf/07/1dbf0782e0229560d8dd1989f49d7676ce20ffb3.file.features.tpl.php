<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:01
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\products\features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2267752caadf9e63884-15865850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dbf0782e0229560d8dd1989f49d7676ce20ffb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\products\\features.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2267752caadf9e63884-15865850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'available_features' => 0,
    'available_feature' => 0,
    'value' => 0,
    'link' => 0,
    'languages' => 0,
    'language' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadfa1ef8f5_51609472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadfa1ef8f5_51609472')) {function content_52caadfa1ef8f5_51609472($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)){?>
<div id="product-features" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Features" />
	<h3><?php echo smartyTranslate(array('s'=>'Assign features to this product:'),$_smarty_tpl);?>
</h3>

	<div class="alert alert-info">
		<?php echo smartyTranslate(array('s'=>'You can specify a value for each relevant feature regarding this product. Empty fields will not be displayed.'),$_smarty_tpl);?>
<br/>
		<?php echo smartyTranslate(array('s'=>'You can either create a specific value, or select among the existing pre-defined values you\'ve previously added.'),$_smarty_tpl);?>

	</div>

	<table class="table">
		<thead>
			<tr>
				<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Feature'),$_smarty_tpl);?>
</span></th>
				<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Pre-defined value'),$_smarty_tpl);?>
</span></th>
				<th><span class="title_box"><u><?php echo smartyTranslate(array('s'=>'or'),$_smarty_tpl);?>
</u> <?php echo smartyTranslate(array('s'=>'Customized value'),$_smarty_tpl);?>
</span></th>
			</tr>
		</thead>

		<tbody>
		<?php  $_smarty_tpl->tpl_vars['available_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['available_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['available_feature']->key => $_smarty_tpl->tpl_vars['available_feature']->value){
$_smarty_tpl->tpl_vars['available_feature']->_loop = true;
?>
		
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['available_feature']->value['name'];?>
</td>
				<td>
				<?php if (sizeof($_smarty_tpl->tpl_vars['available_feature']->value['featureValues'])){?>
					<select id="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value"
						onchange="$('.custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_').val('');">
						<option value="0">---</option>
						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_feature']->value['featureValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id_feature_value'];?>
"<?php if ($_smarty_tpl->tpl_vars['available_feature']->value['current_item']==$_smarty_tpl->tpl_vars['value']->value['id_feature_value']){?>selected="selected"<?php }?> >
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value['value'],40);?>

						</option>
						<?php } ?>
					</select>
				<?php }else{ ?>
					<input type="hidden" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" value="0" />
					<span><?php echo smartyTranslate(array('s'=>'N/A'),$_smarty_tpl);?>
 - 
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminFeatures'), 'html', 'UTF-8');?>
&amp;addfeature_value&id_feature=<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
"
					 	class="confirm_leave btn btn-link"><i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Add pre-defined values first'),$_smarty_tpl);?>
 <i class="icon-external-link-sign"></i></a>
					</span>
				<?php }?>
				</td>
				<td>
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
					<div class="row translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
						<div class="col-lg-9">
					<?php }?>
							<textarea
								class="custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 textarea-autosize"
								name="custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
								cols="40"
								rows="1"
								onkeyup="if (isArrowKey(event)) return ;$('#feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value').val(0);" ><?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['available_feature']->value['val'][$_smarty_tpl->tpl_vars['k']->value]['value'], 'html', 'UTF-8'))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
						</div>
						<div class="col-lg-3">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
								<li>
									<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
</a>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<?php }?>
					<?php } ?>
				</td>

			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['available_feature']->_loop) {
?>
			<tr>
				<td colspan="3" style="text-align:center;"><i class="icon-warning-sign"></i> <?php echo smartyTranslate(array('s'=>'No features have been defined'),$_smarty_tpl);?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminFeatures'), 'html', 'UTF-8');?>
&amp;addfeature" class="btn btn-link confirm_leave button">
		<i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Add a new feature'),$_smarty_tpl);?>
 <i class="icon-external-link-sign"></i>
	</a>
</div>
<?php }?>
<script type="text/javascript">
	hideOtherLanguage(default_language);
	$(".textarea-autosize").autosize();
</script><?php }} ?>
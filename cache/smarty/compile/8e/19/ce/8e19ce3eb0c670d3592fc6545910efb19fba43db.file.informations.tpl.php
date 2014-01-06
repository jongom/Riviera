<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:50
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\cart_rules\informations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1061152caadee8acb03-76729299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e19ce3eb0c670d3592fc6545910efb19fba43db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\cart_rules\\informations.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1061152caadee8acb03-76729299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'id_lang_default' => 0,
    'currentObject' => 0,
    'currentTab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadeeb93e10_29321106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadeeb93e10_29321106')) {function content_52caadeeb93e10_29321106($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?><div class="form-group">
	<label class="control-label col-lg-3 required">
		<span class="label-tooltip" data-toggle="tooltip"
		title="<?php echo smartyTranslate(array('s'=>'This will be displayed in the cart summary, as well as on the invoice.'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-8">	
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
		<div class="row">
			<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['id_lang_default']->value){?>style="display:none"<?php }?>>
				<div class="col-lg-9">
		<?php }?>
					<input id="name_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" type="text"  name="name_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'name',intval($_smarty_tpl->tpl_vars['language']->value['id_lang'])), 'html', 'UTF-8');?>
">
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
				</div>
				<div class="col-lg-2">
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
						<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
						<?php } ?>
					</ul>
				</div>		
			</div>
		</div>
		<?php }?>
		<?php } ?>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
		title="<?php echo smartyTranslate(array('s'=>'For your eyes only. This will never be displayed to the customer.'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-8">
		<textarea name="description" rows="2" class="textarea-autosize"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'description'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
		title="<?php echo smartyTranslate(array('s'=>'Caution! The rule will automatically be applied if you leave this field blank.'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Code'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="input-group col-lg-4">
		<input type="text" id="code" name="code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'code'), ENT_QUOTES, 'UTF-8', true);?>
" />
		<span class="input-group-btn">
			<a href="javascript:gencode(8);" class="btn btn-default"><i class="icon-random"></i> <?php echo smartyTranslate(array('s'=>'Generate'),$_smarty_tpl);?>
</a>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
		title="<?php echo smartyTranslate(array('s'=>'If the voucher is not yet in the cart, it will be displayed in the cart summary.'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Highlight'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="input-group col-lg-2">
		<span class="switch prestashop-switch">
			<input type="radio" name="highlight" id="highlight_on" value="1" <?php if (intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'highlight'))){?>checked="checked"<?php }?>/>
			<label class="t" for="highlight_on"><i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</label>
			<input type="radio" name="highlight" id="highlight_off" value="0"  <?php if (!intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'highlight'))){?>checked="checked"<?php }?> />
			<label class="t" for="highlight_off"><i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</label>
			<a class="slide-button btn btn-default"></a>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
		title="<?php echo smartyTranslate(array('s'=>'Only applicable if the voucher value is greater than the cart total.'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'If you do not allow partial use, the voucher value will be lowered to the total order amount. If you allow partial use, however, a new voucher will be created with the remainder.'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Partial use'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="input-group col-lg-2">
		<span class="switch prestashop-switch">
			<input type="radio" name="partial_use" id="partial_use_on" value="1" <?php if (intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'partial_use'))){?>checked="checked"<?php }?> />
			<label class="t" for="partial_use_on"><i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</label>
			<input type="radio" name="partial_use" id="partial_use_off" value="0"  <?php if (!intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'partial_use'))){?>checked="checked"<?php }?> />
			<label class="t" for="partial_use_off"><i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</label>
			<a class="slide-button btn btn-default"></a>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
		title="<?php echo smartyTranslate(array('s'=>'Cart rules are applied by priority. A cart rule with a priority of "1" will be processed before a cart rule with a priority of "2".'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Priority'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-1">
		<input type="text" class="input-mini" name="priority" value="<?php echo intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'priority'));?>
" />
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</label>
	<div class="input-group col-lg-2">
		<span class="switch prestashop-switch">
			<input type="radio" name="active" id="active_on" value="1" <?php if (intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'active'))){?>checked="checked"<?php }?> />
			<label class="t" for="active_on"><i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</label>
			<input type="radio" name="active" id="active_off" value="0"  <?php if (!intval($_smarty_tpl->tpl_vars['currentTab']->value->getFieldValue($_smarty_tpl->tpl_vars['currentObject']->value,'active'))){?>checked="checked"<?php }?> />
			<label class="t" for="active_off"><i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</label>
			<a class="slide-button btn btn-default"></a>
		</span>
	</div>
</div>
<script type="text/javascript">
	$(".textarea-autosize").autosize();
</script><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:04
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\products\multishop\check_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2852752caadfc3e25c4-27521232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6680abb582c698019bfe4c167e9e6d839aa55b86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\products\\multishop\\check_fields.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2852752caadfc3e25c4-27521232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'product_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadfc4be0b0_28952747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadfc4be0b0_28952747')) {function content_52caadfc4be0b0_28952747($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value){?>
	<div class="panel clearfix">
		<label class="control-label col-lg-3">
			<i class="icon-sitemap"></i> <?php echo smartyTranslate(array('s'=>'Multistore'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<span class="switch prestashop-switch">
				<input type="radio" name="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
" id="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
_on" value="1" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', true); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()">
				<label for="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
_on">
					<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

				</label>
				<input type="radio" name="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
" id="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
_off" value="0" checked="checked" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', false); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()">
				<label for="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
_off">
					<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

				</label>
				<a class="slide-button btn btn-default"></a>
			</span>
			<p class="help-block"><strong><?php echo smartyTranslate(array('s'=>'Check / Uncheck all'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'(If you are editing this page for several shops, some fields like "name" or "price" are may be disabled. You will need check these fields in order to edit them)'),$_smarty_tpl);?>
</p>
		</div>
	</div>
<?php }?><?php }} ?>
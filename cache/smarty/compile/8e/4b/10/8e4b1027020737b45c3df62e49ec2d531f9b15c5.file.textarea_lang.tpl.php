<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:06
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\products\textarea_lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2391152caadfe37cdf7-01565076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e4b1027020737b45c3df62e49ec2d531f9b15c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\products\\textarea_lang.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2391152caadfe37cdf7-01565076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'input_name' => 0,
    'autosize_js' => 0,
    'input_value' => 0,
    'max' => 0,
    'iso_tiny_mce' => 0,
    'ad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadfe4f4a58_80316480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadfe4f4a58_80316480')) {function content_52caadfe4f4a58_80316480($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
	<div class="col-lg-9">
<?php }?>
		<textarea
			id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
			name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
			class="<?php if (isset($_smarty_tpl->tpl_vars['autosize_js']->value)){?>textarea-autosize<?php }else{ ?>autoload_rte<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])){?><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
<?php }?></textarea>
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
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php }?>
<span class="counter" max="<?php if (isset($_smarty_tpl->tpl_vars['max']->value)){?><?php echo $_smarty_tpl->tpl_vars['max']->value;?>
<?php }else{ ?>none<?php }?>"></span>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['autosize_js']->value)){?>
<script src="<?php echo $_smarty_tpl->tpl_vars['autosize_js']->value;?>
" type="text/javascript"></script>
<?php }?>
<script type="text/javascript">
	var iso = '<?php echo $_smarty_tpl->tpl_vars['iso_tiny_mce']->value;?>
';
	var pathCSS = '<?php echo @constant('_THEME_CSS_DIR_');?>
';
	var ad = '<?php echo $_smarty_tpl->tpl_vars['ad']->value;?>
';

	<?php if (isset($_smarty_tpl->tpl_vars['autosize_js']->value)){?>
	$(".textarea-autosize").autosize();
	<?php }?>
</script><?php }} ?>
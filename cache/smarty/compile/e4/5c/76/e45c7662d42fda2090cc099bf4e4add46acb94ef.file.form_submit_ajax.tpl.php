<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:10
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\form_submit_ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067552caae02a91db0-84280086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45c7662d42fda2090cc099bf4e4add46acb94ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\form_submit_ajax.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067552caae02a91db0-84280086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae02aeb674_45997973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae02aeb674_45997973')) {function content_52caae02aeb674_45997973($_smarty_tpl) {?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit(function(e) {
			e.preventDefault();
			var form_datas = new Object;
			form_datas['liteDisplaying'] = 1;
			form_datas['submitFormAjax'] = 1;
			var form_inputs = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form input, #<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form textarea, #<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form button');
			var form_selects = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form select');
			$.each(form_inputs, function() {
				if (this.type == 'radio' || this.type == 'checkbox')
					if (!this.checked)
						return true;
				form_datas[this.name] = this.value;
			});
			$.each(form_selects, function() {
				if	(this.options != undefined && this.options.selectedIndex != undefined && this[this.options.selectedIndex] != undefined)
					form_datas[this.name] = this[this.options.selectedIndex].value;
			});
			$.ajax({
				type: this.method,
				url : this.action,
				async: true,
				dataType: "html",
				data : form_datas,
				success : function(res)
				{
					// Replace de body by the new one
					$('body').html(res.replace(/^.*<body>/, '').replace(/<\/body>.*$/, ''));
				}
			});
		});
	});
</script>
<?php }} ?>
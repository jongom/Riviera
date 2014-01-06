<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:10
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\translations\auto_translate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:900752caae0235d825-47114595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c766a905627956d7d74dac6c5cd490f422a0b467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\translations\\auto_translate.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '900752caae0235d825-47114595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'not_available' => 0,
    'tooltip_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae02381ea2_16475857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae02381ea2_16475857')) {function content_52caae02381ea2_16475857($_smarty_tpl) {?>

<input type="button" class="button" id="translate_all" value="<?php echo smartyTranslate(array('s'=>'Translate with Google (experimental).'),$_smarty_tpl);?>
" />
<script type="text/javascript">
	var gg_translate = {
		language_code : '<?php echo $_smarty_tpl->tpl_vars['language_code']->value;?>
',
		not_available : '<?php echo $_smarty_tpl->tpl_vars['not_available']->value;?>
',
		tooltip_title : '<?php echo $_smarty_tpl->tpl_vars['tooltip_title']->value;?>
'
	};
</script><?php }} ?>
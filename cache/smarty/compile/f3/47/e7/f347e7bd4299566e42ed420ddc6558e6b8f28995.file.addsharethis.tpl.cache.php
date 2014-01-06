<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:53:28
         compiled from "C:\xampp\htdocs\e-commerce\modules\addsharethis\addsharethis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1162252cab55868cbf2-62278091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f347e7bd4299566e42ed420ddc6558e6b8f28995' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\modules\\addsharethis\\addsharethis.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1162252cab55868cbf2-62278091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'addsharethis_data' => 0,
    'conf_row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab55874c653_07211088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab55874c653_07211088')) {function content_52cab55874c653_07211088($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
css/addsharethis.css"/>
<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value)){?>
<div id="ShareDiv" class="addsharethis">
<div class="addsharethisinner">
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    
    <script type="text/javascript">stLight.options({publisher: "<?php echo $_smarty_tpl->tpl_vars['conf_row']->value;?>
", nativeCount:true });</script>
    
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['twitter'])){?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['twitter'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['google'])){?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['google'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['pinterest'])){?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['pinterest'];?>

	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['addsharethis_data']->value['facebook'])){?>
		<?php echo $_smarty_tpl->tpl_vars['addsharethis_data']->value['facebook'];?>

	<?php }?>
</div>
</div>
<?php }?>

<?php }} ?>
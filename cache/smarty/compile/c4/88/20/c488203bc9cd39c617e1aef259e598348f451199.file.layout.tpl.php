<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:24
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1791652caae10799da7-06371102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c488203bc9cd39c617e1aef259e598348f451199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\layout.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1791652caae10799da7-06371102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'conf' => 0,
    'errors' => 0,
    'disableDefaultErrorOutPut' => 0,
    'error' => 0,
    'informations' => 0,
    'info' => 0,
    'confirmations' => 0,
    'warnings' => 0,
    'warning' => 0,
    'page' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae10943d61_10844709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae10943d61_10844709')) {function content_52caae10943d61_10844709($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['conf']->value)){?>
	<div class="alert alert-success">
		<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

	</div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)&&(!isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value)||$_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value==false)){?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?php if (count($_smarty_tpl->tpl_vars['errors']->value)==1){?>
		<?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'%d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>

		<br/>
		<ol>
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
			<?php } ?>
		</ol>
	<?php }?>
	</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value){?>
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php if (count($_smarty_tpl->tpl_vars['informations']->value)>4){?>
		<a id="see_more_infos" href="#" class="btn btn-link" onclick="$('#see_more_infos').hide(); $('#infos_block').show();return false;">
			<i class="icon-info-sign"></i> <?php echo smartyTranslate(array('s'=>'Click here to see more informations'),$_smarty_tpl);?>

		</a>
		<?php }?>
		<ul id="infos_block" class="list-unstyled"<?php if (count($_smarty_tpl->tpl_vars['informations']->value)>4){?> style="display:none;"<?php }?>>
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
			<?php } ?>
		</ul>
	</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value){?>
	<div class="alert alert-success" style="display:block;">
		<?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value){
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

		<?php } ?>
	</div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)){?>
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1){?>
			<strong><?php echo smartyTranslate(array('s'=>'There are %d warnings:','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value)),$_smarty_tpl);?>
</strong>
		<?php }?>
		<ul class="list-unstyled">
			<?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
			<?php } ?>
		</ul>
	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }} ?>
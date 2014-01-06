<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:29
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\mobile\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:911852caad9d7d5550-47408990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7cd0b990b330e3a0dc4f1f9a8a5287e4154ed7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\mobile\\layout.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '911852caad9d7d5550-47408990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'header_file' => 0,
    'template' => 0,
    'display_footer' => 0,
    'footer_file' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caad9d8ce324_52614057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caad9d8ce324_52614057')) {function content_52caad9d8ce324_52614057($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['header_file'] = new Smarty_variable('./header.tpl', null, 0);?>
<?php $_smarty_tpl->tpl_vars['footer_file'] = new Smarty_variable('./footer.tpl', null, 0);?>

<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>

<?php }?>
<?php }} ?>
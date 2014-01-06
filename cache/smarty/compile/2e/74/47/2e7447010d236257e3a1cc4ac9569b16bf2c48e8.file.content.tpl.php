<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:57
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\not_found\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2883452caadf5b4ed67-55516348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e7447010d236257e3a1cc4ac9569b16bf2c48e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\not_found\\content.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2883452caadf5b4ed67-55516348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf5ba0542_23646566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf5ba0542_23646566')) {function content_52caadf5ba0542_23646566($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound'){?>
<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<ul>
<li><a href="index.php"><?php echo smartyTranslate(array('s'=>'Go to the dashboard.'),$_smarty_tpl);?>
</a></li>
<li><a href="#" onclick="window.history.back();"><?php echo smartyTranslate(array('s'=>'Back to the previous page.'),$_smarty_tpl);?>
</a></li>
</ul>
<?php }} ?>
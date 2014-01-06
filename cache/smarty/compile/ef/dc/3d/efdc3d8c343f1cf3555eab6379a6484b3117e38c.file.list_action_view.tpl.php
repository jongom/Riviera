<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:16
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2548052caae08189308-26908080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdc3d8c343f1cf3555eab6379a6484b3117e38c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2548052caae08189308-26908080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae081b1184_42137178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae081b1184_42137178')) {function content_52caae081b1184_42137178($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:35
         compiled from "C:\xampp\htdocs\Reveria\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15440543447538f8172-86073389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82da6cb708c26fa76ddb3f483df46ad9245d2f00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1412712140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15440543447538f8172-86073389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543447539107f9_18483384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543447539107f9_18483384')) {function content_543447539107f9_18483384($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>

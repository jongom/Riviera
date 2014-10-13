<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:58
         compiled from "C:\xampp\htdocs\Riviera\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24892543c49baeea279-85066673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9df0c12e689803f03229b95f04ca1a6576c0ec00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1413236842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24892543c49baeea279-85066673',
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
  'unifunc' => 'content_543c49bb03c604_09220077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49bb03c604_09220077')) {function content_543c49bb03c604_09220077($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>

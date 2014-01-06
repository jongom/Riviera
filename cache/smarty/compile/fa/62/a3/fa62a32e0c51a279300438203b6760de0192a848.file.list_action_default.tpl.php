<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:15
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1587652caae077fd222-94219070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa62a32e0c51a279300438203b6760de0192a848' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1587652caae077fd222-94219070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae078bdc37_74481968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae078bdc37_74481968')) {function content_52caae078bdc37_74481968($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
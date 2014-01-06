<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:15
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\list\list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2587152caae07e0b728-46862202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a340479a1cc791f724e4272fb72a80cda610a1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\list\\list_action_supplier_order_receipt.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2587152caae07e0b728-46862202',
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
  'unifunc' => 'content_52caae07e39945_84654896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae07e39945_84654896')) {function content_52caae07e39945_84654896($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-truck"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:59
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\orders\_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2917852caadf7d500e8-29175741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae2f1800c4fc700c50d4d238d938872c4c9389b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\orders\\_print_pdf_icon.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2917852caadf7d500e8-29175741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_state' => 0,
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf7ded6f3_61951018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf7ded6f3_61951018')) {function content_52caadf7ded6f3_61951018($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>


<span>
<?php if (($_smarty_tpl->tpl_vars['order_state']->value->invoice||$_smarty_tpl->tpl_vars['order']->value->invoice_number)){?>
	<a class="btn btn-default" target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'html', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
		<i class="icon-file-text"></i>
	</a>
<?php }?>
</span>


<span>
<?php if (($_smarty_tpl->tpl_vars['order_state']->value->delivery||$_smarty_tpl->tpl_vars['order']->value->delivery_number)){?>
	<a class="btn btn-default"  target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'html', 'UTF-8');?>
&submitAction=generateDeliverySlipPDF&id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
		<i class="icon-truck"></i>
	</a>
<?php }?>
</span>
<?php }} ?>
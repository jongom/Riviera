<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:17
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\stripejs\order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1562352caadcd4a5d37-99365413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71674a091d2bf8aca548a6ced0fa89752bf8e6ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\stripejs\\order-confirmation.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562352caadcd4a5d37-99365413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stripe_order' => 0,
    'order_pending' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadcd6d6cd7_32532727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadcd6d6cd7_32532727')) {function content_52caadcd6d6cd7_32532727($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['stripe_order']->value['valid']==1){?>
	<div class="conf confirmation"><?php echo smartyTranslate(array('s'=>'Congratulations, your payment has been approved and your order has been saved under the reference','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stripe_order']->value['reference'], 'html', 'UTF-8');?>
</b>.</div>
<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['order_pending']->value){?>
		<div class="error"><?php echo smartyTranslate(array('s'=>'Unfortunately we detected a problem while processing your order and it needs to be reviewed.','mod'=>'stripejs'),$_smarty_tpl);?>
<br /><br />
		<?php echo smartyTranslate(array('s'=>'Do not try to submit your order again, as the funds have already been received.  We will review the order and provide a status shortly.','mod'=>'stripejs'),$_smarty_tpl);?>
<br /><br />
		(<?php echo smartyTranslate(array('s'=>'Your Order\'s Reference:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stripe_order']->value['reference'], 'html', 'UTF-8');?>
</b>)</div>
	<?php }else{ ?>
		<div class="error"><?php echo smartyTranslate(array('s'=>'Sorry, unfortunately an error occured during the transaction.','mod'=>'stripejs'),$_smarty_tpl);?>
<br /><br />
		<?php echo smartyTranslate(array('s'=>'Please double-check your credit card details and try again or feel free to contact us to resolve this issue.','mod'=>'stripejs'),$_smarty_tpl);?>
<br /><br />
		(<?php echo smartyTranslate(array('s'=>'Your Order\'s Reference:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stripe_order']->value['reference'], 'html', 'UTF-8');?>
</b>)</div>
	<?php }?>
<?php }?>
<?php }} ?>
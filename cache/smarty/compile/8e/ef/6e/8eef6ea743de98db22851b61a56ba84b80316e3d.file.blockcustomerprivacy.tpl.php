<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:54
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockcustomerprivacy\blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2902552caadb6a3a448-01038153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eef6ea743de98db22851b61a56ba84b80316e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2902552caadb6a3a448-01038153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadb6ae9a39_51873876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadb6ae9a39_51873876')) {function content_52caadb6ae9a39_51873876($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required checkbox">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off"/>
        <label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>				
	</p>	
</fieldset><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:49
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\bankwire\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2805652caadb17c8e14-73454575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6a9732773d8e56990486643c78e2f8fff88e78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\bankwire\\views\\templates\\hook\\infos.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2805652caadb17c8e14-73454575',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadb180d362_72010765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadb180d362_72010765')) {function content_52caadb180d362_72010765($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order\'s status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
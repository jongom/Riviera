<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:11
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\cheque\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2110652caadc769a522-62558148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fc94183dbeb0c1cda6353b551101dd1b9cd5a8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\cheque\\views\\templates\\hook\\payment.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110652caadc769a522-62558148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc76f6621_32112482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc76f6621_32112482')) {function content_52caadc76f6621_32112482($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
            <a class="cheque" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span>(<?php echo smartyTranslate(array('s'=>'order processing will take more time','mod'=>'cheque'),$_smarty_tpl);?>
)</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
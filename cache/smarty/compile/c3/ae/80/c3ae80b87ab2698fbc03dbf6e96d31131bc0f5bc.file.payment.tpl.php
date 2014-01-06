<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:49
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\bankwire\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1073752caadb1ab2991-39694997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3ae80b87ab2698fbc03dbf6e96d31131bc0f5bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\bankwire\\views\\templates\\hook\\payment.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1073752caadb1ab2991-39694997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadb1b0e980_47700733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadb1b0e980_47700733')) {function content_52caadb1b0e980_47700733($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
            <a class="bankwire" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span>(<?php echo smartyTranslate(array('s'=>'order process will be longer','mod'=>'bankwire'),$_smarty_tpl);?>
)</span></a>
        </p>
    </div>
</div><?php }} ?>
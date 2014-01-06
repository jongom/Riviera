<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:15
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\list\list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3223352caae07c1c577-15897590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac77675093a567cb6b0933efd8dec9cd5d1c13d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\list\\list_action_enable.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3223352caae07c1c577-15897590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enabled' => 0,
    'url_enable' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae07cee8d5_67647589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae07cee8d5_67647589')) {function content_52caae07cee8d5_67647589($_smarty_tpl) {?>
<a class="label <?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>label-success<?php }else{ ?>label-warning<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['url_enable']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>
		<i class="icon-check-sign"></i> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

	<?php }else{ ?>
		<i class="icon-ban-circle"></i> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

	<?php }?>
</a>
<?php }} ?>
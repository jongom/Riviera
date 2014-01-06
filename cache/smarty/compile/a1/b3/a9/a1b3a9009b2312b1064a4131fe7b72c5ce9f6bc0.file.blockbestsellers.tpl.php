<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:50
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockbestsellers\blockbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1749552caadb200b266-10706302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b3a9009b2312b1064a4131fe7b72c5ce9f6bc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockbestsellers\\blockbestsellers.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1749552caadb200b266-10706302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadb2056d77_27001159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadb2056d77_27001159')) {function content_52caadb2056d77_27001159($_smarty_tpl) {?>

<?php if (is_array($_smarty_tpl->tpl_vars['best_sellers']->value)&&count($_smarty_tpl->tpl_vars['best_sellers']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php }?><?php }} ?>
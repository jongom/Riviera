<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:49:16
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blocknewproducts\blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:588052cab45c2ba4d4-72449693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5cec52918517ba2570df796dfc43f1c807757c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocknewproducts\\blocknewproducts.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588052cab45c2ba4d4-72449693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45c303033_37025470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45c303033_37025470')) {function content_52cab45c303033_37025470($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane active','id'=>'blocknewproducts'), 0);?>
<?php }} ?>
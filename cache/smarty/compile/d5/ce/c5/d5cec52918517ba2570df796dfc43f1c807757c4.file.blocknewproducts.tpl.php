<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:59
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blocknewproducts\blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2754552caadbb3d7cf7-88431949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2754552caadbb3d7cf7-88431949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadbb4ab980_97299286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadbb4ab980_97299286')) {function content_52caadbb4ab980_97299286($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane active','id'=>'blocknewproducts'), 0);?>
<?php }} ?>
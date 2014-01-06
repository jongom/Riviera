<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:53:27
         compiled from "C:\xampp\htdocs\e-commerce\modules\addsharethis\addsharethis_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1273752cab557883c51-94470651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5cdeb3c35947ae735c12588bb0e0854d209602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\modules\\addsharethis\\addsharethis_header.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1273752cab557883c51-94470651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab5579287d0_52953151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab5579287d0_52953151')) {function content_52cab5579287d0_52953151($_smarty_tpl) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />

<?php }} ?>
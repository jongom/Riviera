<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:49:16
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2415552cab45c05bbb5-84942190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b00eca1939690772eee80ff443b2808983e269e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockbestsellers\\tab.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2415552cab45c05bbb5-84942190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45c0b42f3_22374360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45c0b42f3_22374360')) {function content_52cab45c0b42f3_22374360($_smarty_tpl) {?>

<?php if (is_array($_smarty_tpl->tpl_vars['best_sellers']->value)&&count($_smarty_tpl->tpl_vars['best_sellers']->value)){?>
	<li><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li>
<?php }?><?php }} ?>
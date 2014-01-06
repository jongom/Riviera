<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:22
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2333852caae0e00bb75-40225912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b217c6de20f12dc160156235316490d074c3e259' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2333852caae0e00bb75-40225912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae0e031ba1_46694153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae0e031ba1_46694153')) {function content_52caae0e031ba1_46694153($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>
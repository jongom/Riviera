<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:53:28
         compiled from "C:\xampp\htdocs\Riviera\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16291543c49d87b7a87-72307249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b64879781d106dfafa4d3b4f47f2bd63fedc39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1413236848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16291543c49d87b7a87-72307249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49d87c5e61_70956317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49d87c5e61_70956317')) {function content_543c49d87c5e61_70956317($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>

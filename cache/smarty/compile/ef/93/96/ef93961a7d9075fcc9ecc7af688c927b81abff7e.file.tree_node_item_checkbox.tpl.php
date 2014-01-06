<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:22
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\tree\tree_node_item_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1973952caae0e090ee0-28113784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef93961a7d9075fcc9ecc7af688c927b81abff7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_checkbox.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1973952caae0e090ee0-28113784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae0e1976e4_22263499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae0e1976e4_22263499')) {function content_52caae0e1976e4_22263499($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-item-disable<?php }?>">
	<span class="tree-item-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-item-name-disable<?php }?>">
		<input type="checkbox" name="categoryBox[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
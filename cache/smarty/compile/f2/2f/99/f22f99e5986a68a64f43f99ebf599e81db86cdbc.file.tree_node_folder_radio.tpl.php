<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:21
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\tree\tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1128552caae0dd64b88-72614359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f22f99e5986a68a64f43f99ebf599e81db86cdbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder_radio.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1128552caae0dd64b88-72614359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae0defc7b9_69115080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae0defc7b9_69115080')) {function content_52caae0defc7b9_69115080($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-folder-name-disable<?php }?>">
		<input type="radio" name="id-category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler "><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
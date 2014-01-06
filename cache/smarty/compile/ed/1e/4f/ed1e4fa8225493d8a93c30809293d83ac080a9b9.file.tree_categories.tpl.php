<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:21
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\tree\tree_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:707252caae0d684a60-27406134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1e4fa8225493d8a93c30809293d83ac080a9b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\tree\\tree_categories.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '707252caae0d684a60-27406134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
    'use_checkbox' => 0,
    'use_search' => 0,
    'selected_categories' => 0,
    'imploded_selected_categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae0d912a24_73010021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae0d912a24_73010021')) {function content_52caae0d912a24_73010021($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)){?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)){?>
	<ul id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<script type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['use_checkbox']->value)&&$_smarty_tpl->tpl_vars['use_checkbox']->value==true){?>
		function checkAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", true);
					$(this).parent().addClass("tree-selected");
				}
			);
		}

		function uncheckAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", false);
					$(this).parent().removeClass("tree-selected");
				}
			);
		}
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['use_search']->value)&&$_smarty_tpl->tpl_vars['use_search']->value==true){?>
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-categories-search").bind("typeahead:selected", function(obj, datum) {
		    $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input").each(
				function()
				{
					if ($(this).val() == datum.id_category)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		});
	<?php }?>
	$(document).ready(function () {
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").tree("collapseAll");
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input[type=radio]").click(
			function()
			{
				location.href = location.href.replace(
					/&id_category=[0-9]*/, "")+"&id_category="
					+$(this).val();
			}
		);

		<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value)){?>
			<?php $_smarty_tpl->tpl_vars['imploded_selected_categories'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value), null, 0);?>
			var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

			$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input").each(
				function()
				{
					if ($.inArray($(this).val(), selected_categories) != -1)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		<?php }?>
	});
</script><?php }} ?>
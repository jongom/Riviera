<?php /*%%SmartyHeaderCode:1181652cab4a47b7e68-78640601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50ed45787ac064e9a5f42c85c63c04bad2ce7f1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181652cab4a47b7e68-78640601',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab7531a8314_02881014',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab7531a8314_02881014')) {function content_52cab7531a8314_02881014($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/e-commerce/index.php?controller=supplier" title="Fournisseurs">Fournisseurs</a></p>
	<div class="block_content list-block">
		<ul>
					<li class="last_item">
			<a href="http://localhost/e-commerce/index.php?id_supplier=1&amp;controller=supplier" title="En savoir plus sur Fashion Supplier">Fashion Supplier</a>
		</li>
				</ul>
				<form action="/e-commerce/index.php" method="get">
			<div class="form-group selector1">
				<select id="supplier_list" class="form-control" onchange="autoUrl('supplier_list', '');">
					<option value="0">Tous les fournisseurs</option>
									<option value="http://localhost/e-commerce/index.php?id_supplier=1&amp;controller=supplier">Fashion Supplier</option>
								</select>
			</div>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
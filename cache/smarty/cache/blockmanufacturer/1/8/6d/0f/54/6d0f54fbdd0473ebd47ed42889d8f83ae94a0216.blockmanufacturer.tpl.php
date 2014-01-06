<?php /*%%SmartyHeaderCode:519552cab4a4481939-10173535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d0f54fbdd0473ebd47ed42889d8f83ae94a0216' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '519552cab4a4481939-10173535',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab4a46d6a01_49130279',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab4a46d6a01_49130279')) {function content_52cab4a46d6a01_49130279($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost/e-commerce/index.php?controller=manufacturer" title="Fabricants">Fabricants</a></p>
	<div class="block_content list-block">
		<ul>
					<li class="last_item"><a href="http://localhost/e-commerce/index.php?id_manufacturer=1&amp;controller=manufacturer" title="More about Fashion Manufacturer">Fashion Manufacturer</a></li>
				</ul>
				<form action="/e-commerce/index.php" method="get">
			<div class="form-group selector1">
				<select id="manufacturer_list" class="form-control" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Tous les fabricants</option>
									<option value="http://localhost/e-commerce/index.php?id_manufacturer=1&amp;controller=manufacturer">Fashion Manufacturer</option>
								</select>
			</div>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
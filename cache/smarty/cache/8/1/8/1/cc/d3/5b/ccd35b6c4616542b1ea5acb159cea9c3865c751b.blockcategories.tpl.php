<?php /*%%SmartyHeaderCode:28252cab4a4062766-82051487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd35b6c4616542b1ea5acb159cea9c3865c751b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
    '263cd7f2f8a744ecf5a91b109bf37c58ed1d20e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28252cab4a4062766-82051487',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab5bf985ce9_24824746',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab5bf985ce9_24824746')) {function content_52cab5bf985ce9_24824746($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Dresses</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/e-commerce/index.php?id_category=9&amp;controller=category" title="You are looking for a dress for every day? Take a look at our selection of dresses to find one that suits you.">Casual Dresses</a>
	</li>

												
<li >
	<a href="http://localhost/e-commerce/index.php?id_category=10&amp;controller=category" title="Browse our different dresses to choose the perfect dress for an unforgettable evening!">Evening Dresses</a>
	</li>

												
<li class="last">
	<a href="http://localhost/e-commerce/index.php?id_category=11&amp;controller=category" title="Short dress, long dress, silk dress, printed dress, you will find the perfect dress for summer.">Summer Dresses</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>
<?php /*%%SmartyHeaderCode:560352cab45a3232d1-14721601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2f6b5e224e44aa7b78fecb4d26825c99e398a97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
    '236b7b1ee7e15ba9c8b1b3a56ba3d1fae5dfd8b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-instantsearch.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '560352cab45a3232d1-14721601',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45abe65f1_47101778',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45abe65f1_47101778')) {function content_52cab45abe65f1_47101778($_smarty_tpl) {?>
	<!-- Block search module TOP -->
	<div id="search_block_top">
		<form id="searchbox" method="get" action="http://localhost/e-commerce/index.php?controller=search" >
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
			<button type="submit" name="submit_search" class="btn btn-default button-search">
				<span>Rechercher</span>
			</button>
		</form>
	</div>
		<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://localhost/e-commerce/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 271,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + '<strong>'+data[i].pname+'</strong>' };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

	<!-- /Block search module TOP -->
<?php }} ?>
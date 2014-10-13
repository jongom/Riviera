<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:50
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\js\products-comparison.js" */ ?>
<?php /*%%SmartyHeaderCode:20632543c49b22988e9-02289582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef366b93f81a89ee22ca77ee5087fa023966ec45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\js\\products-comparison.js',
      1 => 1413236952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20632543c49b22988e9-02289582',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b22bacc1_77487163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b22bacc1_77487163')) {function content_543c49b22bacc1_77487163($_smarty_tpl) {?>/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
$(document).ready(function(){
	$(document).on('click', '.add_to_compare', function(e){
		e.preventDefault();
		if (typeof addToCompare != 'undefined')
			addToCompare(parseInt($(this).data('id-product')));
	});

	reloadProductComparison();
	compareButtonsStatusRefresh();
	totalCompareButtons();
});

function addToCompare(productId)
{
	var totalValueNow = parseInt($('.bt_compare').next('.compare_product_count').val());
	var action, totalVal;
	if($.inArray(parseInt(productId),comparedProductsIds) === -1)
		action = 'add';
	else
		action = 'remove';

	$.ajax({
		url: 'index.php?controller=products-comparison&ajax=1&action='+action+'&id_product=' + productId,
		async: true,
		cache: false,
		success: function(data) {
			if (action === 'add' && comparedProductsIds.length < comparator_max_item) {
				comparedProductsIds.push(parseInt(productId)),
				compareButtonsStatusRefresh(),
				totalVal = totalValueNow +1,
				$('.bt_compare').next('.compare_product_count').val(totalVal),
				totalValue(totalVal);
			}
			else if (action === 'remove') {
				comparedProductsIds.splice($.inArray(parseInt(productId), comparedProductsIds), 1),
				compareButtonsStatusRefresh(),
				totalVal = totalValueNow -1,
				$('.bt_compare').next('.compare_product_count').val(totalVal),
				totalValue(totalVal);
			}
			else
			{
	            if (!!$.prototype.fancybox)
	                $.fancybox.open([
	                    {
	                        type: 'inline',
	                        autoScale: true,
	                        minHeight: 30,
	                        content: '<p class="fancybox-error">' + max_item + '</p>'
	                    }
	                ], {
	                    padding: 0
	                });
	            else
	                alert(max_item);
			}
			totalCompareButtons();
		},
		error: function(){}
	});
}

function reloadProductComparison()
{
	$(document).on('click', 'a.cmp_remove', function(e){
		e.preventDefault();
		var idProduct = parseInt($(this).data('id-product'));
		$.ajax({
			url: 'index.php?controller=products-comparison&ajax=1&action=remove&id_product=' + idProduct,
			async: false,
			cache: false
		});
		$('td.product-' + idProduct).fadeOut(600);

		var compare_product_list = get('compare_product_list');
		var bak = compare_product_list;
		var new_compare_product_list = [];
		compare_product_list = decodeURIComponent(compare_product_list).split('|');
		for (var i in compare_product_list)
			if (parseInt(compare_product_list[i]) != idProduct)
				new_compare_product_list.push(compare_product_list[i]);
		if (new_compare_product_list.length)
			window.location.search = window.location.search.replace(bak, new_compare_product_list.join(encodeURIComponent('|')));
	});
};

function compareButtonsStatusRefresh()
{
	$('.add_to_compare').each(function() {
		if ($.inArray(parseInt($(this).data('id-product')), comparedProductsIds) !== -1)
			$(this).addClass('checked');
		else
			$(this).removeClass('checked');
	});
}

function totalCompareButtons()
{
	var totalProductsToCompare = parseInt($('.bt_compare .total-compare-val').html());
	if (typeof totalProductsToCompare !== "number" || totalProductsToCompare === 0)
		$('.bt_compare').attr("disabled",true);
	else
		$('.bt_compare').attr("disabled",false);
}

function totalValue(value)
{
	$('.bt_compare').find('.total-compare-val').html(value);
}

function get(name)
{
	var regexS = "[\\?&]" + name + "=([^&#]*)";
	var regex = new RegExp(regexS);
	var results = regex.exec(window.location.search);
	
	if (results == null)
		return "";
	else
		return results[1];
}
<?php }} ?>

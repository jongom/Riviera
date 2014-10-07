<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:35
         compiled from "C:\xampp\htdocs\Reveria\themes\default-bootstrap\js\modules\productcomments\js\products-comparison.js" */ ?>
<?php /*%%SmartyHeaderCode:20569543447530ede11-17479538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faab4c02a0e9dc808cf69b25fd76773806ba9659' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\themes\\default-bootstrap\\js\\modules\\productcomments\\js\\products-comparison.js',
      1 => 1412712203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20569543447530ede11-17479538',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344753103217_77855389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344753103217_77855389')) {function content_54344753103217_77855389($_smarty_tpl) {?>/*
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
$(document).ready(function() 
{
	$('input.star').rating();
	$('.auto-submit-star').rating();
	$('a.cluetip').cluetip({
		local:true,
		cursor: 'pointer',
		cluetipClass: 'comparison_comments',
		dropShadow: false,
		dropShadowSteps: 0,
		showTitle: false,
		tracking: true,
		sticky: false,
		mouseOutClose: true,
	    width: 450,
		fx: {             
	    	open:       'fadeIn',
	    	openSpeed:  'fast'
		}
	}).css('opacity', 0.8);

	$('.comparison_infos a').each(function(){
		var id_product_comment = parseInt($(this).data('id-product-comment'));
		if (id_product_comment)
		{
			$(this).click(function(e){
				e.preventDefault();
			});
			var htmlContent = $('#comments_' + id_product_comment).html();
			$(this).popover({
				placement : 'bottom', //placement of the popover. also can use top, bottom, left or right
				title : false, //this is the top title bar of the popover. add some basic css
				html: 'true', //needed to show html of course
				content : htmlContent  //this is the content of the html box. add the image here or anything you want really.
			});
		}
	});
});

function closeCommentForm()
{
	$('#sendComment').slideUp('fast');
	$('input#addCommentButton').fadeIn('slow');
}<?php }} ?>

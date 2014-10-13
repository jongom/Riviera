<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:49
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\js\contact-form.js" */ ?>
<?php /*%%SmartyHeaderCode:7652543c49b1d25e72-09182446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fec8f89dbae542e1c311c3d04b982910406d78c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\js\\contact-form.js',
      1 => 1413236952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7652543c49b1d25e72-09182446',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b1d304b2_93082459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b1d304b2_93082459')) {function content_543c49b1d304b2_93082459($_smarty_tpl) {?>/*
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
//global variables
if (typeof $.uniform.defaults !== 'undefined')
{
	if (typeof contact_fileDefaultHtml !== 'undefined')
		$.uniform.defaults.fileDefaultHtml = contact_fileDefaultHtml;
	if (typeof contact_fileButtonHtml !== 'undefined')
		$.uniform.defaults.fileButtonHtml = contact_fileButtonHtml;
}

$(document).ready(function(){
	$(document).on('change', 'select[name=id_contact]', function(){
		showElemFromSelect('id_contact', 'desc_contact')
	});

	$(document).on('change', 'select[name=id_order]', function (){
		showProductSelect($(this).attr('value'));
	});

	showProductSelect($('select[name=id_order]').attr('value'));
});

function showProductSelect(id_order)
{
	$('.product_select').hide().prop('disabled', 'disabled').parent('.selector').hide();
	$('.product_select').parents('.form-group').find('label').hide();
	if ($('#' + id_order + '_order_products').length > 0)
	{
		$('#' + id_order + '_order_products').removeProp('disabled').show().parent('.selector').removeClass('disabled').show();
		$('.product_select').parents('.form-group').show().find('label').show();
	}
}<?php }} ?>

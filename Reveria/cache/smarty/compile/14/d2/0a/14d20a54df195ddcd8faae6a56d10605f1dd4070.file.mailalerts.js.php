<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:35
         compiled from "C:\xampp\htdocs\Reveria\themes\default-bootstrap\js\modules\mailalerts\mailalerts.js" */ ?>
<?php /*%%SmartyHeaderCode:41954344753048934-26608263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d20a54df195ddcd8faae6a56d10605f1dd4070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\themes\\default-bootstrap\\js\\modules\\mailalerts\\mailalerts.js',
      1 => 1412712203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41954344753048934-26608263',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344753078560_85984769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344753078560_85984769')) {function content_54344753078560_85984769($_smarty_tpl) {?>/*
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

$(document).ready(function() {
	oosHookJsCodeMailAlert();
	$(document).on('keypress', '#oos_customer_email', function(e){
		if(e.keyCode == 13)
		{
			e.preventDefault();
			addNotification();
		}
	});

	$(document).on('click', '#oos_customer_email', function(e){
		clearText();
	});

	$(document).on('click', '#mailalert_link', function(e){
		e.preventDefault();
		addNotification();
	});

	$(document).on('click', 'i[rel^=ajax_id_mailalert_]', function(e)
	{
		var ids =  $(this).attr('rel').replace('ajax_id_mailalert_', '');
		ids = ids.split('_');
		var id_product_mail_alert = parseInt(ids[0]);
		var id_product_attribute_mail_alert = parseInt(ids[1]);
		var parent = $(this).parents('li');

		if (typeof mailalerts_url_remove == 'undefined')
			return;

		$.ajax({
			url: mailalerts_url_remove,
			type: "POST",
			data: {
				'id_product': id_product_mail_alert,
				'id_product_attribute': id_product_attribute_mail_alert
			},
			success: function(result)
			{
				if (result == '0')
				{
					parent.fadeOut("normal", function()
					{
                        if (parent.siblings().length == 0)
                            $("#mailalerts_block_account_warning").removeClass('hidden');
                        parent.remove();
					});
				}
 		 	}
		});
	});

});

function clearText()
{
	if ($('#oos_customer_email').val() == mailalerts_placeholder)
		$('#oos_customer_email').val('');
}

function oosHookJsCodeMailAlert()
{
	if (typeof mailalerts_url_check == 'undefined')
		return;

	$.ajax({
		type: 'POST',
		url: mailalerts_url_check,
		data: 'id_product=' + id_product + '&id_product_attribute=' + $('#idCombination').val(),
		success: function (msg) {
			if (msg == '0')
			{
				$('#mailalert_link').show();
				$('#oos_customer_email').show();
			}
			else
			{
				$('#mailalert_link').hide();
				$('#oos_customer_email').hide();
			}
		}
	});
}

function  addNotification()
{
	if ($('#oos_customer_email').val() == mailalerts_placeholder || (typeof mailalerts_url_add == 'undefined'))
		return;

	$.ajax({
		type: 'POST',
		url: mailalerts_url_add,
		data: 'id_product=' + id_product + '&id_product_attribute='+$('#idCombination').val()+'&customer_email='+$('#oos_customer_email').val()+'',
		success: function (msg) {
			if (msg == '1') 
			{
				$('#mailalert_link').hide();
				$('#oos_customer_email').hide();
				$('#oos_customer_email_result').html(mailalerts_registered);
				$('#oos_customer_email_result').css('color', 'green').show();
			}
			else if (msg == '2' )
			{
				$('#oos_customer_email_result').html(mailalerts_already);
				$('#oos_customer_email_result').css('color', 'red').show();
			} 
			else
			{
				$('#oos_customer_email_result').html(mailalerts_invalid);
				$('#oos_customer_email_result').css('color', 'red').show();
			}
		}
	});
}<?php }} ?>

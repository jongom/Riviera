<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:34
         compiled from "C:\xampp\htdocs\Reveria\themes\default-bootstrap\js\modules\crossselling\js\crossselling.js" */ ?>
<?php /*%%SmartyHeaderCode:440454344752f16978-39710275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c463cac2cc1c8b74d04c7a5f4fbf69c57a969f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\themes\\default-bootstrap\\js\\modules\\crossselling\\js\\crossselling.js',
      1 => 1412712203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '440454344752f16978-39710275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344752f1c0a3_86185934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344752f1c0a3_86185934')) {function content_54344752f1c0a3_86185934($_smarty_tpl) {?>/*
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
	if (!!$.prototype.bxSlider)
		$('#crossselling_list_car').bxSlider({
			minSlides: 2,
			maxSlides: 6,
			slideWidth: 178,
			slideMargin: 20,
			pager: false,
			nextText: '',
			prevText: '',
			moveSlides:1,
			infiniteLoop:false,
			hideControlOnEnd: true
		});
});
<?php }} ?>

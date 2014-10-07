<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:34
         compiled from "C:\xampp\htdocs\Reveria\themes\default-bootstrap\js\category.js" */ ?>
<?php /*%%SmartyHeaderCode:2024754344752c04739-80446003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4994bca8fe921e87a31d81e056aaab4b22e0f9ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\themes\\default-bootstrap\\js\\category.js',
      1 => 1412712203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024754344752c04739-80446003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344752c0c8e3_92362348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344752c0c8e3_92362348')) {function content_54344752c0c8e3_92362348($_smarty_tpl) {?>/*
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
	$(document).on('click', '.lnk_more', function(e){
		e.preventDefault();
		$('#category_description_short').hide(); 
		$('#category_description_full').show(); 
		$(this).hide();
	});
});<?php }} ?>

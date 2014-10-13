<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:49
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\js\category.js" */ ?>
<?php /*%%SmartyHeaderCode:9078543c49b1cff116-38783954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b142236d84702c0c425065c6678d3568b746a009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\js\\category.js',
      1 => 1413236952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9078543c49b1cff116-38783954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b1d04263_23084285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b1d04263_23084285')) {function content_543c49b1d04263_23084285($_smarty_tpl) {?>/*
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

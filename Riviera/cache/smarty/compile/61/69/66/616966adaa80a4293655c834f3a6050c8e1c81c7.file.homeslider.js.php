<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:34
         compiled from "C:\xampp\htdocs\Reveria\themes\default-bootstrap\js\modules\homeslider\js\homeslider.js" */ ?>
<?php /*%%SmartyHeaderCode:2338954344752f397f9-75835776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '616966adaa80a4293655c834f3a6050c8e1c81c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\themes\\default-bootstrap\\js\\modules\\homeslider\\js\\homeslider.js',
      1 => 1412712203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2338954344752f397f9-75835776',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344753002fa1_48719316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344753002fa1_48719316')) {function content_54344753002fa1_48719316($_smarty_tpl) {?>/*
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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$(document).ready(function(){

	if (typeof(homeslider_speed) == 'undefined')
		homeslider_speed = 500;
	if (typeof(homeslider_pause) == 'undefined')
		homeslider_pause = 3000;
	if (typeof(homeslider_loop) == 'undefined')
		homeslider_loop = true;
	if (typeof(homeslider_width) == 'undefined')
		homeslider_width = 779;


	$('.homeslider-description').click(function () {
		window.location.href = $(this).prev('a').prop('href');
	});

	if ($('#htmlcontent_top').length > 0)
		$('#homepage-slider').addClass('col-xs-8');
	else
		$('#homepage-slider').addClass('col-xs-12');

	if (!!$.prototype.bxSlider)
		$('#homeslider').bxSlider({
			useCSS: false,
			maxSlides: 1,
			slideWidth: homeslider_width,
			infiniteLoop: homeslider_loop,
			hideControlOnEnd: true,
			pager: false,
			autoHover: true,
			auto: homeslider_loop,
			speed: parseInt(homeslider_speed),
			pause: homeslider_pause,
			controls: true
		});
});<?php }} ?>

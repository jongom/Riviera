<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 23:52:50
         compiled from "C:\xampp\htdocs\Riviera\themes\default-bootstrap\js\tools\treeManagement.js" */ ?>
<?php /*%%SmartyHeaderCode:2861543c49b2346646-26561227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b975b8bec74609d5122c8766267c5ba6f445cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Riviera\\themes\\default-bootstrap\\js\\tools\\treeManagement.js',
      1 => 1413236953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2861543c49b2346646-26561227',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543c49b23530d6_68228223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543c49b23530d6_68228223')) {function content_543c49b23530d6_68228223($_smarty_tpl) {?>/*
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
	$('ul.tree.dhtml').hide();

	//to do not execute this script as much as it's called...
	if(!$('ul.tree.dhtml').hasClass('dynamized'))
	{
		//add growers to each ul.tree elements
		$('ul.tree.dhtml ul').prev().before("<span class='grower OPEN'> </span>");
		
		//dynamically add the '.last' class on each last item of a branch
		$('ul.tree.dhtml ul li:last-child, ul.tree.dhtml li:last-child').addClass('last');
		
		//collapse every expanded branch
		$('ul.tree.dhtml span.grower.OPEN').addClass('CLOSE').removeClass('OPEN').parent().find('ul:first').hide();
		$('ul.tree.dhtml').show();
		
		//open the tree for the selected branch
			$('ul.tree.dhtml .selected').parents().each( function() {
				if ($(this).is('ul'))
					toggleBranch($(this).prev().prev(), true);
			});
			toggleBranch( $('ul.tree.dhtml .selected').prev(), true);
		
		//add a fonction on clicks on growers
		$('ul.tree.dhtml span.grower').click(function(){
			toggleBranch($(this));
		});
		//mark this 'ul.tree' elements as already 'dynamized'
		$('ul.tree.dhtml').addClass('dynamized');

		$('ul.tree.dhtml').removeClass('dhtml');
	}
});

//animate the opening of the branch (span.grower jQueryElement)
function openBranch(jQueryElement, noAnimation)
{
		jQueryElement.addClass('OPEN').removeClass('CLOSE');
		if(noAnimation)
			jQueryElement.parent().find('ul:first').show();
		else
			jQueryElement.parent().find('ul:first').slideDown();
}
//animate the closing of the branch (span.grower jQueryElement)
function closeBranch(jQueryElement, noAnimation)
{
	jQueryElement.addClass('CLOSE').removeClass('OPEN');
	if(noAnimation)
		jQueryElement.parent().find('ul:first').hide();
	else
		jQueryElement.parent().find('ul:first').slideUp();
}

//animate the closing or opening of the branch (ul jQueryElement)
function toggleBranch(jQueryElement, noAnimation)
{
	if(jQueryElement.hasClass('OPEN'))
		closeBranch(jQueryElement, noAnimation);
	else
		openBranch(jQueryElement, noAnimation);
}<?php }} ?>

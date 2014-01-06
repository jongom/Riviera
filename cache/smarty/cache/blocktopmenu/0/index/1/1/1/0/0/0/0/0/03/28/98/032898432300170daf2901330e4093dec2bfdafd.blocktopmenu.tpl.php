<?php /*%%SmartyHeaderCode:783352cab45b062650-07516825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '032898432300170daf2901330e4093dec2bfdafd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783352cab45b062650-07516825',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45b1a2739_71626116',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45b1a2739_71626116')) {function content_52cab45b1a2739_71626116($_smarty_tpl) {?>	
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
		<div class="cat-title">catégories</div>
		<ul class="sf-menu clearfix menu-content">
			<li ><a href="http://localhost/e-commerce/index.php?id_category=3&amp;controller=category" title="Women">Women</a><ul><li ><a href="http://localhost/e-commerce/index.php?id_category=4&amp;controller=category" title="Tops">Tops</a><ul><li ><a href="http://localhost/e-commerce/index.php?id_category=5&amp;controller=category" title="T-shirts">T-shirts</a></li><li ><a href="http://localhost/e-commerce/index.php?id_category=7&amp;controller=category" title="Blouses">Blouses</a></li></ul></li><li ><a href="http://localhost/e-commerce/index.php?id_category=8&amp;controller=category" title="Dresses">Dresses</a><ul><li ><a href="http://localhost/e-commerce/index.php?id_category=9&amp;controller=category" title="Casual Dresses">Casual Dresses</a></li><li ><a href="http://localhost/e-commerce/index.php?id_category=10&amp;controller=category" title="Evening Dresses">Evening Dresses</a></li><li ><a href="http://localhost/e-commerce/index.php?id_category=11&amp;controller=category" title="Summer Dresses">Summer Dresses</a></li></ul></li><li id="category-thumbnail"></li></ul></li>
					</ul>
	</div>

	<!--/ Menu -->
	
	<script type="text/javascript">
		$(document).ready(function() {
			categoryMenu = $('ul.sf-menu');        //var rich menu
			categoryMenu.superfish();				   //menu initialization
			$('.sf-menu > li > ul').addClass('submenu-container'); //add class for width define
			i = 0;
			$('.sf-menu > li > ul > li:not(#category-thumbnail)').each(function() {  //add classes for clearing
				i++;
				if(i%2==1)
					$(this).addClass('first-in-line-xs');
				else if (i%5==1)
					$(this).addClass('first-in-line-lg');
			});
		});
		
		// accordion for definition smaller that 767px
		
		responsiveflagMenu = false;
		function menuChange(status){
			if(status == 'enable'){
				$('.sf-menu > li > ul').removeAttr('style');
				$('.sf-menu').removeAttr('style');
				$('.sf-contener .cat-title').on('click', function(){
					$(this).toggleClass('active').parent().find('ul.menu-content').stop().slideToggle('medium');
				}),
				$('.sf-menu > li:has(ul)').each(function() {
					$(this).prepend('<span></span>'),
					$(this).find('span').on('click touchend', function(){
						categoryMenu.superfish('hide');
					});
				});
			}else{
				$('.sf-contener .cat-title').off();	
				$('.sf-menu').removeAttr('style');
				$('.sf-menu > li > ul').removeAttr('style');
				$('.sf-contener .cat-title').removeClass('active');
			}
		}
		
		function responsiveMenu(){
		   if ($(document).width() <= 767 && responsiveflagMenu == false){
				menuChange('enable'),
				responsiveflagMenu = true	
			}
			else if ($(document).width() >= 768){
				menuChange('disable'),
				responsiveflagMenu = false
			}
		}
		$(document).ready(responsiveMenu);
		$(window).resize(responsiveMenu);
	</script>
	 
<?php }} ?>
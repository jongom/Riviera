<?php /*%%SmartyHeaderCode:2963752cab45f2a6882-32995829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b031c51e9bc8bc7dfcce4ff2320602384650ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\homeslider\\homeslider.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2963752cab45f2a6882-32995829',
  'variables' => 
  array (
    'page_name' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'link' => 0,
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45fad1209_07438026',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45fad1209_07438026')) {function content_52cab45fad1209_07438026($_smarty_tpl) {?><!-- Module HomeSlider -->
			<div id="homepage-slider">
			<ul id="homeslider">
															<li class="homeslider-container">
							<a href="http://www.prestashop.com/?utm_source=v16_homeslider" title="sample-1">
								<img src="http://localhost/e-commerce/modules/homeslider/images/sample-1.jpg" alt="sample-1" />                                                            
							</a>
														<div class="homeslider-description"><h2>EXCEPTEUR<br />OCCAECAT</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p>
				<p><button class="btn btn-default" type="button">Shop now !</button></p></div>
													</li>
																				<li class="homeslider-container">
							<a href="http://www.prestashop.com/?utm_source=v16_homeslider" title="sample-2">
								<img src="http://localhost/e-commerce/modules/homeslider/images/sample-2.jpg" alt="sample-2" />                                                            
							</a>
														<div class="homeslider-description"><h2>EXCEPTEUR<br />OCCAECAT</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p>
				<p><button class="btn btn-default" type="button">Shop now !</button></p></div>
													</li>
																				<li class="homeslider-container">
							<a href="http://www.prestashop.com/?utm_source=v16_homeslider" title="sample-3">
								<img src="http://localhost/e-commerce/modules/homeslider/images/sample-3.jpg" alt="sample-3" />                                                            
							</a>
														<div class="homeslider-description"><h2>EXCEPTEUR<br />OCCAECAT</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p>
				<p><button class="btn btn-default" type="button">Shop now !</button></p></div>
													</li>
												</ul>
		</div>
					<script type="text/javascript">
															var homeslider_loop = true;
													var homeslider_speed = 500;
				var homeslider_pause = 3000;

				$('.homeslider-description').click(function(){
					window.location.href = $(this).prev('a').prop('href');
				});
			</script>
			<!-- /Module HomeSlider -->
<?php }} ?>
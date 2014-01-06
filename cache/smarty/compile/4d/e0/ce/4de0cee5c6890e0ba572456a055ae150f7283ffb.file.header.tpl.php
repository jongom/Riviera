<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:17
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2501352caad91e001b5-09581044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4de0cee5c6890e0ba572456a055ae150f7283ffb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\header.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2501352caad91e001b5-09581044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_dir' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'logged' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'js_dir' => 0,
    'HOOK_HEADER' => 0,
    'page_name' => 0,
    'body_classes' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_TOP' => 0,
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caad92929d76_14529794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caad92929d76_14529794')) {function content_52caad92929d76_14529794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
if (!is_callable('smarty_function_implode')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\function.implode.php';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
</title>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>
		  <meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>
		  <meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
		<?php }?>
		<meta charset="utf-8" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value){?>no<?php }?>follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /> 
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />

		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
highdpi.css" type="text/css" media="screen" /> -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
jquery/uniform.default.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
jquery/footable.core.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
jquery/jquery.bxslider.css" type="text/css" media="all" />

		<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
				<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
			<?php } ?>
		<?php }?>

		<script>
			if (navigator.userAgent.match(/Android/i)) {
				var viewport = document.querySelector("meta[name=viewport]");
				viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
			}
			if(navigator.userAgent.match(/Android/i)) {
				window.scrollTo(0,1);
			}
			var baseDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['content_dir']->value);?>
';
			var baseUri = '<?php echo addslashes($_smarty_tpl->tpl_vars['base_uri']->value);?>
';
			var static_token = '<?php echo addslashes($_smarty_tpl->tpl_vars['static_token']->value);?>
';
			var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;
			var isUserLogged = <?php if ($_smarty_tpl->tpl_vars['logged']->value){?>true<?php }else{ ?>false<?php }?>;
		</script>
		<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
			   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
			<?php } ?>
		<?php }?>
		<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
tools/bootstrap.min.js"></script>
		<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
			 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			 <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
tools/jquery.total-storage.min.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery/jquery.uniform-modify.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery/highdpi.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery/jquery.bxslider.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery/footable.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery/footable.sort.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery/responsive_utilites.js"></script>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

	</head>
	<body<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?> id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'html', 'UTF-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'html', 'UTF-8');?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['body_classes']->value)&&count($_smarty_tpl->tpl_vars['body_classes']->value)){?> <?php echo smarty_function_implode(array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value){?> hide-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value){?> hide-right-column<?php }?><?php if ($_smarty_tpl->tpl_vars['content_only']->value){?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>
			<div id="restricted-country">
				<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
			</div>
		<?php }?>
		<div id="page">
			<header id="header">
				<div id="banner-row">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBanner"),$_smarty_tpl);?>

				</div>
				<div id="nav-row">
					<div class="container">
						<nav>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

						</nav>
					</div>
				</div> <!-- #end nav-row -->
				<div id="header-row">
					<div class="container">
						<div class="row">
							<div id="header_logo">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'html', 'UTF-8');?>
">
									<img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'html', 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value){?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value){?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>
								</a>
							</div>
							<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)){?><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
<?php }?>
						</div>
					</div>
				</div> <!-- end #header-row -->
			</header>

			<div class="columns-container">
				<div id="columns" class="container">
					<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound'){?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<?php }?>
					<div class="row">
						<div id="top_column" class="center_column col-xs-12 col-sm-12">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopColumn"),$_smarty_tpl);?>

						</div>
					</div>
					<div class="row">
						<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)){?>
						<div id="left_column" class="column col-xs-12 col-sm-3">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

						</div>
						<?php }?>
						<div id="center_column" class="center_column col-xs-12 col-sm-<?php echo 12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value;?>
">
	<?php }?><?php }} ?>
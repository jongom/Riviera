<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:20
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819852caad94b66bd6-78135754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aadda003db4935b3b6f0e3e8408e22a331f0395d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\maintenance.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819852caad94b66bd6-78135754',
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
    'favicon_url' => 0,
    'css_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_MAINTENANCE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caad94f01b97_65479580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caad94f01b97_65479580')) {function content_52caad94f01b97_65479580($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
</title>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
<?php }?>
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,follow" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
/bootstrap_lib/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet" type="text/css" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css' />
	</head>
	<body>
    	<div class="container">
			<div id="maintenance">
			 <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value){?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value){?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="logo" /></div>
             <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

             <div id="message">
             	<h1 class="maintenance-heading"><?php echo smartyTranslate(array('s'=>'Maintenance mode'),$_smarty_tpl);?>
</h1>
				<?php echo smartyTranslate(array('s'=>'In order to perform website maintenance, our online store will be temporarily offline.'),$_smarty_tpl);?>

				<?php echo smartyTranslate(array('s'=>'We apologize for the inconvenience and ask that you please try again later.'),$_smarty_tpl);?>

			 </div>
		</div>
        </div>
	</body>
</html>
<?php }} ?>
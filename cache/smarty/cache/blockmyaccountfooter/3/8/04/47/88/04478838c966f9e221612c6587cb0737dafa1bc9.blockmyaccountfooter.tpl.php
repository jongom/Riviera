<?php /*%%SmartyHeaderCode:2458552cab45e57e6d1-24341427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04478838c966f9e221612c6587cb0737dafa1bc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2458552cab45e57e6d1-24341427',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab6e0ddf625_52370204',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab6e0ddf625_52370204')) {function content_52cab6e0ddf625_52370204($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/e-commerce/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/e-commerce/index.php?controller=history" title="List of my orders" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://localhost/e-commerce/index.php?controller=order-slip" title="List of my credit slips" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://localhost/e-commerce/index.php?controller=addresses" title="List of my addresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://localhost/e-commerce/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
            <li><a href="http://localhost/e-commerce/index.php?mylogout" title="Se déconnecter" rel="nofollow">Se déconnecter</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
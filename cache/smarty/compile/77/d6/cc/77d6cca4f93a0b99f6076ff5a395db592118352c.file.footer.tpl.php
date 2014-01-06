<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:17
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1756752caad91443311-49801901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77d6cca4f93a0b99f6076ff5a395db592118352c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\footer.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1756752caad91443311-49801901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caad915034f2_94989044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caad915034f2_94989044')) {function content_52caad915034f2_94989044($_smarty_tpl) {?>
		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
					</div> <!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)){?>
						<div id="right_column" class="col-xs-12 col-sm-3 column">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

						</div>
					<?php }?>
					</div> <!-- .row -->
				</div> <!-- #columns -->
			</div> <!-- .columns-container -->
<!-- Footer -->
			<div class="footer-container">
				<div class="container">
					<footer id="footer" class="row">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

					</footer>
				</div>
			</div> <!-- .footer-container -->
		</div> <!-- #page -->
	<?php }?>
	</body>
</html>
<?php }} ?>
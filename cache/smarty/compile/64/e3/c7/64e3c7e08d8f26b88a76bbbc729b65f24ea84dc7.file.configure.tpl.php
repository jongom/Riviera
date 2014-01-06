<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:54
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\modules\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1048952caadf2b391f4-95210332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64e3c7e08d8f26b88a76bbbc729b65f24ea84dc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\modules\\configure.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1048952caadf2b391f4-95210332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_display_name' => 0,
    'module_name' => 0,
    'module_disable_link' => 0,
    'module_uninstall_link' => 0,
    'module_reset_link' => 0,
    'module_update_link' => 0,
    'module_hook_link' => 0,
    'back_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf2c48ec8_59992707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf2c48ec8_59992707')) {function content_52caadf2c48ec8_59992707($_smarty_tpl) {?>
<div class="bootstrap">
	<div class="page-head">
		<h2 class="page-title">
			<?php echo smartyTranslate(array('s'=>'Configure:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['module_display_name']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
)
		</h2>
		<div class="page-bar toolbarBox">
			<div class="btn-toolbar">
				<ul class="cc_button nav nav-pills pull-right">
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_disable_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Disable'),$_smarty_tpl);?>
">
							<i class="process-icon-off"></i>
							<div><?php echo smartyTranslate(array('s'=>'Disable'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_uninstall_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>
">
							<i class="process-icon-uninstall"></i>
							<div><?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_reset_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>
">
							<i class="process-icon-reset"></i>
							<div><?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<?php if (isset($_smarty_tpl->tpl_vars['module_update_link']->value)){?>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_update_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
">
							<i class="process-icon-refresh"></i>
							<div><?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<?php }?>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_hook_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Manage hooks'),$_smarty_tpl);?>
">
							<i class="process-icon-anchor"></i>
							<div><?php echo smartyTranslate(array('s'=>'Manage hooks'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<li>
						<a id="desc-module-back" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['back_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
">
							<i class="process-icon-back" ></i>
							<div><?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div><?php }} ?>
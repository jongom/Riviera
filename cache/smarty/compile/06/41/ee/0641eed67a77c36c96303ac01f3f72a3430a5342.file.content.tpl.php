<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:54
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783452caadf2179c88-02489046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0641eed67a77c36c96303ac01f3f72a3430a5342' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783452caadf2179c88-02489046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_page_header_toolbar' => 0,
    'lite_display' => 0,
    'page_header_toolbar_btn' => 0,
    'k' => 0,
    'page_header_toolbar_title' => 0,
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf2292d74_11482215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf2292d74_11482215')) {function content_52caadf2292d74_11482215($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['show_page_header_toolbar']->value)&&$_smarty_tpl->tpl_vars['show_page_header_toolbar']->value&&(!isset($_smarty_tpl->tpl_vars['lite_display']->value)||!$_smarty_tpl->tpl_vars['lite_display']->value)){?>
	<div class="leadin">
		<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_header_toolbar_btn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value){
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value=='modules-list'){?>
			<div class="modal fade" id="modules_list_container">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Modules'),$_smarty_tpl);?>
</h3>
						</div>
						<div class="modal-body">
							<div id="modules_list_container_tab" style="display:none;"></div>
							<div id="modules_list_loader"><img src="../img/loader.gif" alt=""/></div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		<?php } ?>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("page_header_toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['page_header_toolbar_btn']->value,'title'=>$_smarty_tpl->tpl_vars['page_header_toolbar_title']->value), 0);?>

<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?><?php }} ?>
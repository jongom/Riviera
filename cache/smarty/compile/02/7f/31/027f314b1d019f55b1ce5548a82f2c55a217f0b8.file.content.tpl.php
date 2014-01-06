<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:48
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\addons_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2970752caadec1e02b2-59181944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '027f314b1d019f55b1ce5548a82f2c55a217f0b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\addons_catalog\\content.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2970752caadec1e02b2-59181944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'show_page_header_toolbar' => 0,
    'lite_display' => 0,
    'page_header_toolbar_btn' => 0,
    'k' => 0,
    'page_header_toolbar_title' => 0,
    'parentDomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadec285fe1_05914838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadec285fe1_05914838')) {function content_52caadec285fe1_05914838($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
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
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>

<iframe frameborder="no" style="margin:0px;padding:0px;width:100%;height:920px" src="http://addons.prestashop.com/iframe/search.php?parentUrl=<?php echo $_smarty_tpl->tpl_vars['parentDomain']->value;?>
"></iframe>
<div class="clear">&nbsp;</div>

<?php }} ?>
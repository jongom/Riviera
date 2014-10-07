<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:47
         compiled from "C:\xampp\htdocs\Reveria\admin\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176515434475fd45153-00478177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c03d6ab278ab4b83aca0f23b8b9905faa4940f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\admin\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1412712142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176515434475fd45153-00478177',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5434475fd4bce8_82832204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5434475fd4bce8_82832204')) {function content_5434475fd4bce8_82832204($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>

<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:04
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1700252caadc0bdf7b5-51862054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2f6b5e224e44aa7b78fecb4d26825c99e398a97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1700252caadc0bdf7b5-51862054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc0d07099_57734020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc0d07099_57734020')) {function content_52caadc0d07099_57734020($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)){?>
	<!-- block seach mobile -->
	<div class="input_search" data-role="fieldcontain">
		<form method="get" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), 'html', 'UTF-8');?>
" id="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8'));?>
" />
		</form>
	</div>
	<!-- /block seach mobile -->
<?php }else{ ?>
	<!-- Block search module TOP -->
	<div id="search_block_top">
		<form id="searchbox" method="get" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), 'html', 'UTF-8');?>
" >
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->tpl_vars['search_query']->value, 'htmlall', 'UTF-8'));?>
" />
			<button type="submit" name="submit_search" class="btn btn-default button-search">
				<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
			</button>
		</form>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."/modules/blocksearch/blocksearch-instantsearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- /Block search module TOP -->
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:48
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\mobile\stores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2116452caadb0169367-93470843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9808b35b539a0f2cc2a396ef79022f77cec9d2bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\mobile\\stores.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2116452caadb0169367-93470843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaultLat' => 0,
    'defaultLong' => 0,
    'hasStoreIcon' => 0,
    'distance_unit' => 0,
    'img_store_dir' => 0,
    'img_ps_dir' => 0,
    'searchUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadb02828a9_43031213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadb02828a9_43031213')) {function content_52caadb02828a9_43031213($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
		// <![CDATA[
		var map;
		var markers = [];
		var infoWindow;
		var locationSelect;

		var defaultLat = '<?php echo $_smarty_tpl->tpl_vars['defaultLat']->value;?>
';
		var defaultLong = '<?php echo $_smarty_tpl->tpl_vars['defaultLong']->value;?>
';
		
		var translation_1 = '<?php echo smartyTranslate(array('s'=>'No stores were found. Please try selecting a wider radius.','js'=>1),$_smarty_tpl);?>
';
		var translation_2 = '<?php echo smartyTranslate(array('s'=>'store found -- see details:','js'=>1),$_smarty_tpl);?>
';
		var translation_3 = '<?php echo smartyTranslate(array('s'=>'stores found -- view all results:','js'=>1),$_smarty_tpl);?>
';
		var translation_4 = '<?php echo smartyTranslate(array('s'=>'Phone:','js'=>1),$_smarty_tpl);?>
';
		var translation_5 = '<?php echo smartyTranslate(array('s'=>'Get directions','js'=>1),$_smarty_tpl);?>
';
		var translation_6 = '<?php echo smartyTranslate(array('s'=>'Not found','js'=>1),$_smarty_tpl);?>
';
		
		var hasStoreIcon = '<?php echo $_smarty_tpl->tpl_vars['hasStoreIcon']->value;?>
';
		var distance_unit = '<?php echo $_smarty_tpl->tpl_vars['distance_unit']->value;?>
';
		var img_store_dir = '<?php echo $_smarty_tpl->tpl_vars['img_store_dir']->value;?>
';
		var img_ps_dir = '<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
';
		var searchUrl = '<?php echo $_smarty_tpl->tpl_vars['searchUrl']->value;?>
';
		//]]>
</script>

<!-- Stores -->
<div data-role="content" id="content" class="stores">

	<div id="stores_search_block">
		<label for="location">
			<?php echo smartyTranslate(array('s'=>'Enter a location (e.g. zip/postal code, address, city or country) in order to find the nearest stores.'),$_smarty_tpl);?>

		</label>
	    <input type="text" name="location" id="location" value="" />
	</div>
	
	<div id="stores_search_block">
		<label for="radius"><?php echo smartyTranslate(array('s'=>'Radius:'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['distance_unit']->value;?>
)</label>
		<input type="range" name="radius_slider" id="radius" value="15" min="0" max="100" data-highlight="true"/>
	</div>
	
	<div id="stores_search_block">
		<button type="submit" data-theme="a" name="submit" value="submit-value" class="ui-btn-hidden" aria-disabled="false">
			<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>

		</button>
	</div>
	
	<div class="stores_block">
		<h3 class="bg"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</h3>
		<ul data-role="listview" data-theme="c" id="stores_list">
		</ul>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("./sitemap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div> 
<!-- END Stores --><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:44
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\stores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1772552caade8787213-10074388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bd5ebde7bf95731c2e2d34a09efad3ca781377a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\stores.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1772552caade8787213-10074388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simplifiedStoresDiplay' => 0,
    'stores' => 0,
    'store' => 0,
    'img_store_dir' => 0,
    'defaultLat' => 0,
    'defaultLong' => 0,
    'hasStoreIcon' => 0,
    'distance_unit' => 0,
    'img_ps_dir' => 0,
    'searchUrl' => 0,
    'logo_store' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caade8cade29_96846716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caade8cade29_96846716')) {function content_52caade8cade29_96846716($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading">
	<?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>

</h1>

<?php if ($_smarty_tpl->tpl_vars['simplifiedStoresDiplay']->value){?>
	<?php if (count($_smarty_tpl->tpl_vars['stores']->value)){?>
		<p class="store-title">
			<strong class="dark">
				<?php echo smartyTranslate(array('s'=>'Here you can find our store locations. Please feel free to contact us:'),$_smarty_tpl);?>

			</strong>
		</p>
	    <table class="table table-bordered">
	    	<thead>
            	<tr>
                	<th class="logo"><?php echo smartyTranslate(array('s'=>'Logo'),$_smarty_tpl);?>
</th>
                    <th class="name"><?php echo smartyTranslate(array('s'=>'Store name'),$_smarty_tpl);?>
</th>
                    <th class="address"><?php echo smartyTranslate(array('s'=>'Store address'),$_smarty_tpl);?>
</th>
                    <th class="store-hours"><?php echo smartyTranslate(array('s'=>'Working hours'),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
			<?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value){
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
				<tr class="store-small">
					<td class="logo">
						<?php if ($_smarty_tpl->tpl_vars['store']->value['has_picture']){?>
							<div class="store-image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_store_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store']->value['id_store'];?>
.jpg" alt="" />
							</div>
						<?php }?>
					</td>
					<td class="name">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['store']->value['name'], 'html', 'UTF-8');?>

					</td>
		            <td class="address">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['store']->value['address1'], 'html', 'UTF-8');?>

						<?php if ($_smarty_tpl->tpl_vars['store']->value['address2']){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['store']->value['address2'], 'html', 'UTF-8');?>
<?php }?>
						<?php echo $_smarty_tpl->tpl_vars['store']->value['postcode'];?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['store']->value['city'], 'html', 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['store']->value['state']){?>, <?php echo $_smarty_tpl->tpl_vars['store']->value['state'];?>
<?php }?>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['store']->value['country'], 'html', 'UTF-8');?>

						<?php if ($_smarty_tpl->tpl_vars['store']->value['phone']){?><?php echo smartyTranslate(array('s'=>'Phone:','js'=>0),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['store']->value['phone'];?>
<?php }?>
					</td>
		            <td class="store-hours">
						<?php if (isset($_smarty_tpl->tpl_vars['store']->value['working_hours'])){?><?php echo $_smarty_tpl->tpl_vars['store']->value['working_hours'];?>
<?php }?>
		            </td>
				</tr>
			<?php } ?>
	    </table>
	<?php }?>
<?php }else{ ?>
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
		var logo_store = '<?php echo $_smarty_tpl->tpl_vars['logo_store']->value;?>
';
		//]]>
	</script>
	<div id="map"></div>
	<p class="store-title">
		<strong class="dark">
			<?php echo smartyTranslate(array('s'=>'Enter a location (e.g. zip/postal code, address, city or country) in order to find the nearest stores.'),$_smarty_tpl);?>

		</strong>
	</p>
    <div class="store-content">
        <div class="address-input">
            <label for="addressInput"><?php echo smartyTranslate(array('s'=>'Your location:'),$_smarty_tpl);?>
</label>
            <input class="form-control grey" type="text" name="location" id="addressInput" value="<?php echo smartyTranslate(array('s'=>'Address, zip / postal code, city, state or country'),$_smarty_tpl);?>
" onclick="this.value='';" />
        </div>
        <div class="radius-input">
            <label for="radiusSelect"><?php echo smartyTranslate(array('s'=>'Radius:'),$_smarty_tpl);?>
</label> 
            <select name="radius" id="radiusSelect" class="form-control">
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" class="middle" alt="" id="stores_loader" />
        </div>
        <div>
            <button onclick="searchLocations();" class="button btn btn-default button-small">
            	<span>
            		<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i>
            	</span>
            </button>
        </div>
    </div>
    <div class="store-content-select selector3">
    	<select id="locationSelect" class="form-control">
    		<option>-</option>
    	</select>
    </div>

	<table id="stores-table" class="table table-bordered">
    	<thead>
			<tr>
                <th class="num"><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
</th>
                <th><?php echo smartyTranslate(array('s'=>'Store'),$_smarty_tpl);?>
</th>
                <th><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</th>
                <th><?php echo smartyTranslate(array('s'=>'Distance'),$_smarty_tpl);?>
</th>
            </tr>		
        </thead>
        <tbody>
        </tbody>
	</table>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:20
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\order-address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1791952caadd053d1b5-39185223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eae81afd5bdfcf5ff171da8a946566f2595fe750' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\order-address.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1791952caadd053d1b5-39185223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'back_order_page' => 0,
    'back' => 0,
    'link' => 0,
    'formatedAddressFieldsValuesList' => 0,
    'id_address' => 0,
    'type' => 0,
    'field_name' => 0,
    'pattern_name' => 0,
    'multi_shipping' => 0,
    'cart' => 0,
    'is_multi_address_delivery' => 0,
    'open_multishipping_fancybox' => 0,
    'addresses' => 0,
    'address' => 0,
    'oldMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadd146fab8_38908387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadd146fab8_38908387')) {function content_52caadd146fab8_38908387($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['opc']->value){?>
	<?php $_smarty_tpl->tpl_vars["back_order_page"] = new Smarty_variable("order-opc.php", null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars["back_order_page"] = new Smarty_variable("order.php", null, 0);?>
<?php }?>

<script type="text/javascript">
	// <![CDATA[
		<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
			var orderProcess = 'order';
			var currencySign = '<?php echo html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8");?>
';
			var currencyRate = '<?php echo floatval($_smarty_tpl->tpl_vars['currencyRate']->value);?>
';
			var currencyFormat = '<?php echo intval($_smarty_tpl->tpl_vars['currencyFormat']->value);?>
';
			var currencyBlank = '<?php echo intval($_smarty_tpl->tpl_vars['currencyBlank']->value);?>
';
			var txtProduct = "<?php echo smartyTranslate(array('s'=>'product','js'=>1),$_smarty_tpl);?>
";
			var txtProducts = "<?php echo smartyTranslate(array('s'=>'products','js'=>1),$_smarty_tpl);?>
";
		<?php }?>
		var CloseTxt = '<?php echo smartyTranslate(array('s'=>'Submit','js'=>1),$_smarty_tpl);?>
';
		var addressMultishippingUrl = "<?php ob_start();?><?php echo urlencode('&multi-shipping=1');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['back']->value){?><?php echo "&mod=";?><?php echo urlencode($_smarty_tpl->tpl_vars['back']->value);?>
<?php }?><?php $_tmp2=ob_get_clean();?><?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)."?step=1".$_tmp1.$_tmp2));?>
";
		var addressUrl = "<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['back']->value){?><?php echo "&mod=";?><?php echo (string)$_smarty_tpl->tpl_vars['back']->value;?><?php }?><?php $_tmp3=ob_get_clean();?><?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)."?step=1".$_tmp3));?>
";
		var formatedAddressFieldsValuesList = new Array();
		<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['id_address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['id_address']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
			formatedAddressFieldsValuesList[<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
] =
			{
				'ordered_fields':[
					<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_smarty_tpl->tpl_vars['num_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value['ordered_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field_name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
 $_smarty_tpl->tpl_vars['num_field']->value = $_smarty_tpl->tpl_vars['field_name']->key;
 $_smarty_tpl->tpl_vars['field_name']->index++;
 $_smarty_tpl->tpl_vars['field_name']->first = $_smarty_tpl->tpl_vars['field_name']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['inv_loop']['first'] = $_smarty_tpl->tpl_vars['field_name']->first;
?>
						<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['inv_loop']['first']){?>,<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['field_name']->value);?>

					<?php } ?>
				],
				'formated_fields_values':{
						<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_smarty_tpl->tpl_vars['pattern_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value['formated_fields_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field_name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
 $_smarty_tpl->tpl_vars['pattern_name']->value = $_smarty_tpl->tpl_vars['field_name']->key;
 $_smarty_tpl->tpl_vars['field_name']->index++;
 $_smarty_tpl->tpl_vars['field_name']->first = $_smarty_tpl->tpl_vars['field_name']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['inv_loop']['first'] = $_smarty_tpl->tpl_vars['field_name']->first;
?>
							<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['inv_loop']['first']){?>,<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['pattern_name']->value);?>
:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['field_name']->value);?>

						<?php } ?>
					}
			}
		<?php } ?>
		function getAddressesTitles() {
			return {
				'invoice': "<h3 class='page-subheading'><?php echo smartyTranslate(array('s'=>'Your billing address','js'=>1),$_smarty_tpl);?>
</h3>",
				'delivery': "<h3 class='page-subheading'><?php echo smartyTranslate(array('s'=>'Your delivery address','js'=>1),$_smarty_tpl);?>
</h3>"
			};
		}

		function buildAddressBlock(id_address, address_type, dest_comp) {
			if (isNaN(id_address))
				return;
			var adr_titles_vals = getAddressesTitles();
			var li_content = formatedAddressFieldsValuesList[id_address]['formated_fields_values'];
			var ordered_fields_name = ['title'];
			ordered_fields_name = ordered_fields_name.concat(formatedAddressFieldsValuesList[id_address]['ordered_fields']);
			ordered_fields_name = ordered_fields_name.concat(['update']);
			dest_comp.html('');
			li_content['title'] = adr_titles_vals[address_type];
			li_content['update'] = '<a class="button button-small btn btn-default" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address"));?>
'+id_address+'&amp;back=<?php echo $_smarty_tpl->tpl_vars['back_order_page']->value;?>
?step=1<?php if ($_smarty_tpl->tpl_vars['back']->value){?>&mod=<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Update','js'=>1),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Update','js'=>1),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a>';
			appendAddressList(dest_comp, li_content, ordered_fields_name);
		}

		function appendAddressList(dest_comp, values, fields_name) {
			for (var item in fields_name) {
				var name = fields_name[item];
				var value = getFieldValue(name, values);
				if (value != "") {
					var new_li = document.createElement('li');
					new_li.className = 'address_'+ name;
					new_li.innerHTML = getFieldValue(name, values);
					dest_comp.append(new_li);
				}
			}
		}

		function getFieldValue(field_name, values) {
			var reg=new RegExp("[ ]+", "g");
			var items = field_name.split(reg);
			var vals = new Array();
			for (var field_item in items) {
				items[field_item] = items[field_item].replace(",", "");
				vals.push(values[items[field_item]]);
			}
			return vals.join(" ");
		}
	//]]>
</script>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
</h1>
<?php }else{ ?>
	<h1 class="page-heading step-num"><span>1</span> <?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
</h1>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('address', null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php ob_start();?><?php echo Configuration::get('PS_ALLOW_MULTISHIPPING');?>
<?php $_tmp4=ob_get_clean();?><?php if (!$_smarty_tpl->tpl_vars['multi_shipping']->value&&$_tmp4&&!$_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()){?>
		<div class="button_multishipping_mode box" id="multishipping_mode_box">
			<div class="title"><?php echo smartyTranslate(array('s'=>'Multi-shipping'),$_smarty_tpl);?>
</div>
			<div class="description">
				<a class="btn btn-default button exclusive-medium" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,'step=1&multi-shipping=1'), 'html', 'UTF-8');?>
"/>
					<span><?php echo smartyTranslate(array('s'=>'Specify a delivery address for each product ordered.'),$_smarty_tpl);?>
</span>
				</a>
			</div>
		</div>
	<?php }?>
	<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['back_order_page']->value,true), 'html', 'UTF-8');?>
" method="post">
<?php }else{ ?>
	<?php ob_start();?><?php echo Configuration::get('PS_ALLOW_MULTISHIPPING');?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5&&!$_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()){?>
		<div class="address-form-multishipping">
			<div class="button_multishipping_mode box" id="multishipping_mode_box">
				<div class="title"><?php echo smartyTranslate(array('s'=>'Multi-shipping'),$_smarty_tpl);?>
</div>
				<div class="description checkbox">
					<label for="multishipping_mode_checkbox">
						<input type="checkbox" id="multishipping_mode_checkbox" onchange="multishippingMode(this); return false;" />
						<?php echo smartyTranslate(array('s'=>'I\'d like to specify a delivery address for each product ordered.'),$_smarty_tpl);?>

					</label>
				</div>
				<div class="description_off">
					<a class="btn btn-default button exclusive-medium" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true,null,'ajax=1&multi-shipping=1&method=multishipping'), 'html', 'UTF-8');?>
" id="link_multishipping_form" title="<?php echo smartyTranslate(array('s'=>'Choose the delivery address(es)'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Specify a delivery address for each product.'),$_smarty_tpl);?>
</span>
					</a>
				</div>
			</div>
			<script type="text/javascript">
				<?php if ($_smarty_tpl->tpl_vars['is_multi_address_delivery']->value){?>
				var multishipping_mode = true;
				<?php }else{ ?>
				var multishipping_mode = false;
				<?php }?>
				var open_multishipping_fancybox = <?php echo intval($_smarty_tpl->tpl_vars['open_multishipping_fancybox']->value);?>
;
			</script>
		</div>
	<?php }?>
	<div id="opc_account" class="opc-main-block">
		<div id="opc_account-overlay" class="opc-overlay" style="display: none;"></div>
<?php }?>

<div class="addresses clearfix">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="address_delivery select form-group selector1">
				<label for="id_address_delivery"><?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()){?><?php echo smartyTranslate(array('s'=>'Choose a billing address:'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Choose a delivery address:'),$_smarty_tpl);?>
<?php }?></label>
				<select name="id_address_delivery" id="id_address_delivery" class="address_select form-control" onchange="updateAddressesDisplay();<?php if ($_smarty_tpl->tpl_vars['opc']->value){?>updateAddressSelection();<?php }?>">
					<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
						<option value="<?php echo intval($_smarty_tpl->tpl_vars['address']->value['id_address']);?>
" <?php if ($_smarty_tpl->tpl_vars['address']->value['id_address']==$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery){?>selected="selected"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address']->value['alias'], 'html', 'UTF-8');?>

						</option>
					<?php } ?>
				</select>
			</div>
			<p class="checkbox addressesAreEquals" <?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()){?>style="display:none;"<?php }?>>
				<input type="checkbox" name="same" id="addressesAreEquals" value="1" onclick="updateAddressesDisplay();<?php if ($_smarty_tpl->tpl_vars['opc']->value){?>updateAddressSelection();<?php }?>"<?php if ($_smarty_tpl->tpl_vars['cart']->value->id_address_invoice==$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery||count($_smarty_tpl->tpl_vars['addresses']->value)==1){?> checked="checked"<?php }?> />
				<label for="addressesAreEquals"><?php echo smartyTranslate(array('s'=>'Use the delivery address as the billing address.'),$_smarty_tpl);?>
</label>
			</p>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div id="address_invoice_form" class="select form-group selector1" <?php if ($_smarty_tpl->tpl_vars['cart']->value->id_address_invoice==$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery){?>style="display: none;"<?php }?>>
				<?php if (count($_smarty_tpl->tpl_vars['addresses']->value)>1){?>
					<label for="id_address_invoice" class="strong"><?php echo smartyTranslate(array('s'=>'Choose a billing address:'),$_smarty_tpl);?>
</label>
					<select name="id_address_invoice" id="id_address_invoice" class="address_select form-control" onchange="updateAddressesDisplay();<?php if ($_smarty_tpl->tpl_vars['opc']->value){?>updateAddressSelection();<?php }?>">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['address'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['address']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['addresses']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['name'] = 'address';
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['address']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['address']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['address']['total']);
?>
						<option value="<?php echo intval($_smarty_tpl->tpl_vars['addresses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['id_address']);?>
" <?php if ($_smarty_tpl->tpl_vars['addresses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['id_address']==$_smarty_tpl->tpl_vars['cart']->value->id_address_invoice&&$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery!=$_smarty_tpl->tpl_vars['cart']->value->id_address_invoice){?>selected="selected"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['addresses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['address']['index']]['alias'], 'html', 'UTF-8');?>

						</option>
					<?php endfor; endif; ?>
					</select>
				<?php }else{ ?>
					<a href="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['back']->value){?><?php echo "&mod=";?><?php echo (string)$_smarty_tpl->tpl_vars['back']->value;?><?php }?><?php $_tmp6=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)."?step=1&select_address=1".$_tmp6), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" class="button button-small btn btn-default">
						<span>
							<?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>

							<i class="icon-chevron-right right"></i>
						</span>
					</a>
				<?php }?>
			</div>
		</div>
	</div> <!-- end row -->
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<ul class="address item box" id="address_delivery" <?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()){?>style="display:none;"<?php }?>>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-6">
			<ul class="address alternate_item <?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()){?>full_width<?php }?> box" id="address_invoice">
			</ul>
		</div>
	</div> <!-- end row -->
	<p class="address_add submit">
		<a href="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['back']->value){?><?php echo "&mod=";?><?php echo (string)$_smarty_tpl->tpl_vars['back']->value;?><?php }?><?php $_tmp7=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)."?step=1".$_tmp7), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" class="button button-small btn btn-default">
			<span><?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
		</a>
	</p>
	<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
		<div id="ordermsg" class="form-group">
			<label><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl);?>
</label>
			<textarea class="form-control" cols="60" rows="6" name="message"><?php if (isset($_smarty_tpl->tpl_vars['oldMessage']->value)){?><?php echo $_smarty_tpl->tpl_vars['oldMessage']->value;?>
<?php }?></textarea>
		</div>
	<?php }?>
</div> <!-- end addresses -->

<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
		<p class="cart_navigation clearfix">
			<input type="hidden" class="hidden" name="step" value="2" />
			<input type="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" />
			<a href="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['back']->value){?><?php echo "&back=";?><?php echo (string)$_smarty_tpl->tpl_vars['back']->value;?><?php }?><?php $_tmp8=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['back_order_page']->value,true,null,"step=0".$_tmp8), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
" class="button-exclusive btn btn-default">
				<i class="icon-chevron-left"></i>
				<?php echo smartyTranslate(array('s'=>'Continue Shopping'),$_smarty_tpl);?>

			</a>
			<button type="submit" name="processAddress" class="button btn btn-default button-medium">
				<span><?php echo smartyTranslate(array('s'=>'Proceed to checkout'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
			</button>
		</p>
	</form>
<?php }else{ ?>
	</div> <!--  end opc_account -->
<?php }?><?php }} ?>
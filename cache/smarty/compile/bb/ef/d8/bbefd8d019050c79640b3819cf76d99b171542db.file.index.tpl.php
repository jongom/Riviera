<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:20
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1045652caad94114ba4-48176272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbefd8d019050c79640b3819cf76d99b171542db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\index.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045652caad94114ba4-48176272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
    'product' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caad94347184_99842833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caad94347184_99842833')) {function content_52caad94347184_99842833($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)){?>
	<div class="clearfix"></div>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)){?>
        <ul id="home-page-tabs" class="nav nav-tabs"><?php }?><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)){?></ul>
    <?php }?>
    <script type="text/javascript">
		var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
		var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
		var comparator_max_item = <?php echo $_smarty_tpl->tpl_vars['comparator_max_item']->value;?>
;
		var comparedProductsIds = [];
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['compared_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['product']->key;
?>comparedProductsIds.push(<?php echo $_smarty_tpl->tpl_vars['product']->value;?>
);<?php } ?>
		$('document').ready(function(){
			blockHover();
			if (typeof reloadProductComparison != 'undefined')
				reloadProductComparison();
		});
	</script>
	<div class="tab-content">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>

	</div>
<?php }?>
<div class="clearfix">
	<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

</div><?php }} ?>
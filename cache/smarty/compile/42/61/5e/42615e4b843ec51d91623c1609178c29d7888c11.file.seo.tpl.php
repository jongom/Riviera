<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:05
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\products\seo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:500352caadfd8ffea0-66414579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42615e4b843ec51d91623c1609178c29d7888c11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\products\\seo.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500352caadfd8ffea0-66414579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_lang' => 0,
    'languages' => 0,
    'product' => 0,
    'language' => 0,
    'curent_shop_url' => 0,
    'default_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadfdb6b2e1_33840752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadfdb6b2e1_33840752')) {function content_52caadfdb6b2e1_33840752($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<div id="product-seo" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Seo" />
	<h3><?php echo smartyTranslate(array('s'=>'SEO'),$_smarty_tpl);?>
</h3>

	<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_tab'=>"Seo"), 0);?>


	<div class="form-group">
		<label class="control-label col-lg-3" for="meta_title_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"meta_title",'type'=>"default",'multilang'=>"true"), 0);?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Product page title: Leave blank to use the product name'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Meta title:'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'meta_title','input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_title,'maxchar'=>70), 0);?>

		</div>
	</div>

	<div class="form-group">		
		<label class="control-label col-lg-3" for="meta_description_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"meta_description",'type'=>"default",'multilang'=>"true"), 0);?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'A single sentence for the HTML header is needed. '),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Meta description:'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'meta_description','input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_description,'maxchar'=>160), 0);?>

		</div>
	</div>
	
	<div class="form-group hide">
		<label class="control-label col-lg-3" for="meta_keywords_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"meta_keywords",'type'=>"default",'multilang'=>"true"), 0);?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Keywords for HTML header, separated by commas.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Meta keywords:'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-8">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_keywords,'input_name'=>'meta_keywords'), 0);?>

		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="link_rewrite_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"link_rewrite",'type'=>"seo_friendly_url",'multilang'=>"true"), 0);?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'friendly URL from the product name.'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Friendly URL:'),$_smarty_tpl);?>

			</span>

		</label>
		<div class="col-lg-6">
				<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->link_rewrite,'input_name'=>'link_rewrite'), 0);?>

		</div>
		<div class="col-lg-2">
			<button type="button" class="btn btn-default" id="generate-friendly-url" onmousedown="updateFriendlyURLByName();"><i class="icon-random"></i> <?php echo smartyTranslate(array('s'=>'Generate'),$_smarty_tpl);?>
</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-9 col-lg-offset-3">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<div class="alert alert-warning translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
				<i class="icon-link"></i> <?php echo smartyTranslate(array('s'=>'The product link will look like this:'),$_smarty_tpl);?>
<br/>
				<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['curent_shop_url']->value, 'html', 'UTF-8');?>
lang/<?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)){?><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
<?php }else{ ?>id_product<?php }?>-<span id="friendly-url_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->link_rewrite[$_smarty_tpl->tpl_vars['default_language']->value];?>
</span>.html</strong>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
);
</script><?php }} ?>
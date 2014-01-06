<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:20:54
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blocklanguages\blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115852caadb6bc68e9-54606132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf6a2fd8af4f5f0eba26dbd2f9c36e85e429bde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocklanguages\\blocklanguages.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115852caadb6bc68e9-54606132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'indice_lang' => 0,
    'lang_rewrite_urls' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadb70cc764_20635202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadb70cc764_20635202')) {function content_52caadb70cc764_20635202($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block languages module -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
	<div id="languages-block-top">
		<div id="countries">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value){?>
					<div class="current">
						<span><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</span>
					</div>
				<?php }?>
			<?php } ?>
			<ul id="first-languages" class="countries_ul toogle_content">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value){?>class="selected"<?php }?>>
					<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value){?>
						<?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, 0);?>
						<?php if (isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value])){?>
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], 'html', 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
						<?php }else{ ?>
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), 'html', 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
						<?php }?>
					<?php }?>
							<span><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</span>
					<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value){?>
						</a>
					<?php }?>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#countries .current span, #countries .countries_ul li span').each(function() {
				var h = $(this).html();
				var index = h.indexOf(' ');
					if(index == -1) {
						index = h.length;
					}
				$(this).html('<span class="firstWord">'+ h.substring(index, h.length) + '</span>' + h.substring(0, index));
			});
		}); 
	</script>
<?php }?>
<!-- /Block languages module -->
<?php }} ?>
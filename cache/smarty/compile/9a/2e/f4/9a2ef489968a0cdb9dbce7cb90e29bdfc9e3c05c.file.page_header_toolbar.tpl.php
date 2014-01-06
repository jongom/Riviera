<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:24
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\page_header_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2530652caae10afe664-06413241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2ef489968a0cdb9dbce7cb90e29bdfc9e3c05c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\page_header_toolbar.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2530652caae10afe664-06413241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar_btn' => 0,
    'table' => 0,
    'title' => 0,
    'k' => 0,
    'btn' => 0,
    'tab_modules_open' => 0,
    'tab_modules_list' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae11096170_38735306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae11096170_38735306')) {function content_52caae11096170_38735306($_smarty_tpl) {?>

<div class="page-head">
	
	<h2 class="page-title">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['back'])){?>
		<a id="page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['imgclass'])){?>-<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['imgclass'];?>
<?php }?>" class="page-header-toolbar-back" <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['href'])){?>href="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['href'];?>
"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['desc'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['target'])&&$_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['target']){?>target="_blank"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['js'])&&$_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['js']){?>onclick="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['js'];?>
"<?php }?>>
			<i class="process-icon-back"></i>
			<!-- <span <?php if (isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['force_desc'])&&$_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['force_desc']==true){?> class="locked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['back']['desc'];?>
</span> -->
		</a>
		<?php }?>
		<?php if (is_array($_smarty_tpl->tpl_vars['title']->value)){?><?php echo end($_smarty_tpl->tpl_vars['title']->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?>
	</h2>
	

	<div class="page-bar toolbarBox">
		<div class="btn-toolbar">
			
			<ul class="cc_button nav nav-pills pull-right">
				<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toolbar_btn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value){
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value!='back'){?>
				<li>
					<a id="page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php }?>" class="toolbar_btn" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])){?>href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['btn']->value['desc'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['target'])&&$_smarty_tpl->tpl_vars['btn']->value['target']){?>target="_blank"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']){?>onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>>
						<i class="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
<?php }else{ ?>process-icon-<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['imgclass'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php }?><?php }?> <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" ></i>
						<span <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['force_desc'])&&$_smarty_tpl->tpl_vars['btn']->value['force_desc']==true){?> class="locked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['btn']->value['desc'];?>
</span>
					</a>
				</li>
				<?php }?>
				<?php } ?>
			</ul>

			<script language="javascript" type="text/javascript">
			//<![CDATA[
				var submited = false;
				var modules_list_loaded = false;

				$(function() {
					//get reference on save link
					btn_save = $('i[class~="process-icon-save"]').parent();

					//get reference on form submit button
					btn_submit = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn');

					if (btn_save.length > 0 && btn_submit.length > 0)
					{
						//get reference on save and stay link
						btn_save_and_stay = $('i[class~="process-icon-save-and-stay"]').parent();

						//get reference on current save link label
						lbl_save = $('#page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save');

						//override save link label with submit button value
						if (btn_submit.html().length > 0)
							lbl_save.find('span').html(btn_submit.html());

						if (btn_save_and_stay.length > 0) {
							//get reference on current save link label
							lbl_save_and_stay = $('#page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay');

							//override save and stay link label with submit button value
							if (btn_submit.html().length > 0 && lbl_save_and_stay && !lbl_save_and_stay.hasClass('locked'))
								lbl_save_and_stay.find('span').html(btn_submit.html() + " <?php echo smartyTranslate(array('s'=>'and stay'),$_smarty_tpl);?>
 ");
						}

						//hide standard submit button
						btn_submit.hide();
						//bind enter key press to validate form
						$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').find('input').keypress(function (e) {
							if (e.which == 13 && e.target.localName != 'textarea' && !$(e.target).parent().hasClass('tagify-container'))
								$('#page-header-desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save').click();
						});
						//submit the form
						
							btn_save.click(function() {
								// Avoid double click
								if (submited)
									return false;
								submited = true;

								//add hidden input to emulate submit button click when posting the form -> field name posted
								btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'" value="1" />');

								$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
								return false;
							});

							if (btn_save_and_stay) {
								btn_save_and_stay.click(function() {
									//add hidden input to emulate submit button click when posting the form -> field name posted
									btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'AndStay" value="1" />');
									$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
									return false;
								});
							}
						
					}

					<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_open']->value)&&$_smarty_tpl->tpl_vars['tab_modules_open']->value){?>
						$('#modules_list_container').modal('show');
						openModulesList();
					<?php }?>
				});

				<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)){?>
					$('.process-icon-modules-list').parent('a').unbind().bind('click', function (){
						$('#modules_list_container').modal('show');
						openModulesList();
					});
				<?php }?>
			//]]>
			</script>
			
		</div>
	</div>
</div>


<ul class="breadcrumb hide">
	<li>
		<?php if ($_smarty_tpl->tpl_vars['title']->value){?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['title']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['title']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
				
				<span class="item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 "><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value);?>

					<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['title']['last']){?>
						<img alt="&gt;" style="margin-right:5px" src="../img/admin/separator_breadcrumb.png" />
					<?php }?>
				</span>
			<?php } ?>
		<?php }else{ ?>
			&nbsp;
		<?php }?>
	</li>
</ul>

<?php }} ?>
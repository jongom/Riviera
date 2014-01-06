<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:06
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\products\virtualproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2229252caadfe53a3c5-05975769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ddb65a32f1912eb1302ee1c2220696bcc136d63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\products\\virtualproduct.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2229252caadfe53a3c5-05975769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'product_downloaded' => 0,
    'download_product_file_missing' => 0,
    'download_dir_writable' => 0,
    'is_file' => 0,
    'upload_max_filesize' => 0,
    'up_filename' => 0,
    'currentIndex' => 0,
    'token' => 0,
    'error_product_download' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadfe916b08_26921468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadfe916b08_26921468')) {function content_52caadfe916b08_26921468($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<script type="text/javascript">
	var newLabel = '<?php echo smartyTranslate(array('s'=>'New label'),$_smarty_tpl);?>
';
	var choose_language = '<?php echo smartyTranslate(array('s'=>'Choose language:'),$_smarty_tpl);?>
';
	var required = '<?php echo smartyTranslate(array('s'=>'Required'),$_smarty_tpl);?>
';
	var customizationUploadableFileNumber = '<?php echo $_smarty_tpl->tpl_vars['product']->value->uploadable_files;?>
';
	var customizationTextFieldNumber = '<?php echo $_smarty_tpl->tpl_vars['product']->value->text_fields;?>
';
	var uploadableFileLabel = 0;
	var textFieldLabel = 0;

	function uploadFile()
	{
		$.ajaxFileUpload (
			{
				url:'./uploadProductFile.php',
				secureuri:false,
				fileElementId:'virtual_product_file',
				dataType: 'xml',
				success: function (data, status)
				{
					data = data.getElementsByTagName('return')[0];
					var result = data.getAttribute("result");
					var msg = data.getAttribute("msg");
					var fileName = data.getAttribute("filename");
					if (result == "error")
					{
						$("#upload-confirmation").closest('.form-group.').hide();
						$("#upload-error").html('<?php echo smartyTranslate(array('s'=>'Error:'),$_smarty_tpl);?>
 ' + msg);
						$("#upload-error").closest('.form-group.').show();
					}
					else
					{
						$('#upload-error').closest('.form-group.').hide();
						$('#file_missing').closest('.form-group.').hide();
						$('#virtual_product_name').attr('value', fileName);
						$("#upload-confirmation .error").remove();
						$('#upload-confirmation').find('span').remove();
						$('#upload-confirmation').prepend('<span><?php echo smartyTranslate(array('s'=>'The file'),$_smarty_tpl);?>
&nbsp;"<a class="link" href="get-file-admin.php?file='+msg+'&filename='+fileName+'">'+fileName+'</a>"&nbsp;<?php echo smartyTranslate(array('s'=>'has successfully been uploaded'),$_smarty_tpl);?>
&nbsp;' +
							'<input type="hidden" id="virtual_product_filename" name="virtual_product_filename" value="' + msg + '" /></span>');
						$("#upload-confirmation").closest('.form-group.').show();
					}
				}
			}
		);
	}

	$(document).ready(function(){
		$('#virtual_product_file-selectbutton').click(function(e) {
			$('#virtual_product_file').trigger('click');
		});

		$('#virtual_product_file-name').click(function(e) {
			$('#virtual_product_file').trigger('click');
		});

		$('#virtual_product_file').change(function(e) {
			if ($(this)[0].files !== undefined)
			{
				var files = $(this)[0].files;
				var name  = '';

				$.each(files, function(index, value) {
					name += value.name+', ';
				});

				$('#virtual_product_file-name').val(name.slice(0, -2));
			}
			else // Internet Explorer 9 Compatibility
			{
				var name = $(this).val().split(/[\\/]/);
				$('#virtual_product_file-name').val(name[name.length-1]);
			}

			uploadFile();
		});
	});

</script>
<div id="product-virtualproduct" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="VirtualProduct" />
	<h3><?php echo smartyTranslate(array('s'=>'Virtual Product (services, booking or downloadable products)'),$_smarty_tpl);?>
</h3>
		<div class="is_virtual_good" class="form-group">
			<input type="checkbox" id="is_virtual_good" name="is_virtual_good" value="true" <?php if ($_smarty_tpl->tpl_vars['product']->value->is_virtual&&$_smarty_tpl->tpl_vars['product']->value->productDownload->active){?>checked="checked"<?php }?> />
				<label for="is_virtual_good" class="t bold"><?php echo smartyTranslate(array('s'=>'Is this a virtual product?'),$_smarty_tpl);?>
</label>
		</div>
		<div id="virtual_good" <?php if (!$_smarty_tpl->tpl_vars['product']->value->productDownload->id||$_smarty_tpl->tpl_vars['product']->value->productDownload->active){?>style="display:none"<?php }?> class="form-group">
			<div class="form-group">
				<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Does this product have an associated file?'),$_smarty_tpl);?>
</label>
				<div class="col-lg-9">
					<label class="switch-light prestashop-switch fixed-width-lg">
						<input name="is_virtual_file" id="is_virtual_file" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['product_downloaded']->value){?> checked="checked"<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['product_downloaded']->value){?>1<?php }else{ ?>0<?php }?>"  />
						<span>
							<span><?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</span>
							<span><?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</span>
						</span>
						<a class="slide-button btn btn-default"></a>
					</label>
				</div>
			</div>
			<div id="is_virtual_file_product" style="display:none;">
				<?php if ($_smarty_tpl->tpl_vars['download_product_file_missing']->value){?>
				<div class="form-group">
					<div class="col-lg-push-3 col-lg-9">
						<div class="alert alert-danger" id="file_missing">
							<?php echo $_smarty_tpl->tpl_vars['download_product_file_missing']->value;?>
 :<br/>
							<strong><?php echo smartyTranslate(array('s'=>sprintf('Server file name : %s',$_smarty_tpl->tpl_vars['product']->value->productDownload->filename)),$_smarty_tpl);?>
</strong>
						</div>
					</div>
				</div>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['download_dir_writable']->value){?>
				<div class="form-group">
					<div class="col-lg-push-3 col-lg-9">
						<div class="alert alert-danger">
							<?php echo smartyTranslate(array('s'=>'Your download repository is not writable.'),$_smarty_tpl);?>

						</div>
					</div>
				</div>
				<?php }?>
				
				<?php if (empty($_smarty_tpl->tpl_vars['product']->value->cache_default_attribute)){?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value->productDownload->id){?>
						<input type="hidden" id="virtual_product_id" name="virtual_product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->productDownload->id;?>
" />
					<?php }?>
					<div class="form-group"<?php if ($_smarty_tpl->tpl_vars['is_file']->value){?> style="display:none"<?php }?>>
						<label id="virtual_product_file_label" for="virtual_product_file" class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Upload a file'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<input id="virtual_product_file" type="file" name="virtual_product_file" class="hide" maxlength="<?php echo $_smarty_tpl->tpl_vars['upload_max_filesize']->value;?>
" />
							<div class="dummyfile input-group">
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input id="virtual_product_file-name" type="text" class="disabled" name="filename" readonly />
								<span class="input-group-btn">
									<button id="virtual_product_file-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
										<i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'Add file'),$_smarty_tpl);?>

									</button>
								</span>
							</div>
							<p class="help-block"><?php echo smartyTranslate(array('s'=>'Your server\'s maximum file-upload size is'),$_smarty_tpl);?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['upload_max_filesize']->value;?>
 <?php echo smartyTranslate(array('s'=>'MB'),$_smarty_tpl);?>
</p>
						</div>
					</div>
					<div class="form-group" style="display:none">
						<div class="col-lg-push-3 col-lg-9">
							<div class="alert alert-error col-lg-push-3 col-lg-9" id="upload-error"></div>
						</div>
					</div>
					<div class="form-group" style="display:none">
						<div class="col-lg-push-3 col-lg-9">
						<?php if ($_smarty_tpl->tpl_vars['up_filename']->value){?>
							<input type="hidden" id="virtual_product_filename" name="virtual_product_filename" value="<?php echo $_smarty_tpl->tpl_vars['up_filename']->value;?>
" />
						<?php }?>
							<div class="alert alert-info" id="upload-confirmation">

								<a class="btn btn-default" id="delete_downloadable_product" href="<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
&deleteVirtualProduct=true&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete this file'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['is_file']->value){?>
					<div class="form-group">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Link to the file:'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<input type="hidden" id="virtual_product_filename" name="virtual_product_filename" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->productDownload->filename;?>
" />
							<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->productDownload->getTextLink(true);?>
" class="btn btn-default"><i class="icon-download"></i> <?php echo smartyTranslate(array('s'=>'Download file'),$_smarty_tpl);?>
</a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
&deleteVirtualProduct=true&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-default"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete this file'),$_smarty_tpl);?>
</a>
						</div>
					</div>
					<?php }?>
					<div class="form-group">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Filename'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<input type="text" id="virtual_product_name" name="virtual_product_name" style="width:200px" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->productDownload->display_filename, 'html', 'UTF-8');?>
" />
							<p class="help-block"><?php echo smartyTranslate(array('s'=>'The full filename with its extension (e.g. Book.pdf)'),$_smarty_tpl);?>
</p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Number of allowed downloads'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<input type="text" id="virtual_product_nb_downloable" name="virtual_product_nb_downloable" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['product']->value->productDownload->nb_downloadable);?>
" class="" size="6" />
							<p class="help-block"><?php echo smartyTranslate(array('s'=>'Number of downloads allowed per customer. (Set to 0 for unlimited downloads)'),$_smarty_tpl);?>
</p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-3">
							<span class="label-tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Format: YYYY-MM-DD'),$_smarty_tpl);?>
">
								<?php echo smartyTranslate(array('s'=>'Expiration date'),$_smarty_tpl);?>

							</span>
						</label>
						<div class="col-lg-9">
							<input class="datepicker" type="text" id="virtual_product_expiration_date" name="virtual_product_expiration_date" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->productDownload->date_expiration;?>
" size="11" maxlength="10" autocomplete="off" /> 
							<p class="help-block"><?php echo smartyTranslate(array('s'=>'If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.'),$_smarty_tpl);?>
</p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-3 required"><?php echo smartyTranslate(array('s'=>'Number of days'),$_smarty_tpl);?>
</label>
						<div class="col-lg-9">
							<input type="text" id="virtual_product_nb_days" name="virtual_product_nb_days" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['product']->value->productDownload->nb_days_accessible);?>
" class="" size="4" />
							<p class="help-block"><?php echo smartyTranslate(array('s'=>'Number of days this file can be accessed by customers'),$_smarty_tpl);?>
 - <em>(<?php echo smartyTranslate(array('s'=>'Set to zero for unlimited access.'),$_smarty_tpl);?>
)</em></p>
						</div>
					</div>
					
					
						
						
							
							
						
					
					<div class="alert alert-info">
						<?php echo smartyTranslate(array('s'=>'You cannot edit your file here because you used combinations. Please edit this file in the Combinations tab.'),$_smarty_tpl);?>

					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['error_product_download']->value)){?><?php echo $_smarty_tpl->tpl_vars['error_product_download']->value;?>
<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }} ?>
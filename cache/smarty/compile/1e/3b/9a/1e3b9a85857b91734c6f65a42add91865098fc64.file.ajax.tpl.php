<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:22
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\uploader\ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:960252caae0e91da73-07047460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3b9a85857b91734c6f65a42add91865098fc64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\uploader\\ajax.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '960252caae0e91da73-07047460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'files' => 0,
    'file' => 0,
    'max_files' => 0,
    'name' => 0,
    'url' => 0,
    'multiple' => 0,
    'post_max_size' => 0,
    'drop_zone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae0f275439_11015676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae0f275439_11015676')) {function content_52caae0f275439_11015676($_smarty_tpl) {?>
<div class="form-group" style="display: none;">
	<div class="col-lg-12" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-images-thumbnails">
		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)&&count($_smarty_tpl->tpl_vars['files']->value)>0){?>
		<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['file']->value['image'])&&$_smarty_tpl->tpl_vars['file']->value['type']=='image'){?>
		<div class="img-thumbnail text-center">
			<p><?php echo $_smarty_tpl->tpl_vars['file']->value['image'];?>
</p>
			<?php if (isset($_smarty_tpl->tpl_vars['file']->value['size'])){?><p><?php echo smartyTranslate(array('s'=>'File size'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['file']->value['size'];?>
kb</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['file']->value['delete_url'])){?>
			<p>
				<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['file']->value['delete_url'];?>
">
				<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>

				</a>
			</p>
			<?php }?>
		</div>
		<?php }?>
		<?php } ?>
		<?php }?>
	</div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['max_files']->value)&&count($_smarty_tpl->tpl_vars['files']->value)>=$_smarty_tpl->tpl_vars['max_files']->value){?>
<div class="row">
	<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You have reached the limit (%s) of files to upload, please remove files to continue uploading','sprintf'=>$_smarty_tpl->tpl_vars['max_files']->value),$_smarty_tpl);?>
</div>
</div>
<script type="text/javascript">
	$( document ).ready(function() {
		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)&&$_smarty_tpl->tpl_vars['files']->value){?>
		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-images-thumbnails').parent().show();
		<?php }?>
	});
</script>
<?php }else{ ?>
<div class="form-group">
	<div class="col-lg-12">
		<input id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="file" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[]"<?php if (isset($_smarty_tpl->tpl_vars['url']->value)){?> data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value){?> multiple="multiple"<?php }?> class="hide" />
		<button class="btn btn-default" data-style="expand-right" data-size="s" type="button" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-add-button">
			<i class="icon-plus-sign"></i> <?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value){?><?php echo smartyTranslate(array('s'=>'Add files'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Add file'),$_smarty_tpl);?>
<?php }?>
		</button>
		<button class="ladda-button btn btn-default" data-style="expand-right" type="button" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button" style="display:none;">
			<i class="icon-cloud-upload text-success"></i> <span class="ladda-label text-success"><?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&$_smarty_tpl->tpl_vars['multiple']->value){?><?php echo smartyTranslate(array('s'=>'Upload files'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Upload file'),$_smarty_tpl);?>
<?php }?></span>
		</button>
	</div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-info" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list"></div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-success" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success"></div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-danger" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors"></div>
</div>
<script type="text/javascript">
	function humanizeSize(bytes)
	{
		if (typeof bytes !== 'number') {
			return '';
		}

		if (bytes >= 1000000000) {
			return (bytes / 1000000000).toFixed(2) + ' GB';
		}

		if (bytes >= 1000000) {
			return (bytes / 1000000).toFixed(2) + ' MB';
		}

		return (bytes / 1000).toFixed(2) + ' KB';
	}

	$( document ).ready(function() {
		<?php if (isset($_smarty_tpl->tpl_vars['multiple']->value)&&isset($_smarty_tpl->tpl_vars['max_files']->value)){?>
			var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_max_files = <?php echo $_smarty_tpl->tpl_vars['max_files']->value-count($_smarty_tpl->tpl_vars['files']->value);?>
;
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)&&$_smarty_tpl->tpl_vars['files']->value){?>
		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-images-thumbnails').parent().show();
		<?php }?>

		var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_upload_button = Ladda.create( document.querySelector('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button' ));
		var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files = 0;

		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').fileupload({
			dataType: 'json',
			autoUpload: false,
			singleFileUploads: true,
			<?php if (isset($_smarty_tpl->tpl_vars['post_max_size']->value)){?>maxFileSize: <?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
,<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['drop_zone']->value)){?>dropZone: <?php echo $_smarty_tpl->tpl_vars['drop_zone']->value;?>
,<?php }?>
			start: function (e) {
				<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_upload_button.start();
				$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button').unbind('click'); //Important as we bind it for every elements in add function
			},
			fail: function (e, data) {
				$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').html(data.errorThrown.message).parent().show();
			},
			done: function (e, data) {
				if (data.result) {
					if (typeof data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 !== 'undefined') {
						for (var i=0; i<data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.length; i++) {
							if (data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i] !== null) {
								if (typeof data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].error !== 'undefined' && data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].error != '') {
									$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').html('<strong>'+data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].name+'</strong> : '+data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].error).parent().show();
								}
								else 
								{
									$(data.context).appendTo($('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success'));
									$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success').parent().show();

									if (typeof data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].image !== 'undefined')
									{
										var template = '<div class="img-thumbnail text-center">';
										template += '<p>'+data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].image+'</p>';
										
										if (typeof data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].delete_url !== 'undefined')
											template += '<p><a class="btn btn-default" href="'+data.result.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[i].delete_url+'"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
</a></p>';

										template += '</div>';
										$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-images-thumbnails').html($('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-images-thumbnails').html()+template);
										$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-images-thumbnails').parent().show();
									}
								}
							}
						}
					}

					$(data.context).find('button').remove();					
				}
			},
		}).on('fileuploadalways', function (e, data) {
				<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files--;

				if (<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files == 0)
				{
					<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_upload_button.stop();
					$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button').unbind('click');
					$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').parent().hide();
				}
		}).on('fileuploadadd', function(e, data) {
			if (typeof <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_max_files !== 'undefined') {
				if (<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files >= <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_max_files) {
					e.preventDefault();
					alert('<?php echo smartyTranslate(array('s'=>sprintf('You can upload a maximum of %s files',$_smarty_tpl->tpl_vars['max_files']->value)),$_smarty_tpl);?>
');
					return;
				}
			}

			data.context = $('<div/>').addClass('row').appendTo($('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list'));
			var file_name = $('<span/>').append('<strong>'+data.files[0].name+'</strong> ('+humanizeSize(data.files[0].size)+')').appendTo(data.context);

			var button = $('<button/>').addClass('btn btn-default pull-right').prop('type', 'button').html('<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Remove file'),$_smarty_tpl);?>
').appendTo(data.context).on('click', function() {
				<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files--;
				data.files = null;
				
				var total_elements = $(this).parent().siblings('div.row').length;
				$(this).parent().remove();

				if (total_elements == 0) {
					$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').html('').parent().hide();
				}
			});

			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').parent().show();
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-upload-button').show().bind('click', function () {
				if (data.files != null)
					data.submit();						
			});

			<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files++;
		}).on('fileuploadprocessalways', function (e, data) {
			var index = data.index,	file = data.files[index];
			
			if (file.error) {
				$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').append('<div class="row"><strong>'+file.name+'</strong> ('+humanizeSize(file.size)+') : '+file.error+'</div>').parent().show();
				$(data.context).find('button').trigger('click');
			}
		});

		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-add-button').on('click', function() {
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success').html('').parent().hide();
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').html('').parent().hide();
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-files-list').parent().hide();
			<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files = 0;
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').trigger('click');
		});
	});
</script>
<?php }?><?php }} ?>
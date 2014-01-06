<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:06
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\referrers\form_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2688352caadfed49242-03244114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '417596d6e51bb074513d50a8fd8325e935ebab0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\referrers\\form_settings.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2688352caadfed49242-03244114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'token' => 0,
    'tracking_dt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadfee86c24_03912609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadfee86c24_03912609')) {function content_52caadfee86c24_03912609($_smarty_tpl) {?>

</div>

<div id="settings_referrers" class="row">
	<div class="col-lg-3">
		<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" id="settings_form" name="settings_form" class="form-horizontal">
			<div class="panel">
				<h3>
					<i class="icon-cog"></i> <?php echo smartyTranslate(array('s'=>'Settings'),$_smarty_tpl);?>

				</h3>
				<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Direct traffic can be quite resource-intensive. You should consider enabling it only if you have a strong need for it.'),$_smarty_tpl);?>
</div>
				<div class="form-group">
					<label class="control-label col-lg-5"><?php echo smartyTranslate(array('s'=>'Save direct traffic?'),$_smarty_tpl);?>
</label>
					<div class="col-lg-7">
						<div class="row">
							<div class="input-group col-lg-2">
								<span class="switch prestashop-switch">
									<input type="radio" name="tracking_dt" id="tracking_dt_on" value="1" <?php if ($_smarty_tpl->tpl_vars['tracking_dt']->value){?>checked="checked"<?php }?> />
									<label class="t radio" for="tracking_dt_on">
										<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

									</label>
									<input type="radio" name="tracking_dt" id="tracking_dt_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['tracking_dt']->value){?>checked="checked"<?php }?>  />
									<label class="t radio" for="tracking_dt_off"> 
										<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

									</label>
									<a class="slide-button btn btn-default"></a>
								</span>
							</div>
						</div>
					</div>
				</div>
					
				
				<button type="submit" class="btn btn-default" name="submitSettings" id="submitSettings">
					<i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>

				</button>
			</div>
		</form>
	</div>
	<div class="col-lg-6">
		<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" id="refresh_index_form" name="refresh_index_form" class="form-horizontal">
			<div class="panel">
				<h3>
					<i class="icon-fullscreen"></i> <?php echo smartyTranslate(array('s'=>'Indexation'),$_smarty_tpl);?>

				</h3>
				<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'There is a huge quantity of data, so each connection corresponding to a referrer is indexed. You can also refresh this index by clicking the button above. This process may take awhile, and it\'s only needed if you modified or added a referrer, or if you want changes to be retroactive.'),$_smarty_tpl);?>
</div>
				<button type="submit" class="btn btn-default" name="submitRefreshIndex" id="submitRefreshIndex">
					<i class="icon-refresh"></i> <?php echo smartyTranslate(array('s'=>'Refresh index'),$_smarty_tpl);?>

				</button>
			</div>
		</form>
	</div>
	<div class="col-lg-6">
		<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" id="refresh_cache_form" name="refresh_cache_form" class="form-horizontal">
			<div class="panel">
				<h3>
					<i class="icon-briefcase"></i> <?php echo smartyTranslate(array('s'=>'Cache'),$_smarty_tpl);?>

				</h3>
				<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'In order to sort and filter your data, it\'s cached. You can refresh the cache by clicking on the button above.'),$_smarty_tpl);?>
</div>
				<button type="submit" class="btn btn-default" name="submitRefreshCache" id="submitRefreshCache">
					<i class="icon-refresh"></i> <?php echo smartyTranslate(array('s'=>'Refresh cache'),$_smarty_tpl);?>

				</button>
			</div>
		</form>
	</div>
</div>


	<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:55
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\modules\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2516252caadf37b0b60-61634508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb9722c985cbca716c902d95d022042f68e4bad4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\modules\\list.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2516252caadf37b0b60-61634508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'module' => 0,
    'option' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf3ef87b0_95579229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf3ef87b0_95579229')) {function content_52caadf3ef87b0_95579229($_smarty_tpl) {?>


	<table id="module-list" class="table">
		<thead>
			<tr>
				<th width="1%">
					<!-- <input type="checkbox" rel="false" class="noborder" id="checkme"> -->
				</th>
				<th colspan="3">
					<div class="pull-left">
						<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/filters.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
					<div class="btn-group pull-right">
						<a class="btn btn-default <?php if (!isset($_GET['select'])){?> active<?php }?>" href="index.php?controller=<?php echo htmlentities($_GET['controller']);?>
&token=<?php echo htmlentities($_GET['token']);?>
">
							<i class="icon-list"></i>
							<?php echo smartyTranslate(array('s'=>'Normal view'),$_smarty_tpl);?>
 
						</a>
						<a class="btn btn-default <?php if (isset($_GET['select'])&&$_GET['select']=='favorites'){?> active<?php }?>" href="index.php?controller=<?php echo htmlentities($_GET['controller']);?>
&token=<?php echo htmlentities($_GET['token']);?>
&select=favorites">
							<i class="icon-star"></i> 
							<?php echo smartyTranslate(array('s'=>'Favorites view'),$_smarty_tpl);?>

						</a>
					</div>
				</th>
			</tr>
		</thead>
<?php if (count($_smarty_tpl->tpl_vars['modules']->value)){?>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
			<tr>
				<td>
					<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0)||!isset($_smarty_tpl->tpl_vars['module']->value->type)||$_smarty_tpl->tpl_vars['module']->value->type!='addonsMustHave'){?>
					<input type="checkbox" name="modules" value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
"
						<?php if (!isset($_smarty_tpl->tpl_vars['module']->value->confirmUninstall)||empty($_smarty_tpl->tpl_vars['module']->value->confirmUninstall)){?>rel="false"<?php }else{ ?>rel="<?php echo addslashes($_smarty_tpl->tpl_vars['module']->value->confirmUninstall);?>
"<?php }?>
						class="noborder" title="<?php echo smartyTranslate(array('s'=>sprintf('Module %1s ',$_smarty_tpl->tpl_vars['module']->value->name)),$_smarty_tpl);?>
" />
					<?php }?>
				</td>
				<td>
					<img width="32" alt="<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
" title="<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
" src="<?php if (isset($_smarty_tpl->tpl_vars['module']->value->image)){?><?php echo $_smarty_tpl->tpl_vars['module']->value->image;?>
<?php }else{ ?>../modules/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;?>
<?php }?>" />
				</td>
				<td>
					<div id="anchor<?php echo ucfirst($_smarty_tpl->tpl_vars['module']->value->name);?>
" title="<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
">
						<div class="text-muted">
							<?php echo $_smarty_tpl->tpl_vars['module']->value->categoryName;?>

						</div>
						<div class="module_name">
							<span style="display:none"><?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
</span>
							<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>

							<small>v<?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>
</small>
							<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
								<span class="label label-primary"><?php echo smartyTranslate(array('s'=>'Must Have'),$_smarty_tpl);?>
</span>
							<?php }elseif(isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0){?>
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->version_addons)&&$_smarty_tpl->tpl_vars['module']->value->version_addons){?>
									<span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Need update'),$_smarty_tpl);?>
</span>
								<?php }elseif($_smarty_tpl->tpl_vars['module']->value->active==1){?>
									<span class="label label-info"><?php echo smartyTranslate(array('s'=>'Active'),$_smarty_tpl);?>
</span>
								<?php }elseif($_smarty_tpl->tpl_vars['module']->value->active==0){?>
									<span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Inactive'),$_smarty_tpl);?>
</span>
								<?php }?>
							<?php }else{ ?>
								<span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Not installed'),$_smarty_tpl);?>
</span>
							<?php }?>
						</div>						
						<p class="module_description">
							<?php if (isset($_smarty_tpl->tpl_vars['module']->value->description)&&$_smarty_tpl->tpl_vars['module']->value->description!=''){?>
								<?php echo $_smarty_tpl->tpl_vars['module']->value->description;?>

							<?php }?>
						</p>
						<?php if (isset($_smarty_tpl->tpl_vars['module']->value->message)&&(empty($_smarty_tpl->tpl_vars['module']->value->name)!==false)&&(!isset($_smarty_tpl->tpl_vars['module']->value->type)||($_smarty_tpl->tpl_vars['module']->value->type!='addonsMustHave'||$_smarty_tpl->tpl_vars['module']->value->type!=='addonsNative'))){?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['module']->value->message;?>
</div><?php }?>
					</div>
				</td>
				<td>
					<div class="btn-group-action">
						<div class="btn-group pull-right">
							<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
								<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['module']->value->addons_buy_url;?>
" target="_blank">
									<i class="icon-shopping-cart"></i> &nbsp;<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id_currency)&&isset($_smarty_tpl->tpl_vars['module']->value->price)){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['module']->value->price,'currency'=>$_smarty_tpl->tpl_vars['module']->value->id_currency),$_smarty_tpl);?>
<?php }?>
								</a>
							<?php }else{ ?>
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0){?>
									<?php if (isset($_smarty_tpl->tpl_vars['module']->value->version_addons)&&$_smarty_tpl->tpl_vars['module']->value->version_addons){?>
										<a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['update_url'];?>
">
											<i class="icon-refresh"></i> <?php echo smartyTranslate(array('s'=>'Update it!'),$_smarty_tpl);?>

										</a>
									<?php }elseif(!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)){?>
										<?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml)>0){?>
											<?php $_smarty_tpl->tpl_vars['option'] = new Smarty_variable($_smarty_tpl->tpl_vars['module']->value->optionsHtml[0], null, 0);?>
											<?php echo $_smarty_tpl->tpl_vars['option']->value;?>

										<?php }?>
									<?php }else{ ?>
										<a class="btn btn-danger" <?php if (!empty($_smarty_tpl->tpl_vars['module']->value->options['uninstall_onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['uninstall_onclick'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['uninstall_url'];?>
">
											<i class="icon-minus-sign-alt"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>

										</a>
									<?php }?>
								<?php }else{ ?>
									<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['install_url'];?>
">
										<i class="icon-plus-sign-alt"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Install'),$_smarty_tpl);?>

									</a>
								<?php }?>
								<?php if (!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)){?>
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
									<span class="caret">&nbsp;</span>
								</button>

								<ul class="dropdown-menu">
									<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module']->value->optionsHtml; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['key']->value!=0){?>
											<li><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</li>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['module']->value->preferences)&&isset($_smarty_tpl->tpl_vars['module']->value->preferences['favorite'])&&$_smarty_tpl->tpl_vars['module']->value->preferences['favorite']==1){?>
									<li>
										<a class="action_module action_unfavorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="0" href="#">
											<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'Remove from Favorites'),$_smarty_tpl);?>

										</a>
										<a class="action_module action_favorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="1" href="#" style="display: none;">
											<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'Mark as Favorite'),$_smarty_tpl);?>

										</a>
									</li>
									<?php }else{ ?>
									<li>
										<a class="action_module action_unfavorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="0" href="#" style="display: none;">
											<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'Remove from Favorites'),$_smarty_tpl);?>

										</a>
										<a class="action_module action_favorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="1" href="#">
											<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'Mark as Favorite'),$_smarty_tpl);?>

										</a>
									</li>
									<?php }?>
								</ul>
								<?php }else{ ?>
									&nbsp;
								<?php }?>
							<?php }?>
						</div>
					</div>
				</td>
			</tr>
		<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="4">
					<div class="btn-group pull-left">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							<?php echo smartyTranslate(array('s'=>'bulk actions'),$_smarty_tpl);?>

							 <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
							 	<a href="#" onclick="modules_management('install')">
									<i class="icon-plus-sign-alt"></i>&nbsp;
									<?php echo smartyTranslate(array('s'=>'Install the selection'),$_smarty_tpl);?>

								</a>
							</li>
							<li>
								<a href="#" onclick="modules_management('uninstall')">
									<i class="icon-minus-sign-alt"></i>&nbsp;
									<?php echo smartyTranslate(array('s'=>'Uninstall the selection'),$_smarty_tpl);?>

								</a>
							</li>
						</ul>
					</div>
				</td>
			</tr>
		</tfoot>
	</table>
<?php }else{ ?>
		<tbody>
			<tr>
				<td colspan="4" class="text-center"><i class="icon-warning-sign"></i> <?php echo smartyTranslate(array('s'=>'No modules available in this section.'),$_smarty_tpl);?>
</td>
			</tr>
		</tbody>
	</table>
<?php }?>
<?php }} ?>
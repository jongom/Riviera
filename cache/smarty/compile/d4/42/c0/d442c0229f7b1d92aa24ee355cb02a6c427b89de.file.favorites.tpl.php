<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:54
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\modules\favorites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193552caadf2d51275-20343578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd442c0229f7b1d92aa24ee355cb02a6c427b89de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\modules\\favorites.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193552caadf2d51275-20343578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'module' => 0,
    'tabs' => 0,
    't' => 0,
    'module_name' => 0,
    'tab_modules_preferences' => 0,
    't2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf32959c4_60996197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf32959c4_60996197')) {function content_52caadf32959c4_60996197($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="panel">
	<div class="panel-heading">
		<i class="icon-list-ul"></i>
		<?php echo smartyTranslate(array('s'=>'Modules list'),$_smarty_tpl);?>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="btn-group pull-right">
				<a class="btn btn-default <?php if (!isset($_GET['select'])){?> active<?php }?>" href="index.php?controller=<?php echo htmlentities($_GET['controller']);?>
&token=<?php echo htmlentities($_GET['token']);?>
">
					<i class="icon-list"></i>
					<?php echo smartyTranslate(array('s'=>'Normal view'),$_smarty_tpl);?>
 
				</a>
				<a class="btn btn-default <?php if ($_GET['select']=='favorites'){?> active<?php }?>" href="index.php?controller=<?php echo htmlentities($_GET['controller']);?>
&token=<?php echo htmlentities($_GET['token']);?>
&select=favorites">
					<i class="icon-star"></i> 
					<?php echo smartyTranslate(array('s'=>'Favorites view'),$_smarty_tpl);?>

				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="container" class="col-lg-12">
			<div id="moduleContainer">
				<table class="table">
					<thead>
						<tr class="nodrag nodrop">
							<th></th>
							<th><?php echo smartyTranslate(array('s'=>'Module'),$_smarty_tpl);?>
</th>
							<th><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>
							<th><?php echo smartyTranslate(array('s'=>'Tab'),$_smarty_tpl);?>
</th>
							<th><?php echo smartyTranslate(array('s'=>'Categories'),$_smarty_tpl);?>
</th>
							<th><?php echo smartyTranslate(array('s'=>'Interest'),$_smarty_tpl);?>
</th>
							<th><?php echo smartyTranslate(array('s'=>'Favorite'),$_smarty_tpl);?>
</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['km'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['km']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
						<tr>
							<td>
								<img src="<?php if (isset($_smarty_tpl->tpl_vars['module']->value->image)){?><?php echo $_smarty_tpl->tpl_vars['module']->value->image;?>
<?php }else{ ?>../modules/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;?>
<?php }?>" width="32" height="32" />
							</td>
							<td class="moduleName">
								<h4><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</h4>
								<span class="moduleFavDesc text-muted"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['module']->value->description,80,'...');?>
</span>
							</td>
							<td class="setup">
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0){?>
									<span class="label label-success"><?php echo smartyTranslate(array('s'=>'Installed'),$_smarty_tpl);?>
</span>
								<?php }else{ ?>
									<span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Not Installed'),$_smarty_tpl);?>
</span>
								<?php }?>
							</td>
							<td>
								<?php $_smarty_tpl->tpl_vars["module_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['module']->value->name, null, 0);?>
								<select name="t_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" multiple="multiple" class="chosen moduleTabPreferencesChoise">
									<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['t']->value['active']){?>
											<option <?php if (isset($_smarty_tpl->tpl_vars['tab_modules_preferences']->value[$_smarty_tpl->tpl_vars['module_name']->value])&&in_array($_smarty_tpl->tpl_vars['t']->value['id_tab'],$_smarty_tpl->tpl_vars['tab_modules_preferences']->value[$_smarty_tpl->tpl_vars['module_name']->value])){?> selected="selected" <?php }?> class="group" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
"><?php if ($_smarty_tpl->tpl_vars['t']->value['name']==''){?><?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
<?php }?></option>
											<?php  $_smarty_tpl->tpl_vars['t2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t2']->key => $_smarty_tpl->tpl_vars['t2']->value){
$_smarty_tpl->tpl_vars['t2']->_loop = true;
?>
												<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']){?>
													<?php $_smarty_tpl->tpl_vars["id_tab"] = new Smarty_variable($_smarty_tpl->tpl_vars['t']->value['id_tab'], null, 0);?>
													<option <?php if (isset($_smarty_tpl->tpl_vars['tab_modules_preferences']->value[$_smarty_tpl->tpl_vars['module_name']->value])&&in_array($_smarty_tpl->tpl_vars['t2']->value['id_tab'],$_smarty_tpl->tpl_vars['tab_modules_preferences']->value[$_smarty_tpl->tpl_vars['module_name']->value])){?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['t2']->value['id_tab'];?>
">&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['t2']->value['name']==''){?><?php echo $_smarty_tpl->tpl_vars['t2']->value['class_name'];?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['t2']->value['name'], 'html', 'UTF-8');?>
<?php }?></option>
												<?php }?>
											<?php } ?>
										<?php }?>
									<?php } ?>
								</select>
							</td>
							<td>
								<span><?php echo $_smarty_tpl->tpl_vars['module']->value->categoryName;?>
</span>
							</td>
							<td>
								<select name="i_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" class="moduleFavorite">
									<option value="" selected="selected">-</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['module']->value->preferences['interest'])&&$_smarty_tpl->tpl_vars['module']->value->preferences['interest']=='1'){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</option>
									<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['module']->value->preferences['interest'])&&$_smarty_tpl->tpl_vars['module']->value->preferences['interest']=='0'){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</option>
								</select>
							</td>
							<td>
								<select name="f_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" class="moduleFavorite">
									<option value="" selected="selected">-</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['module']->value->preferences['favorite'])&&$_smarty_tpl->tpl_vars['module']->value->preferences['favorite']=='1'){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</option>
									<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['module']->value->preferences['favorite'])&&$_smarty_tpl->tpl_vars['module']->value->preferences['favorite']=='0'){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</option>
								</select>
							</td>
							<td  id="r_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
">
								<span>&nbsp;</span>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
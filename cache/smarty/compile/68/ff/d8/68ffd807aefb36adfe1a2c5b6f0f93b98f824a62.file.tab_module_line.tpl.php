<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:56
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\modules\tab_module_line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2280652caadf4d13901-35773931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68ffd807aefb36adfe1a2c5b6f0f93b98f824a62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\modules\\tab_module_line.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2280652caadf4d13901-35773931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'option' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf525fdc3_81270064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf525fdc3_81270064')) {function content_52caadf525fdc3_81270064($_smarty_tpl) {?>


<tr>
	<td class="center">
		<img width="32" alt="" src="<?php if (isset($_smarty_tpl->tpl_vars['module']->value->image)){?><?php echo $_smarty_tpl->tpl_vars['module']->value->image;?>
<?php }else{ ?>../modules/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;?>
<?php }?>">
	</td>
	<td>
		<div id="anchor<?php echo ucfirst($_smarty_tpl->tpl_vars['module']->value->name);?>
">
			<span>
				<span class="hidden"><?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
</span>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['module']->value->displayName,40,'…');?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>

				<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0){?>
					<?php if ($_smarty_tpl->tpl_vars['module']->value->active){?>
						<span class="label label-success"><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
</span>
					<?php }else{ ?>
						<span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
</span>
					<?php }?>
				<?php }else{ ?>
					<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
						<span class="label label-danger"><?php echo smartyTranslate(array('s'=>'Must Have'),$_smarty_tpl);?>
</span>
					<?php }else{ ?>
						<span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Not installed'),$_smarty_tpl);?>
</span>
					<?php }?>
				<?php }?>
			</span>
			<?php if (isset($_smarty_tpl->tpl_vars['module']->value->description)&&$_smarty_tpl->tpl_vars['module']->value->description!=''){?>
			<p class="text-muted">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['module']->value->description,100,'…');?>

			</p>
			<?php }?>
		</div>
	</td>
	<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
		<td>&nbsp;</td>
		<td align="right">
			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['module']->value->addons_buy_url;?>
" target="_blank" class="button updated">
					<span class="btn btn-default">
						<i class="icon-shopping-cart"></i> &nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['module']->value->price,'currency'=>$_smarty_tpl->tpl_vars['module']->value->id_currency),$_smarty_tpl);?>

					</span>
				</a>
			</p>
		</td>
	<?php }elseif(!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)){?>
		<td>&nbsp;</td>
		<td align="right">
			<?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml)>0){?>
			<div id="list-action-button" class="btn-group">
				<?php $_smarty_tpl->tpl_vars['option'] = new Smarty_variable($_smarty_tpl->tpl_vars['module']->value->optionsHtml[0], null, 0);?>
				<?php echo $_smarty_tpl->tpl_vars['option']->value;?>

				<?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml)>1){?>
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
				</ul>
				<?php }?>
			</div>
			<?php }?>
		</td>
	<?php }else{ ?>
		<td>&nbsp;</td>
		<td align="right">
			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['install_url'];?>
" class="btn btn-default">
					<i class="icon-plus-sign-alt"></i>
					<?php echo smartyTranslate(array('s'=>'Install'),$_smarty_tpl);?>

				</a>
			</p>
		</td>
	<?php }?>
</tr><?php }} ?>
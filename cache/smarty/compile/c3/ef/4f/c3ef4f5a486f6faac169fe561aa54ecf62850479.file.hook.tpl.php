<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:49:15
         compiled from "C:\xampp\htdocs\e-commerce\modules\themeconfigurator\views\templates\hook\hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2185452cab45b575136-52936415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3ef4f5a486f6faac169fe561aa54ecf62850479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\modules\\themeconfigurator\\views\\templates\\hook\\hook.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2185452cab45b575136-52936415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'htmlitems' => 0,
    'hook' => 0,
    'hItem' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45b659380_34110179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45b659380_34110179')) {function content_52cab45b659380_34110179($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
<?php if (isset($_smarty_tpl->tpl_vars['htmlitems']->value)&&$_smarty_tpl->tpl_vars['htmlitems']->value){?>
<div id="htmlcontent_<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
">
    <ul class="htmlcontent-home clearfix row">
        <?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value){
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
        	<li class="htmlcontent-item-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'];?>
 col-xs-4">
            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']){?>
                	<a href="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['url'];?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1){?> target="_blank"<?php }?>>
                <?php }?>
	            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']){?>
	                	<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image'];?>
" class="item-img" alt="" />
	                <?php }?>
	            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']&&$_smarty_tpl->tpl_vars['hItem']->value['title_use']==1){?>
                        <h3 class="item-title"><?php echo $_smarty_tpl->tpl_vars['hItem']->value['title'];?>
</h3>
	                <?php }?>
	            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']){?>
	                	<div class="item-html">
                        	<?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>
 <i class="icon-double-angle-right"></i>                            
                        </div>
	                <?php }?>
            	<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']){?>
                	</a>
                <?php }?>
            </li>
        <?php } ?>
    </ul>
</div>
<?php }?>
<?php }?><?php }} ?>
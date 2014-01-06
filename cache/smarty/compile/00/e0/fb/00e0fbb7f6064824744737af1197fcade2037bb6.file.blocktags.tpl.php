<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:06
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blocktags\blocktags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1526852caadc2030360-60414362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e0fbb7f6064824744737af1197fcade2037bb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocktags\\blocktags.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526852caadc2030360-60414362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc216c9a5_66562781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc216c9a5_66562781')) {function content_52caadc216c9a5_66562781($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block tags module -->
<div id="tags_block_left" class="block tags_block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Tags','mod'=>'blocktags'),$_smarty_tpl);?>
</p>
	<div class="block_content">
<?php if ($_smarty_tpl->tpl_vars['tags']->value){?>
	<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['tag']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
		<a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,"tag=".$_tmp1), 'html', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocktags'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tag']->value['name'], 'html', 'UTF-8');?>
" class="<?php echo $_smarty_tpl->tpl_vars['tag']->value['class'];?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }else{ ?>item<?php }?>"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tag']->value['name'], 'html', 'UTF-8');?>
</a>
	<?php } ?>
<?php }else{ ?>
	<?php echo smartyTranslate(array('s'=>'No tags specified yet','mod'=>'blocktags'),$_smarty_tpl);?>

<?php }?>
	</div>
</div>
<!-- /Block tags module -->
<?php }} ?>
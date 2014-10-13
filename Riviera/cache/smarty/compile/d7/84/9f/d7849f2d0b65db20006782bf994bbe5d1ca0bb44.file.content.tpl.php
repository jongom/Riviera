<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:04:30
         compiled from "C:\xampp\htdocs\Reveria\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231465434474e170c89-91725070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7849f2d0b65db20006782bf994bbe5d1ca0bb44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\admin\\themes\\default\\template\\content.tpl',
      1 => 1412712135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231465434474e170c89-91725070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5434474e195c37_11267320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5434474e195c37_11267320')) {function content_5434474e195c37_11267320($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

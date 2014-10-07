<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:37:34
         compiled from "C:\xampp\htdocs\Reveria\admin2964\themes\default\template\helpers\list\list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:369354344f0e9008d7-53618306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '603930f3738eb52030f49ba8cd5a3373e3293976' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\admin2964\\themes\\default\\template\\helpers\\list\\list_action_duplicate.tpl',
      1 => 1412712141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '369354344f0e9008d7-53618306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344f0e944cd5_07885476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344f0e944cd5_07885476')) {function content_54344f0e944cd5_07885476($_smarty_tpl) {?>
<a href="#" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ok']->value, ENT_QUOTES, 'UTF-8', true);?>
'; else document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ko']->value, ENT_QUOTES, 'UTF-8', true);?>
'; return false;">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>

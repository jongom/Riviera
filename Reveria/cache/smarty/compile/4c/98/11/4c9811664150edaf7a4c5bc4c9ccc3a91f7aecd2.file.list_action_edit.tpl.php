<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 22:37:34
         compiled from "C:\xampp\htdocs\Reveria\admin2964\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2624454344f0e83bdb5-35979455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c9811664150edaf7a4c5bc4c9ccc3a91f7aecd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Reveria\\admin2964\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1412712141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2624454344f0e83bdb5-35979455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54344f0e8cf443_41674909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54344f0e8cf443_41674909')) {function content_54344f0e8cf443_41674909($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:15
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\helpers\help_access\button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:543552caae07148fb1-19656707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f064275facb5f01949dd3f10002e7f753fa34428' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\helpers\\help_access\\button.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '543552caae07148fb1-19656707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'help_base_url' => 0,
    'iso_lang' => 0,
    'version' => 0,
    'doc_version' => 0,
    'country' => 0,
    'tooltip' => 0,
    'button_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae07330825_71859112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae07330825_71859112')) {function content_52caae07330825_71859112($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?><li class="help-context-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'html', 'UTF-8');?>
">
    <a id="desc-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'html', 'UTF-8');?>
-help"
       class="toolbar_btn"
       href="#"
       onclick="showHelp('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['help_base_url']->value, 'html', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'html', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['iso_lang']->value, 'html', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['version']->value, 'html', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['doc_version']->value, 'html', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['country']->value, 'html', 'UTF-8');?>
');"
        title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tooltip']->value, 'html', 'UTF-8');?>
">
        <span class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['button_class']->value, 'html', 'UTF-8');?>
"></span>
        <div><?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
</div>
    </a>
</li>
<?php }} ?>
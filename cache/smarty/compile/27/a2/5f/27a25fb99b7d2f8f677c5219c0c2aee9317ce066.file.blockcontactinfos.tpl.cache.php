<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:49:18
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blockcontactinfos\blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2100652cab45e881415-53747248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a25fb99b7d2f8f677c5219c0c2aee9317ce066' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2100652cab45e881415-53747248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52cab45e9d3e80_35768596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cab45e9d3e80_35768596')) {function content_52cab45e9d3e80_35768596($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
if (!is_callable('smarty_function_mailto')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="footer-block col-xs-12 col-sm-4">
	<div>
        <h4><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!=''){?><li><i class="icon-map-marker"></i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, 'html', 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!=''){?>, <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, 'html', 'UTF-8');?>
<?php }?></li><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!=''){?><li><i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now toll free:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, 'html', 'UTF-8');?>
</span></li><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!=''){?><li><i class="icon-envelope-alt"></i><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <span><?php echo smarty_function_mailto(array('address'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, 'html', 'UTF-8'),'encode'=>"hex"),$_smarty_tpl);?>
</span></li><?php }?>
            <!--li><i class="icon-skype"></i><?php echo smartyTranslate(array('s'=>'Skype:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <span></span></li-->
        </ul>
    </div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>
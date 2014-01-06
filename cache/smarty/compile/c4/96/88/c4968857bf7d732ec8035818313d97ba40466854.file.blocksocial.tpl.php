<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:04
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blocksocial\blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:613652caadc0ea4537-54134167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4968857bf7d732ec8035818313d97ba40466854' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613652caadc0ea4537-54134167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc11d4253_54348746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc11d4253_54348746')) {function content_52caadc11d4253_54348746($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<section id="social_block">
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebook_url']->value, 'html', 'UTF-8');?>
"><span><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</span></a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
"><span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</span></a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</span></a></li><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!=''){?><li class="youtube"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['youtube_url']->value, 'html', 'UTF-8');?>
"><span><?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
</span></a></li><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!=''){?><li class="google-plus"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['google_plus_url']->value, 'html', 'UTF-8');?>
"><span><?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
</span></a></li><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!=''){?><li class="pinterest"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pinterest_url']->value, 'html', 'UTF-8');?>
"><span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
</span></a></li><?php }?>
	</ul>
    <h4><?php echo smartyTranslate(array('s'=>'Follow us:','mod'=>'blocksocial'),$_smarty_tpl);?>
</h4>
</section>
<div class="clearfix"></div>
<?php }} ?>
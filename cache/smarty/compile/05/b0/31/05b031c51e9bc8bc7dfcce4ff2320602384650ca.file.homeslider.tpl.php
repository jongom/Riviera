<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:12
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\homeslider\homeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287552caadc8e0aab4-36328699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b031c51e9bc8bc7dfcce4ff2320602384650ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\homeslider\\homeslider.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287552caadc8e0aab4-36328699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'link' => 0,
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc929cd00_18651742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc929cd00_18651742')) {function content_52caadc929cd00_18651742($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
<!-- Module HomeSlider -->
	<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)){?>
		<div id="homepage-slider">
			<ul id="homeslider">
				<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']){?>
						<li class="homeslider-container">
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['url'], 'html', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['legend'], 'html', 'UTF-8');?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."homeslider/images/".((string)smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['image'], 'htmlall', 'UTF-8')));?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['legend'], 'htmlall', 'UTF-8');?>
" />                                                            
							</a>
							<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['description'])&&trim($_smarty_tpl->tpl_vars['slide']->value['description'])!=''){?>
							<div class="homeslider-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
							<?php }?>
						</li>
					<?php }?>
				<?php } ?>
			</ul>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
			<script type="text/javascript">
				<?php if (count($_smarty_tpl->tpl_vars['homeslider_slides']->value)>1){?>
					<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['loop']==1){?>
						var homeslider_loop = true;
					<?php }else{ ?>
						var homeslider_loop = false;
					<?php }?>
				<?php }else{ ?>
					var homeslider_loop = false;
				<?php }?>
				var homeslider_speed = <?php echo $_smarty_tpl->tpl_vars['homeslider']->value['speed'];?>
;
				var homeslider_pause = <?php echo $_smarty_tpl->tpl_vars['homeslider']->value['pause'];?>
;

				$('.homeslider-description').click(function(){
					window.location.href = $(this).prev('a').prop('href');
				});
			</script>
		<?php }?>
	<?php }?>
<!-- /Module HomeSlider -->
<?php }?><?php }} ?>
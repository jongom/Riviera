<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:03
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\blocknewsletter\blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1695952caadbfdc11e4-88701884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fec185ae2883c15916eebf60f1692a328fe116d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\blocknewsletter\\blocknewsletter.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1695952caadbfdc11e4-88701884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'value' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc0378eb6_74589931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc0378eb6_74589931')) {function content_52caadc0378eb6_74589931($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">
	<h4><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
		<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), 'html', 'UTF-8');?>
" method="post">
			<div class="form-group">
				<input class="inputNew form-control grey" id="newsletter-input" type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Enter your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" />
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-small"><span><?php echo smartyTranslate(array('s'=>'Ok','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</span></button>
				<input type="hidden" name="action" value="0" />
			</div>
		</form>
        <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
        <?php }?>
	</div>
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'Enter your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
        $(document).ready(function() {
            $('#newsletter-input').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

            <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?>
                $('#columns > .row').before('<div class="clearfix"></div><p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>alert-danger<?php }else{ ?>alert-success<?php }?>"><?php echo smartyTranslate(array('s'=>"Newsletter:",'js'=>1,'mod'=>"blocknewsletter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>');
            <?php }?>
        });
</script>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:14
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\productcomments\products-comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1342452caadca8d0bd7-76552517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5106539bb685290d76a4a1553c8e941dd1e7930b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\productcomments\\products-comparison.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1342452caadca8d0bd7-76552517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'list_ids_product' => 0,
    'grades' => 0,
    'classname' => 0,
    'grade' => 0,
    'grade_id' => 0,
    'product_grades' => 0,
    'width' => 0,
    'id_product' => 0,
    'tab_grade' => 0,
    'list_product_average' => 0,
    'product_comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadcaf009a1_04680325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadcaf009a1_04680325')) {function content_52caadcaf009a1_04680325($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
js/products-comparison.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
js/jquery.rating.pack.js"></script>
<script type="text/javascript" src="<?php echo @constant('_PS_JS_DIR_');?>
jquery/jquery.cluetip.js"></script>
<script type="text/javascript">
	
	$(function()
	{
		$('input[type=radio].star').rating();
	});
	$(function()
	{
		$('.auto-submit-star').rating();
	});
	
	//close  comment form
	function closeCommentForm()
	{
		$('#sendComment').slideUp('fast');
		$('input#addCommentButton').fadeIn('slow');
	}
	
</script>

<tr class="comparison_header">
	<td class="feature-name">
		<strong><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'productcomments'),$_smarty_tpl);?>
</strong>
	</td>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['td'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['td']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['list_ids_product']->value)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['name'] = 'td';
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['td']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['td']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['td']['total']);
?>
		<td></td>
	<?php endfor; endif; ?>
</tr>

<?php  $_smarty_tpl->tpl_vars['grade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grade']->_loop = false;
 $_smarty_tpl->tpl_vars['grade_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['grades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->key => $_smarty_tpl->tpl_vars['grade']->value){
$_smarty_tpl->tpl_vars['grade']->_loop = true;
 $_smarty_tpl->tpl_vars['grade_id']->value = $_smarty_tpl->tpl_vars['grade']->key;
?>
<tr>
	<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

	<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 feature-name">
		<strong><?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
</strong>
	</td>

	<?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value){
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['tab_grade'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_grades']->value[$_smarty_tpl->tpl_vars['grade_id']->value], null, 0);?>
		<td  width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos ajax_block_product" align="center">
		<?php if (isset($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&$_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value]){?>
        	<div class="product-rating">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['average'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['average']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['name'] = 'average';
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total']);
?>
                    <input class="auto-submit-star" disabled="disabled" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['grade_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['average']['index'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&round($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])!=0&&$_smarty_tpl->getVariable('smarty')->value['section']['average']['index']==round($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])){?>checked="checked"<?php }?> />
                <?php endfor; endif; ?>
            </div>
		<?php }else{ ?>
			-
		<?php }?>
		</td>
	<?php } ?>
</tr>				
<?php } ?>

	<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

<tr>
	<td  class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 feature-name"><strong><?php echo smartyTranslate(array('s'=>'Average','mod'=>'productcomments'),$_smarty_tpl);?>
</strong></td>
<?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value){
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
	<td  width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos" align="center" >
	<?php if (isset($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&$_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value]){?>
    	<div class="product-rating">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['average'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['average']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['name'] = 'average';
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['average']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['average']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['average']['total']);
?>
                <input class="auto-submit-star" disabled="disabled" type="radio" name="average_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" <?php if (round($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])!=0&&$_smarty_tpl->getVariable('smarty')->value['section']['average']['index']==round($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])){?>checked="checked"<?php }?> />
            <?php endfor; endif; ?>
        </div>
	<?php }else{ ?>
		-
	<?php }?>
	</td>	
<?php } ?>
</tr>

<tr>
	<td  class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos feature-name">&nbsp;</td>
	<?php  $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_ids_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->key => $_smarty_tpl->tpl_vars['id_product']->value){
$_smarty_tpl->tpl_vars['id_product']->_loop = true;
?>
	<td  width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos" align="center" >
			<?php if (isset($_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value])&&$_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value]){?>
            <script type="text/javascript">
			$(document).ready(function() {
				var htmlContent = $('#comments_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
').html();
				$("[rel=#comments_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
]").popover({
					placement : 'top', //placement of the popover. also can use top, bottom, left or right
					title : false, //this is the top title bar of the popover. add some basic css
					html: 'true', //needed to show html of course
					content : htmlContent  //this is the content of the html box. add the image here or anything you want really.
				});
			});
			</script>
		<a href="#" onclick="return false;" rel="#comments_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" class="btn btn-default button button-small"><span><?php echo smartyTranslate(array('s'=>'View comments','mod'=>'productcomments'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a>
		<div style="display:none" id="comments_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
">   
            <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>	
                <div class="well well-sm">
                    <strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['customer_name'], 'html', 'UTF-8');?>
 </strong>
                    <small class="date"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['date_add'], 'html', 'UTF-8'),'full'=>0),$_smarty_tpl);?>
</small> 
                    <div class="comment_content"><?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['content'], 'html', 'UTF-8'));?>
</div>
                    </div>
            <?php } ?>
        </div>
	<?php }else{ ?>
		-
	<?php }?>
	</td>	
<?php } ?>
</tr><?php }} ?>
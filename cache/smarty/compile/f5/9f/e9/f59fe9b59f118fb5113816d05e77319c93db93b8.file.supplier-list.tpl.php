<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:44
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\supplier-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1190752caade8d63df7-01807365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f59fe9b59f118fb5113816d05e77319c93db93b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\supplier-list.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1190752caade8d63df7-01807365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbSuppliers' => 0,
    'errors' => 0,
    'suppliers_list' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'supplier' => 0,
    'link' => 0,
    'img_sup_dir' => 0,
    'mediumSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caade943d5d8_05986609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caade943d5d8_05986609')) {function content_52caade943d5d8_05986609($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Suppliers:'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading product-listing"><?php echo smartyTranslate(array('s'=>'Suppliers:'),$_smarty_tpl);?>

	<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value==0){?><?php echo smartyTranslate(array('s'=>'There are no suppliers.'),$_smarty_tpl);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value==1){?><?php echo smartyTranslate(array('s'=>'There is %d supplier.','sprintf'=>$_smarty_tpl->tpl_vars['nbSuppliers']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are %d suppliers.','sprintf'=>$_smarty_tpl->tpl_vars['nbSuppliers']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
</h1>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	
<?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value>0){?>
	<div class="content_sortPagiBar">
        <div class="sortPagiBar clearfix">
            <ul class="display hidden-xs">
                <li class="display-title">
                	<?php echo smartyTranslate(array('s'=>'View:'),$_smarty_tpl);?>

                </li>
                <li id="grid">
                	<a onclick="display('grid');">
                		<i class="icon-th-large"></i><?php echo smartyTranslate(array('s'=>'Grid'),$_smarty_tpl);?>

                	</a>
                </li>
                <li id="list">
                	<a onclick="display('list');">
                		<i class="icon-th-list"></i><?php echo smartyTranslate(array('s'=>'List'),$_smarty_tpl);?>

                	</a>
                </li>
            </ul>
            <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <div class="top-pagination-content clearfix bottom-line">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </div> <!-- .content_sortPagiBar --> 

    <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['suppliers_list']->value), null, 0);?>
    <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>


	<ul id="suppliers_list">
		<?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['supplier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier']['total'] = $_smarty_tpl->tpl_vars['supplier']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value){
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier']['iteration']++;
?>
	    	<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

	        <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

	        <?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0){?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
	        <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0){?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, null, 0);?><?php }?>
			<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0){?> last-in-line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1){?> first-in-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)){?>last-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0){?>last-item-of-tablet-line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1){?>first-item-of-tablet-line<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier']['total']-$_smarty_tpl->tpl_vars['totModuloTablet']->value)){?>last-tablet-line<?php }?>">
				<div class="left-side">
					<!-- logo -->
					<div class="logo">
						<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), 'html', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value['name'], 'html', 'UTF-8');?>
">
						<?php }?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_sup_dir']->value;?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value['image'], 'html', 'UTF-8');?>
-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
						<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
							</a>
						<?php }?>
					</div> <!-- .logo -->
				</div> <!-- .left-side -->

				<div class="middle-side">	
					<h3>
						<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
							<a class="product-name" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), 'html', 'UTF-8');?>
">
						<?php }?>
						<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['supplier']->value['name'],60,'...'), 'html', 'UTF-8');?>

						<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
							</a>
						<?php }?>
					</h3>
					<div class="description">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['supplier']->value['description'],180,'...');?>

					</div>
	            </div><!-- .middle-side -->

				<div class="right-side">
	            	<div class="right-side-content">
	                    <p class="product-counter">
	                        <?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
	                            <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), 'html', 'UTF-8');?>
">
	                        <?php }?>
	                        <?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']==1){?><?php echo smartyTranslate(array('s'=>'%d product','sprintf'=>intval($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'%d products','sprintf'=>intval($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])),$_smarty_tpl);?>
<?php }?>
	                    	<?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
	                        	</a>
	                    	<?php }?>
	                    </p>
	                    <?php if ($_smarty_tpl->tpl_vars['supplier']->value['nb_products']>0){?>
	                        <a class="btn btn-default button exclusive-medium" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), 'html', 'UTF-8');?>
"><span><?php echo smartyTranslate(array('s'=>'View products'),$_smarty_tpl);?>
 <i class="icon-chevron-right right"></i></span></a>
	                    <?php }?>
	                </div>
				</div><!-- .right-side -->
				
			</li>
		<?php } ?>
	</ul>
	<div class="content_sortPagiBar">
        <div class="bottom-pagination-content clearfix">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

        </div>
    </div>
    <script type="text/javascript"><!--
		function display(view) {
			if (view == 'list') {
				$('#suppliers_list').attr('class', 'list row');
				$('#suppliers_list > li').removeClass('col-xs-12 col-sm-6 col-lg-4').addClass('col-xs-12');
				$('#suppliers_list > li').each(function(index, element) {
					html = '';
					html = '<div class="mansup-container"><div class="row">';
						html += '<div class="left-side col-xs-12 col-sm-3">' + $(element).find('.left-side').html() + '</div>';
						html += '<div class="middle-side col-xs-12 col-sm-5">'+ $(element).find('.middle-side').html() +'</div>';	
						html += '<div class="right-side col-xs-12 col-sm-4"><div class="right-side-content">'+ $(element).find('.right-side-content').html() + '</div></div>'; 
					html += '</div></div>';
				$(element).html(html);
				});		
				$('.display').find('li#list').addClass('selected');
				$('.display').find('li#grid').removeAttr('class');
				$.totalStorage('display', 'list'); 
			} else {
				$('#suppliers_list').attr('class', 'grid row');
				$('#suppliers_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-lg-4');
				$('#suppliers_list > li').each(function(index, element) {
				html = '';
				html += '<div class="product-container">';
					html += '<div class="left-side">' + $(element).find('.left-side').html() + '</div>';
					html += '<div class="middle-side">'+ $(element).find('.middle-side').html() +'</div>';
					html += '<div class="right-side"><div class="right-side-content">'+ $(element).find('.right-side-content').html() + '</div></div>'; 
				html += '</div>';		
				$(element).html(html);
				});
				$('.display').find('li#grid').addClass('selected');
				$('.display').find('li#list').removeAttr('class');
				$.totalStorage('display', 'grid');
			}	
		}
		view = $.totalStorage('display');
		if (view) {
			display(view);
		} else {
			display('grid');
		}
		//--></script>
<?php }?>
<?php }?>
<?php }} ?>
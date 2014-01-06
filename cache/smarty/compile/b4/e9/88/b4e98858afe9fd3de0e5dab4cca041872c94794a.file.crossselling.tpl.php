<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:11
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\crossselling\crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3155252caadc7a218b5-58129584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e98858afe9fd3de0e5dab4cca041872c94794a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\crossselling\\crossselling.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3155252caadc7a218b5-58129584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'page_name' => 0,
    'orderProduct' => 0,
    'crossDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadc7c73d76_47693629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadc7c73d76_47693629')) {function content_52caadc7c73d76_47693629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)){?>
<section id="crossselling" class="page-product-box">
	<h3 class="productscategory_h2 page-product-heading"><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product'){?><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'We recommend','mod'=>'crossselling'),$_smarty_tpl);?>
<?php }?></h3>
	<div id="crossselling_list">
        <ul id="crossselling_list_car" class="clearfix">
            <?php  $_smarty_tpl->tpl_vars['orderProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->key => $_smarty_tpl->tpl_vars['orderProduct']->value){
$_smarty_tpl->tpl_vars['orderProduct']->_loop = true;
?>
                <li class="product-box item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" class="lnk_img product-image"><img src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" /></a>
                    <p class="product_name"><a href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['orderProduct']->value['name'],15,'...'), 'html', 'UTF-8');?>
</a></p>
                    <?php if ($_smarty_tpl->tpl_vars['crossDisplayPrice']->value&&$_smarty_tpl->tpl_vars['orderProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                        <p class="price_display">
                            <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                        </p>
                    <?php }?>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<?php }?>
<?php }} ?>
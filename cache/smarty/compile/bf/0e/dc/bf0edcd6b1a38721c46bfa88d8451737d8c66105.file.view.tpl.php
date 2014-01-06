<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:22:10
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\themes\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1818552caae021cc103-33375096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf0edcd6b1a38721c46bfa88d8451737d8c66105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\themes\\helpers\\view\\view.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1818552caae021cc103-33375096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_name' => 0,
    'doc' => 0,
    'item' => 0,
    'key' => 0,
    'img_error' => 0,
    'error' => 0,
    'back_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caae02306d92_04673725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caae02306d92_04673725')) {function content_52caae02306d92_04673725($_smarty_tpl) {?>
<div class="alert alert-success">
    <?php echo smartyTranslate(array('s'=>sprintf('The theme %1s has been successfully installed.',$_smarty_tpl->tpl_vars['theme_name']->value)),$_smarty_tpl);?>

</div>

<?php if (count($_smarty_tpl->tpl_vars['doc']->value)>0){?>
    <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['doc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <li><i><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></i>
        <?php } ?>
    </ul>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['img_error']->value['error'])){?>
    <div class="alert alert-warning">
        <?php echo smartyTranslate(array('s'=>'Warning: Copy/Paste your errors if you want to manually set the image type (in the "Images" page under the "Preferences" menu):'),$_smarty_tpl);?>

        <ul>
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img_error']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                <li>
                    <?php echo smartyTranslate(array('s'=>'Name image type:'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['error']->value['name'];?>
</strong> <?php echo smartyTranslate(array('s'=>sprintf('Width: %1$spx Height:%2$px',$_smarty_tpl->tpl_vars['error']->value['width'],$_smarty_tpl->tpl_vars['error']->value['height'])),$_smarty_tpl);?>

                </li>
            <?php } ?>
        </ul>

    </div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['img_error']->value['ok'])){?>
    <div class="alert alert-success">
        <?php echo smartyTranslate(array('s'=>'Images have been correctly updated in database:'),$_smarty_tpl);?>

        <ul>
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img_error']->value['ok']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                <li>
                    <?php echo smartyTranslate(array('s'=>'Image type:'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['error']->value['name'];?>
</strong> <?php echo smartyTranslate(array('s'=>sprintf('Width: %1$spx Height:%2$px',$_smarty_tpl->tpl_vars['error']->value['width'],$_smarty_tpl->tpl_vars['error']->value['height'])),$_smarty_tpl);?>

                </li>
            <?php } ?>
        </ul>

    </div>
<?php }?>

<a href="<?php echo $_smarty_tpl->tpl_vars['back_link']->value;?>
">
    <button class="btn btn-default"><?php echo smartyTranslate(array('s'=>'Finish'),$_smarty_tpl);?>
</button>
</a>
<?php }} ?>
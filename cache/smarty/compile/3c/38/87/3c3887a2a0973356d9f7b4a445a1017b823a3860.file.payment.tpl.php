<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:17
         compiled from "C:\xampp\htdocs\e-commerce\themes\default-bootstrap\modules\stripejs\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2002052caadcd7e8ab5-40711301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c3887a2a0973356d9f7b4a445a1017b823a3860' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\themes\\default-bootstrap\\modules\\stripejs\\payment.tpl',
      1 => 1387468850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2002052caadcd7e8ab5-40711301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'stripe_ps_version' => 0,
    'stripe_save_tokens_ask' => 0,
    'stripe_credit_card' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadcdb55779_16815426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadcdb55779_16815426')) {function content_52caadcdb55779_16815426($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\e-commerce\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
stripe-prestashop.js"></script>
<div class="payment_module box"<?php if ($_smarty_tpl->tpl_vars['stripe_ps_version']->value<'1.5'){?>style="border: 1px solid #595A5E; padding: 0.6em; margin-left: 0.7em;"<?php }?>>
	<h1 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'Pay by credit card with our secured payment server','mod'=>'stripejs'),$_smarty_tpl);?>
</h1>
	
	<?php if (isset($_smarty_tpl->tpl_vars['stripe_save_tokens_ask']->value)&&$_smarty_tpl->tpl_vars['stripe_save_tokens_ask']->value&&isset($_smarty_tpl->tpl_vars['stripe_credit_card']->value)){?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
validation.php" method="POST" id="stripe-payment-form-cc">
		<p><?php echo smartyTranslate(array('s'=>'Pay with my saved Credit card (ending in','mod'=>'stripejs'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stripe_credit_card']->value, 'html', 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>')','mod'=>'stripejs'),$_smarty_tpl);?>

		<input type="hidden" name="stripe_save_token" value="1" />
		<input type="hidden" name="stripeToken" value="0" />
		<button type="submit" class="stripe-submit-button-cc btn btn-default button-small"><span><?php echo smartyTranslate(array('s'=>'Submit Payment','mod'=>'stripejs'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></button></p>
		<p><a id="stripe-replace-card"><?php echo smartyTranslate(array('s'=>'Replace this card with a new one','mod'=>'stripejs'),$_smarty_tpl);?>
</a> | <a id="stripe-delete-card" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Do you really want to delete this card?','mod'=>'stripejs'),$_smarty_tpl);?>
');"><?php echo smartyTranslate(array('s'=>'Delete this card','mod'=>'stripejs'),$_smarty_tpl);?>
</a></p>
	</form>
	<?php }?>
	
	<div id="stripe-ajax-loader"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/ajax-loader.gif" alt="" /> <?php echo smartyTranslate(array('s'=>'Transaction in progress, please wait.','mod'=>'stripejs'),$_smarty_tpl);?>
</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
validation.php" method="POST" id="stripe-payment-form"<?php if (isset($_smarty_tpl->tpl_vars['stripe_save_tokens_ask']->value)&&$_smarty_tpl->tpl_vars['stripe_save_tokens_ask']->value&&isset($_smarty_tpl->tpl_vars['stripe_credit_card']->value)){?> style="display: none;"<?php }?>>
		<div class="stripe-payment-errors"><?php if (isset($_GET['stripe_error'])){?><?php echo smarty_modifier_escape(base64_decode($_GET['stripe_error']), 'html', 'UTF-8');?>
<?php }?></div><a name="stripe_error" style="display:none"></a>
		<div class="stripe-card-deleted"></div>
        <div class="form-group">
            <label><?php echo smartyTranslate(array('s'=>'Card Number','mod'=>'stripejs'),$_smarty_tpl);?>
</label>
            <input type="text" size="20" autocomplete="off" class="stripe-card-number form-control" />
        </div>
		<div class="form-group clearfix">
        	<div class="clearfix">
				<label><?php echo smartyTranslate(array('s'=>'Card Type','mod'=>'stripejs'),$_smarty_tpl);?>
</label>
            </div>
			<img class="cc-icon disable" rel="Visa" alt="" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/cc-visa.png" />
			<img class="cc-icon disable" rel="MasterCard" alt="" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/cc-mastercard.png" />
			<img class="cc-icon disable" rel="Discover" alt="" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/cc-discover.png" />
			<img class="cc-icon disable" rel="American Express" alt="" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/cc-amex.png" />
			<img class="cc-icon disable" rel="JCB" alt="" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/cc-jcb.png" />
			<img class="cc-icon disable" rel="Diners Club" alt="" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/cc-diners.png" />
		</div>
        <div class="clearfix stripe-line">
            <div class="block-left form-group">
                <label><?php echo smartyTranslate(array('s'=>'CVC','mod'=>'stripejs'),$_smarty_tpl);?>
</label><br/>
                <input type="text" size="4" autocomplete="off" class="stripe-card-cvc form-control" />
                <a href="javascript:void(0)" class="stripe-card-cvc-info" style="border: none;">
                    <?php echo smartyTranslate(array('s'=>'What\'s this?','mod'=>'stripejs'),$_smarty_tpl);?>

                    <div class="cvc-info">
                    <?php echo smartyTranslate(array('s'=>'The CVC (Card Validation Code) is a 3 or 4 digit code on the reverse side of Visa, MasterCard and Discover cards and on the front of American Express cards.','mod'=>'stripejs'),$_smarty_tpl);?>

                    </div>
                </a>
            </div>
            <div class="form-group">
            <label><?php echo smartyTranslate(array('s'=>'Expiration (MM/YYYY)','mod'=>'stripejs'),$_smarty_tpl);?>
</label><br />
                <select id="month" name="month" class="stripe-card-expiry-month form-control">
                    <option value="01"><?php echo smartyTranslate(array('s'=>'January','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="02"><?php echo smartyTranslate(array('s'=>'February','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="03"><?php echo smartyTranslate(array('s'=>'March','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="04"><?php echo smartyTranslate(array('s'=>'April','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="05"><?php echo smartyTranslate(array('s'=>'May','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="06"><?php echo smartyTranslate(array('s'=>'June','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="07"><?php echo smartyTranslate(array('s'=>'July','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="08"><?php echo smartyTranslate(array('s'=>'August','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="09"><?php echo smartyTranslate(array('s'=>'September','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="10"><?php echo smartyTranslate(array('s'=>'October','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="11"><?php echo smartyTranslate(array('s'=>'November','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                    <option value="12"><?php echo smartyTranslate(array('s'=>'December','mod'=>'stripejs'),$_smarty_tpl);?>
</option>
                </select>
                <select id="year" name="year" class="stripe-card-expiry-year form-control">
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>
            </div>
        </div>
		<?php if (isset($_smarty_tpl->tpl_vars['stripe_save_tokens_ask']->value)){?>
        <div class="ckeckbox">
			<input type="checkbox" name="stripe_save_token" id="stripe_save_token" value="1" />
			<label class="lowercase" for="stripe_save_token"><?php echo smartyTranslate(array('s'=>'Store this credit card info for later use','mod'=>'stripejs'),$_smarty_tpl);?>
</label>
        </div>
		<?php }?>
		<button type="submit" class="stripe-submit-button btn-default btn button button-small"><span><?php echo smartyTranslate(array('s'=>'Submit Payment','mod'=>'stripejs'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></button>
	</form>
	<div id="stripe-translations">
		<span id="stripe-wrong-cvc"><?php echo smartyTranslate(array('s'=>'Wrong CVC.','mod'=>'stripejs'),$_smarty_tpl);?>
</span>
		<span id="stripe-wrong-expiry"><?php echo smartyTranslate(array('s'=>'Wrong Credit Card Expiry date.','mod'=>'stripejs'),$_smarty_tpl);?>
</span>
		<span id="stripe-wrong-card"><?php echo smartyTranslate(array('s'=>'Wrong Credit Card number.','mod'=>'stripejs'),$_smarty_tpl);?>
</span>
		<span id="stripe-please-fix"><?php echo smartyTranslate(array('s'=>'Please fix it and submit your payment again.','mod'=>'stripejs'),$_smarty_tpl);?>
</span>
		<span id="stripe-card-del"><?php echo smartyTranslate(array('s'=>'Your Credit Card has been successfully deleted, please enter a new Credit Card:','mod'=>'stripejs'),$_smarty_tpl);?>
</span>
		<span id="stripe-card-del-error"><?php echo smartyTranslate(array('s'=>'An error occured while trying to delete this Credit card. Please contact us.','mod'=>'stripejs'),$_smarty_tpl);?>
</span>
	</div>
</div>
<?php }} ?>
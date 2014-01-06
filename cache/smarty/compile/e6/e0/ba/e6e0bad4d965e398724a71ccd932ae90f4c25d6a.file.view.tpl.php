<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:21:52
         compiled from "C:\xampp\htdocs\e-commerce\admin\themes\default\template\controllers\dashboard\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2579152caadf076f351-03916386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6e0bad4d965e398724a71ccd932ae90f4c25d6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\e-commerce\\admin\\themes\\default\\template\\controllers\\dashboard\\helpers\\view\\view.tpl',
      1 => 1387468848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2579152caadf076f351-03916386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'dashboard_use_push' => 0,
    'warning' => 0,
    'action' => 0,
    'date_from' => 0,
    'date_to' => 0,
    'calendar' => 0,
    'hookDashboardZoneOne' => 0,
    'hookDashboardZoneTwo' => 0,
    'new_version_url' => 0,
    'PS_DASHBOARD_SIMULATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52caadf0989746_32070611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52caadf0989746_32070611')) {function content_52caadf0989746_32070611($_smarty_tpl) {?>

<script>
	var dashboard_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard');?>
';
	var adminstats_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminStats');?>
';
	var no_results_translation = '<?php echo smartyTranslate(array('s'=>'No result','js'=>1),$_smarty_tpl);?>
';
	var dashboard_use_push = '<?php echo intval($_smarty_tpl->tpl_vars['dashboard_use_push']->value);?>
';
	var read_more = '<?php echo smartyTranslate(array('s'=>'Read more','js'=>1),$_smarty_tpl);?>
';
</script>

<div id="dashboard">
	<div class="row">
		<div class="col-lg-12">
<?php if ($_smarty_tpl->tpl_vars['warning']->value){?>
			<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</div>
<?php }?>
			<div id="calendar" class="panel">
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="calendar_form" name="calendar_form" class="form-inline">

					<div class="btn-group">
						<button type="button" name="submitDateDay" class="btn btn-default submitDateDay">
							<?php echo smartyTranslate(array('s'=>'Day'),$_smarty_tpl);?>

						</button>
						<button type="button" name="submitDateMonth" class="btn btn-default submitDateMonth">
							<?php echo smartyTranslate(array('s'=>'Month'),$_smarty_tpl);?>

						</button>
						<button type="button" name="submitDateYear" class="btn btn-default submitDateYear">
							<?php echo smartyTranslate(array('s'=>'Year'),$_smarty_tpl);?>

						</button>
						<button type="button" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev">
							<?php echo smartyTranslate(array('s'=>'Day'),$_smarty_tpl);?>
-1
						</button>
						<button type="button" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev">
							<?php echo smartyTranslate(array('s'=>'Month'),$_smarty_tpl);?>
-1
						</button>
						<button type="button" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev">
							<?php echo smartyTranslate(array('s'=>'Year'),$_smarty_tpl);?>
-1
						</button>
					</div>

					<input type="hidden" name="datepickerFrom" id="datepickerFrom" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
					<input type="hidden" name="datepickerTo" id="datepickerTo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">

					<div class="form-group pull-right">
						<button id="datepickerExpand" class="btn btn-default" type="button">
							<i class="icon-calendar-empty"></i>
							<?php echo smartyTranslate(array('s'=>'From'),$_smarty_tpl);?>

							<strong class="text-info" id="datepicker-from-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
							<?php echo smartyTranslate(array('s'=>'To'),$_smarty_tpl);?>

							<strong class="text-info" id="datepicker-to-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
							<strong class="text-info" id="datepicker-diff-info"></strong>
							<i class="icon-caret-down"></i>
						</button>
					</div>
					<?php echo $_smarty_tpl->tpl_vars['calendar']->value;?>

				</form>	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3" id="hookDashboardZoneOne">
			<?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneOne']->value;?>

		</div>
		<div class="col-lg-7" id="hookDashboardZoneTwo">
			<?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneTwo']->value;?>

			<div id="dashaddons" class="row-margin-bottom">
				<a href="http://addons.prestashop.com/208-dashboards?utm_source=backoffice_dashboard" target="_blank">
					<i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add more graph and data'),$_smarty_tpl);?>

				</a>
			</div>
		</div>
		<div class="col-lg-2">

			<section class="dash_news panel">
				<h3><i class="icon-rss"></i> PrestaShop News</h3>
				<div class="dash_news_content"></div>
			</section>

			<section id="dash_version" class="visible-lg">
				<iframe frameborder="no" scrolling="no" allowtransparency="true" src="<?php echo $_smarty_tpl->tpl_vars['new_version_url']->value;?>
"></iframe>
			</section>

			<section class="dash_links panel">
				<h3><i class="icon-link"></i> <?php echo smartyTranslate(array('s'=>"Useful Links"),$_smarty_tpl);?>
</h3>
					<dl>
						<dt><?php echo smartyTranslate(array('s'=>"Discover the official documentation"),$_smarty_tpl);?>
</dt>
						<dd><a href="http://doc.prestashop.com/display/PS16?utm_source=backoffice_dashboard" target="_blank"><?php echo smartyTranslate(array('s'=>"Go to doc.prestashop.com"),$_smarty_tpl);?>
</a></dd>
					</dl>
					<dl>
						<dt><?php echo smartyTranslate(array('s'=>"Use the forum & discover a great community"),$_smarty_tpl);?>
</dt>
						<dd><a href="http://www.prestashop.com/forums?utm_source=backoffice_dashboard" target="_blank"><?php echo smartyTranslate(array('s'=>"Go to forums.prestashop.com"),$_smarty_tpl);?>
</a></dd>
					</dl>
					<dl>
						<dt><?php echo smartyTranslate(array('s'=>"Enhance your Shop with new templates & modules"),$_smarty_tpl);?>
</dt>
						<dd><a href="http://addons.prestashop.com?utm_source=backoffice_dashboard" target="_blank"><?php echo smartyTranslate(array('s'=>"Go to addons.prestashop.com"),$_smarty_tpl);?>
</a></dd>
					</dl>
					<dl>
						<dt><?php echo smartyTranslate(array('s'=>"Report issues in the Bug Tracker"),$_smarty_tpl);?>
</dt>
						<dd><a href="http://forge.prestashop.com?utm_source=backoffice_dashboard" target="_blank"><?php echo smartyTranslate(array('s'=>"Go to forge.prestashop.com"),$_smarty_tpl);?>
</a></dd>
					</dl>
					<dl>
						<dt><?php echo smartyTranslate(array('s'=>"Contact Us"),$_smarty_tpl);?>
</dt>
						<dd><a href="http://www.prestashop.com/en/contact-us?utm_source=backoffice_dashboard" target="_blank"><?php echo smartyTranslate(array('s'=>"Go to prestashop.com"),$_smarty_tpl);?>
</a></dd>
					</dl>
			</section>

			<section class="dash_simulation panel">
				<h3><i class="icon-link"></i> <?php echo smartyTranslate(array('s'=>"Demo Mode"),$_smarty_tpl);?>
</h3>
				<span class="switch prestashop-switch">
					<input id="PS_DASHBOARD_SIMULATION_on" class="ps_dashboard_simulation" type="radio" <?php if ($_smarty_tpl->tpl_vars['PS_DASHBOARD_SIMULATION']->value==1){?>checked="checked"<?php }?> value="1" name="PS_DASHBOARD_SIMULATION">
					<label class="radioCheck" for="PS_DASHBOARD_SIMULATION_on">
						<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

					</label>
					<input id="PS_DASHBOARD_SIMULATION_off" class="ps_dashboard_simulation" type="radio" <?php if ($_smarty_tpl->tpl_vars['PS_DASHBOARD_SIMULATION']->value==0){?>checked="checked"<?php }?> value="0" name="PS_DASHBOARD_SIMULATION">
					<label class="radioCheck" for="PS_DASHBOARD_SIMULATION_off">
						<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

					</label>
					<a class="slide-button btn btn-default"></a>
				</span>
				<?php echo smartyTranslate(array('s'=>'This mode generates fake data so you can try your Dashboard without real numbers.'),$_smarty_tpl);?>

			</section>

		</div>
	</div>
</div><?php }} ?>
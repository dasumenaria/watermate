
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Watermate</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<?php echo $this->Html->css('/assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?> 
<?php echo $this->Html->css('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?> 
<?php echo $this->Html->css('/assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/uniform/css/uniform.default.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css'); ?> 
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css'); ?>  
<!-- END PLUGINS USED BY X-EDITABLE -->
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<?php echo $this->Html->css('/assets/admin/pages/css/tasks.css'); ?>
<!-- END PAGE STYLES -->
<?php echo $this->Html->css('/assets/global/plugins/select2/select2.css'); ?>
 
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<?php echo $this->Html->css('/assets/global/css/components.css'); ?>
<?php echo $this->Html->css('/assets/global/css/plugins.css'); ?>
<?php echo $this->Html->css('/assets/admin/layout/css/layout.css'); ?>
<?php echo $this->Html->css('/assets/admin/layout/css/themes/darkblue.css'); ?>
<?php echo $this->Html->css('/assets/admin/layout/css/custom.css'); ?>
 <!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
 
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square"> 
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
<a href="../users/index">
			<img src="img/watmat.png" alt="logo" class="logo-default" style="margin-top:-9px;height:40px">&nbsp;<span style="color:#fff;font-size:28px;">Watermate</span>
</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		 
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		 
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				  <li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="/assets/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					Nick </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						 
						<li>
							<a href="login.html">
								 <li><?php echo $this->Html->link('<i class="icon-key"></i>Log Out','/users/login',array('escape'=>false)); ?></li>		
 
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<!-- 
					<div class="sidebar-toggler">
					</div>
					 
				</li>-->
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					
				</li>
				 
				<li>
				<li><?php echo $this->Html->link('<i class="fa fa-wordpress"></i>Website','http://amritjalpariyojana.com/',array('escape'=>false)); ?></li>		
				</li>
				<li class="start active open">
					 <li><?php echo $this->Html->link('<i class="fa fa-th-large"></i>Dashboard','/Records/index',array('escape'=>false)); ?></li>		
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-notebook"></i>
					<span class="title">Records</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<li><?php echo $this->Html->link('<i class="icon-magnifier-add"></i>Add','/Records/add',array('escape'=>false)); ?></li>		
							 
						</li>
						<li>
						<li><?php echo $this->Html->link('<i class="icon-magnifier-remove"></i>Edit','/Records/edit',array('escape'=>false)); ?></li>
 
						</li>
						<li>
							<a href="ecommerce_orders_view.html">
							<i class="icon-note"></i>
							 Update</a>
						</li>
					
					</ul> 
				</li> 
				<li>
					<a href="javascript:;">
					<i class="icon-magnifier"></i>
					<span class="title">Search</span>
 
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-notebook"></i>
					<span class="title">Village</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li><?php echo $this->Html->link('<i class="icon-magnifier-add"></i>Add','/Villages/Add',array('escape'=>false)); ?></li>
						<!--<li><a href="ecommerce_orders.html"><i class="icon-magnifier-remove"></i>Edit</a></li>-->
						<li><?php echo $this->Html->link('<i class="icon-magnifier-add"></i>Infromation','/Villages/index',array('escape'=>false)); ?></li>
						 
					
					</ul> 
				</li> 
			 	 
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		 <div class="page-content">
			<?php echo $this->fetch('content'); ?>
		 </div>
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
 
	 
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
 
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
 

<?php echo $this->Html->script('/assets/global/plugins/jquery.min.js'); ?> 
<?php echo $this->Html->script('/assets/global/plugins/select2/select2.min.js'); ?> 
<?php echo $this->Html->script('/assets/global/plugins/jquery-migrate.min.js'); ?>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<?php echo $this->Html->script('/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>
 <?php echo $this->Html->script('/assets/global/plugins/jquery.cokie.min.js" type="text/javascript'); ?>
<?php echo $this->Html->script('/assets/global/plugins/uniform/jquery.uniform.min.js'); ?>
 <!-- END CORE PLUGINS -->	
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-editable/inputs-ext/wysihtml5/wysihtml5.js'); ?>
<!-- END PAGE LEVEL PLUGINS -->

 <!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS --> 
<?php echo $this->Html->script('/assets/global/scripts/metronic.js'); ?> 
<?php echo $this->Html->script('/assets/admin/layout/scripts/layout.js'); ?> 
<?php echo $this->Html->script('/assets/admin/pages/scripts/components-pickers.js'); ?>
<?php echo $this->Html->script('/assets/admin/layout/scripts/demo.js'); ?> 
<?php echo $this->Html->script('/assets/admin/pages/scripts/index.js'); ?> 
<?php echo $this->Html->script('/assets/admin/pages/scripts/tasks.js'); ?>
<?php echo $this->Html->script('/assets/admin/pages/scripts/form-editable.js'); ?> 
<!-- END PAGE LEVEL SCRIPTS -->

<script>

   jQuery(document).ready(function() { 
Metronic.init(); 
Layout.init(); 
ComponentsPickers.init();	
QuickSidebar.init(); 
Demo.init(); 
FormEditable.init();

 });
</script>
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features 
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});	
</script> 
 
  
 

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
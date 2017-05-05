<!DOCTYPE html> 
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Watermate</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<?php echo $this->Html->css('/assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>  
<?php echo $this->Html->css('/assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?> 
<?php echo $this->Html->css('/assets/global/plugins/uniform/css/uniform.default.css'); ?> 
<?php echo $this->Html->css('/assets/admin/pages/css/login.css'); ?> 
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<?php echo $this->Html->css('/assets/global/css/components.css'); ?> 
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<?php echo $this->Html->css('/assets/global/css/plugins.css'); ?> 
<?php echo $this->Html->css('/assets/admin/layout/css/layout.css'); ?> 
<?php echo $this->Html->css('/assets/admin/layout/css/themes/darkblue.css'); ?> 
<?php echo $this->Html->css('/assets/admin/layout/css/custom.css'); ?> 
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login"  style="background-color: #d2d6de !important;">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<!--<div class="logo">
	<a href="index.html">
	<img src="/	assets/admin/layout/img/watmat.png" style="height: 17px;" alt=""/>
	</a>
</div>-->
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
	<div class="content"  style="background-color: #fff !important;">
		<?php echo $this->fetch('content'); ?>
	</div>
<div class="copyright hide">
 
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<?php echo $this->Html->script('/assets/global/plugins/jquery.min.js'); ?> 
<?php echo $this->Html->script('/assets/global/plugins/jquery-migrate.min.js'); ?> 
<?php echo $this->Html->script('/assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?> 
<?php echo $this->Html->script('/assets/global/plugins/jquery.blockui.min.js'); ?>  
<?php echo $this->Html->script('/assets/global/plugins/uniform/jquery.uniform.min.js'); ?> 
<?php echo $this->Html->script('/assets/global/plugins/jquery.cokie.min.js'); ?> 
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo $this->Html->script('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js'); ?> 
<script src="../.." type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php echo $this->Html->script('/assets/global/scripts/metronic.js'); ?> 
<?php echo $this->Html->script('/assets/admin/layout/scripts/layout.js'); ?> 
<?php echo $this->Html->script('/assets/admin/layout/scripts/demo.js'); ?> 
<?php echo $this->Html->script('/assets/admin/pages/scripts/login.js'); ?> 

<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Login.init();
	Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
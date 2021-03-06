<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $this->lang->lang(); ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php echo $this->lang->lang(); ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php echo $this->lang->lang(); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $this->lang->lang(); ?>"> <!--<![endif]-->
	<head>
		<title><?php echo config_item('app_title'); ?></title>
		<link rel="icon" href="<?php echo site_url('img/favicon.ico'); ?>">
		<meta charset="UTF-8">
		<meta name="generator" content="<?php echo config_item('script_name').'-'.config_item('script_version'); ?>">
		<meta name="author" content="Razican, adri93">
		<meta name="application-name" content="<?php echo config_item('script_name'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('css/bootstrap.css'); ?>" type="text/css">
		<link rel="stylesheet" href="<?php echo site_url('css/bootstrap-responsive.css'); ?>" type="text/css">
		<link rel="stylesheet" href="<?php echo site_url('css/public.css'); ?>" type="text/css">
		<script type="text/javascript">
			var user_not_valid_title = '<?php echo lang('user_not_valid_title'); ?>';
			var user_not_valid = '<?php echo lang('user_not_valid'); ?>';
			var email_not_valid_title = '<?php echo lang('email_not_valid_title'); ?>';
			var email_not_valid = '<?php echo lang('email_not_valid'); ?>';
			var pass_not_valid_title = '<?php echo lang('pass_not_valid_title'); ?>';
			var pass_not_valid = '<?php echo lang('pass_not_valid'); ?>';
			var user_in_use_title = '<?php echo lang('user_in_use_title'); ?>';
			var user_in_use = '<?php echo lang('user_in_use'); ?>';
			var email_in_use_title = '<?php echo lang('email_in_use_title'); ?>';
			var email_in_use = '<?php echo lang('email_in_use'); ?>';
			var email_check_error_title = '<?php echo lang('email_check_error_title'); ?>';
			var email_check_error = '<?php echo lang('email_check_error'); ?>';
			var user_not_exist_title = '<?php echo lang('user_not_exist_title'); ?>';
			var user_not_exist = '<?php echo lang('user_not_exist'); ?>';
			var incorrect_pass_title = '<?php echo lang('incorrect_pass_title'); ?>';
			var incorrect_pass = '<?php echo lang('incorrect_pass'); ?>';
		</script>
	</head>
	<body>
	<!--[if lt IE 7]>
		<p class="chromeframe"><?php echo lang('outdated_br'); ?></p>
	<![endif]-->
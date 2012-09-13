<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Go Cart<?php echo (isset($page_title))?' :: '.$page_title:''; ?></title>

	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css');?>" rel="stylesheet" type="text/css" />

</head>
<body>


	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit" style="margin-top:30px;">
			<h1>GoCart Version <?php include($_SERVER['DOCUMENT_ROOT'].'/version');?></h1>
			<p>Migration has been properly executed.</p>
			<p><a class="btn btn-primary btn-large" href="<?php echo site_url(config_item('admin_folder').'/dashboard');?>">Admin</a></p>
		</div>

	</div> <!-- /container -->


</body>
</html>
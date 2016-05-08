<!DOCTYPE html>
<html lang="en">
	<head>		
		<title><?= $site_title;?></title>
		<base href="<?= URL::base();?>">
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo URL::base(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Font CSS For Template-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
				
		<!-- Custom styles for this template -->
		<link href="<?php echo URL::base(); ?>assets/css/style.css" rel="stylesheet">
		<link href="<?php echo URL::base(); ?>assets/css/style-responsive.css" rel="stylesheet">
		
		<!-- DatePicker CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" rel="stylesheet"/>
		<link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
		
	
		<!-- Css for Specific Page-->
		<?php
		foreach($styles as $page){
			echo '<link href="'. URL::base() .'assets/css/'.$page.'" rel="stylesheet">';
		}
		?>
	</head>

	<body class="hold-transition skin-blue sidebar-mini">

		<div id="wrapper" >
			<!-- **********************************************************************************************************************************************************
			TOP BAR CONTENT & NOTIFICATIONS
			*********************************************************************************************************************************************************** -->
			<?= $header; ?>
		  
			<!-- **********************************************************************************************************************************************************
			MAIN SIDEBAR MENU
			*********************************************************************************************************************************************************** -->
			<aside class="main-sidebar">
				<section class="sidebar">
					<br/>
					<?= $sidebar;?>
				</section>
			</aside>
		  
			<!-- **********************************************************************************************************************************************************
			MAIN CONTENT
			*********************************************************************************************************************************************************** -->
			<div class="content-wrapper">
				<section class="content-header">
				  <h1><?= $Page_Title; ?></h1>
				  <!--<ol class="breadcrumb">
				  <? //$breadcrumb; ?>
				  </ol>-->
				</section>
				
				<section class="content">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">							
							<?= $mainContent; ?>									
						</div>
					</div>	
				</section> 
			</div>
			
			<!-- **********************************************************************************************************************************************************
			FOOTER CONTENT
			*********************************************************************************************************************************************************** -->
			<?= $footer;?>
		</div>
	</body>
	<!-- jQuery Core Libray -->
	<script src="<?php echo URL::base(); ?>assets/js/jQuery-2.1.4.min.js"></script>
	<!-- bootstrap Core Libray -->
    <script src="<?php echo URL::base(); ?>assets/js/bootstrap.min.js"></script>
	<!-- Application Core Libray -->
	<script src="<?php echo URL::base(); ?>assets/js/app.min.js"></script>
		
	<!-- DateTimePicker Start Here -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
	<!-- DateTimePicker end Here -->
	
	<!-- Js for Specific Page-->
	<?php
	foreach($scripts as $page){
		echo '<script src="'.URL::base().'assets/js/'.$page.'"></script>';
	}
	?>
	
</html>

<!DOCTYPE html>
<html lang="en">
<script type="assets/css/style.css"></script>
<head>
	<meta charset="utf-8">
	<title>GeeksBuddy</title>
	<?php include "css.php" ?>
</head>
<body>
	<?php include "includes/header.php" ?>
	<div id="container-fluid">
		<div class="features">
			<img src="<?php echo base_url()?>assets/images/rsz_131.jpg" alt="">
			<h1>Welcome to GeeksBuddy!</h1>
			<br>
			<br>
			<h3>Best Exam Preparation for you!</h3>
			<p>Boost your placement exam preparation with GeeksBuddy to get the best jobs in India.</p>
		</div>
		<div class="image-prop">
			<div class="col-md-6">
				<a href="<?php echo base_url()?>index.php/Aptitude"><img src="<?php echo base_url()?>assets/images/apti.png" alt=""></a>';
				<h4>Aptitude Questions</h4>
			</div>
			<div class="col-md-6">
				<a href="<?php echo base_url() ?>index.php/Coding"><img src="<?php echo base_url()?>assets/images/code.jpg" alt=""></a>';
				<h4>Coding Questions</h4>
			</div>
		</div>
	
		<div class="features-grid text-center">
			<div class="col-md-4">
				<i class="fa fa-book" aria-hidden="true"></i>
				<h4>Online Tests</h4>
			</div>
			<div class="col-md-4">
				<i class="fa fa-users" aria-hidden="true"></i>
				<h4>Discussions</h4>
			</div>
			<div class="col-md-4">
				<i class="fa fa-pie-chart" aria-hidden="true"></i>
				<h4>Thorough Analysis</h4>
			</div>
		</div>
		<div class="features-grid text-center">
			<div class="col-md-4">
				<i class="fa fa-bullseye" aria-hidden="true"></i>
				<h4>Target Oriented</h4>
			</div>
			<div class="col-md-4">
				<i class="fa fa-file-text" aria-hidden="true"></i>
				<h4>Company's Question Papers</h4>
			</div>
			<div class="col-md-4">
				<i class="fa fa-user" aria-hidden="true"></i>
				<h4>Simplicity</h4>
			</div>
		</div>
	</div>
	

	<?php include "includes/footer.php" ?>
</body>
</html>
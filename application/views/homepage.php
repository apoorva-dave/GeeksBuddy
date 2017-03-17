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
		<!-- Hero Section -->
		<div class="hero-section">
			<img src="<?php echo base_url()?>assets/images/rsz_131.jpg" alt="">
			<div class="img-overlay"></div>
			<div class="hero-text">
				<h1>Welcome to GeeksBuddy!</h1>
				<h3>Best Exam Preparation for you!</h3>
				<p>Boost your placement exam preparation with GeeksBuddy to get the best jobs in India.</p>
				<div class="hero-buttons">
					<a class="btn btn-sharp" href="<?php echo base_url() ?>Aptitude">Aptitude Questions</a>
					<a class="btn btn-sharp" href="<?php echo base_url() ?>Coding">Coding Questions</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="features-grid text-center">
			<h2>Why Us?</h2>
			<hr>
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
	<div class="container text-center">
		<div class="row tricol">
			<div class="col-md-4">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4>Companies</h4></div>
	  				<div class="panel-body">
						<div class="tricol-body">
							<ul>
								<a href="<?php echo base_url() ?>questions/company/oracle"><li>Oracle</li></a>
								<a href="<?php echo base_url() ?>questions/company/uhg"><li>UHG</li></a>
								<a href="<?php echo base_url() ?>questions/company/ca-tech"><li>CA Technologies</li></a>
								<a href="<?php echo base_url() ?>questions/company/mu-sigma"><li>MU Sigma</li></a>
								<a href="<?php echo base_url() ?>questions/company/capegemini"><li>Capegemini</li></a>
								<a href="<?php echo base_url() ?>questions/company/adobe"><li>Adobe</li></a>
								<a href="<?php echo base_url() ?>questions/company/sapient"><li>Sapient</li></a>
								<a href="<?php echo base_url() ?>questions/company/samsung"><li>Samsung</li></a>
								<a href="<?php echo base_url() ?>questions/company/power2sme"><li>Power2SME</li></a>
								<a href="<?php echo base_url() ?>questions/company/infoedge"><li>Infoedge</li></a>
								<a href="<?php echo base_url() ?>questions/company/tcs"><li>TCS</li></a>
							</ul>
						</div>
					</div>
	    	  </div>
			</div>
			<div class="col-md-4">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4>Aptitude</h4></div>
  				<div class="panel-body">
					<div class="tricol-body">
						<ul>
							<a href="<?php echo base_url() ?>questions/view/problems-on-trains"><li>Problems on Trains</li></a>
							<a href="<?php echo base_url() ?>questions/view/time-and-distance"><li>Time and Distance</li></a>
							<a href="<?php echo base_url() ?>questions/view/simple-interest"><li>Simple Interest</li></a>
							<a href="<?php echo base_url() ?>questions/view/average"><li>Averages and Mixtures</li></a>
							<a href="<?php echo base_url() ?>questions/view/ratio-and-proportion"><li>Ratio and Proportion</li></a>
							<a href="<?php echo base_url() ?>questions/view/height-and-distance"><li>Height and Distance</li></a>
							<a href="<?php echo base_url() ?>questions/view/probability"><li>Probability</li></a>
							<a href="<?php echo base_url() ?>questions/view/antonyms"><li>Antonyms</li></a>
							<a href="<?php echo base_url() ?>questions/view/synonyms"><li>Synonyms</li></a>
							<a href="<?php echo base_url() ?>questions/view/idioms-and-phrases"><li>Idioms and Phrases</li></a><!-- 
							<a href="<?php echo base_url() ?>questions/view/comprehension"><li>Comprehension</li></a> -->
							<!-- <a href="#"><li>Fill in the blanks</li></a>
							<a href="#"><li>Cubes and Dices</li></a>
							<a href="#"><li>Puzzles</li></a>
							<a href="#"><li>Direction and Senses</li></a>
							<a href="#"><li>Statements and Assumptions</li></a> --><!-- 
							<a href="#"><li>Logical Deductions</li></a>
							<a href="#"><li>Blood Relations</li></a> -->
						</ul>
					</div>
				</div>
	    	  </div>
			</div>
			<div class="col-md-4">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4>Coding</h4></div>
  				<div class="panel-body">
					<div class="tricol-body">
						<ul>
							<a href="<?php echo base_url() ?>questions/view/computer-fundamentals"><li>Computer Fundamentals</li></a>
							<a href="<?php echo base_url() ?>questions/view/operating-system-concepts"><li>Operating System Concepts</li></a>
							<a href="<?php echo base_url() ?>questions/view/linux"><li>Linux</li></a>
							<a href="<?php echo base_url() ?>questions/view/networking"><li>Networking</li></a>
							<a href="<?php echo base_url() ?>questions/view/database-systems"><li>Database Systems</li></a>
							<a href="<?php echo base_url() ?>questions/view/artificial-intelligence"><li>Artificial Intelligence</li></a>
							<a href="<?php echo base_url() ?>questions/view/computer-hardware"><li>Computer Hardware</li></a>
							<a href="<?php echo base_url() ?>questions/view/unix"><li>Unix</li></a>
							<!-- <a href="#"><li>Arrays</li></a>
							<a href="#"><li>Linked Lists</li></a>
							<a href="#"><li>Strings</li></a>
							<a href="#"><li>Trees</li></a>
							<a href="#"><li>Stacks and Queues</li></a>
							<a href="#"><li>Miscellaneous</li></a> -->
						</ul>
					</div>
				</div>
	    				
			  </div>
			</div>
		</div>
	</div>
	

	<?php include "includes/footer.php" ?>
</body>
</html>
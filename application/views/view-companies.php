<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Companies</title>
</head>
<?php include "css.php" ?>
<body>
	<?php include "includes/header.php" ?>
	<div class="container view-companies">
		<div class="panel question-categories panel-success">
			<div class="panel-heading">
		    	<h3 class="panel-title">List Of Companies</h3>
		  	</div>
	  		<div class="panel-body">
		    	
				<ol>
					<div class="col-md-4">
						<li><a href="<?php echo base_url() ?>/questions/company/algebraic-expressions">Oracle</a></li>
				        <li><a href="<?php echo base_url() ?>/questions/company/speed-and-boat">UHG</a></li>
					</div>
					<div class="col-md-4">
				        <li><a href="#">CA Technologies</a></li>
						<li><a href="#">Mu Sigma</a></li>
					</div>
					<div class="col-md-4">
						<li><a href="#">Capegemini</a></li>
						<li><a href="#">Samsung</a></li>
					</div>
				</ol>
			</div>
		</div>
	</div>	
	<?php include "includes/footer.php" ?>
</body>
</html>
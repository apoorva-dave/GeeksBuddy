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
				<?php foreach ($companies as $company) { ?>

					<li>
					<a href="<?php echo base_url() ?>questions/company/<?php echo $company->company_slug; ?>">
						<?php echo $company->name ?>		
					</a>
					</li>
				<?php } ?>
					
					<!-- <div class="col-md-4">
				        <li><a href="<?php echo base_url() ?>questions/company/UHG">UHG</a></li>
					</div>
					<div class="col-md-4">
				        <li><a href="#">CA Technologies</a></li>
						<li><a href="#">Mu Sigma</a></li>
					</div>
					<div class="col-md-4">
						<li><a href="#">Capegemini</a></li>
						<li><a href="#">Samsung</a></li>
					</div> -->
				</ol>
			</div>
		</div>
	</div>	
	<?php include "includes/footer.php" ?>
</body>
</html>
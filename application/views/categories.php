<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Categories</title>
	<?php include "css.php" ?>
</head>
<body>
	<?php include "includes/header.php" ?></div>
	<br>
	<br>

	<div class="container-fluid  text-center">
		<div class="dropdown features">
			<button class="dropbtn">Company Wise</button>
			<div class="dropdown-content">
			<a href="#">UHG</a>
			<a href="#">Oracle</a>
			<a href="#">CA</a>
			<a href="#">Mu Sigma</a>
			<a href="#">Capegemini</a>
			</div>
		</div>
		<div class="dropdown features">
			<button class="dropbtn">Topic Wise</button>
			<div class="dropdown-content">
			<a href="<?php echo base_url()?>index.php/Aptitude">Aptitude</a>
			<a href="<?php echo base_url()?>index.php/Coding">Coding</a>
			</div>
		</div>
	</div>	
	<br>
	<br>
	<br>

<?php include "includes/footer.php" ?></div>

</body>
</html>

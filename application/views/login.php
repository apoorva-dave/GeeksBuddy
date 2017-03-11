<!DOCTYPE html>
<html lang="en">
<script type="assets/css/style.css"></script>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<?php include "css.php" ?>
<?php include "includes/header.php" ?>
<div class="container">
	<div class="text-center">
	<h3>Login to GeeksBuddy</h3>
	</div>
	<br>
	<br>
	<div class="panel panel-default">
	 	<div class="panel-body">
	 	    <form class="form-horizontal">
				<div class="form-group">
				<br>
				
					<label for="email" class="control-label col-xs-4">Email address:</label>
					 <div class="col-xs-5">
						<input type="email" class="form-control" id="email" placeholder="Enter Email address"></div>
				</div>
				<br>

				<div class="form-group">
					<label for="pwd" class="control-label col-xs-4">Password:</label>
					 <div class="col-xs-5">
						<input type="password" class="form-control" id="pwd" placeholder="Password"></div>
				</div>
				<div class="text-center">
					<button class ="btn btn-primary" type="submit" class="btn btn-default">Login</button>
				</div>	
		   </form>
		   <br>
		   <div class="text-center">
		   <p>Need an account?<a href="#"> Register</p>
		   </div>
	  </div>
	</div>
</div>	

<?php include "includes/footer.php" ?>

</body>
</html>
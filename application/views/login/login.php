<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
 <?php include __DIR__."/../css.php" ?>
<?php include __DIR__."/../includes/header.php" ?>
<div class="container">
	<div class="text-center">
	<h3>Login to GeeksBuddy</h3>
	</div>
	<br>
	<br>
	<div class="panel panel-default">
	 	<div class="panel-body">
	 	    <form class="form-horizontal"  method="post" action="<?php echo base_url()?>index.php/login/loginSubmit">
	 	    		<p><?php if(@$errors){?>
	 	    			   <div class="alert alert-danger" role="alert">
	 	    			   	<?php echo validation_errors();?>
	 	    			   </div>
	 	    			   <?php
	 	    		} ?>
	 	    		<?php if(@$error_msg){?>
	 	    			   <div class="alert alert-danger" role="alert">
	 	    			   	<?php echo($error_msg);?>
	 	    			   </div>
	 	    			   <?php
	 	    		} ?>   			
	 	    		</p>
				<div class="form-group">
				<br>
				
					<label for="email" class="control-label col-xs-4">Email address:</label>
					 <div class="col-xs-5">
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email address"></div>
				</div>
				<br>

				<div class="form-group">
					<label for="pwd" class="control-label col-xs-4">Password:</label>
					 <div class="col-xs-5">
						<input type="password" class="form-control" name="password" id="pwd" placeholder="Password"></div>
				</div>
				<div class="text-center">
					<button class ="btn btn-primary" type="submit" class="btn btn-default">Login</button>
				</div>	
		   </form>
		   <br>
		   <div class="text-center">
		   <p>Need an account?<a href="<?php echo base_url()?>index.php/Register"> Register</p>
		   </div>
	  </div>
	</div>
</div>	
<?php include  __DIR__."/../includes/footer.php" ?>  
</body>
</html>
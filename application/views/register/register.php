<!DOCTYPE html>
<html lang="en">
<script type="assets/css/style.css"></script>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
<?php include __DIR__."/../css.php" ?>
<?php include __DIR__."/../includes/header.php" ?>
<div class="container">
	<div class="text-center">
	<h3>Register at GeeksBuddy</h3>
	</div>
	<br>
	<br>
	<div class="panel panel-default">
	 	<div class="panel-body">
	 	    <form class="form-horizontal" method="post"action= "<?php echo base_url() ?>index.php/register/registerSubmit">
	 	    <!-- yahan errps vala var kese aaega -->
	 	    	<p><?php if(@$errors){?>
	 	    			   <div class="alert alert-danger" role="alert">
	 	    			   	<?php echo validation_errors();?>
	 	    			   </div>
	 	    			   <?php
	 	    		} ?>   			
	 	    		</p>
	 	    	<div class="form-group">
				<br>
				
					<label for="name" class="control-label col-xs-4">Name:</label>
					 <div class="col-xs-5">
						<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"></div>
				</div>
		
				<div class="form-group">
				<br>
				
					<label for="email" class="control-label col-xs-4">Email address:</label>
					 <div class="col-xs-5">
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email address"></div>
				</div>
				<br>
				
				<div class="form-group">
					<label for="pwd" class="control-label col-xs-4">Password:</label>
					 <div class="col-xs-5">
						<input type="password" class="form-control" id="pwd" name="password" placeholder="Password"></div>
				</div>
				<div class="text-center">
					<button class ="btn btn-primary" type="submit" class="btn btn-default">Sign In</button>
					<br><br>
					<p>Already a user? Click here to <a href="<?php echo base_url()?>index.php/Login">Login.</p>
				</div>	
		   </form>
		   <br>
		 </div>
	</div>
</div>	

<?php include  __DIR__."/../includes/footer.php" ?>

</body>
</html>
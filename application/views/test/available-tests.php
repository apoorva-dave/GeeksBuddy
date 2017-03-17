<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Available Tests | Geeks Buddy</title>
	<?php include __DIR__."/../css.php" ?>
	<!-- Temproary css -->
</head>
<body>
	<?php include __DIR__."/../includes/header.php" ?>
	<div class="container test">
		<h1 class="text-center">Available Tests</h1>
		
		<div class="panel question-categories panel-success">
			<div class="panel-heading">
		    	<h3 class="panel-title text-center">Aptitude Tests</h3>
		  	</div>
	  		<div class="panel-body">
				<?php foreach ($overall_categories as $overall_category) { ?>
		    		<div>
						<h4><?php echo $overall_category->name; ?></h4>
						<ul>
							<?php foreach ($overall_category->categories as $category) { ?>
							<li class="test-li">
								<div class="col-md-6 q-text">
									<a href="<?php echo base_url() ?>questions/view/<?php echo $category->category_slug; ?>"><?php echo $category->name; ?></a>
								</div>
								<form action="<?php echo base_url() ?>test/instructions/<?php echo $category->category_slug; ?>">
									<div class="col-md-6">
										<div class="time">
											<span>Time:</span>
											<select class="form-control" name="time" id="">
												<option value="10">10 min</option>
												<option value="20">20 min</option>
												<option value="30">30 min</option>
											</select>
										</div>
										<div class="no-of-questions">
											<span>Questions:</span>
											<select class="form-control" name="no_of_ques" id="">
												<option value="10">10</option>
												<option value="20">20</option>
												<option value="30">30</option>
											</select>
										</div>
										<button type="submit" class="btn btn-sm btn-default">Take Test</button>
									</div>
								</form>
							</li>
							<?php } ?>
						</ul>	
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="panel question-categories panel-success">
			<div class="panel-heading">
		    	<h3 class="panel-title text-center">Coding Tests</h3>
		  	</div>
	  		<div class="panel-body">
				<div>
					<ul>
						<li class="test-li">
							<div class="col-md-6 q-text">
								<a href="#">Arrays</a>
							</div>
							<form action="<?php echo base_url() ?>test/instructions/algebraic-expressions">
								<div class="col-md-6">
									<div class="time">
										<span>Time:</span>
										<select class="form-control" name="time" id="">
											<option value="10">10 min</option>
											<option value="20">20 min</option>
											<option value="30">30 min</option>
										</select>
									</div>
									<div class="no-of-questions">
										<span>Questions:</span>
										<select class="form-control" name="no_of_ques" id="">
											<option value="10">10</option>
											<option value="20">20</option>
											<option value="30">30</option>
										</select>
									</div>
									<button class="btn btn-sm btn-default">Take Test</button>
								</div>
							</form>
						</li>
						<li class="test-li">
							<div class="col-md-6 q-text">
								<a href="#">Linked Lists</a>
							</div>
							<form action="<?php echo base_url() ?>test/instructions/algebraic-expressions">
								<div class="col-md-6">
									<div class="time">
										<span>Time:</span>
										<select class="form-control" name="time" id="">
											<option value="10">10 min</option>
											<option value="20">20 min</option>
											<option value="30">30 min</option>
										</select>
									</div>
									<div class="no-of-questions">
										<span>Questions:</span>
										<select class="form-control" name="no_of_ques" id="">
											<option value="10">10</option>
											<option value="20">20</option>
											<option value="30">30</option>
										</select>
									</div>
									<button class="btn btn-sm btn-default">Take Test</button>
								</div>
							</form>
						</li>
						<li class="test-li">
							<div class="col-md-6 q-text">
								<a href="#">Strings</a>
							</div>
							<form action="<?php echo base_url() ?>test/instructions/algebraic-expressions">
								<div class="col-md-6">
									<div class="time">
										<span>Time:</span>
										<select class="form-control" name="time" id="">
											<option value="10">10 min</option>
											<option value="20">20 min</option>
											<option value="30">30 min</option>
										</select>
									</div>
									<div class="no-of-questions">
										<span>Questions:</span>
										<select class="form-control" name="no_of_ques" id="">
											<option value="10">10</option>
											<option value="20">20</option>
											<option value="30">30</option>
										</select>
									</div>
									<button class="btn btn-sm btn-default">Take Test</button>
								</div>
							</form>
						</li>
						<li class="test-li">
							<div class="col-md-6 q-text">
								<a href="#">Trees</a>
							</div>
							<form action="<?php echo base_url() ?>test/instructions/algebraic-expressions">
								<div class="col-md-6">
									<div class="time">
										<span>Time:</span>
										<select class="form-control" name="time" id="">
											<option value="10">10 min</option>
											<option value="20">20 min</option>
											<option value="30">30 min</option>
										</select>
									</div>
									<div class="no-of-questions">
										<span>Questions:</span>
										<select class="form-control" name="no_of_ques" id="">
											<option value="10">10</option>
											<option value="20">20</option>
											<option value="30">30</option>
										</select>
									</div>
									<button class="btn btn-sm btn-default">Take Test</button>
								</div>
							</form>
						</li>
						<li class="test-li">
							<div class="col-md-6 q-text">
								<a href="#">Stacks and Queues</a>
							</div>
							<form action="<?php echo base_url() ?>test/instructions/algebraic-expressions">
								<div class="col-md-6">
									<div class="time">
										<span>Time:</span>
										<select class="form-control" name="time" id="">
											<option value="10">10 min</option>
											<option value="20">20 min</option>
											<option value="30">30 min</option>
										</select>
									</div>
									<div class="no-of-questions">
										<span>Questions:</span>
										<select class="form-control" name="no_of_ques" id="">
											<option value="10">10</option>
											<option value="20">20</option>
											<option value="30">30</option>
										</select>
									</div>
									<button class="btn btn-sm btn-default">Take Test</button>
								</div>
							</form>
						</li>
						<li class="test-li">
							<div class="col-md-6 q-text">
								<a href="#">Miscellaneous</a>
							</div>
							<form action="<?php echo base_url() ?>test/instructions/algebraic-expressions">
								<div class="col-md-6">
									<div class="time">
										<span>Time:</span>
										<select class="form-control" name="time" id="">
											<option value="10">10 min</option>
											<option value="20">20 min</option>
											<option value="30">30 min</option>
										</select>
									</div>
									<div class="no-of-questions">
										<span>Questions:</span>
										<select class="form-control" name="no_of_ques" id="">
											<option value="10">10</option>
											<option value="20">20</option>
											<option value="30">30</option>
										</select>
									</div>
									<button class="btn btn-sm btn-default">Take Test</button>
								</div>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
	<?php include __DIR__."/../includes/footer.php" ?>
</body>
</html>
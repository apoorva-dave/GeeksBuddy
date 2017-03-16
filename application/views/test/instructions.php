<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Test Instructions| Geeks Buddy</title>
	<?php include __DIR__."/../css.php" ?>
	<!-- Temproary css -->
</head>
<body>
	<?php include __DIR__."/../includes/header.php" ?>
	<div class="container test-instructions">

		<div class="panel panel-default">
		  <div class="panel-heading">
		  	<h1 class="panel-title text-center">Instructions</h1>
		  </div>
		  <div class="panel-body">
			<h3>Before starting the exam:</h3>
			<ol>
				<li>Make sure you have a good internet connection</li>
				<li>When you begin the exam click the link only ONCE to launch the test. Double clicking can lock the test</li>
			</ol>
			<h3>During the exam:</h3>
			<ol>
				<li>Dont resize the window.</li>
				<li>Do not click back button.</li>
				<li>If you loose internet connection wait for it to reconnect. Test will resume automatically.</li>
			</ol>
			<h3>Ending the test:</h3>
			<ol>
				<li>You can submit the test anytime you want.</li>
				<li>Click End test button and get out of the test!</li>
			</ol>
			<h4 class="text-center">All the best!</h4>
			<hr>
			<div class="div text-center">
				<a href="<?php echo base_url() ?>test/start_test/<?php echo $category_slug ?>?time=<?php echo $time ?>&no_of_ques=<?php echo $no_of_ques ?>" class="btn btn-success btn-lg">START TEST</a>
			</div>
		  </div>
		</div>
		
	</div>
	<?php include __DIR__."/../includes/footer.php" ?>
</body>
</html>
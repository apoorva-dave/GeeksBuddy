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
		<h1 class="text-center">Instructions</h1>
		<hr>
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
		<p class="text-center">All the best!</p>
		<hr>
		<div class="div text-center">
			<button class="btn btn-lg">START TEST</button>
		</div>
		<hr>
	</div>
	<?php include __DIR__."/../includes/footer.php" ?>
</body>
</html>
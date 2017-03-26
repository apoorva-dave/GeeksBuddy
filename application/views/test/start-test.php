<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Test | Geeks Buddy</title>
	<?php include __DIR__."/../css.php" ?>
</head>
<body>
	<?php include __DIR__."/../includes/header.php" ?>
	<div class="container">
		<!-- <pre>
		<?php //var_dump($questions) ?> -->
		<div class="row test-page">
			<div class="col-md-8">
				<div class="timer">
					<div class="timer-bar">
						<div class="timer-bar-inner"></div>
					</div>
					<div class="rem-time">Time Remaining: <span>00:54:34 minutes</span></div>
				</div>
				<div class="instructions">
					<h4>Instructions</h4>
					<ul>
						<li>Each question carry 1 mark, no negative marks.</li>
					</ul>
				</div>
				<hr>
				<div class="test-question">
					<h4>Q. <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quaerat nisi modi minus commodi nihil numquam enim dolores temporibus architecto.</span></h4>
					<div class="radio option" id="A">
						<input type="radio" name="answer" value="A">
						<label for="A">A. <span>lorem Ipsum</span></label>
					</div>
					<div class="radio option" id="B">
						<input type="radio" name="answer" value="B">
						<label for="B">B. <span>lorem Ipsum</span></label>
					</div>
					<div class="radio option" id="C">
						<input type="radio" name="answer" value="C">
						<label for="C">C. <span>lorem Ipsum</span></label>
					</div>
					<div class="radio option" id="D">
						<input type="radio" name="answer" value="D">
						<label for="D">D. <span>lorem Ipsum</span></label>
					</div>
				</div>

			</div>
			<div class="col-md-4 questions-widget">
				<h4 class="text-center">All Questions</h4>
				<div class="questions">
					<ul>
						<li class="ques">1</li>
						<li class="ques">2</li>
						<li class="ques">3</li>
						<li class="ques">4</li>
						<li class="ques">5</li>
						<li class="ques">6</li>
						<li class="ques">7</li>
						<li class="ques">8</li>
						<li class="ques">9</li>
						<li class="ques">10</li>
						<li class="ques">11</li>
						<li class="ques">12</li>
						<li class="ques">13</li>
						<li class="ques">14</li>
						<li class="ques">15</li>
						<li class="ques">16</li>
						<li class="ques">17</li>
						<li class="ques">18</li>
						<li class="ques">19</li>
						<li class="ques">20</li>
					</ul>
				</div>
				<div class="legend">
					<ul>
						<li class="ques"><span>Attempted</span></li> 
						<li class="ques"><span>Marked For Review</span></li> 
						<li class="ques"><span>Not Visited</span></li> 
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include __DIR__."/../includes/footer.php" ?>

	<script>
		var questions = <?php echo json_encode($questions) ?>;
		console.log(questions);
	</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Topic - Qestions | Geeks Buddy</title>
	<?php include __DIR__."/../css.php" ?>
</head>
<body>
	<?php include __DIR__."/../includes/header.php" ?>
	<div class="container">
		<ul class="questions">
			<?php $i=1; foreach($questions as $question){ ?>
				<li class="question-wrapper">
					<div class="q">
						<span class="q-number"><?php echo ("Q.$i ") ?></span>
						<?php echo $question->question; ?>
					</div>
					<div class="options-wrapper">
						<p>1. <?php echo $question->option1; ?></p>
						<p>2. <?php echo $question->option2; ?></p>
						<p>3. <?php echo $question->option3; ?></p>
						<p>4. <?php echo $question->option4; ?></p>
					</div>
				</li>
			<?php $i++; } ?>
		</ul>	

	</div>
	<?php include __DIR__."/../includes/footer.php" ?>
</body>
</html>
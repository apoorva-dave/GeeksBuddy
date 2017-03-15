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
		 <!-- var_dump($questions); -->
		<?php 
		$i=1;
		foreach($questions as $row)
		{?>
		<ul>
			<h4>
			  <?php echo ("Q.$i ");
			  echo $row->question?>
			</h4>
		</ul>
		<?php $i++;}
		 ?>

		</div>
	<?php include __DIR__."/../includes/footer.php" ?>
</body>
</html>
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
		<h2><?php echo $company_name; ?></h2>
		<ul class="questions"> 
			<!-- <pre> -->
			<?php $i=1; 
			// echo $questions->category_slug;
			// var_dump($questions);
			// die();
			foreach($questions as $question){ 
				?>

				<li class="question-wrapper">
					<div class="q">
						<span class="q-number"><?php echo ("Q. "). ($i + (($page-1) * $per_page))."." ?></span>
						<?php echo $question->question; ?>
					</div>
					<div class="options-wrapper">
						<p>1. <?php echo $question->option1; ?></p>
						<p>2. <?php echo $question->option2; ?></p>
						<p>3. <?php echo $question->option3; ?></p>
						<p>4. <?php echo $question->option4; ?></p>
					</div>
					<div class="answer" style="display: none" id="showRightOption<?php echo $question->id; ?>">
						<?php						
						 echo $question->right_option; ?>
					</div>
				</li>
			<?php $i++;?> 
			<div class= "btn-sharp">
				<button onclick=showAnswer("showRightOption<?php echo $question->id; ?>") type="button" class="btn btn-success" id ="show">Show/Hide Answer</button>
			</div>
			<?php
			} ?>
		</ul>	
		<nav aria-label="Page navigation" class="text-center">
		  <ul class="pagination ">
		  <?php if($page - 1 > 0) {?>
			    <li>
			      <a href="<?php echo base_url() ?>Questions/company/<?php echo $company_slug ?>/<?php echo $page-1 ?>" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
	   		<?php }?>
		  	    <?php for ($i=1; $i <= $no_of_pages; $i++) { ?>
			    <li>
			    	<a href="<?php echo base_url() ?>Questions/company/<?php echo $company_slug ?>/<?php echo $i ?>">
			    <?php echo $i ?>
			    	
			    </a></li>
		    <?php } ?>
		    <?php if($page + 1 <= $no_of_pages) {?>
			    <li>
			      <a href="<?php echo base_url() ?>Questions/company/<?php echo $company_slug ?>/<?php echo $page+1 ?>" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
	   		<?php }?>
		  </ul>
		</nav>
	</div>
	<?php include __DIR__."/../includes/footer.php" ?>
<script>

	function showAnswer(showAnsDiv) {
		console.log(showAnsDiv);
		var x = document.getElementById(showAnsDiv);
	    console.log(x);
	    if (x.style.display === 'none') {
	        x.style.display = 'block';
				        
	    } else {
	        x.style.display = 'none';
	    }
	    
	}
</script>
</body>
</html>
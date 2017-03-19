<!DOCTYPE html>
<html lang="en">
<script type="assets/css/style.css"></script>
<head>
	<meta charset="utf-8">
	<title>Coding Questions | Geeks Buddy</title>
	<?php include __DIR__."/../css.php" ?>
</head>
<body>
	<?php include __DIR__."/../includes/header.php" ?>
	<div class="container">
	
		<div class="panel question-categories panel-success">
			<div class="panel-heading">
		    	<h3 class="panel-title">Coding Questions</h3>
		  	</div>
	  		<div class="panel-body">
				<div>
					<?php 

					foreach ($overall_categories as $overall_category) { 
						if($overall_category->name == "Coding"){
						?>
					<h4><?php echo $overall_category->name; ?></h4>				
					<ul>
						<div class="col-md-4">
						<?php 
							// We need to divide each category into 3 columns!
							$per_col = sizeof($overall_category->categories) / 3;

							$column_count = 1;
							$category_count = 1;
						?>
						<?php foreach ($overall_category->categories as $category) { ?>
							<?php if($category_count >= $per_col && $column_count < 3 ){ ?>
								</div>
								<div class="col-md-4">		
							<?php 
								$category_count = 0;
								$column_count++;
							}else if($category_count == $per_col && $column_count ==3 ){ ?>
								</div>
							<?php 
								$category_count = 0;
								$column_count++;
							} ?>
							<li><a href="<?php echo base_url() ?>questions/view/<?php echo $category->category_slug; ?>">
							<?php echo $category->name ?></a></li>
							
							<?php $category_count++ ?>
						<?php } } ?>
					</ul>
				<?php } ?>

				<!-- 
					<ul>
						<li><a href="#">Arrays</a></li>
						<li><a href="#">Linked Lists</a></li>
						<li><a href="#">Strings</a></li>
						<li><a href="#">Trees</a></li>
						<li><a href="#">Stacks and Queues</a></li>
						<li><a href="#">Miscellaneous</a></li>
					</ul>
	 -->

		</div>
		</div>
		</div>
	</div>
	
	<?php include __DIR__."/../includes/footer.php" ?>
</body>
</html>
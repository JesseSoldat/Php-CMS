<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>


	<!-- Navigation -->
	<?php include "includes/navigation.php"; ?>


	<div class="container">
			<div class="row">
					<div class="col-md-8">
						<?php
							$per_page = 10;

							$query = "SELECT * FROM posts";
							$select_all_posts_query = mysqli_query($connection, $query);
							
							while($row = mysqli_fetch_assoc($select_all_posts_query)) {
								echo $row['post_title'];
								
							}



						?>

							
					</div>
			</div>
	</div>


	<?php include "includes/footer.php"; ?>


        
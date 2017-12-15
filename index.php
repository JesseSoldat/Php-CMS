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
						
								$post_id = $row['post_id'];
								$post_title = $row['post_title'];
								$post_author = $row['post_author'];
								$post_date = $row['post_date'];
								$post_image = $row['post_image'];
								$post_content = substr($row['post_content'], 0, 400);
								$post_status = $row['post_status'];
						?>
								<h2> 
									<a href="post.php/<?php echo $post_id; ?>"><?php echo $post_title ?></a>
								</h2>
								<p class="lead"> 
									by <a href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author ?></a>
								</p> 

								<p>
									<span class="glyphicon glyphicon-time">
										<?php echo $post_date ?>
									</span>
								</p>
								<hr> 
								
								<a href="post.php?p_id=<?php echo $post_id; ?>">
									<img class="img-responsive" 
										src="./images/<?php echo $post_image; ?>.jpg"
										alt="image"> 
								</a>

								<hr>
								<p><?php echo $post_content ?></p> 
								<a class="btn btn-primary" 
									href="post.php?p_id=<?php echo $post_id; ?>">Read More
									<span class="glyphicon glyphicon-chevron-right"> 
									</span> 
								</a> 
								<hr> 

						<?php } ?>

							
					</div>

					<?php include "includes/sidebar.php"; ?>
			</div>
	</div>


	<?php include "includes/footer.php"; ?>


        
		<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
					<?php
						$query = "select *from tbl_catagory";
						$post = $db->select($query);
						if ($post) {
							while ($result = $post->fetch_assoc()){

					?>
						<li><a href="posts.php?category=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>
				
					<?php } } else{ header("location:404.php"); } ?>					
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>

					<?php
						$query = "SELECT * FROM tbl_post limit 4";
						$post = $db->select($query);
						if($post) {
						while($result = $post->fetch_assoc()){

					?>

					<div class="popular clear">
						<h3><a href="post.php? id=<?php echo $result['id']; ?>"> <?php echo $result['title']; ?></a></h3>
						<a href="#"><img src="admin/<?php echo $result['image']; ?>" alt="post image"/></a>
						<P><?php echo $for->textshorten($result['body'],150); ?></P>
					</div>
				
				<?php } } else{ header("location:404.php"); } ?>
			</div>
			
		</div>
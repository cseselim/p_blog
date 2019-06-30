<?php include 'inc/header.php'; ?>

<?php
	if (!isset($_GET['id']) || $_GET['id'] == NULL) {
		header("location:404.php");	
	}else{
		$id = $_GET['id'];
	}

?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">

			<?php 

				$query = "select * from tbl_post WHERE id=$id";
				$post = $db->select($query);
				if ($post) {
				while ($result = $post->fetch_assoc()) {

			?>

				<h2><?php echo $result['title']; ?></h2>

				<h4><?php echo $result['date']; ?> <a href="post.php? id=<?php echo $result['id']; ?>"> <?php echo $result['author']; ?></a></h4>

				<img src="admin/<?php echo $result['image']; ?>" alt="post image"/>

				<p>
					<?php echo $result['body']; ?>
				</p>

				
				

				<div class="relatedpost clear">
					<h2>Related articles</h2>

					<?php
						$catid = $result['cat'];
						$queryrelated = "select * from tbl_post WHERE cat='$catid' limit 6";
						$relatedpost = $db->select($queryrelated);
						if ($relatedpost) {
						while ($rrresult = $relatedpost->fetch_assoc()) {
					?>

					<a href="post.php id=<?php echo $rrresult['id']; ?>"><img src="admin/<?php echo $rrresult['image']; ?>" alt="post image"/></a>
				<?php } }else{ echo "NO Related post";} ?>
				</div>
				<?php } } else {header("location:404.php");} ?>
		</div>
	</div>
<?php include 'inc/sitbar.php'; ?>
<?php include 'inc/footer.php'; ?>
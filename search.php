<?php include 'inc/header.php'; ?>

<?php
	if (!isset($_GET['search']) || $_GET['search'] == NULL) {
		header("location:404.php");	
	}else{
		$search = $_GET['search'];
	}

?>

<div class="contentsection contemplete clear">
	<div class="maincontent clear">

<?php
		$query = "SELECT * FROM tbl_post  where  title LIKE '%$search%' OR body LIKE '%$search%' OR author LIKE '%$search%'";
		$post = $db->select($query);
		if($post) {
		while($result = $post->fetch_assoc()){

	?>




<div class="samepost clear">
	<h2><a href="post.php? id=<?php echo $result['id']; ?>"> <?php echo $result['title']; ?></a></h2>
	<h4><?php echo $for->formatDate($result['date']); ?> <a href="post.php id=<?php echo $result['id']; ?>"> <?php echo $result['author']; ?></a></h4>
	 <a href="#"><img src="admin/<?php echo $result['image']; ?>" alt="post image"/></a>
	<p>
		<?php echo $for->textshorten($result['body']); ?>
	</p>
	<div class="readmore clear">
		<a href="post.php? id=<?php echo $result['id']; ?>">Read More</a>
	</div>
</div>



<?php } } else{ ?>
  <p>Your search keyword is not this post</p>
<?php } ?>



</div>
<?php include 'inc/sitbar.php'; ?>
<?php include 'inc/footer.php'; ?>
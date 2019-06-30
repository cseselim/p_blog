<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/format.php'; ?>

<?php
	$db = new Database();
	$for = new format();

?>

<!DOCTYPE html>
<html>
<head>
	<?php
	$tab='Selimkhan.me';
	if (isset($_GET['pageid'])) {

        $id = $_GET['pageid'];

    $query = "SELECT * FROM addpage WHERE id = '$id'";
    $title = $db->select($query);
    if ($title) {
    	while ($result = $title->fetch_assoc()) { ?>
    	
    	<title> <?php echo $result['name']; ?>-<?php echo $tab; ?></title>	

	<?php } } }elseif (isset($_GET['id'])) {

        $id = $_GET['id'];

    $query = "SELECT * FROM tbl_post WHERE id = '$id'";
    $title = $db->select($query);
    if ($title) {
    	while ($result = $title->fetch_assoc()) { ?>
    	
    	<title><?php echo $result['title']; ?></title>	

	<?php } } }else { ?>
		<title><?php echo $for->title();?>-<?php echo $tab; ?></title>	
	<?php } ?>
	
	<?php include 'script/meta.php';?>
	<?php include 'script/css.php';?>
	<?php include 'script/js.php';?>
</head>

<body>
	<div class="headersection templete clear">
		<a href="index.php">
			<?php
				$query = "SELECT * FROM title_slogan";
				$post = $db->select($query);
				if ($post) {
					while ($result = $post->fetch_assoc()) {
						
			?> 
			<div class="logo">
				<img src="admin/<?php echo $result['logo']; ?>" alt="Logo"/>
				<h2><?php echo $result['title']; ?></h2>
				<p><?php echo $result['slogan']; ?></p>
			</div>

			<?php } } ?>
		</a>
		<div class="social clear">
			<div class="icon clear">
			<?php 
	            $query ="SELECT  * FROM tbl_sosial WHERE id = 1";
	            $logo = $db->select($query);
	            if ($logo) {
	                while ($result = $logo->fetch_assoc()) {	
        	?>
				<a href="<?php echo $result['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $result['tw'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $result['ln'];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="<?php echo $result['gp'];?>" target="_blank"><i class="fa fa-google-plus"></i></a>
			<?php } } ?>	
			</div>
			<div class="searchbtn clear">

			<form action="search.php" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>

			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a id="active" href="index.php">Home</a></li>
		<?php
			$query = "select *from addpage";
			$post = $db->select($query);
			if ($post) {
				while ($result = $post->fetch_assoc()){

		?>
			<li><a href="page.php?pageid=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>

		<?php } } else{ header("location:404.php"); } ?>	
		<li><a  href="contact.php">Contact</a></li>
		<li><a target="_blank" href="admin/login.php">login</a></li>
	</ul>
</div>
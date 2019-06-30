<?php 
    include '../lib/session.php';
    session::checksession(); 
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>
<?php include '../helpers/format.php'; ?>

<?php
    $db = new Database();

if (!isset($_GET['del_post']) || $_GET['del_post'] == null) {
    //echo "<script>Window.location='catlist.php';</script>";
    header("location:'catlist.php'");
}else{
    $id = $_GET['del_post'];

    $query = "SELECT * FROM tbl_post WHERE id = 'id'";
    $imgpost = $db->select($query);
    if ($imgpost) {
    	while ($result = $imgpost->fecth_assoc()) {
    		$imglink = $result['image'];
    		unlink($imglink);
    	}
    }

    $query = "DELETE FROM tbl_post WHERE id = '$id'";
    $deletepost = $db->delete($query);
    if ($deletepost) {
     	echo "<script> alert'Data Deleted sucessfull!' </script>";
     	//echo "<script>Window.location = 'postlist.php'; </script>";
     	header("location:postlist.php");
     }else{
     	echo "<script> alert'Data not Deleted!' </script>";
     	//echo "<script> Window.location='postlist.php'; </script>";
     	header("location:'postlist.php'");
     } 
}

?>
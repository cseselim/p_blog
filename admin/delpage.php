<?php 
    include '../lib/session.php';
    session::checksession(); 
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>

<?php
    $db = new Database();

if (!isset($_GET['delpage']) || $_GET['delpage'] == null) {
    //echo "<script>Window.location='catlist.php';</script>";
    header("location:index.php");
}else{
    $id = $_GET['delpage'];


    $query = "DELETE FROM addpage WHERE id = '$id'";
    $delpage = $db->delete($query);
    if ($delepage) {
     	echo "<script> alert'Data Deleted sucessfull!' </script>";
     	//echo "<script>Window.location = 'postlist.php'; </script>";
     	header("location:page.php");
     }else{
     	echo "<script> alert'Data not Deleted!' </script>";
     	//echo "<script> Window.location='postlist.php'; </script>";
     	header("location:page.php");
     } 
}

?>
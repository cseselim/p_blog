<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<?php 

if (!isset($_GET['catid']) || $_GET['catid'] == null) {
    //echo "<script>Window.location='catlist.php';</script>";
    header("location:'catlist.php'");
}else{
    $id = $_GET['catid'];
}


?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Category</h2>
       <div class="block copyblock">
       <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $for->validation($_POST['name']);
            $name = mysqli_real_escape_string($db->link,$name);
            if (empty($name)) {
                echo "<span class='error'>Field must not be empty!</span>";
            }else{
                $query = "UPDATE tbl_catagory
                        SET
                        name = '$name'
                        WHERE id = '$id'";
                $catupdate = $db->update($query);
                if ($catupdate) {
                    echo "<span class='success'>Catagory update successfully</span>";
                }else{
                    echo "<span class='error'>Catagory not update</span>";
                }
            }
        }
        ?>
        <?php
            $query = "SELECT * FROM tbl_catagory WHERE id = '$id'";
            $data = $db->select($query);
            while ($result = $data->fetch_assoc()){

        ?> 
         <form action="" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" name="name" value="<?php echo $result['name']; ?>" placeholder="Enter Category Name..." class="medium" />
                    </td>
                </tr>
				<tr> 
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        <?php } ?> 
        </div>
    </div>
</div>
 <?php include 'inc/footer.php'; ?>

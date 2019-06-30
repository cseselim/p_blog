<?php 

    if (!isset($_GET['pageid']) || $_GET['pageid'] == null) {
        //echo "<script>Window.location='catlist.php';</script>";
       header("location:index.php");
    }else{
        $id = $_GET['pageid'];
    }
?><?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<style>
    .page{font-family:normal;background: #ddd;font-size: 20px;padding: 3px 10px;}
    .page a{color:#444;}
</style>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>pages</h2>

                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    $name = mysqli_real_escape_string($db->link,$_POST['name']);
                    $body = mysqli_real_escape_string($db->link,$_POST['body']);


                    if ($name == "" || $body == "") {
                        echo "<span class='error'>Field must not be empty!</span>";
                    }else{
                        $query = "UPDATE addpage
                                  SET
                                  name = '$name',
                                  body = '$body'
                                  WHERE id = '$id'
                                ";
                        $uppage = $db->update($query);            
                        if ($uppage) {
                            echo "<span class='success'>Data Updated successfull!</span>";
                        }else{
                            echo "<span class='error'>Data is not inserted!</span>";
                        }
                    }
                }    
                ?>

                <div class="block">
                <?php 
                    $query = "SELECT * FROM addpage WHERE id= '$id'";
                    $post = $db->select($query); 
                    if ($post) {
                        while ($result=$post->fetch_assoc()) {

                 ?>            
                 <form action="" method='post'>
                    <table class="form">
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" name="name" value="<?php echo $result['name']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body">
                                    <?php echo $result['body']; ?>;
                                </textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                                <span class="page"><a onclick="return confirm('Are you sure to Delete!');" href="delpage.php?delpage=<?php echo $result['id'];?>">Delete</a></span>
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php } } ?>
                </div>
            </div>
        </div>
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
<?php include 'inc/footer.php'; ?>   



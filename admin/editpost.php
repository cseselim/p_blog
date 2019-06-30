<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<?php 

if (!isset($_GET['editpost']) || $_GET['editpost'] == null) {
    //echo "<script>Window.location='catlist.php';</script>";
    header("location:postlist.php");
}else{
    $id = $_GET['editpost'];
}


?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Post</h2>

                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    $title = mysqli_real_escape_string($db->link,$_POST['title']);
                    $cat = mysqli_real_escape_string($db->link,$_POST['cat']);
                    $body = mysqli_real_escape_string($db->link,$_POST['body']);
                    $author = mysqli_real_escape_string($db->link,$_POST['author']);
                    $tags = mysqli_real_escape_string($db->link,$_POST['tags']);
                    $userid = mysqli_real_escape_string($db->link,$_POST['userid']);

                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = "upload/".$unique_image;

                    if ($title == "" || $cat == "" ||  $body == "" || $author == "" || $tags == "") {
                        echo "<span class='error'>Field must not be empty!</span>";
                    }else{
                    if (!empty($file_name)) {

                    if ($file_size >1048567) {
                        echo "<span class='error'>Image Size should be less then 1MB!</span>";
                    }elseif (in_array($file_ext, $permited) === false) {
                    echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</pan>";
                    }else{
                        move_uploaded_file($file_temp, $uploaded_image);

                        $query = "UPDATE tbl_post
                                  SET
                                  cat    = '$cat',
                                  title  = '$title',
                                  body   = '$body',
                                  image  = '$uploaded_image',
                                  author = '$author',
                                  tags    = '$tags',
                                  userid = '$userid'
                                  WHERE id = $id  
                                ";

                        $updated_row = $db->update($query);
                    if ($updated_row) {
                        echo "<span class='success'>post Updated Successfully.</span>";
                    }else {
                        echo "<span class='error'>post Not Updated Successfully!</span>";
                    }

                  }
                }else{
                     $query = "UPDATE tbl_post
                                  SET
                                  cat    = '$cat',
                                  title  = '$title',
                                  body   = '$body',
                                  author = '$author',
                                  tags    = '$tags',
                                  userid = '$userid'
                                  WHERE id = $id  
                                ";

                        $updated_row = $db->update($query);
                    if ($updated_row) {
                        echo "<span class='success'>post Updated Successfully.</span>";
                    }else {
                        echo "<span class='error'>post Not Updated Successfully!</span>";
                    }
                }
            }

                }    
                ?>

                <div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">

                 <?php 
                    $query = "SELECT * FROM tbl_post WHERE id='$id'";
                    $post = $db->select($query); 
                    if ($post) {
                        while ($postresult=$post->fetch_assoc()) {

                 ?>
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?php echo $postresult['title']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
                                    <option>Select category</option>
                                    <?php 
                                        $query = "select * from tbl_catagory";
                                        $catagory = $db->select($query);
                                        if ($catagory) {
                                            while ($result = $catagory->fetch_assoc()) {
                                    ?>

                                    <option
                                        <?php 
                                            if ($postresult['cat'] == $result['id']) { ?>
                                                selected = "selected"
                                            <?php } ?> 
                                        value=" <?php echo $result['id']; ?>">
                                        <?php echo $result['name'] ?>
                                    </option>
 
                                    <?php } } ?>

                                </select>
                            </td>
                        </tr>
                   
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <img src="<?php echo $postresult['image'] ;?>" width="100px" height="70px"/><br>
                                <input type="file" name="image" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body">
                                    <?php echo $postresult['body']; ?>"
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" value="<?php echo $postresult['author']; ?>" />
                                <input type="hidden" name="userid" value="<?php echo session::get('userId');?>" class="medium"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" name="tags" value="<?php echo $postresult['tags']; ?>" />
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    <?php } } ?>
                    </form>
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



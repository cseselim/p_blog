<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<?php 

if (!isset($_GET['viewpost']) || $_GET['viewpost'] == null) {
    //echo "<script>Window.location='catlist.php';</script>";
   
}else{
    $id = $_GET['viewpost'];
}

?>
<style>
    .button{background: chartreuse;color: #fff;padding: 9px 29px;margin-top: 8px;display: inline-block; text-align: center;}
</style>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Veiw Post</h2>
                

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
                                <input type="text" readonly name="title" value="<?php echo $postresult['title']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" readonly name="cat">
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
                                <textarea class="tinymce" readonly name="body">
                                    <?php echo $postresult['body']; ?>"
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" readonly value="<?php echo $postresult['author']; ?>" />
                                <input type="hidden" name="userid" value="<?php echo session::get('userId');?>" class="medium"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" readonly name="tags" value="<?php echo $postresult['tags']; ?>" />
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <div class="button"><a href="postlist.php">Ok</a></div>
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



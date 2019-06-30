
<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>
<style>
    
</style>
<?php 
    if (isset($_GET['userid'])) {
        $userid = $_GET['userid'];
    }

?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update User</h2>

            <?php
              
            ?>
                <div class="block">               
                 <form action="" method="post">

                <?php 
                    $query = "SELECT * FROM tbl_user WHERE id='$userid'";
                    $post = $db->select($query);     
                    if ($post) {
                        while ($result=$post->fetch_assoc()) {          
                 ?>
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" readonly name="name" value="<?php echo $result['name']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Userame</label>
                            </td>
                            <td>
                                <input type="text" readonly name="username" value="<?php echo $result['username']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>email</label>
                            </td>
                            <td>
                                <input type="text" readonly name="email" value="<?php echo $result['email']; ?>" class="medium" />
                            </td>
                        </tr>
                       
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Details</label>
                            </td>
                            <td>
                                <textarea class="tinymce" readonly name="details">
                                    <?php echo $result['details']; ?>
                                </textarea>
                            </td>
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td>
                                <a class="style" href="userlist.php">back</a>
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



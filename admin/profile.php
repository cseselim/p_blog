<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<?php 
    $userid = session::get('userId');
    $userRole = session::get('userRole');

?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update User</h2>

               <?php
              
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $name = $for->validation($_POST['name']);
                    $username = $for->validation($_POST['username']);
                    $email = $for->validation($_POST['email']);
                    $details = $for->validation($_POST['details']);

                    $name = mysqli_real_escape_string($db->link,$name);
                    $username = mysqli_real_escape_string($db->link,$username);
                    $email = mysqli_real_escape_string($db->link,$email);
                    $details = mysqli_real_escape_string($db->link,$details);

                   
                
                     $query = "UPDATE tbl_user
                                  SET
                                  name     = '$name',
                                  username = '$username',
                                  email    ='$email',
                                  details = '$details'
                                  WHERE id = '$userid'";
                 
                    $updated_row = $db->update($query);
                    if ($updated_row) {
                        echo "<span class='success'>User Updated Successfully.</span>";
                    }else {
                        echo "<span class='error'>User Not Updated Successfully!</span>";
                    }
                }

                ?>

                <div class="block">               
                 <form action="" method="post">

                <?php 
                    $query = "SELECT * FROM tbl_user WHERE id='$userid' AND role='$userRole'";
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
                                <input type="text" name="name" value="<?php echo $result['name']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Userame</label>
                            </td>
                            <td>
                                <input type="text" name="username" value="<?php echo $result['username']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>email</label>
                            </td>
                            <td>
                                <input type="text" name="email" value="<?php echo $result['email']; ?>" class="medium" />
                            </td>
                        </tr>
                       
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Details</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="details">
                                    <?php echo $result['details']; ?>"
                                </textarea>
                            </td>
                        </tr>
                       
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
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



<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<?php

if (!isset($_GET['msgid']) || $_GET['msgid'] == null) {
    echo "<script>window.location = 'inbox.php'; </script>";
}else{
    $id = $_GET['msgid'];
}

?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>View Message</h2>

                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        $tofrom = $for->validation($_POST['tofrom']);
                        $fromemail = $for->validation($_POST['fromemail']);
                        $subject = $for->validation($_POST['subject']);
                        $message = $for->validation($_POST['message']);

                        $tofrom = mysqli_real_escape_string($db->link,$tofrom);
                        $fromemail = mysqli_real_escape_string($db->link,$fromemail);
                        $subject = mysqli_real_escape_string($db->link,$subject);
                        $message = mysqli_real_escape_string($db->link,$message);

                        $mailsend = mail($tofrom,$subject,$message,$fromemail);
                        if ($mailsend) {
                            echo "<span class='success'>Message send successfully</span>";
                        }else{
                            echo "<span class='error'>Message not send!</span>";
                        }
                    }
                ?>

                <div class="block">               
                <form action="" method="post"">
                <?php
                    $query = "SELECT * FROM tbl_contact WHERE id ='$id'";
                    $data = $db->select($query);
                    if ($data) {
                    while ($result = $data->fetch_assoc()){
                ?> 
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>To:</label>
                            </td>
                            <td>
                                <input type="text" name="tofrom" readonly value="<?php echo $result['email'];?>" class="medium" />
                            </td>
                        </tr>
                        

                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>From:</label>
                            </td>
                            <td>
                                <input class="text"  name="fromemail" placeholder="Enter email address..." />
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Subject:</label>
                            </td>
                            <td>
                                <input class="text"  name="subject" placeholder="Enter your subject..." />
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Message:</label>
                            </td>
                            <td>
                                <textarea  class="tinymce" name="message"></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Send" />
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


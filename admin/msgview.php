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
                        echo "<script>window.location = 'inbox.php'; </script>";
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
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['firstname'].'----'.$result['lastname'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" readonly value="<?php echo $result['email'];?>" class="medium" />
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>date:</label>
                            </td>
                            <td>
                                <input class="text"  readonly value="<?php echo $result['date'];?>" />
                            </td>
                        </tr>


                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Message:</label>
                            </td>
                            <td>
                                <textarea  class="tinymce" readonly >
                                    <?php echo $result['body'];?>
                                </textarea>
                            </td>
                        </tr>
                        
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="OK" />
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


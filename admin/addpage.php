<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New pages</h2>

                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    $name = mysqli_real_escape_string($db->link,$_POST['name']);
                    $body = mysqli_real_escape_string($db->link,$_POST['body']);


                    if ($name == "" || $body == "") {
                        echo "<span class='error'>Field must not be empty!</span>";
                    }else{
                        $query = "INSERT INTO addpage(name,body) VALUES ('$name','$body')";
                        $addpages = $db->insert($query);
                        if ($addpages) {
                            echo "<span class='success'>Data insert successfull!</span>";
                        }else{
                            echo "<span class='error'>Data is not inserted!</span>";
                        }
                    }
                }    
                ?>

                <div class="block">               
                 <form action="" method="post"">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="name" placeholder="Enter your page name..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"></textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
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



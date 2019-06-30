<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?> 
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Social Media</h2>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $fb = $for->validation($_POST['fb']);
                $tw = $for->validation($_POST['tw']);
                $ln = $for->validation($_POST['ln']);
                $gp = $for->validation($_POST['gp']);

                $fb = mysqli_real_escape_string($db->link,$fb);
                $tw = mysqli_real_escape_string($db->link,$tw);
                $ln = mysqli_real_escape_string($db->link,$ln);
                $gp = mysqli_real_escape_string($db->link,$gp);

                if (empty($fb) || empty($tw) || empty($ln) || empty($gp)) {
                    echo "<span class='error'>Field must not be empty!</span>";
                }else{

                $query = "UPDATE tbl_sosial
                            SET
                            fb = '$fb',
                            tw = '$tw',
                            ln = '$ln',
                            gp = '$gp'
                            WHERE id = '1'";
                $Update = $db->Update($query);
                if ($Update) {
                    echo "<span class='success'>Data updated successfull!</span>";
                }else{
                    echo "Data not updated!";
                }

              }
            }
        ?>    

        <div class="block">
        
        <?php 
            $query ="SELECT  * FROM tbl_sosial WHERE id = 1";
            $logo = $db->select($query);
            if ($logo) {
                while ($result = $logo->fetch_assoc()) {
        ?>

         <form action="" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <label>Facebook</label>
                    </td>
                    <td>
                        <input type="text" name="fb" value="<?php echo $result['fb']; ?>"  class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Twitter</label>
                    </td>
                    <td>
                        <input type="text" name="tw" value="<?php echo $result['tw']; ?>"  class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <label>LinkedIn</label>
                    </td>
                    <td>
                        <input type="text" name="ln" value="<?php echo $result['ln']; ?>"  class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <label>Google Plus</label>
                    </td>
                    <td>
                        <input type="text" name="gp" value="<?php echo $result['gp']; ?>"  class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            <?php } } ?>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?> 

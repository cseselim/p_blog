<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<div class="grid_10">		
    <div class="box round first grid">
        <h2>Update Copyright Text</h2>
        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $copy = $for->validation($_POST['Copy']);

                $copy = mysqli_real_escape_string($db->link,$copy);

                if (empty($copy)) {
                    echo "<span class='error'>Field must not be empty!</span>";
                }else{

                $query = "UPDATE copyright
                            SET
                            Copy = '$copy'
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

        <div class="block copyblock"> 
         <form action="" method="post">
            <?php 
                $query ="SELECT  * FROM copyright WHERE id = 1";
                $logo = $db->select($query);
                if ($logo) {
                    while ($result = $logo->fetch_assoc()) {    
            ?>
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" value="<?php echo $result['copy']; ?>" name="Copy" class="large" />
                    </td>
                </tr>
				
				 <tr> 
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
<?php include 'inc/footer.php'; ?>   

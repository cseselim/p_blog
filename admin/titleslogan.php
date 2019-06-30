<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<style>
.leftsite{float: left;width: 70%}
.rightsite{float: right;width: 30%}
</style>

<div class="grid_10">		
    <div class="box round first grid">
        <h2>Update Site Title and Description</h2>

         <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                print_r($_POST);

            $title = $for->validation($_POST['title']);
            $slogan = $for->validation($_POST['slogan']);

            $title = mysqli_real_escape_string($db->link,$title);
            $slogan = mysqli_real_escape_string($db->link,$slogan);


            $permited  = array('png');
            $file_name = $_FILES['logo']['name'];
            $file_size = $_FILES['logo']['size'];
            $file_temp = $_FILES['logo']['tmp_name'];

            $div = explode('.',$file_name);
            $file_ext = strtolower(end($div));
            $same_name = 'logo'.'.'.$file_ext;
            $uploaded_image = "upload/".$same_name;

            if (empty($title) || empty($slogan)) {
                echo "<span class='error'>Field must not be empty!</span>";
            }else{



                if (!empty($file_name)) {
                   // echo "<span class ='error'>Images size should be less then 1MB!</span>";
                    
                    if (in_array($file_ext, $permited) == false) {
                        echo "<span class='error'>you can upload only:-".implode(',',$permited)."</span>";
                    }else
                    move_uploaded_file($file_temp,$uploaded_image);
                    $query = "UPDATE title_slogan
                            SET
                            title = '$title',
                            slogan= '$slogan',
                            logo  = '$uploaded_image'
                            WHERE id = '1'";
                    $catupdate = $db->update($query);
                    if ($catupdate) {
                        echo "<span class='success'>Logo update successfully</span>";
                    }else{
                        echo "<span class='error'>Catagory not update</span>";
                    }
                }else{

                $query="UPDATE title_slogan
                SET
                 title = '$title',
                 slogan= '$slogan'
                 WHERE id = '1'";
                $update_row = $db->update($query);
                if ($update_row) {
                    echo "<span class='success'>Catagory update successfully</span>";
                }else{
                    echo "<span class='error'>Catagory not update</span>";
                }
        }



            }
        }
        ?>
        
        <?php 
            $query ="SELECT  * FROM title_slogan WHERE id = 1";
            $logo = $db->select($query);
            if ($logo) {
                while ($result = $logo->fetch_assoc()) {
        ?>

        <div class="block sloginblock">
        <div class="leftsite">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">					
                <tr>
                    <td>
                        <label>Website Title</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['title']; ?>"  name="title" class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Website Slogan</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['slogan']; ?>" name="slogan" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Upload logo</label>
                    </td>
                    <td>
                        <input type="file" name="logo"/>
                    </td>
                </tr>
				
				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            </div>
            <div class="rightsite">
                <img src="<?php echo $result['logo'];?>" alt="logo">
            </div>
        </div>
        <?php } } ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?> 
<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>  
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock">
               <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $username = $for->validation($_POST['username']);
                    $password = $for->validation(md5($_POST['password']));
                    $role     = $for->validation($_POST['role']);

                    $username = mysqli_real_escape_string($db->link,$username);
                    $password = mysqli_real_escape_string($db->link,$password);
                    $role = mysqli_real_escape_string($db->link,$role);

                    if (empty($username) || empty($password) || empty($role)) {
                        echo "<span class='error'>Field must not be empty!</span>";
                    }else{
                        $query = "INSERT INTO tbl_user(username,password,role) VALUES ('$username','$password','$role')";
                        $catinsert = $db->insert($query);
                        if ($catinsert) {
                            echo "<span class='success'>Catagory insert successfully</span>";
                        }else{
                            echo "<span class='error'>Catagory not insert</span>";
                        }
                    }
                }
                ?> 
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td><label>Username:</label></td>
                            <td>
                                <input type="text" name="username" placeholder="Enter your username..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td><label>Password:</label></td>
                            <td>
                                <input type="text" name="password" placeholder="Enter your password..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td><label>User Role:</label></td>
                            <td>
                                <select id="select" name="role">
                                    <option>Select User</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Author</option>
                                    <option value="3">Editor</option>
                                </select>
                            </td>
                        </tr>
						<tr>
                            <td></td> 
                            <td>
                                <input type="submit" name="submit" Value="Create" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
 <?php include 'inc/footer.php'; ?>

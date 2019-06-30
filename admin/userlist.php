<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?> 

<?php 
    if (isset($_GET['deluser'])) {
        $deluser = $_GET['deluser'];
        $result = "DELETE FROM tbl_user WHERE id = '$deluser'";
        $delete = $db->delete($result);
    }
 ?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>User List</h2>
        <div class="block">
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>email</th>
                    <th>Details</th>
                    <th>Role</th>
                    <th>view</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM tbl_user";
                    $user = $db->select($query);
                    if ($user) {
                    while ($result = $user->fetch_assoc()) {    
               ?>
                <tr class="odd gradeX">
                    <td><?php echo $result['name']; ?></td>
                    <td><?php echo $result['username']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><?php echo $result['details']; ?></td>
                    <td>
                        <?php
                            if ($result['role'] == 1) {
                                echo 'admin';
                            }elseif ($result['role'] == 2) {
                                echo "author";
                            }elseif ($result['role'] == 3) {
                                echo "editor";
                            }
                        ?>
                    </td>
                    <td><a href="viewprofile.php?userid=<?php echo $result['id'];?>">view</a>
                    <?php if(session::get("userRole")==1) {?>
                        <a onclick ="return confirm('Are you sure to delete');" href="?deluser=<?php echo $result['id'];?>">delete</a></td>    
                    <?php } ?>
                    
                </tr>
                <?php } }else{ echo('Data is not abiebale');}?>
            </tbody>
        </table>
       </div>
    </div>
</div>
<script type="text/javascript">

$(document).ready(function () {
    setupLeftMenu();

    $('.datatable').dataTable();
    setSidebarHeight();


});
</script>
<?php include 'inc/footer.php'; ?> 


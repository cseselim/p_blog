<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?> 

<div class="grid_10">
    <div class="box round first grid">
        <h2>Category List</h2>
        <?php
        	if (isset($_GET['deleid'])) {
        		$id = $_GET['deleid'];
        		$query = "DELETE FROM tbl_catagory WHERE id='$id'";
        		$deleted = $db->delete($query);
        		if ($deleted) {
                    echo "<span class='success'>Catagory deleted successfully</span>";
                }else{
                    echo "<span class='error'>Catagory not deleted</span>";
                }
        	}
        ?>
        <div class="block">
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Category Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i=0;
					$query = "SELECT * FROM tbl_catagory";
					$result = $db->select($query);
					if ($result) {
					while ($catagory = $result->fetch_assoc()) {	
					$i++;
		       ?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $catagory['name']; ?></td>
					<td><a href="editcat.php?catid=<?php echo $catagory['id'];?>">Edit</a> || <a onclick="return confirm('Are you sure to Delete!');" href="catlist.php?deleid=<?php echo $catagory['id'];?>">Delete</a></td>
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


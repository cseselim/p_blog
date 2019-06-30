<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<?php

if(isset($_GET['delid'])) {
	$delid = $_GET['delid'];
	$query = "DELETE FROM tbl_post WHERE id = '$delid'";
	$deletemsg = $db->delete($query);
}
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Inbox</h2>

		<?php
		if(isset($_GET['seenid'])) {
			$id = $_GET['seenid'];
		$query = "UPDATE tbl_contact
                  SET
                  status = '1'
                  WHERE id = '$id'";

			    $updated_row = $db->update($query);
			    if ($updated_row) {
			        echo "<span class='success'>Message send to seenbox Successfully.</span>";
			    }else {
			        echo "<span class='error'>Message not Send!</span>";
			    }
			}    
		?>

        <div class="block">        
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Message</th>
					<th>Data</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$i=0;
	            $query = "SELECT * FROM tbl_contact WHERE status ='0' order by id desc";
	            $data = $db->select($query);
	            while ($result = $data->fetch_assoc()){
	            	$i++;
        	?> 
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['firstname'].'-----'.$result['lastname']; ?></td>
					<td><?php echo $result['email']; ?></td>
					<td><?php echo $for->textshortena($result['body'],30); ?></td>
					<td><?php echo $result['date']; ?></td>
					<td>
						<a href="msgview.php?msgid=<?php echo $result['id']; ?>">View</a> ||
						<a href="msgreplay.php?msgid=<?php echo $result['id']; ?>">Replay</a>||
						<a onclick="return confirm('Are you sure Message send to seenbox')"; href="?seenid=<?php echo $result['id'];?>">Seen</a>
					</td>
				</tr>
			<?php } ?>	
			</tbody>
		</table>
       </div>
    </div>

	<div class="box round first grid">
        <h2>Messages Seenbox</h2>
     <div class="block">        
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Message</th>
					<th>Data</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if(isset($_GET['delid'])) {
				$delid = $_GET['delid'];
				$query = "DELETE FROM tbl_contact WHERE id = '$delid'";
				$deletemsg = $db->delete($query);
				if ($deletemsg) {
					echo "<span class='success'>Message deleted successfull!</span>";
				}
			}
			?>
			<?php
				$i=0;
	            $query = "SELECT * FROM tbl_contact WHERE status ='1'";
	            $data = $db->select($query);
	            while ($result = $data->fetch_assoc()){
	            	$i++;
        	?> 
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['firstname'].'-----'.$result['lastname']; ?></td>
					<td><?php echo $result['email']; ?></td>
					<td><?php echo $for->textshortena($result['body'],30); ?></td>
					<td><?php echo $result['date']; ?></td>
					<td>
						<a onclick="return confirm('Are you sure Message send to seenbox')"; href="?delid=<?php echo $result['id'];?>">Delete</a>
					</td>
				</tr>
			<?php } ?>	
			</tbody>
		</table>
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
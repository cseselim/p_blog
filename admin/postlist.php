<?php include 'inc/header.php'; ?>
<?php include 'inc/sitbar.php'; ?>

<div class="grid_10">
<div class="box round first grid">
    <h2>Post List</h2>
    <div class="block">  
        <table class="data display datatable" id="example">
		<thead>
			<tr>
				<th width="5%">No.</th>
				<th width="15%">Post Title</th>
				<th width="25%">Description</th>
				<th width="15%">Cat</th>
				<th width="10%">Image</th>
				<th width="8%">Author</th>
				<th width="8%">tags</th>
				<th width="15%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = "SELECT tbl_post.*, tbl_catagory.name FROM tbl_post INNER JOIN tbl_catagory ON tbl_post.cat = tbl_catagory.id ORDER BY tbl_post.title DESC";
				$show = $db->select($query);
				$i=0;
				if ($show) {
					while ($result=$show->fetch_assoc()) {
						$i++;
			?>
			<tr class="odd gradeX">
				<td><?php echo $i; ?></td>
				<td><?php echo $result['title']; ?></td>
				<td><?php echo $for->textshortena($result['body']); ?></td>
				<td class="center"><?php echo $result['name']; ?></td>
				<td><img src="<?php echo $result['image']; ?>" width="60px" height="40px"/></td>
				<td><?php echo $result['author']; ?></td>
				<td><?php echo $result['tags']; ?></td>
				<td>
				<a href="viewpost.php?viewpost=<?php echo $result['id'];?>">View</a> ||
				<?php if(session::get('userId') == $result['userid'] || session::get('userRole') == '1') { ?>
				<a href="editpost.php?editpost=<?php echo $result['id'];?>">Edit</a> ||
				 <a onclick="return confirm('Are you sure to Delete!');" href="deletepost.php?del_post=<?php echo $result['id'];?>">Delete</a>
				 <?php } ?>
				</td>
			</tr>
			<?php } } ?>
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

</div>

	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
		<?php 
            $query ="SELECT  * FROM copyright WHERE id = 1";
            $logo = $db->select($query);
            if ($logo) {
                while ($result = $logo->fetch_assoc()) {
    	?>
	    	<p><?php echo $result['copy']; ?></p>
	    <?php } } ?>
	</div>
	<div class="fixedicon clear">
	<?php 
            $query ="SELECT  * FROM tbl_sosial WHERE id = 1";
            $logo = $db->select($query);
            if ($logo) {
                while ($result = $logo->fetch_assoc()) {
    ?>
		<a href="<?php echo $result['fb']; ?>" target="_blank"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="<?php echo $result['tw']; ?>" target="_blank"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="<?php echo $result['ln']; ?>" target="_blank"><img src="images/in.png" alt="LinkedIn"/></a>
		<a href="<?php echo $result['gp']; ?>" target="_blank"><img src="images/gl.png" alt="GooglePlus"/></a>
	<?php } } ?>
	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>
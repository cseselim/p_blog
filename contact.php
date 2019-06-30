<?php include 'inc/header.php'; ?>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		$firstname = $for->validation($_POST['firstname']);
		$lastname = $for->validation($_POST['lastname']);
		$email = $for->validation($_POST['email']);
		$body = $for->validation($_POST['body']);

        $firstname = mysqli_real_escape_string($db->link,$firstname);
        $lastname = mysqli_real_escape_string($db->link,$lastname);
        $email = mysqli_real_escape_string($db->link,$email);
        $body = mysqli_real_escape_string($db->link,$body);

        $error = "";
        if (empty($firstname)) {
        	$error = "First name field must not be empty!";
        }elseif (empty($lastname)) {
        	$error = "Last name field must not be empty!";
        }elseif (empty($email)) {
        	$error = "Email must not be empty!";
        }elseif (empty($body)) {
        	$error = "Body field must not be empty!";
        }else{
        	$query = "INSERT INTO tbl_contact (firstname,lastname,email,body) VALUES ('$firstname','$lastname','$email','$body')";
        	$insert = $db->insert($query);
        	if ($insert) {
        		echo "<span style='color:green'>Data inserted successfull!</span>";
        	}else{
        		echo "<span class='error'>Data not inserted!</span>";
        	}
        }

	}

?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>
				<?php if (isset($error)){ 
					echo "<span style='color:red'> $error</span>";
				}elseif (isset($insert)) {
					echo "<span style='color:green'> $success </span>";
				}
				 ?>
				
			<form action="" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name"/><br>
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name" /><br>
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="email" name="email" placeholder="Enter Email Address"/><br>
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="body">
						
					</textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Send"/>
					</td>
				</tr>
		</table>
	<form>				
 </div>
</div>
<?php include 'inc/sitbar.php'; ?>
<?php include 'inc/footer.php'; ?>
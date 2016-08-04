<html>
	<head>
		<title>Delete User</title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<?php 
			$db_link = mysql_connect('localhost','root','') or die("Could not connect to the host".mysql_error());

			$db = mysql_select_db('ServiceStation',$db_link) or die("Could not connect to the db".mysql_error());

			$id = $_POST['id'];

			$query = "select * from Owner where id='$id'";

			$result  = mysql_query($query) or die("Could not enter data".mysql_error());

			$row = mysql_fetch_assoc($result);
		?>
		<form name="addUser" action="DeleteUserController.php" method="post" >
			<h1>Delete User</h1>

			<label>ID :</label>	
			<input type="text" name="id" value="<?php echo $row['id']; ?>" readonly>
			<br><br>

			<label>Name :</label>
			<input type="text" name="name" value="<?php echo $row['name']; ?>" readonly>
			<br><br>

			<?php if($row['gender']=="male"){ ?>
				<label>Gender :</label>
				<input type="radio" name="gender" value="male" checked readonly> Male
  				<input type="radio" name="gender" value="female" readonly> Female
 				<input type="radio" name="gender" value="other" readonly> Other
				<br><br>
			<?php } ?>

			<?php if($row['gender']=="female"){ ?> 
				<label>Gender :</label>
				<input type="radio" name="gender" value="male" readonly> Male
  				<input type="radio" name="gender" value="female" checked readonly> Female
 				<input type="radio" name="gender" value="other" readonly> Other
				<br><br>
			<?php } ?>

			<?php if($row['gender']=="other"){ ?>
				<label>Gender :</label>
				<input type="radio" name="gender" value="male" readonly> Male
  				<input type="radio" name="gender" value="female" readonly> Female
 				<input type="radio" name="gender" value="other" checked readonly> Other
				<br><br>
			<?php } ?>
			
			<label>Address :</label>
			<input type="text" name="address" value="<?php echo $row['address']; ?>" readonly>
			<br><br>

			<label>Email :</label>
			<input type="text" name="email" value="<?php echo $row['email']; ?>" readonly>
			<br><br>

			<label>No Of Vehicles :</label>
			<input type="text" name="nosVehicle" value="<?php echo $row['nosVehicle']; ?>" readonly >
			<br><br>

			<label>Contact No :</label>
			<input type="text" name="contact" value="<?php echo $row['contact']; ?>" readonly>
			<br><br>

			<input type="submit" value="Delete User">
			<br><br>

		</form>
		<?php
		?>
	</body>
</html>
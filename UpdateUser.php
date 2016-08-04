<html>
	<head>
		<title>Update User</title>
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
		<form name="addUser" action="UpdateUserController.php" method="post" >
			<h1>Update User</h1>

			<label>ID :</label>	
			<input type="text" name="id" value="<?php echo $row['id']; ?>" readonly>
			<br><br>

			<label>Name :</label>
			<input type="text" name="name" value="<?php echo $row['name']; ?>">
			<br><br>

			<?php if($row['gender']=="male"){ ?>
				<label>Gender :</label>
				<input type="radio" name="gender" value="male" checked > Male
  				<input type="radio" name="gender" value="female"> Female
 				<input type="radio" name="gender" value="other"> Other
				<br><br>
			<?php } ?>

			<?php if($row['gender']=="female"){ ?> 
				<label>Gender :</label>
				<input type="radio" name="gender" value="male"> Male
  				<input type="radio" name="gender" value="female" checked> Female
 				<input type="radio" name="gender" value="other"> Other
				<br><br>
			<?php } ?>

			<?php if($row['gender']=="other"){ ?>
				<label>Gender :</label>
				<input type="radio" name="gender" value="male"> Male
  				<input type="radio" name="gender" value="female"> Female
 				<input type="radio" name="gender" value="other" checked> Other
				<br><br>
			<?php } ?>

			<label>Address :</label>
			<input type="text" name="address" value="<?php echo $row['address']; ?>">
			<br><br>

			<label>Email :</label>
			<input type="text" name="email" value="<?php echo $row['email']; ?>">
			<br><br>

			<label>No Of Vehicles :</label>
			<input type="text" name="nosVehicle" value="<?php echo $row['nosVehicle']; ?>" >
			<br><br>

			<label>Contact No :</label>
			<input type="text" name="contact" value="<?php echo $row['contact']; ?>">
			<br><br>

			<input type="submit" value="Update User">
			<br><br>

		</form>
		<?php
		?>
	</body>
</html>
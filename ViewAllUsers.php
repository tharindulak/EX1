<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<h1>View All Users</h1>

	<?php 
		$db_link = mysql_connect('localhost','root','') or die("Could not connect to the host".mysql_error());

		$db = mysql_select_db('ServiceStation',$db_link) or die("Could not connect to the db".mysql_error());

		$query = "select * from Owner";

		$result  = mysql_query($query) or die("Could not enter data".mysql_error());
	?>
	<table style="width:40%" border="1px">

		<tr>
			<th>User Id</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Email</th>
			<th>No of Vehicles</th>
			<th>Contact No</th>
		</tr>
	  	<?php while($row = mysql_fetch_assoc($result)){ ?>
	    <tr>
	        <td><?php echo $row['id']; ?></td>
	        <td><?php echo $row['name']; ?></td>
	        <td><?php echo $row['gender']; ?></td>
	        <td><?php echo $row['address']; ?></td>
	        <td><?php echo $row['email']; ?></td>
	        <td><?php echo $row['nosVehicle']; ?></td>
	        <td><?php echo $row['contact']; ?></td>
	    </tr>
    <?php } ?>
	</table>

	</body>
</html>


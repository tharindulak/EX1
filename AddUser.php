<?php 
	$db_link = mysql_connect('localhost','root','') or die("Could not connect to the host".mysql_error());

	$db = mysql_select_db('ServiceStation',$db_link) or die("Could not connect to the db".mysql_error());

	$id = $_POST["id"];
	$name = $_POST["name"];
	$gender = $_POST["gender"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$nosVehicle = (int )$_POST["nosVehicle"];
	$contact = $_POST["contact"];

	if($query = "Insert into Owner values('$id','$name', '$gender', '$address','$email',$nosVehicle,'$contact')"){
		echo "Added Successfuly";
	}
	else{
		echo "Failed to Add";
	}

	$result  = mysql_query($query) or die("Could not enter data".mysql_error());
?>
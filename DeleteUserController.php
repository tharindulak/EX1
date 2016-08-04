<?php 
	$db_link = mysql_connect('localhost','root','') or die("Could not connect to the host".mysql_error());

	$db = mysql_select_db('ServiceStation',$db_link) or die("Could not connect to the db".mysql_error());

	$id = $_POST["id"];
	
	$query = "Delete from Owner where id='$id'";

	if($result  = mysql_query($query) or die("Could not enter data".mysql_error())){
		echo("Deleted Successfuly");
	}
	else{
		echo("Failed to delete");
	}
?>
<?php 
	$username="root";
	$password="";
	$database="reservation";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];
	
	
	mysql_connect(localhost, $username, $password) or die("unable to connect");

	mysql_select_db($database) or die("unable to select a database");
	$query = "INSERT INTO contact(name, email, feedback) 
	VALUES('$name', '$email', '$feedback')";

	mysql_query($query) or die("unable to insert data");
	
	mysql_close();
	header("location: contact.html");


 ?>
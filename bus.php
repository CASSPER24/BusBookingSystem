<?php 
	$username="root";
	$password="";
	$database="reservation";

	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$phoneno = $_POST['phoneno'];
	$traveldate = $_POST['traveldate'];
	$destination = $_POST['destination'];
	

	mysql_connect(localhost, $username, $password) or die("unable to connect");

	mysql_select_db($database) or die("unable to select a database");
	$query = "INSERT INTO customer(customerid, fname, lname, address, phoneno, traveldate, destination) 
	VALUES(0, '$fname', '$lname', '$address','$phoneno', '$traveldate', '$destination')";

	mysql_query($query) or die("unable to insert data");
	
	mysql_close();
	header("location:book.html");


 ?>
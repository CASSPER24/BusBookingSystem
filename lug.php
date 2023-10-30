<?php 
	$username="root";
	$password="";
	$database="reservation";

	
	$contents = $_POST['contents'];
	$weight = $_POST['weight'];
	$destination = $_POST['destination'];
	$recipientphoneno = $_POST['recipientphoneno'];
	$senderphoneno = $_POST['senderphoneno'];
	$busnoplate= $_POST['busnoplate'];
	

	mysql_connect(localhost, $username, $password) or die("unable to connect");

	mysql_select_db($database) or die("unable to select a database");
	$query = "INSERT INTO luggage(luggageno, contents, weight, destination, recipientphoneno, senderphoneno, busnoplate) 
	VALUES(0, '$contents', '$weight', '$destination','$recipientphoneno', '$senderphoneno', '$busnoplate')";

	mysql_query($query) or die("unable to insert data");
	
	mysql_close();
	header("location:lugage.html");


 ?>
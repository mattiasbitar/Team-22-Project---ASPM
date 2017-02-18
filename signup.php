<?php
	session_start();

	
	include 'DBhandler.php';
	
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	

	$sql = "INSERT INTO UserTable(userName, password) VALUES ('$userName', '$password')";
	$result = $conn->query($sql);
	
	header("Location: index.php");
	
?>
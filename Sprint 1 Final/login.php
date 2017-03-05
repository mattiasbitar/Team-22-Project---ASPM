<?php
	session_start();

	include 'DBhandler.php';

	$userName = $_POST['userName'];
	$password = $_POST['password'];


	$sql = "SELECT * FROM UserTable WHERE userName= '$userName' AND password= '$password'";
	$result = $conn->query($sql);

	if (!$row = $result->fetch_assoc()) {
		echo "The username or password is wrong!";
	}
	else {
		$_SESSION['userName'] = $row['userName'];
	}
	if($userName== 'User01'){
		header("Location: index.php");

	}
	else {
		header("Location: Home.php");
	}
?>

<?php
	session_start();
	include 'DBhandler.php';
	$opass = $_POST['opass'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$userName=$_SESSION['userName'];

	$sql = "SELECT password FROM UserTable WHERE userName= '$userName'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$password = $row['password'];

	if($opass==$password){
		if($pass==$cpass){
			$sql = "UPDATE UserTable SET password = $pass WHERE userName ='$userName'";
			$result = $conn->query($sql);
			header("Location: changepassword.php?corr=change");
			exit();
		}
		else{
			header("Location: changepassword.php?error=cpass");
			exit();
		}
	}
	else{
		header("Location: changepassword.php?error=opass");
		exit();
	}

?>

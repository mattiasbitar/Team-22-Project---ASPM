<?php
	session_start();
	include 'DBhandler.php';

	$userName = $_POST['userName'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$e_Mail = $_POST['e_Mail'];
	$mob = $_POST['mob'];
	$name = $_POST['name'];


	//Error hanteraren så att all field blir fyllda
	if (empty($userName)){
		header("Location: index.php?error=empty");
		exit();
	}

	if (empty($password1)){
		header("Location: index.php?error=empty");
		exit();
	}

	if (empty($password2)){
		header("Location: index.php?error=empty");
		exit();
	}

	if (empty($e_Mail)){
		header("Location: index.php?error=empty");
		exit();
	}
	if (empty($mob)){
		header("Location: index.php?error=empty");
		exit();
	}
	if (empty($name)){
		header("Location: index.php?error=empty");
		exit();
	}

	else{
		//Controllerar om det finns samma userName i databasen
		$sql = "SELECT userName FROM UserTable WHERE userName = '$userName' ";
		$result = $conn->query($sql);
		$userNameChecker = mysqli_num_rows($result);
			if ($userNameChecker > 0){
			header("Location: res.php?error=username");
			exit();
		}
		else{

			if($password1 == $password2){
			$sql = "INSERT INTO UserTable(userName, password, e_Mail, mob, name) VALUES ('$userName', '$password1', '$e_Mail', '$mob', '$name')";
			$result = $conn->query($sql);
			}
			else{

				header("Location: res.php?error=password");
				exit();
			}
		}
		header("Location: index.php?sign=success");

	}

?>

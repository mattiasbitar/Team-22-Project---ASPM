<?php
	session_start();
	include 'DBhandler.php';

	$name = $_POST['Name'];
	$email = $_POST['EmailAddress'];
	$subject = $_POST['subject'];


			$sql = "INSERT INTO ContactUsTable(name, email, subject) VALUES ('$name', '$email', '$subject')";
			$result = $conn->query($sql);
			header("Location: contact.php?snd=contc");
			exit();
		//header("Location: index.php");


?>

<?php
	session_start();
	include 'DBhandler.php';

	$movieName = $_POST['moviz'];
	$event_ID = $_POST['eventz'];

	if (empty($event_ID)){
		$sql = "DELETE FROM MovieTable WHERE movieName='$movieName' ";
		$result = $conn->query($sql);
		header("Location: adminPage3.php?movie=delete");
		exit();
	}

	if (empty($movieName)){
		$sql = "DELETE FROM movieEvent WHERE event_ID='$event_ID' ";
		$result = $conn->query($sql);
		header("Location: adminPage3.php?event=delete");
		exit();
	}
	?>

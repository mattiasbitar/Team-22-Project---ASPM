<!--This is for the Moive-->
<?php
	session_start();
	include 'DBhandler.php';

	$movieName = $_POST['moviz'];
	$nrOfSeats = $_POST['nrOfSeats'];
	$movieDate = $_POST['eventDate'];

	//Error hanteraren så att all field blir fyllda
	if (empty($movieName)){
		header("Location: adminPage.php?error=empty");
		exit();
	}

	if (empty($nrOfSeats)){
		header("Location: adminPage.php?error=empty");
		exit();
	}

	if (empty($movieDate)){
		header("Location: adminPage.php?error=empty");
		exit();
	}

	else{
			$sql = "INSERT INTO movieEvent(movieName, nrOfSeats, movieDate) VALUES ('$movieName', '$nrOfSeats', '$movieDate')";
			$result = $conn->query($sql);
			echo "There was an sucess uploading the movie, go back home!";
	}

?>
<!--This is for the Moive picture-->
				<form action="logout.php">
					<button>BACK HOME/LOGUT</button>

				</form>
<?php

header("Location: adminPage2.php");
exit;

?>

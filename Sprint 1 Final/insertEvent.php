<!--This is for the Moive-->
<?php
	session_start();
	include 'DBhandler.php';

	$movieName = $_POST['moviz'];
	$nrOfSeats = $_POST['nrOfSeats'];
	$movieDate = $_POST['eventDate'];
	$eventPrice = $_POST['eventPrice'];

	//Error hanteraren så att all field blir fyllda
	if (empty($movieName)){
		header("Location: adminPage2.php?error=empty");
		exit();
	}

	if (empty($nrOfSeats)){
		header("Location: adminPage2.php?error=empty");
		exit();
	}

	if (empty($movieDate)){
		header("Location: adminPage2.php?error=empty");
		exit();
	}
	if (empty($eventPrice)){
		header("Location: adminPage2.php?error=empty");
		exit();
	}

	else{
			$sql = "INSERT INTO movieEvent(movieName, nrOfSeats, movieDate, eventPrice) VALUES ('$movieName', '$nrOfSeats', '$movieDate', '$eventPrice')";
			$result = $conn->query($sql);
			echo "There was an sucess uploading the movie, go back home!";
			header("Location: adminPage2.php");
			exit;
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

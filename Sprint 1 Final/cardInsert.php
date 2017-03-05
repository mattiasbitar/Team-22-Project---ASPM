<?php
	session_start();
	include 'DBhandler.php';

	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$nrOfSeatsBuy = $_POST['Noofseats'];
	$event_ID = $_POST['eventID'];
	$CardType = $_POST['typeC'];
	$exDay = $_POST['expirationDate'];
	$CVC = $_POST['cvv'];
	$cardFName = $_POST['firstname'];
	$cardLName = $_POST['lastname'];
	$userName = $_POST['userN'];
	$cardNumber = $_POST['cardNumber'];

 // echo "$FirstName";
 // echo "$LastName";
 // echo "$nrOfSeatsBuy";
 // echo "$event_ID";
 // echo "$CardType";
 // echo "$CVC";
 // echo "$cardFName";
 // echo "$cardLName";
 // echo "$userName";
 // echo "$cardNumber";
 // echo "$exDay";


			$sql = "INSERT INTO paymentTable(FirstName, LastName, nrOfSeatsBuy, event_ID, CardType, cardNumber, exDay, CVC, cardFName, cardLName, userName) VALUES ('$FirstName', '$LastName', '$nrOfSeatsBuy', '$event_ID', '$CardType', '$cardNumber', '$exDay', '$CVC', '$cardFName', '$cardLName', '$userName')";
			$result = $conn->query($sql);
			echo "Information Inserted To DB --> Redirect To Bank ? (End Of Sprint 1)";
		//header("Location: index.php");


?>

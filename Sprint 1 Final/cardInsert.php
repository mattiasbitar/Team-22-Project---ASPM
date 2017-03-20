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
?>
<html>
<head>
<title>E-Movie Ticket Form </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Profile Contact Form" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>E-Movie Ticket</h1>
		<div class="main-wthree-row">
                    		<h2>Your Ticket is successfully booked</h2>

			<div class="agileits-info">
				<div class="agileits-infoleft">

					<div class="agileits-infotext">

					</div>
				</div>
				<div class="agileits-inforight">

				</div>
				<div class="clear"> </div>
			</div>

			<div class="contact-wthree">
				<form action="profile.php" method="post">
					<div class="contact-w3left w3-agile">
                                            <br><input type="text" name="Name" placeholder=" <?php echo $FirstName;?> <?php echo $LastName;?>"></br>
                                            <br><input type="text" name="Number" placeholder="Event Number: <?php echo $event_ID;?>"></br>
                                            <br><input type="text" name="seats" placeholder="Number of seats: <?php echo $nrOfSeatsBuy;?>"></br>

					</div>



<?php

$sql = "SELECT pictureName FROM movieTable INNER JOIN movieEvent ON MovieTable.movieName=movieEvent.movieName WHERE event_ID='$event_ID';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<td width="48" colspan="2" rowspan="3"><img src="<?php echo $row['pictureName']?>"  width="184" height="195" style="align=center" ></td>

					<div class="clear"> </div>
					<br><br>
					<center><button type="submit" class="btn btn-primary b">To My Tickets</button></center>

				</form>
			</div>
		</div>
	</div>

</body>
</html>

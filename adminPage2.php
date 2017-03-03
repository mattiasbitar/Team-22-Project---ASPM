<?php
	session_start();
	include 'DBhandler.php';

?>
<form action="adminPage.php">
	<button>BACK HOME/LOGUT</button>

</form>
<?php
		$adminCheck=$_SESSION['userName'];

	if (isset($_SESSION['userName']) && $adminCheck=='User01') {
		echo "You have logged in as ";
		echo $_SESSION['userName'];
	}
	else{
		echo "You have to login as a Admin for this page (!Go to Login Page and sign is as User01, Password:1234)";
		exit();
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin Controll Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

		<form action="insertEvent.php" method="POST" enctype="multipart/form-data"> <!--Gömd pga password annars använd GET-->
			<select class="form-control" name="moviz" style="width: 15%; margin-left: 0px;">

			<?php

			$sql = "SELECT * FROM MovieTable";
			$result = $conn->query($sql);

				while ($row = $result->fetch_assoc()){
					?>

				<option name="eventz"><?php echo "<p>".$row['movieName']."<p>";?></option>

					<?php
					}
				?>
			<input type="hidden" name="eventName" value="eventz"><br>
			<input type="number" name="nrOfSeats" placeholder="Total number of seats"><br>
			<input type="date" name="eventDate" placeholder="Event date"><br>

				<button type="submit" name="submit">INSERT EVENT</button>
		</form>

		<?php
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if (strpos($url, 'error=empty') !== false){ //Checks for a string positon
				echo "All fileds not filled";
			}
			elseif (strpos($url, 'error=movieName') !== false){ //Checks for a string positon
				echo "This movie name already exist, write another!";
			}
		?>


		<br><br>

		<form action="logout.php">
			<button>LOG OUT</button>

		</form>

	</body>
</html>

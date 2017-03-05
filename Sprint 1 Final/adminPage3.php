<?php
	session_start();
	include 'DBhandler.php';

?>
<script language="javascript">
function closewin(){
window.close("adminPage2.php")
}
</script>

	<button onClick="closewin()">CLOSE WINDOW</button><br><br>

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
	<div align="center">
	<h3>Delete a Movie</h3>
	<body background="bgblue.jpg" onload="javascript:focusOnMoviename();" style="background-size:cover" >

		<form action="delete.php" method="POST" enctype="multipart/form-data"> <!--Gömd pga password annars använd GET-->
			<select class="form-control" name="moviz" style="width: 15%; margin-left: 0px;">
			<?php
			$sql = "SELECT * FROM MovieTable";
			$result = $conn->query($sql);
				while ($row = $result->fetch_assoc()){
					?>

				<option name="moviz"><?php echo "<p>".$row['movieName']."<p>";?></option>

					<?php } ?>
			<input type="hidden" name="eventName" value="moviz"><br>

				<button type="submit" name="submit">Delete Movie</button><br>

		</form>
<br><br>
<h3>Delete an Event</h3>
<body background="bgblue.jpg" onload="javascript:focusOnMoviename();" style="background-size:cover" >

	<form action="delete.php" method="POST" enctype="multipart/form-data"> <!--Gömd pga password annars använd GET-->
		<select class="form-control" name="eventz" style="width: 15%; margin-left: 0px;">
		<?php
		$sql = "SELECT * FROM movieEvent";
		$result = $conn->query($sql);
			while ($row = $result->fetch_assoc()){
				?>

			<option name="moviz"><?php echo "<p>".$row['event_ID']."<p>";?></option>

				<?php } ?>
		<input type="hidden" name="eventName" value="eventz"><br>

			<button type="submit" name="submit">Delete Event</button><br>

	</form>

		<br><br>

		<form action="logout.php">
			<button>LOG OUT</button>

		</form>
		<?php
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if (strpos($url, 'movie=delete') !== false){ //Checks for a string positon
				echo "Movie Deleted!";
			}
			elseif (strpos($url, 'event=delete') !== false){ //Checks for a string positon
				echo "Event Deleted!";
			}
		?>

</div>

	</div>
</right>
	</body>
</html>

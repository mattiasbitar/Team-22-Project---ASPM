<?php
	session_start();

?>
<script language="javascript">
function closewin(){
window.close("adminPage.php")
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

<h3>Add A Movie</h3>
<body background="bgblue.jpg" onload="javascript:focusOnMoviename();" style="background-size:cover" >
		<form action="insertMovie.php" method="POST" enctype="multipart/form-data"> <!--Gömd pga password annars använd GET-->
			<td><li>Name:</li></td>
			<input type="text" name="movieName" placeholder="Movie Name"><br><br>
			<td><li>Type/Genre:</li></td>
			<input type="text" name="movieType" placeholder="Movie Type"><br><br>
			<td><li>Date:</li></td>
			<input type="date" name="movieDate" placeholder="Movie Date"><br><br>
			<td><li>Intro:</li></td>
				<textarea name="movieIntro" cols="40" rows="4" placeholders="Insert Movie Text">
				</textarea><br><br>
				<td><li>Add A Picture:</li></td>
				<input type="file" name="file"><br><br>

				<button type="submit" name="submit">UPLOAD</button>
				<input type="reset"  style="cursor: pointer;" name=reset  value="RESET"></td>

		</form>

		<?php
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if (strpos($url, 'error=empty') !== false){ //Checks for a string positon
				echo "All fileds not filled or no file upload";
			}
			elseif (strpos($url, 'error=movieName') !== false){ //Checks for a string positon
				echo "This movie name already exist, write another!";
			}
		?>


		<br><br>

		<form action="logout.php">
			<button>LOG OUT</button>

		</form>


</div>

	</body>
</html>

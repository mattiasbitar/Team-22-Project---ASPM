<?php
	session_start();

?>
<form action="index.php">
	<button>BACK HOME</button>

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

		<form action="insertMovie.php" method="POST" enctype="multipart/form-data"> <!--Gömd pga password annars använd GET-->
			<input type="text" name="movieName" placeholder="Movie Name"><br>
			<input type="text" name="movieType" placeholder="Movie Type"><br>
			<input type="date" name="movieDate" placeholder="Movie Date"><br>
				<textarea name="movieIntro" cols="40" rows="4" placeholders="Insert Movie Text">
				</textarea><br><br>

				<input type="file" name="file"><br><br>

				<button type="submit" name="submit">UPLOAD</button>
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

	</body>
</html>

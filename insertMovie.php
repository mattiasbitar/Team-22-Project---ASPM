<!--This is for the Moive-->
<?php
	session_start();
	include 'DBhandler.php';

	$movieName = $_POST['movieName'];
	$movieType = $_POST['movieType'];
	$movieDate = $_POST['movieDate'];
	$movieIntro= $_POST['movieIntro'];

	//Error hanteraren så att all field blir fyllda
	if (empty($movieName)){
		header("Location: adminPage.php?error=empty");
		exit();
	}

	if (empty($movieType)){
		header("Location: adminPage.php?error=empty");
		exit();
	}

	if (empty($movieDate)){
		header("Location: adminPage.php?error=empty");
		exit();
	}

	if (empty($movieIntro)){
		header("Location: adminPage.php?error=empty");
		exit();
	}

	else{
		//Controllerar om det finns samma userName i databasen
		$sql = "SELECT movieName FROM MovieTable WHERE movieName = '$movieName' ";
		$result = $conn->query($sql);
		$userNameChecker = mysqli_num_rows($result);
			if ($userNameChecker > 0){
			header("Location: adminPage.php?error=movieName");
			exit();
		}
		else{

			$sql = "INSERT INTO MovieTable(movieName, movieType, movieDate, movieIntro) VALUES ('$movieName', '$movieType', '$movieDate', '$movieIntro')";
			$result = $conn->query($sql);
			echo "$sql";
		}

	}

?>
<!--This is for the Moive picture-->
<?php
//include 'DBhandler.php';
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) { //becuase of the array ====
			if ($fileSize < 1000000) { //pic a max size, so the picture is not to large and the site laggs
				  //here is where the nameing and uppload actually begin
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UPDATE MovieTable SET pictureName= '$fileDestination' WHERE movieName='$movieName' ";
				$result = $conn->query($sql);
				echo "There was an sucess uploading the movie, go back home!";
				?>
				<form action="logout.php">
					<button>BACK HOME/LOGUT</button>

				</form><?php
			}
			else {
				$sql = "DELETE FROM MovieTable WHERE movieName='$movieName' ";
				$result = $conn->query($sql);
				echo "Your file is too big!";
			}
		}
		else {
			$sql = "DELETE FROM MovieTable WHERE movieName='$movieName' ";
			$result = $conn->query($sql);
			echo "There was an error uploading your file!";
		}
	}
	else {
			$sql = "DELETE FROM MovieTable WHERE movieName='$movieName' ";
			$result = $conn->query($sql);
		echo "You have not uploaded a file or you cannot upload files of this type!";
	}
header("Location: adminPage.php");
exit;
}

header("Location: adminPage.php");
exit;

?>

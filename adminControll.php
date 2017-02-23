<?php

	//If upload is pressed	
	if (isset($_POST['upload'])){
		//The path to store the uploaded image
		$target = "images/".basename($_FILES['image']['name']);
		
		//Submitted data from the form in web
		$image = $_FILES['image']['name'];
		$text = $_POST['text'];
		$movieName = $_POST['movieName'];
		$movieType = $_POST['movieType'];
		$releaseDate = $_POST['releaseDate'];
	$conn = mysqli_connect("localhost", "root", "root", "Movie_Ticket");
		$sql = "INSERT INTO MovieTable (movieName, movieType, movieIntro, image) VALUES ('$movieName', '$movieType', $text','$image')";
		mysqli_query($conn, $sql); //stores the submitted data into the database table
		
		//Moving the uploaded image into the folder: image
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg = "Upload successful";
		}
		else{
			$msg = "Upload not successful";
		}
		
		
	}
	
?>


<!DOCTYPE html>
<html>
	<head>
	 <tilte>Movie Uploads</tilte>
	</head>
	
	<body>
		<div id ="content">
			<form method="post" action="adminControll.php" enctype="multipart/form-data">
				<input type="hidden" name="size" value="1000000"
				<div>
					<input type="file" name="image">
				</div>
				<div>
					<textarea name="text" cols="40" rows="4" placeholders="Insert Movie Text">
					</textarea><br>
					<input type="text" name="movieName" placeholder="Movie Name"><br>
					<input type="text" name="movieType" placeholder="Type of Movie"><br>								<input type="text" name="releaseDate" placeholder="Release Date">
				</div>
				<div>
					<input type="submit" name"upload" value"Upload Movie"
				</div>
			</form>
	</body>
</html>
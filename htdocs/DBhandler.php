<?php
	
	$conn = mysqli_connect("localhost", "root", "root", "Movie_Ticket");
	
	if(!$conn){
		die("Connection Failed: ".msqli_connect_error());
	}
	
?>

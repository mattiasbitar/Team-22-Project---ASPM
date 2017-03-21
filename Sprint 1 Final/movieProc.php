<?php
	session_start();
	include 'DBhandler.php';

	$movieName = $_POST['moviz'];

  //echo"$movieName";
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet"
	  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<title><?php echo "$movieName"?></title>
	<style>
	.bggrade{
		  display: inline-block;
	       width: 93px;
	       height: 16px;
	                background: url(../bggrade.png);
	            }
	.star{
			  display: inline-block;
			  left: 0;
			  top: 0;
			  background: url(stargrade.png);
			  width: 0;
			  height: 16px;
	            }
	</style>
	<style>
	.container{

		color:white;
		border:#FF9;

		background-size:cover;
	}
	.btn1 {
		font-family: Arial, Helvetica, sans-serif;
		background: #FFC;
		height: auto;
		width: auto;
		font-size: 16px;
		color:#000;
	}
	</style>
	<script>
		function show_confirm(){
			var r=confirm("Comfirm again");
		if (r==true)
	 	 {
	  	alert("Booking successful");

	  	}
		else
	 	 {
	  	alert("Your booking is Cancel!");
	  	}
			}
	</script>
	</head>
	<?php

	$sql = "SELECT * FROM MovieTable WHERE movieName ='$movieName'";
	$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()){

		//echo "<p>".$row['movieType']."<p>";
		//echo "<p>".$row['movieIntro']."<p>";


?>

	<body style="background:url(eventbg.jpg);  background-size:auto; background-size:cover; color:#FFF" >
	<center><article><h3><?php echo"$movieName";?></h3></article></center>
	

	<div class="" style="background:scroll; height:300px; width:500px; font-size:16px;margin:0 auto" >
	    <table width="100%" height="352" bordercolorlight="#FFFFCC" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-top:auto",  >
	      <tr>
	        <td width="48" colspan="2" rowspan="3"><img src="<?php echo $row['pictureName']?>"  width="84" height="125" style="align=center" ></td>


	      <td align="center">publish date:</td>
	      	<td align="center"><?php echo "<p>".$row['movieDate']."<p>";?></td>

	      </tr>
	      <tr>
	      <td align="center">Movie type:</td>
	      <td align="center"><?php echo "<p>".$row['movieType']." <p>";?></td>
	      </tr>
	      <tr>
	      <td align="center">grade:</td>
	      <td><span class="bggrade">
	            <span class="star" id="star1"></span>
	        </span>

	        <script>
	            var star1 = document.getElementById("star1");
	            star1.style.width = "90%"
	        </script></td>
	      </tr>
	      <tr>
	        <td colspan="4"><p><?php echo "<p>".$row['movieIntro']." <p>";?></p></td>
	      </tr>

				<?php } ?>



	    </table>
	  </div>
	  <div class="" style="background:scroll; border: solid; height:auto; width:500px; font-size:16px;margin:0 auto;margin-top:40px">
			<h4>Dates and Seats left for this movie</h4>
			<h5>Each date have limited amount of seats, book your movie event today!</h5>
			<?php

			$sql = "SELECT * FROM movieEvent WHERE movieName ='$movieName'";
			$result = $conn->query($sql);

			while ($row = $result->fetch_assoc()){

				?>
		<table width="100%" height="176" bordercolorlight="#FFFFCC" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-top:auto;" frame="box" >


	  <tr>
	  <td>


	    <div align="justify">Date: </div></td>
	  <td>
	    <div align="justify"><?php echo "<p>".$row['movieDate']." <p>";?></div></td>
	  </tr>
	  <tr>
	  <td>
	    <div align="justify">Seats Left: </div></td>
	  <td>
	    <div align="justify"><?php echo "<p>".$row['nrOfSeats']." <p>";?></div></td>
	  </tr>
		<td>
	    <div align="justify">Price (SEK): </div></td>
	  <td>
	    <div align="justify"><?php echo "<p>".$row['eventPrice']." <p>";?></div></td>
	  </tr>
	  <tr>
			<td colspan="2" align="center">
				<form action="paymentportal.php" method="POST">
					<input type="hidden" name="event_ID" value="<?php echo $row['event_ID'];?>">
					<button type ="submit" style="color:black">BUY TICKETS!</button>
				</form>
			</td>

	  </tr></table>
		<?php } ?>

</div>
 <form action ="movieDetailPage.php">
	<center><button type="submit" name="submit" class="btn btn-primary b" style="margin-top:20px;">BACK</button></center>
	</form>
	</body>
	</html>

<?php
	session_start();
	include 'DBhandler.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script language="javascript">
  function openwin(){
    window.open("add2.html","height=100px, width=200px,  scrollbars=yes")}
    </script>
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
  </head>

  <body background="bgblue.jpg" style="background-size:auto; background-size:cover ">

    <div class="container" >


        <button class="btn1" style="align: center; text-align: center; margin:auto" onClick="openwin()"><b>AddCinema</b></button>
        <button class="btn1" style="align: center; text-align: center;"><b>delete</b></button>
      </div>
    </div>

      <div class="row">


				<?php

				$sql = "SELECT * FROM cinemaTable";
				$result = $conn->query($sql);

				while ($row = $result->fetch_assoc()){
					?>
						<div class="col-md-4" style="background:scroll ; ">
							<table style="font-family:Georgia, 'Times New Roman', Times, serif" width="100%", bordercolorlight="#FFFFCC" >
								<tr>

									<td colspan="3" ><h3 align="left"> <?php echo "<p>".$row['cinemaName']." Cinema Informaiton<p>";?></h3></td>
								</tr>
								<tr>
									<td colspan="5"><p><?php echo "<p>Adress: ".$row['address']."<p>";?></p></td>
									<td colspan="5"><p><?php echo "<p>Phone NR: ".$row['phoneNr']."<p>";?></p></td>

								</tr>
							</table>
						</div>

					<?php
					}

					//$cinema_id='1';
					//$cinemaName = "SELECT cinemaName FROM cinemaTable WHERE cinema_id = '$cinema_id' ";
					//$address = "SELECT address FROM cinemaTable WHERE cinema_id = '$cinema_id' ";
					//$phoneNr = "SELECT phoneNr FROM cinemaTable WHERE cinema_id = '$cinema_id' ";
					?>

		<?php //THIS IS THE CODE I NEED, EVERYTHING ELSE IS NOT IMPORTANT

		$sql = "SELECT * FROM cinemaTable";
		$result = $conn->query($sql);

		while ($row = $result->fetch_assoc()){
			echo "<p>".$row['cinemaName']." Cinema Informaiton<p>";
			echo "<p>Adress: ".$row['address']."<p>";
			echo "<p>Phone NR: ".$row['phoneNr']."<p>";

		}
?>
<?php
		//$cinema_id='1';
		//$cinemaName = "SELECT cinemaName FROM cinemaTable WHERE cinema_id = '$cinema_id' ";
		//$address = "SELECT address FROM cinemaTable WHERE cinema_id = '$cinema_id' ";
		//$phoneNr = "SELECT phoneNr FROM cinemaTable WHERE cinema_id = '$cinema_id' ";
		?>

	</div></div>
	<div class="col-md-4" style="margin:500 auto;width:300px;">
	</div>
</body>
</html>

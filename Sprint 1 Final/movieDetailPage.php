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

      <div class="jumbotron" style="background:url(bg3.png);background-size:cover; color:#FFF;width:100%;">
				<form action ="Home.php">
				<button type="submit" name="submit" class="btn btn-primary b">HOME</button>
				</form>
				<h1>Movies Information</h1>
        <p>These are movies we have, pick one from the list below</p>
        <!--<button class="btn1" style="align: center; text-align: center; margin:auto" onClick="openwin()"><b>AddMovie</b></button>
        <button class="btn1" style="align: center; text-align: center;"><b>delete</b></button>-->
				<center>
				<form action="movieProc.php" method="POST" enctype="multipart/form-data" style="width:40%;min-width:400px;"> <!--Gömd pga password annars använd GET-->

				<select class="form-control" name="moviz" style="width: 55%; margin-left: 16px;margin-top:20px;float:left">
									<?php

									$sql = "SELECT * FROM MovieTable";
									$result = $conn->query($sql);

										while ($row = $result->fetch_assoc()){
											?>

										<option name="optz"><?php echo "<p>".$row['movieName']."<p>";?></option>

											<?php
											}
										?>
										<input type="hidden" name="movieName" value="optz">

										

									</select> <br>
									<button type="submit" name="submit"  class="btn btn-primary b" style="float:left;margin-left:10%;">Proceed</button>
					</form>
				</center>
					</div>



      </div>
    </div>

    <div class="container" style="background:url(bg3.png);background-position:bottom;">
      <div class="row">


				<?php

				$sql = "SELECT * FROM MovieTable";
				$result = $conn->query($sql);

				while ($row = $result->fetch_assoc()){
					?>
						<div class="col-md-4" style="background:scroll ; width:25%;margin-left:5%;">
							<table style="font-family:Georgia, 'Times New Roman', Times, serif" width="100%", bordercolorlight="#FFFFCC" >
<td colspan="3" ><h3 align="left"><?php echo "<p>".$row['movieName']."<p>";?></h3></td>
								<tr>
									<td width="48" colspan="1"><img src="<?php echo $row['pictureName']?>" width="250" height="250" ></td>
									<!--<td colspan="3" ><h3 align="left"><?php //echo "<p>".$row['movieName']."<p>";?></h3></td>-->
								</tr>
								<tr style="width:50%;">
									<td colspan="5"><p style="">
											<?php
											echo "<p>Type/Genre: ".$row['movieType']."<p>";
											echo "<p>Release Date	: ".$row['movieDate']."<p>";
											echo "<p>Info: ".$row['movieIntro']."<p>";
											echo "<p>Rating: ".$row['Rating']."<p>";
											;?></p></td>

										<br><br><br>
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



	</div></div>
	<div class="col-md-4" style="margin:500 auto;width:300px;">
	</div>
</body>
</html>

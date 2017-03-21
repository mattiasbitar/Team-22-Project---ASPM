<?php
	session_start();
	include 'DBhandler.php';

  echo $_SESSION['userName'];
  $userName = $_SESSION['userName'];
  $sql = "SELECT * FROM UserTable WHERE userName = '$userName'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();


?>


<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <meta http-equiv="refresh" content="30">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            body {background-color: tan;}
            h1   {color: #0099CC;
                  font-family: Lucida Calligraphy;
                  font-size: 40px;
                  text-align: center;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: lightgray;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: #003366;
                text-align: left;
                font-size: 20px;
                padding: 30px 20px;
                text-decoration: none;
            }

            li a:hover {
                background-color: skyblue;
            }


            input[type=text], select {
                width: 40%;
                padding: 12px 5px;
                margin: 8px 1px;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }






        </style>
        <link rel="stylesheet" href="/lib/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet1"href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
				
	  </head>
    <body>

        <div style="width: auto; height: auto; margin-top: -15px;">
            <img src="images/poster.jpg"  width= "100%" height= 150PX;>
            <div style="margin-top: -3px;">
                <ul>
                  <li><a href="Home.php">Home</a></li>
                  <li><a href="movieDetailPage.php">Search Movies</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="profile.php">My Profile</a></li>
                  <li><a href="changepassword.php">Change Password</a></li>
                  <li style="float:right;margin-right:20px"><a href="logout.php">Logout Out</a></li>
                </ul>
            </div>
            <h1 class="">My Profile - <?php echo $userName;?></h1>
						<center>
						<div >
						<div class="col-md-4" style="background:scroll; height:auto; width:500px; font-size:16px;" >
						    <table width="100%" height="352" bordercolorlight="#FFFFCC" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-top:auto",  >


            <div>

                <form action="/action_page.php">

                    <label for="Yname"><br>Your Name</br></label>
                    <input type="text" id="Yname" name="Yourname" placeholder="<?php echo $row['userName'];?>">

                    <label for="Email id"><br>Email address</br></label>
                    <input type="text" id="Email" name="Email" placeholder="<?php echo $row['e_Mail'];?>">

                    <label for="mnumber"><br>Mobile Number</br></label>
                    <input type="text" id="mnumber" name="mobile" placeholder="<?php echo $row['mob'];?>">

                </form>
            </div>

				</table>
				</div>

					<td>
					<div class="col-md-4" style="background:scroll; height:auto; width:500px; font-size:16px">
						<h2 class="">Tickets booked with this account</h2>


<?php
$sql2 = "SELECT * FROM paymentTable WHERE userName = '$userName'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();



while ($row2 = $result2->fetch_assoc()){


?>
<table width="100%" height="176" border="1" bordercolorlight="#FFFFCC" style="font-family:Arial, 'Arial Black', Gadget, sans-serif; margin-top:auto;" frame="box" >

						<h4 class="">Ticket ID: <?php echo $row2['paymeny_ID'];?></h4>
						<tr>
						<td>
							<div align="justify">Event ID: </div></td>
						<td>
							<div align="justify"><?php echo "<p>".$row2['event_ID']." <p>";?></div></td>
						</tr>
						<tr>
						<td>
							<?php
							$event_ID=$row2['event_ID'];
							$sql3 = "SELECT * FROM movieEvent WHERE event_ID = '$event_ID'";
							$result3 = $conn->query($sql3);
							$row3 = $result3->fetch_assoc();

							?>
							<div align="justify">Movie Name: </div></td>
						<td>
							<div align="justify"><?php echo $row3['movieName'];?></div></td>
						</tr>
						<tr>
						<td>
							<div align="justify">Booked in the name of: </div></td>
						<td>
							<div align="justify"><?php echo $row2['FirstName'];?> <?php echo $row2['LastName'];?>  </div></td>
						</tr>
					  <tr>
					  <td>
					    <div align="justify">Date: </div></td>
					  <td>
					    <div align="justify"><?php echo $row3['movieDate'];?></div></td>
					  </tr>

					  <tr>
					  <td>
					    <div align="justify">Nr of seats Booked: </div></td>
					  <td>
					    <div align="justify"><?php echo "<p>".$row2['nrOfSeatsBuy']." <p>";?> </div></td>
					  </tr>
					  <tr>
					  <td colspan="2" align="center"><form action="contact.php" ><button type ="submit"  style="color:black;width:150px;height:30px;font-size:12px;margin-top:10px;">Contact us to Cancel</button></form></td>
					  </tr></table>
<?php } ?>


					  </div></div>
					</td>
				</center>
    </body>
</html>

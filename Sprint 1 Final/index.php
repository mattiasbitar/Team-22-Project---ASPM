<?php
	session_start();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>

		<title> index.html</title>
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
		<meta http-equiv="description" content="This is my page">

		<link rel="stylesheet" type="text/css" href="css/a.css">



	</head>
	<body>
		<center>
			<div style="width: 1000px; height: auto; margin-top: -15px;">




  <img src="images/poster.jpg"  width="1000px" height="150px">



				<div style="margin-top: -3px;">





  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>



  <body>


 		 <ul id="nav">
 		 			<li class="top">
 					 <a href="index.php" class="top_link"><span>Home</span> </a>
					</li>
					<li class="top">
 					 <a href="AboutUs.jsp" class="top_link"><span>About Us</span> </a>
					</li>
					<li class="top">
 					 <a href="ContactUs.jsp" class="top_link"><span>Contact Us</span> </a>
					</li>
					<li class="top">
 					 <a href="adminControllPage.php" class="top_link"><span>Admin Page</span> </a>
					</li>
					<li class="top">
 					 <a href="locationPage.php" class="top_link"><span>Location Page</span> </a>
					</li>
					<li class="top">
 					 <a href="res.php" class="top_link"><span>Sign UP</span> </a>
					</li>
					<li class="top">
						<a href="loginPage.php" class="top_link"><span>Login</span>
						 </a>
					</li>
					<?php
						if (isset($_SESSION['userName'])) {
							echo "You have logged in as ";
							echo $_SESSION['userName'];
						}else{
							echo "You have to login";
						}

					?>
		</ul>


</div>

				<div style="margin-top: 0px;">

					<img src="images/posterfobody.jpg"
						style="width: 1000px; height: 400px;">
				</div>
				<div style="margin-top: -3px;">






	<body>
		<center>

			<!--<img src="images/footer.png" style="width: 1000px;">

		-->

		<div style="height: 30px; width: auto;background-color: darkgreen">
<br></br>

		</div>
		</center>

	</body>
</html>

				</div>
			</div>
		</center>
	</body>
</html>

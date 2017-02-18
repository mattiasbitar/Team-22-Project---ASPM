<?php
	session_start();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>LoginPage</title>
		<link rel="stylesheet" type="text/css" href="style.css"
	</head>
	<body>
		<form action="login.php" method="POST">
			<input type="text" name="userName" placeholder="User Name"><br>
			<input type="password" name="password" placeholder="Password">
			<button type"submit">LOGIN</button>
		</form>
		
		<?php
			if (isset($_SESSION['userName'])) {
				echo "You have logged in as ";
				echo $_SESSION['userName'];
			}else{
				echo "You have to login";
			}
		
		?>
		
		<br><br>
		
		<form action="signup.php" method="POST"> <!--Gömd pga password annars använd GET-->
			<input type="text" name="userName" placeholder="User Name"><br>
			<input type="password" name="password1" placeholder="Password"><br>
			<input type="password" name="password2" placeholder="Confirm Password"><br>
			<input type="email" name="e_Mail" placeholder="E-Mail">
			<button type"submit">SIGN UP</button>
		</form>
		
		<?php
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if (strpos($url, 'error=empty') !== false){ //Checks for a string positon
				echo "All fileds not filled";	
			}
			elseif (strpos($url, 'error=username') !== false){ //Checks for a string positon
				echo "Username already taken, write another!";	
			}
		?>
		
		
		<br><br>
		
		<form action="logout.php">
			<button>LOG OUT</button>
			
		</form>
		
	</body>
</html>

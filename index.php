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
				echo $_SESSION['userName'];
			}else{
				echo "You have to loggin";
			}
		
		?>
		
		<br><br>
		
		<form action="signup.php" method="POST"> <!--Gömd pga password annars använd GET-->
			<input type="text" name="userName" placeholder="User Name"><br>
			<input type="password" name="password" placeholder="Password">
			<button type"submit">SIGN UP</button>
		</form>
		
		<br><br>
		
		<form action="logout.php">
			<button>LOG OUT</button>
			
		</form>
		
	</body>
</html>

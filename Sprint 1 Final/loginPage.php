<?php
	session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <base href="<%=basePath%>">

    <title>Login.jsp starting page</title>

	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">

	<link href="css/a.css" rel="stylesheet" type="text/css" media="all"/>

  </head>
  <body>
  <center>
<div style="width: 1000px; height: auto; margin-top: 250px;">
			<jsp:include page="Header.jsp"></jsp:include>
			<div style="margin-top: -3px;"><jsp:include page="Menu.jsp"></jsp:include></div>
			<div class="signup" style="margin-top: -1px; width: 100%;">
			<center>
		<form action="login.php" method="POST">
			<table border="0"  style="" width="305px"  >
				<tr>
				<td colspan="2" style="">
				<label style="color: red; font-style:italic; text-align: center; "></label>

				</td>
				</tr>

					<tr>
							<td>Login ID : <span class="dot">*</span></td>
							<td><input type="text" name="userName" id="uid" class="input_text"  value="" >
							 <label id="msguid"  style="color: red;font-size: 16px;font-style: italic;"></label>

							</td>
					</tr>
					<tr>
				<td> &nbsp; </td>
				<td> &nbsp; </td>
				</tr>
					<tr>
							<td>Password : <span class="dot">*</span></td>
							<td><input type="password" name="password" id="pass" class="input_password" value="">
							 <label id="msgpass"  style="color: red;font-size: 16px;font-style: italic;"></label>
						</td>
					</tr>
					<tr>
				<td> &nbsp; </td>
				<td> &nbsp; </td>
				</tr>
					<tr>
							<td> &nbsp; </td>
							<td><input type="submit" class="submit" value="LOGIN"></td>
					</tr>
			</table>
		</form>
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
		<form action="logout.php">
			<button>LOG OUT</button>

		</form>
	</center>
	</div>
	<div style="margin-top: -3px;">
		<jsp:include page="Footer.jsp"></jsp:include>
	</div>
</div>
</center>
</body>
</html>

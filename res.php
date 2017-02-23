

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>


		<title> Registration.html</title>

		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
		<meta http-equiv="description" content="This is my page">


		<link href="css/a.css" rel="stylesheet" type="text/css" media="all" />



	</head>

	<body>


               <h1 style="color:tan;"> <center> Easy Tickets Registration</center> </h1>
		<center>
			<div style="width: 1000px; height: auto; margin-top: 50px;">
				<jsp:include page="Header.jsp"></jsp:include>
				<div style="margin-top: -3px;"><jsp:include page="Menu.jsp"></jsp:include></div>

				<div class="signup" style="margin-top: -1px; width: 100%;">
					<center>

						<form action="signup.php" method="POST">

							<input type="hidden" name="utype" id="utype" value="USER" />
							<table>
								<tr>
									<td colspan="2" style="">
										<label
											style="color: red; font-style: italic; text-align: center;">

										</label>
									</td>
								</tr>
								<tr>
									<td>
										<p>
											Login ID :
										</p>
									</td>
									<td>
										<input type="text" name="userName" id="uid" class="input_text"
											value="" required="">
										<label id="msguid"
											style="color: red; font-size: 16px; font-style: italic;"></label>
									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td>
										&nbsp;
									</td>
								</tr>
								<tr>
									<td>
										<p>
											Password :
										</p>
									</td>
									<td>
										<input type="password" name="password1" id="pass"
											class="input_password" value="" required="">
										<label id="msgpass"
											style="color: red; font-size: 16px; font-style: italic;"></label>
									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td>
										&nbsp;
									</td>
								</tr>
								<tr>
									<td>
										<p>
											Confirm Password :
										</p>
									</td>
									<td>
										<input type="password" name="password2" id="cpass"
											class="input_password" value="" required="">
										<label id="msgcpass"
											style="color: red; font-size: 16px; font-style: italic;"></label>

									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td>
										&nbsp;
									</td>
								</tr>
								<tr>
									<td>
										<p>
											User Name :
										</p>
									</td>
									<td>
										<input type="text" name="uname" id="uname" class="input_text"
											value="" required="">
										<label id="msguname"
											style="color: red; font-size: 16px; font-style: italic;"></label>
									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td>
										&nbsp;
									</td>
								</tr>
								<tr>
									<td>
										<p>
											Email :
										</p>
									</td>
									<td>
										<input type="email" name="e_Mail" id="email" class="input_text"
											value="" required="">
										<label id="msgemail"
											style="color: red; font-size: 16px; font-style: italic;"></label>

									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td>
										&nbsp;
									</td>
								</tr>
								<tr>
									<td>
										<p>
											Mobile No :
										</p>
									</td>
									<td>
										<input type="text" name="mob" id="mob" class="input_text"
											value="" required="">
										<label id="msgmob"
											style="color: red; font-size: 16px; font-style: italic;"></label>

									</td>
								</tr>


								<tr>
									<td>
										&nbsp;
									</td>
									<td>
										&nbsp;
									</td>
								</tr>

								<tr>
									<td></td>
									<td>
										<input type="submit" class="submit" value="Register">
									</td>
								</tr>
							</table>
						</form>
						<?php
							$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
							if (strpos($url, 'error=empty') !== false){ //Checks for a string positon
								echo "All fileds not filled";
							}
							elseif (strpos($url, 'error=username') !== false){ //Checks for a string positon
								echo "Username already taken, write another!";
							}
							elseif (strpos($url, 'error=password') !== false){ //Checks for a string positon
									echo "Passwords is not the same";
							}
						?>
					</center>
				</div>
				<div style="margin-top: -3px;">
					<jsp:include page="Footer.jsp"></jsp:include>
				</div>
			</div>
		</center>
	</body>
</html>

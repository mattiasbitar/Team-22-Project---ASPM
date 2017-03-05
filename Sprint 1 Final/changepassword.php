<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
			<title>ChangePassword</title>

		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
		<meta http-equiv="description" content="This is my page">
		<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>


	</head>

	<body>
            <center>

		<div style="width: 1000px; height: auto; margin-top: -15px;">

                 <img src="images/poster.jpg"  width="1000px" height="150px">

				<div style="margin-top: -3px;">

		<ul id="nav">
 		 			<li class="top">
 					 <a href="Home.php" class="top_link"><span>Home</span> </a>

					</li>
		</ul>



                 </div>


			<div class="signup" style="margin-top: -1px; width: 100%;">
				<center>


        	<form action="changepass.php" method="POST" enctype="multipart/form-data">
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
									Old Password :
									<span class="dot">*</span>
								</p>
							</td>
							<td>
								<input type="password" name="opass" id="opass"
									class="input_password" value="">
								<label id="msgoldpass"
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
									New Password :
									<span class="dot">*</span>
								</p>
							</td>


							<td>
								<input type="password" name="pass" id="pass"
									class="input_password" value="">
								<label id="msgnewpass"
									style="color: red; font-size: 16px; font-style: italic;">
								</label>
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
									<span class="dot">*</span>
								</p>
							</td>
							<td>
								<input type="password" name="cpass" id="cpass"
									class="input_password" value="">
								<label id="msgchangedpass"
									style="color: red; font-size: 16px; font-style: italic;"></label>
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;
							</td>
							<td>
								<label id="alertmsg"
									style="color: red; font-size: 16px; font-style: italic;"></label>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" class="submit" value="Change Password">
							</td>
						</tr>
					</table>
				</form>
				</center>

				<center>
				<?php
				$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if (strpos($url, 'corr=change') !== false){
					echo "Password has been changed!";
				}
				elseif (strpos($url, 'error=cpass') !== false){
					echo "New passwords is not the same!";
				}
				elseif (strpos($url, 'error=opass') !== false){
					echo "Old password is not correct!";
				}
				?>
			</center>
			</div>
			<div style="margin-top: -3px;">




		<center>



		<div style="height: 30px; width: auto;background-color: darkgreen">
<br></br>

		</div>
		</center>




			</div>
		</div>
		</center>
	</body>
</html>

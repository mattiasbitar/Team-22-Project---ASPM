<?php
	session_start();
	include 'DBhandler.php';

?>

<?php
		$adminCheck=$_SESSION['userName'];

	if (isset($_SESSION['userName']) && $adminCheck=='User01') {
		
	}
	else{
		echo "You have to login as a Admin for this page (!Go to Login Page and sign is as User01, Password:1234)";
		?><form action ="index.php">
			<button type = "submit">BACK HOME</button><br><br>
		</form>
		<body background="images/login1.jpg" style="background-size:cover; background-size:cover ">
<?php
		exit();
	}

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
  function openwin1(){
    window.open("adminPage.php","height=100px, width=200px,  scrollbars=yes")
	}
	function openwin2(){
    window.open("adminPage2.php","height=100px, width=200px,  scrollbars=yes")
	}
	function openwin3(){
    window.open("adminPage3.php","height=100px, width=200px,  scrollbars=yes")
	}

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

      <div class="jumbotron" style="background:url(bg3.png);background-size:cover; color:#FFF">
				<form action="index.php">
					<button class="btn1" >BACK HOME</button>

				</form>
			  <h1>Admin Controll Page</h1>
        <p>Here you can choose between inserting new or deleting movies and events,</p>
        <button class="btn1" style="align: center; text-align: center; margin:auto" onClick="openwin1()"><b>AddMovie</b></button>
				<button class="btn1" style="align: center; text-align: center; margin:auto" onClick="openwin2()"><b>AddMovieEvent</b></button>
        <button class="btn1" style="align: center; text-align: center; margin:auto" onClick="openwin3()"><b>delete</b></button>

					</div>



      </div>
    </div>

    <div class="container" style="background:url(bg3.png);background-position:bottom;">
      <div class="row">




	</div></div>
	<div class="col-md-4" style="margin:500 auto;width:300px;">
	</div>
</body>
</html>

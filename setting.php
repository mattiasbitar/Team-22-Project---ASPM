<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 3/4/2017
 * Time: 1:08 AM
 */

	session_start();
error_reporting(0);
include "DBhandler.php";
if ($_POST['submit']){
$user= $_SESSION['userName'];



$sql = "SELECT password FROM UserTable WHERE userName= '$user'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
        $oldpass = $row['password'];
        if ($oldpass!=$_POST['opass']) {

           // sleep(3000);
            $message = "old password is incorrect";
            echo "<script type='text/javascript'>alert('$message');</script>";

        }
        else if($_POST['npass']!=$_POST['rnpass']){
            $message = "password and confirm password doesn't match";
            echo "<script type='text/javascript'>alert('$message');</script>";
exit;
        }


    else {
        $npass=$_POST['npass'];

        $sql = "update usertable set password= '$npass' where userName='$user'";


       $conn->query($sql);

    if($result) {

        $message = "Password change successful";
        echo "<script type='text/javascript'>alert('$message');</script>";}
       else {
           $message = "could not change password please try again";
           echo "<script type='text/javascript'>alert('$message');</script>";
       }
    }





}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

    <title> setting.html</title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
    <meta http-equiv="description" content="This is my page">

    <link rel="stylesheet" type="text/css" href="css/a.css">

<style>
    label {
        display:inline-block;
        *display: inline;     /* for IE7*/
        zoom:1;              /* for IE7*/
        float: left;
        padding-top: 5px;
        text-align: right;
        width: 140px;
    }
         input {
             margin-top: 5px;
             margin-bottom: 5px;
             display:inline-block;
             *display: inline;     /* for IE7*/
             zoom:1;              /* for IE7*/
             vertical-align:middle;
             margin-left:20px
         }
</style>

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
                    <a href="index.jsp" class="top_link"><span>Home</span> </a>
                </li>
                <li class="top">
                    <a href="AboutUs.jsp" class="top_link"><span>About Us</span> </a>
                </li>
                <li class="top">
                    <a href="ContactUs.jsp" class="top_link"><span>Contact Us</span> </a>
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
                    ?> <a style="margin-left:20px; margin-top:5px; text-decoration: none;color: white;" href="setting.php">setting</a><?php
                }else{
                    echo "You have to login";
                }

                ?>
            </ul>

<div></div>
            <div>

                <p>Dear user <b><?php echo $_SESSION['userName']; ?></b> you can change password and cancel ticket from there  </p>
                <div style="float: left; width: 450px; border: 1px solid black;">

                    <div>
                        <div><p style="padding: 20px; background-color: white; ">Change your Password</p></div>
                                <div>
                                    <form action="" method="post">
                                        <div>
                                        <label>Old Password:</label></div>
                                        <div>
                                        <input type="password" name="opass"  />
                                        <label>New Password:</label></div>
                                        <input type="password" name="npass"/>
                                        <div>
                                        <label>Repeat new Password:</label>
                                        <input type="password" name="rnpass" />
                                            </div>
                                        <div><input type="submit" value="Change Password" name="submit" </div>
                                    </form>

                                </div>
                </div>



            </div>
        </body></html>
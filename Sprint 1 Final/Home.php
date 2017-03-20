<?php
	session_start();

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="30">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <style>
            body {background-color: #FFFFFF;}
            h1   {color: tan;
                  font-family: Italic Bold;
                  font-size: 55px;
                  text-align: center;
                 }

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #0099CC;
}

li {
    float: left;
}

li a {
    display: block;
    color: #FFFFFF;
    text-align: center;
    font-size: 20px;
    padding: 30px;
    text-decoration: none;
}

li a:hover {
    background-color: #669999;
}
footer {
    padding: 10px;
    text-align: center;
    font-size: 20px;
    font-family: Italic Bold;
    color: white;
    background-color: #003366;
}
        </style>
        <link rel="stylesheet" href="/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div style="width: auto; height: auto; margin-top: -15px;">
            <img src="images/poster.jpg"  width= "1335" height="150px">
            <div style="margin-top: -3px;">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="movieDetailPage.php">Search Movies</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="profile.php">My Profile</a></li>
  <li><a href="changepassword.php">Change Password</a></li>
  <li><a href="logout.php">Logout Out</a></li>
</ul>
</div>
            <img src="images/webimage.jpg" alt="animation" style="width:100%">
<footer>
<p>&copy 2017 . All Rights Reserved</p>
</footer>
</body>
</html>

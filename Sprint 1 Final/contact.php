<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="30">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {background-color: teal;}
            h1   {color: Black;
                  font-family: Italic Bold;
                  font-size: 40px;
                  text-align: center;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: steelblue;
            }

            li {
                float: left; text-decoration:none;
            }

            li a {
                display: block;
                color: #FFFFFF;
                text-align: center;
                font-size: 20px;
                padding: 30px 20px;
                text-decoration: none;
            }

            li a:hover {
                background-color: tan;
				text-decoration: none;
            }


            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid steelblue;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: steelblue;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #003366;
            }

            div {

                background-color: teal;

            }
        </style>
        <link rel="stylesheet" href="/lib/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"
  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    </head>

    <body>
        <div style="width: auto; height: auto; margin-top: -15px;">
            <img src="images/poster.jpg"  width= "100%" height="150px">
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
                    <h1 class="title-w3 con">Contact us</h1>
                    <center>
                    <?php
                    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                    if (strpos($url, 'snd=contc') !== false){
                      echo "Subject has been sent!";
                    }
                    ?>
                  </center>
                    <div>
                        <form action="contactInsert.php" method ="POST" enctype="multipart/form-data" style="width:30%;margin:0 auto;min-width:400px;border-style:solid;border-color:black;padding:10 10 10 10">
                            <label for="fname">Name</label>
                            <input type="text" id="fname" name="Name" placeholder="Your name.">
                            <label for="Ename">Email address</label>
                            <input type="text" id="Ename" name="EmailAddress" placeholder="Your Email Id..">

                            <span><label><br>SUBJECT</label></br></span>
                            <span><textarea name="subject" rows="10" style="width:100%"> </textarea></span>
                            </select>
							<br><br>
                           <center> <button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
                            <!--<input type="submit" value="Submit">-->
                        </form>
                    </div>
                    </body>
                    </html>

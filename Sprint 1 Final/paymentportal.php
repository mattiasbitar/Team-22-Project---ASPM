<?php
session_start();
include 'DBhandler.php';
$event_ID = $_POST['event_ID'];
//echo"$event_ID";
//echo $_SESSION['userName'];


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <br>
</br>
<title>paymentportal</title>

<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
<meta http-equiv="description" content="This is my page">

<style>
body {background-color: teal;}
h1   {color: tan;
  font-family: Italic Bold;
  font-size: 40px;
  text-align: center;
}



</style>


<h1> <center> Payment Details </center> </h1>
<h3><center><?php
$sql = "SELECT * FROM movieEvent WHERE event_ID ='$event_ID'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
  echo $row['movieName'];

  ?>
  <br><?php
  echo " Event ID (";
  echo $row['event_ID'];
  echo ") ";?>
  <br><?php
  echo $row['movieDate'];?>
  <br><?php
  echo "Price/Seat: ";
  echo $row['eventPrice'];
  echo "  SEK ";
  ?>
  <?php
}
?></center></h3>


<div
style="width: 850px; height: 460px; padding-left: 20px; margin: 0 auto; margin-top: 20px;">
<div class="panel panel-default">


  <div
  style="width: 90%; height: 460px; margin: auto; display:block; border: solid; border-color: #EAEAEA;">
  <form action=movieDetailPage.php>
    <button type="submit" name="submit">CANCEL PAYMENT</button>
  </form>

  <form action="cardInsert.php" method="POST" enctype="multipart/form-data">
    <br>
  </br>
  <h2 style="text-align: center">Ticket Details:</h2>
  <center>
    <input type = "name" class="inp i1" name="FirstName" placeholder="First Name">
    <input type = "name" class="inp i2" name="LastName"  placeholder="Last Name">
    <input type = "number" class="inp i3"name="Noofseats" placeholder="No of seats">
    <input type="hidden" name="eventID" value="<?php echo $event_ID;?>">
    <input type="hidden" name="userN" value="<?php echo $_SESSION['userName'];?>">
    <br> </br>
  </center>
  <h3 style="text-align: center; font-size: 24px;">Card Details:</h3>
  <div>
    <span>
      <label> <b> Select Card Type </b>  </label> </span>

      <select class="form-control" name="typeC"
      style="width: 23%; margin-left: 16px;">
      <option name="typC">VISA </option>
      <option name="typC">MasterCard</option>
      <input type="hidden" name="cardType" value="typeC">
    </div>


  </select> <br>
  <div style="boder: solid; padding-left: 15px; font-size: 30px;">
  <style>
  .a {
    display: block;
  }

  .inp {
    height: 35px;
  }

  .i1 {
    width: 310px;
  }

  .i2 {
    margin-left: 10px;
    width: 150px;
  }

  .i3 {
    margin-left: 10px;
    width: 150px;
  }

  .i4 {
    width: 310px;
  }

  .i5 {
    margin-left: 10px;
    width: 310px;
  }

  .b {
    width: 100px;
    margin-top: 20px;
  }
  </style>
  <input type = "number"class="inp i1" name="cardNumber" placeholder="Card number">
  <input type = "number" class="inp i2" name="expirationDate" placeholder="Expiration date">
  <input type = "number" class="inp i3" name="cvv" placeholder="CVV/CVC"> <br> <br>
  <input type = "name" class="inp i4" name="firstname" placeholder="Card owner first name">
  <input type = "name"  class="inp i5"  name="lastname" placeholder="Card owner last name"> <br>

  <center>
    <button type="submit" class="btn btn-primary b">Confirm</button>
  </center>



</div>
</div>
<table style="" width="305px" border="0">


</form>
</div>
</div>






</body>
</html>

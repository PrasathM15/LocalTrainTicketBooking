<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Generate Your QR Ticket </title>
    <link rel="stylesheet" href="style6.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <nav>
    <div class="menu">
    <div class="logo">
        <a href="home.php">CHENNAI RAILWAYS</a>
      </div>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a onclick="myFunction()">PRINT THIS PAGE</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </nav>
  
  </head>
  <body>
<style>
body {
background-image:url("home.jpg");
background-repeat:no-repeat;
background-attachment: fixed;
background-position: center;
background-color:Black;
background-size: cover;
}
</style>
<script>
    function myFunction() {
    window.print();
    }
  </script>
    <div class="wrapper">
      <header>
        <center><img src="tick.gif" alt="tick template"></center>
        <center><h1>HAPPY JOURNEY</h1></center>
      </header>
      <div class="form">
        <input type="text" spellcheck="false" value="<?php $name = $_POST['name'];
$sql_transactions="INSERT INTO transactions (email,source,dest,name,Class,Type,Amt)VALUES ('".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','$name','".$_SESSION['Class']."' ,'".$_SESSION['Type']."', '".$_SESSION['final']."')";

if(mysqli_query($connect, $sql_transactions) == true)
{
	echo "    Your Ticket Booked Successfully     ";
$sql_transactions="SELECT * FROM `transactions` WHERE `source` LIKE '".$_SESSION['source']."' AND `dest` LIKE '".$_SESSION['dest']."' AND `Amt` = '".$_SESSION['final']."' AND `email`='".$_SESSION['email']."'";
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){
	echo "Ticket No. :".$row["T_No."]."   ";
	echo "Source Station:".$row["source"]."   ";
	echo "Destination Station:".$row["dest"]."   ";
	echo "Class:".$row["Class"]."   ";
	echo "Type( 1 = one Sided , 2 = Return):".$row["Type"]."   ";
	echo "No of Passengers : ".$row["Type"]."   ";
	echo "Amt Paid: ".$row["Amt"]."   ";
}
}
else
{
	echo "Ticket Booking Unsucessful , Please Try Again <br>";
	echo "<a href='Book.php'>Refill</a>";
}


?>">
      
        </input>
        <button>Generate Your QR Ticket</button>
        
      </div>
      <div class="qr-code">
        <img src="" alt="qr-code">
      </div>
    </div>
    
    <script src="script.js"></script>

  </body>
</html>
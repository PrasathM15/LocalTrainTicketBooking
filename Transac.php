<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Transaction History</title>
<link rel="shortcut icon" href="logo.png">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.container { 
  height: 75px;
  width:400px;
  position: relative;
  border: 3px solid green; 
}
.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
<script>
function myFunction() {
    window.print();
}
</script>
</head>
<body style="background-color: white;">

<div class="center">
<div class="container">
<center><h1>TICKET HISTORY</h1></center>
</div>

<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}


$sql_transactions="SELECT * FROM `transactions` WHERE  `email`='".$_SESSION['email']."'";
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){
	echo "<center><h1>Ticket</h1></center>";
	echo "<center>Ticket No. :".$row["T_No."]."</center>";
	echo "<center>Source:".$row["source"]."</center>";
	echo "<center>Destination:".$row["dest"]."</center>";
	echo "<center>Class:".$row["Class"]."</center>";
	echo "<center>Type( 1 = one Sided , 2 = Return):".$row["Type"]."</center>";
	echo "<center>No of Passengers : ".$row["Type"]."</center>";
	echo "<center>Amt Paid: ".$row["Amt"]."</center>";
}

?>




<center><button class="button button1" onclick="myFunction()">Print this page</button>
<a href="home.php"><button class="button button2">Home</button></a></center>

</body>
</html>
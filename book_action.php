<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking Page</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="shortcut icon" href="logo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="home.php">CHENNAI RAILWAYS</a>
      </div>
      <ul>
        <li><a href="index.php">LOGIN</a></li>
        <li><a href="about2.html">ABOUT US</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="sub_title">
<?php
$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];

if ($source == $dest)
{
	echo"<center>Source and destination Selected are Same </center>";
    
}else {

$sql_price="SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `class` = $class";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"] * $type ;
$final=$final*$no;

echo "<center>You Have To Pay : ₹ ".$final." </center>";
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['Class']=$class;
$_SESSION['Type']=$type;
}
?>
    </div>

    <div class="btns">
         <a href="book.php"><button>Refill Details</button></a>
         <a href="pay.php" class="bts"><button>Proceed</button></a>
         
    </div>
    
  </div>
</body>

</html>

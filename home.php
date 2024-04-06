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
    <title>Chennai Railways</title>
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
        <li><a href="https://www.metrotraintimings.in/Chennai/Wimco_Nagar-to-Chennai_Central-sunday-Local-suburban-MRTS-Train-Timings.htm">TRAIN TIMINGS</a></li>
        <li><a href="about.html">ABOUT US</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">Welcome To Chennai Railways</div>
    <div class="sub_title">
    <?php 
    echo "<center>Hello " . $_SESSION['name'] . "</center>";
    ?>
    </div>

    <div class="btns">
        <a href="Transac.php"><button>Transactions</button></a>
        <a href="book.php" class="bts"><button>Book Tickets</button></a>
    </div>
    
  </div>
</body>

</html>

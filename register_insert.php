
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Registration Page</title>
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
.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.container { 
  height: 85px;
  width:600px;
  position: relative;
  border: 3px solid green; 
}
</style>

<link rel="shortcut icon" href="logo.png">
</head>
<body style="background-color: F5F1F0;">
<center><div class="container">
<?php
include 'connect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql_userdatabase="Insert into userdatabase(Name , Email , password) values ('$name' , '$email' , '$password' )";

if(mysqli_query($connect, $sql_userdatabase) == true)
{
	echo "<h1>You Have Been Successfully Registered</center></h1><br>";
	echo '<center><table><tr><td><A href="index.php"><button class="button button1">Login</button></a></td></tr></table></center>';
}
else
{
	echo "<h1><center>Registration Unsucessful , Please try again<center></h1> <br>";
	echo "<h2><center><a href='register.php'>Register</a></center";
}

?>
</body>
</html>
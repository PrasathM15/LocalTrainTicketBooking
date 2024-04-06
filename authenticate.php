
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Authenticate Page</title>
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
.button {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.container { 
  height: 75px;
  width:600px;
  position: relative;
  border: 3px solid green; 
}
</style>
	<link rel="shortcut icon" href="logo.png">
  </head>
  <body>
  <center><div class="container">
  <?php
include 'connect.php' ;
$email = $_POST['email'];
$password = $_POST['password'];
$sql_userdatabase = "Select * from userdatabase where email = '$email' and password='$password' ";
$result_userdatabase = mysqli_query($connect, $sql_userdatabase);
if(mysqli_num_rows($result_userdatabase) <= 0)
{
	echo "<center><h1>Incorrect Email or Password</h1></center>";
	echo '<center><table><tr><td><A href="index.php"><button class="button button1">Try Again</button></a></td></tr></table></center>';
}
else
{
	
	header("location:home.php");
	$row_userdatabase = mysqli_fetch_array($result_userdatabase);
	session_start();
	$_SESSION['email']=$email;
	$_SESSION['name']=$row_userdatabase['Name'];
	$_SESSION['userid']=$row_userdatabase['UserID'];
	$_SESSION['log']= '1' ;
}
?>
</body>
</html>
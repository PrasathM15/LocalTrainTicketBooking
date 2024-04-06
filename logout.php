<?php
session_start();
?>
<html>
<head>
<title>Logout Page</title>
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
session_destroy();

echo '<h1>You Have Been Successfully Logged Out<h1></center><br>';
echo '<center><table><tr><td><A href="index.php"><button class="button button1">Start Again</button></a></td></tr></table></center>';
?>
</body style="background-color: F5F1F0;">
</html>
<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'localtrainticketbookingsystem1';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
<?php 
//phpinfo();
$host="db";
$user="root";
$pass="password";
$db="test";

$conn=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_errno())
       die("Connection Failed..".mysqli_connect_error());
?>


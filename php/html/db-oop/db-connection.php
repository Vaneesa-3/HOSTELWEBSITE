<?php 
//phpinfo();
$host="db";
$user="root";
$pass="password";
$db="test";

// $conn=mysqli_connect($host,$user,$pass,$db);   (procedural)
$conn=new mysqli($host,$user,$pass,$db);  // (OO)
// if(mysqli_connect_errno())   (procedural)
if($conn->connect_errno)  // (OO)
       // die("Connection Failed..".mysqli_connect_error());   (procedural)
       die("Connection Failed..".$conn->connect_error);  // (OO)
?>


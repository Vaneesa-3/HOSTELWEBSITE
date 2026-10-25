<?php
// Always start the session at the very top of the file
session_start();
$username="Rajesh";
// Store user data in the session
$_SESSION['username']=$username;
// Another session variable to check for valid session..
$_SESSION['session_key'] = "session_value"; 
// Redirect directly to the home page
//header("Location: home.php");
//exit;
?>
This is sample login page..<br/><br/> 
Click here to go to <a href="home.php">Home</a>

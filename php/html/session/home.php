<?php
// Start the session to read session variables
session_start();
// Check if through Login Page..
if (!isset($_SESSION['session_key']))
 {
   echo "ERROR, Tried to access Home directly..";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
</head>
<body>
    <br/><br/>Try <a href="login.php">Login</a>
</body>
</html>
<?php
 }
else
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']);
 ?>!</h1>
    <p>You have reached the secure home page.</p>
</body>
</html>
<?php
}
session_destroy();
?>







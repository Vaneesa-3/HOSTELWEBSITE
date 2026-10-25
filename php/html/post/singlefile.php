<html>
<?php 
if(isset($_POST["submit"]))
 {
 echo $_POST["num1"]+$_POST["num2"];
 }
else 
  {
    ?>
<form action="singlefile.php" method="post">
<input name="num1" type = "text"/>
<input name="num2" type = "text"/>
<input name="submit" type = "submit" value="Add"/>
</form>
</html>
<?php
}
?>


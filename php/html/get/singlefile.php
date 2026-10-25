<html>
<?php 
if(isset($_GET["submit"]))
 {
 echo $_GET["num1"]+$_GET["num2"];
 }
else 
  {
    ?>
<form action="singlefile.php" method="get">
<input name="num1" type = "text"/>
<input name="num2" type = "text"/>
<input name="submit" type = "submit" value="Add"/>
</form>
</html>
<?php
}
?>


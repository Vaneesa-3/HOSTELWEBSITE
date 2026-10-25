<?php 
include 'db-connection.php';
?>

<html>

<?php 
if(isset($_POST["submit"]))
 {
$query="INSERT into test_table(id,name) values ($_POST[id],'$_POST[name]')";
$result=mysqli_query($conn,$query);
if($result===TRUE)
    {
      echo "Data inserted successfully";
    }
else
   {
      echo "Error".mysqli_error($conn);
   }
 }
else 
  {
    ?>
<form action="insert-any.php" method="post">
<input name="id" type = "number"/>
<input name="name" type = "text"/>
<input name="submit" type = "submit" value="Insert"/>
</form>
<?php
}
mysqli_close($conn);
?>
</html>

<?php 
include 'db-connection.php';
?>

<html>
<form>

<?php

$query="INSERT into test_table(id,name) values (15,'Tomsy')";
$result=mysqli_query($conn,$query);
if($result===TRUE)
    {
      echo "Data inserted successfully";
    }
else
   {
      echo "Error".mysqli_error($conn);
   }
mysqli_close($conn);
?>
</form>
</html>

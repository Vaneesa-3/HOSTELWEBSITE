<?php 
include 'db-connection.php';
?>

<html>
<form>

<?php

$query="INSERT into test_table(id,name) values (15,'Tomsy')";
// $result=mysqli_query($conn,$query);   (procedural)
$result=$conn->query($query);  // (OO)
if($result===TRUE)
    {
      echo "Data inserted successfully";
    }
else
   {
      // echo "Error".mysqli_error($conn);   (procedural)
      echo "Error".$conn->error;  // (OO)
   }
// mysqli_close($conn);   (procedural)
$conn->close();  // (OO)
?>
</form>
</html>

<?php 
include 'db-connection.php';
?>

<html>
<form>

<?php

$query="Select * from test_table";
// $result=mysqli_query($conn,$query);   (procedural)
$result=$conn->query($query);  // (OO)
if($result)
    {
      echo "Data fetched successfully";
      // while($row=mysqli_fetch_assoc($result))   (procedural)
      while($row=$result->fetch_assoc())  // (OO)
         echo "<br>".$row['id']."....".$row['name'];
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

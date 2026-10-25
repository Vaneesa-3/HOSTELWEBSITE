<?php 
include 'db-connection.php';
?>

<html>
<form>

<?php

$query="Select * from test_table";
$result=mysqli_query($conn,$query);
if($result)
    {
      echo "Data fetched successfully";
      while($row=mysqli_fetch_assoc($result))
         echo "<br>".$row['id']."....".$row['name'];
    }
else
   {
      echo "Error".mysqli_error($conn);
   }
mysqli_close($conn);
?>
</form>
</html>

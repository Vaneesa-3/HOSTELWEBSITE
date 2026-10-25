<?php 
include 'db-connection.php';
?>

<html>

<?php 
if(isset($_POST["submit"]))
 {
$query="INSERT into test_table(id,name) values ($_POST[id],'$_POST[name]')";
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
 }
else 
  {
      $query="Select MAX(id) as Max_Id from test_table";
      // $result=mysqli_query($conn,$query);   (procedural)
      $result=$conn->query($query);  // (OO)
      if($result)
          {
            echo "Data fetched successfully";
            // $row=mysqli_fetch_assoc($result);   (procedural)
            $row=$result->fetch_assoc();  // (OO)
            echo "<br>".($row['Max_Id']+1)."....";
          }
      else
        {
            // echo "Error".mysqli_error($conn);   (procedural)
            echo "Error".$conn->error;  // (OO)
        }
    ?>
<form action="insert-any-last-id.php" method="post">
<input name="id" type = "number" value="<?php echo $row['Max_Id']+1;?>" />
<input name="name" type = "text"/>
<input name="submit" type = "submit" value="Insert"/>
</form>
<?php
}
// mysqli_close($conn);   (procedural)
$conn->close();  // (OO)
?>
</html>

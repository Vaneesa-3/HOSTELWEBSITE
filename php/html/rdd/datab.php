<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><body><br/>
    <form action="datab.php" method="post">
        <select name="select">
        <option selected>*</option>
        <option value="bookid">ID</option>
        <option value="bookname">Title</option>
        <option value="bcategory">Category</option>
        <option value="isbn">ISBN</option>
        </select>
        <input type = "submit" name="submit" value = "Send Query">
        <br/><br/>
    </form>
</body></html>
<?php
if(isset($_POST["submit"]))
{
$conn = mysqli_connect("db", "root", "password", "books");
if (!$conn) {    die("Connection failed: " . mysqli_connect_error()); }
$select = $_POST["select"];
$sql = "SELECT ".$select. " FROM book";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "Result of SELECT ".$select ." from book;";
 echo "<table border='border'  cellpadding='10'>";
   // while($row = mysql_fetch_row( $result )) --Deprecated use fetch_assoc{
    while($row = mysqli_fetch_assoc($result))
    {
        print "<tr>" ;
        foreach ( $row as $key => $value )
              print( "<td>$key-$value</td>" );
        print( "</tr>" );
    }
  echo "</table>";
} else {  echo "0 results";}
$conn->close();
}
?>

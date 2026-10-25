<?php
$conn = mysqli_connect("db", "root", "password", "books");
if (!$conn) {    die("Connection failed: " . mysqli_connect_error()); }
$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table align='center' border='border' width='600' cellpadding='10'>
  <caption><b>List of Books </b></caption><br/> <tr><th>Booid</th>
  <th width='250'>Book Name</th> <th width='250'>Book Category</th>
  <th width='50'>ISBN</th></tr>" ;
 // while($row = mysql_fetch_row( $result )) --Deprecated use fetch_assoc{
    while($row = mysqli_fetch_assoc($result)) {
    echo  "<tr><td>".$row["bookid"]. "</td><td>" . $row["bookname"].
    "</td><td>" . $row["bcategory"]. "</td><td>" . $row["isbn"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailing List Contacts</title>
    <style type="text/css">
        h1 { text-align: center; margin: 0; }
        table { width: 100%; border-collapse: collapse; border: 1px solid gray; }
        caption { text-align: center; }
        th { background-color: #a9ec9b; padding: 6px; border: 1px solid gray; }
        td { padding: 6px; border: 1px solid gray; }
        tr.odd  { background-color: #ffffff; }
        tr.even { background-color: #b5d8e5; }
    </style>
</head>
<body>
<h1>Mailing List Contacts</h1>
<?php
$conn = mysqli_connect("db", "root", "password", "books");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM mailinglist ORDER BY id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    print("<table>
        <caption>Contacts stored in the database</caption>
        <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>E-mail Address</th>
            <th>Phone Number</th>
            <th>Book</th>
            <th>Operating System</th>
        </tr>");

    $counter = 0;
    // dynamicForm.php stores the last name in `fname` and the
    // first name in `lname`, so the columns are shown in that order
    while ($row = mysqli_fetch_assoc($result)) {
        $class = ($counter % 2 == 0) ? "odd" : "even";
        print("<tr class='$class'>
            <td>" . $row["id"] . "</td>
            <td>" . $row["fname"] . "</td>
            <td>" . $row["lname"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["phone"] . "</td>
            <td>" . $row["favbook"] . "</td>
            <td>" . $row["favos"] . "</td>
        </tr>");
        ++$counter;
    }
    print("</table>");
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>

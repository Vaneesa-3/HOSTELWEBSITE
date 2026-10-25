<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type = "text/css">
        p { margin: 0px; }
        .error { color: red }
        p.head { font-weight: bold; margin-top: 10px; }
        label { width: 5em; float: left; }
 </style>
</head>
<body>
<?php
 // variables used in script
$fname = isset($_POST[ "fname" ]) ? $_POST[ "fname" ] : "";
$lname = isset($_POST[ "lname" ]) ? $_POST[ "lname" ] : "";
$email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
$phone = isset($_POST[ "phone" ]) ? $_POST[ "phone" ] : "";
$book = isset($_POST[ "book" ]) ? $_POST[ "book" ] : "";
$os = isset($_POST[ "os" ]) ? $_POST[ "os" ] : "";
 $iserror = false;
 $formerrors = array( "fnameerror" => false, "lnameerror" => false,
 "emailerror" => false, "phoneerror" => false );
 $booklist = array( "Internet and WWW How to Program","C++ How to Program",
 "Java How to Program", "Visual Basic How to Program" );
$systemlist = array( "Windows", "Mac OS X", "Linux", "Other" );
$inputlist = array( "fname" => "First Name","lname" => "Last Name",
 "email" => "Email","phone" => "Phone" );

 if (isset($_POST["submit"]))
{ if ( $fname == "" )
        {
        $formerrors[ "fnameerror" ] = true;
        $iserror = true;
        }
        if ( $lname == "" )
        {
        $formerrors[ "lnameerror" ] = true;
        $iserror = true;
        }
        if ( $email == "" )
        {
        $formerrors[ "emailerror" ] = true;
        $iserror = true;
        }
        if ( $phone== "" )
        {
        $formerrors[ "phoneerror" ] = true;
        $iserror = true;
        }

if (!$iserror)
{
 $sql = "INSERT INTO mailinglist " .
 "(fname, lname, email, phone, favbook, favos ) " .
 "VALUES ( '$fname', '$lname', '$email',".  
 "'$phone', '$book', '$os' )";
 $conn = mysqli_connect("db", "root", "password", "books");
 if (!$conn)
 {die("Connection failed: " . mysqli_connect_error()); }
 $result = mysqli_query($conn, $sql);
 if ($result === TRUE)
 {
 echo "A record has been inserted.";
 }
 else
 {
 printf("Could not insert record: %s\n", mysqli_error($conn));
 }
 mysqli_close($conn);
    print( "<p>Hi $fname. Thank you for completing the survey.
    You have been added to the $book mailing list.</p>
    <p class = 'head'>The following information has been
    saved in our database:</p>
    <p>Name: $fname $lname</p>
    <p>Email: $email</p>
    <p>Phone: $phone</p>
    <p>OS: $os</p>
    <p><a href = 'formDatabase.php'>Click here to view
    entire database.</a></p>
    </body></html>" );
    die(); // finish the page
}
}
 print( "<h1>Sample Registration Form</h1><p>Please fill in all fields and click Register.</p>" );
 if ( $iserror )
 {
 print( "<p class = 'error'>Fields with * need to be filled  in properly.</p>" );
 }
 print( "<!-- post form data to dynamicForm.php --><form method = 'post' action = 'dynamicForm.php'>
 <h2>User Information</h2> <!-- create four text boxes for user input -->" );
 foreach ( $inputlist as $key => $value )
 {
 print("<div><label>$value:</label><input type = 'text' name = '$key' value = '" . $$key. "'>" );
 if ( $formerrors[ ( $key )."error" ] == true )
 print( "<span class = 'error'>*</span>" );
 print( "</div>" );
 }
//  if ( $formerrors[ "phoneerror" ] )
//  print( "<p class = 'error'>Can not be empty" );
if ( $formerrors[ "phoneerror" ] )
 print( "<p class = 'error'>Phone number must be in the form  0555 555555" );
print( "<h2>Publications</h2>
 <p>Which book would you like information about?</p>
 <select name = 'book'>" );
foreach ( $booklist as $currbook )
 {
 print( "<option" . ($currbook == $book ? " selected>" : ">"). $currbook . "</option>" );
 } // end foreach
print( "</select>
 <h2>Operating System</h2>
 <p>Which operating system do you use?</p>
 <!-- create five radio buttons -->" );
 $counter = 0;
foreach ( $systemlist as $currsystem )
 {
 print( "<input type = 'radio' name = 'os' value = '$currsystem' " );
 if ( ( !$os && $counter == 0 ) || ( $currsystem == $os ) )
 print( "checked" );
 print( ">$currsystem" );
 ++$counter;
 } // end foreach

print( "<!-- create a submit button -->
<p class = 'head'><input type = 'submit' name = 'submit'
 value = 'Register'></p></form></body></html>" );
?>
</body>
</html>

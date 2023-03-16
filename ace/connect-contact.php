<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole - Contact</title>
    <link href="css/contact.css" rel="stylesheet" type="text/css">
    </head>
    <body>
   <?php
    
$servername = "localhost";
$username = "tianaweb_tiana";
$password = "xx";
$dbname = "tianaweb_registration";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_comment = $_POST['comment'];


     
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
     
     $sql ="
     INSERT INTO contact  (name, email, comment) VALUES ('$users_name', '$users_email', '$users_comment')";
        
   if ($conn->query($sql) === TRUE) {
     echo "New record created successfully <br><br>";
    echo "Click ";
    echo "<a href='contact.html'>Here</a>";
    echo "To Go Back";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
    </body>
</html>

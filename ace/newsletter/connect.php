<?php
    
$servername = "localhost";
$username = "tianaweb_tiana";
$password = "ilikethesun123";
$dbname = "tianaweb_registration";
$users_name = $_POST['name'];
$users_email = $_POST['email'];

     
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
     
     $sql ="
     INSERT INTO newsletter  (name, email) VALUES ('$users_name', '$users_email')";
        
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


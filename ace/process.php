<?php
    
$servername = "localhost";
$username = "tianaweb_tiana";
$password = "ilikethesun123";
$dbname = "tianaweb_registration";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_phone_number = $_POST['phone_number'];
$users_event = $_POST['event'];
$users_contact_name = $_POST['contact_name'];
$users_contact_number = $_POST['contact_number'];
$users_tshirt_size = $_POST['tshirt_size'];
$users_gender = $_POST['gender'];

     
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
     
     $sql ="
     INSERT INTO form  (name, email, phone_number, event, contact_name, contact_number, tshirt_size, gender) VALUES ('$users_name', '$users_email', '$users_phone_number', '$users_event', '$users_contact_name', '$users_contact_number', '$users_tshirt_size', '$users_gender')";
        
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


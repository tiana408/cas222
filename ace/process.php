<?php
    
$servername = "localhost";
$username = "tianaweb_tiana";
$password = "itsoundsbad123";
$dbname = "tianaweb_registration";

        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone_number= $_POST['phone_number'];
        $event= $_POST['event'];
        $contact_name= $_POST['contact_name'];
        $contact_number= $_POST['contact_number'];
        $tshirt_size= $_POST['tshirt_size'];
        $gender= $_POST['gender'];


// Create connection

$conn=mysqli_connect("localhost", "tianaweb_tiana", "itsoundsbad123", "tianaweb_registration");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


         
     $sql ="
  INSERT INTO `tianaweb_registration`.`form`  ('name', 'email' , 'phone_number' , 'event' , 'contact_name' , 'contact_number' , 'tshirt_size' , 'gender') VALUES (NULL '$name','$email','$phone_number','$event','$contact_name','$contact_number','$tshirt_size','$gender') ";
        
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

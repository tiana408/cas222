<?php
    




$conn=mysqli_connect("localhost", "root", "", "tianaweb_registration");


    if(isset($_POST['submit'])) {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone_number= $_POST['phone_number'];
        $event= $_POST['event'];
        $contact_name= $_POST['contact_name'];
        $contact_number= $_POST['contact_number'];
        $tshirt_size= $_POST['tshirt_size'];
        $gender= $_POST['gender'];
         
      $query=  "SELECT * FROM form INSERT INTO tianaweb_registration (name, email, phone_number, event, contact_name, contact_number, tshirt_size, gender)values('$name','$email','$phone_number','$event','$contact_name','$contact_number','$tshirt_size','$gender')";
        
        $run=mysqli_query($conn,$query);
        
        if($run){
            echo"data insert successfully";
            
        }
        else{
            echo"error:".mysqli_error($conn);
        }
    }
    
    ?>
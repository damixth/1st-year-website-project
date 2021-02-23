<?php
        $servername="localhost";
        $username="username";
        $password="password";
        $dbname="contact";
      
        $con = new mysqli($servername, $username, $password, $dbname);

        
        if($con->connect_error){
            die("Connection error".$con->connect_error);
        }

        $sql="INSERT INTO MyGuests (name,email,message)
              VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."')";

        if($con->query($sql) === TRUE){
            echo "Your message was sent successfully!";
        } else {echo "Error! Try Again :(";};
        $con->close();
    ?>

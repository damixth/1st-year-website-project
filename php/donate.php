<?php
        $servername="localhost";
        $username="username";
        $password="password";
        $dbname="contact";
       
        $con = new mysqli($servername, $username, $password, $dbname);

       
        if($con->connect_error){
            die("Connection error".$con->connect_error);
        }

        $sql="INSERT INTO Donate (name,email,Card_Number,Expiry_Date,CVC,Amount )
              VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['card']."',
				'".$_POST['ed']."', '".$_POST['cvc']."', '".$_POST['amount']."')";

        if($con->query($sql) === TRUE){
            echo "Your donation was done successfully!";
        } else {echo "Error! Try Again :(";};
        $con->close();
    ?>

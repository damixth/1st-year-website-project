<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "contact";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE Donate (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
Card_Number VARCHAR(10) NOT NULL,
Expiry_Date VARCHAR(6) NOT NULL,
CVC VARCHAR(5),
Amount VARCHAR(10) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table contact created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
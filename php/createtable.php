<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "contact";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
Message VARCHAR(100) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table contact created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
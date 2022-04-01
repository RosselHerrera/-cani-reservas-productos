<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO `visita` (NOMBRE,SUBJECT,EMAIL,MENSAJE,FILLER) VALUES ('$name','$subject','$email','$message',null)";


$servername = "localhost:3306";
$username = "pucondis_root";
$password = "ElCani2022";
$dbname = "pucondis_pucondistillery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
echo "<br>";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: https://pucondistillery.cl/cal.html");
exit();

?>




?>
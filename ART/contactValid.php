<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "art";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contact (name, email, phone, message)
VALUES ('$name','$email','$phone','$message')";

if ($conn->query($sql) === TRUE) {
    header('location:contact.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php

$host = "localhost";  
$username = "root";   
$password = "";      
$database = "car"; 

$conn = new mysqli($host, $username, $password, $database);

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$phone = $_POST['phone'];
$dropLocation = $_POST['dropLocation'];
$dates1=$_POST['dates1'];
$dates2=$_POST['dates2'];


$sql = "SELECT phone, dropLocation,dates1,dates2 FROM twoway";
$result = $conn->query($sql);


$sql = "INSERT INTO  twoway(phone,dropLocation,dates1,dates2) VALUES ('$phone', '$dropLocation','$dates1','$dates2')";

if ($mysqli->query($sql) === TRUE) {
    header("location:cab.html");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
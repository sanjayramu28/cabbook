<?php

$host = "localhost";  
$username = "root";   
$password = "";      
$database = "car"; 


$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$username = $_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email = $_POST['email'];



$sql = "INSERT INTO  user(username,password,phone,email) VALUES ('$username', '$password','$phone','$email')";

if ($mysqli->query($sql) === TRUE) {
    header("location:cabbook.html");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
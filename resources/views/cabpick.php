<?php
$host = "localhost";  
$username = "root";  
$password = "";       
$database = "car"; 

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$phone = $_POST['phone'];
$pickloc = $_POST['pickloc'];
$droploc = $_POST['droploc'];
$dates=$_POST['dates'];
$sql = "INSERT INTO  pickup(phone,pickloc,droploc,dates) VALUES ('$phone', '$pickloc','$droploc','$dates')";

if ($mysqli->query($sql) === TRUE) {
    header("location:cab.html");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
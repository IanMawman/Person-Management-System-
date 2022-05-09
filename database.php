<?php
// this is the data that we need to talk to the database
$servername = "localhost";
$username = "root";
$password = "password";
$dbNanme = "users";
// Create's the new connection
$conn = new mysqli("localhost", "root", "password","users"); /

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
// checks to see if the database is connected properly
?>

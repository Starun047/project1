<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,'results');
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>

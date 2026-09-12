<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "net";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    header("location:connection_error.php?error=" . urlencode($conn->connect_error));
    die();
}
?>
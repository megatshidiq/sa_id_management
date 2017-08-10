<?php

$servername = "172.30.240.9";
$username = "idsa";
$password = "adslprod";
$dbname = "sa_review";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

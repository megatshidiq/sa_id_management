<?php
$servername = "172.30.240.9";
$username = "idsa";
$password = "adslprod";
$dbname = "sa_review";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user_detail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["sys_id"]. " - Name: " . $row["userid"]. " " . $row["fullname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

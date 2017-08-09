<?php
include 'dbc.php';
$id = $_GET['sysid'];
$sys_nameid = $_GET['sys_nameid'];

$sql = "delete from user_detail where sysid='".$id."'";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if ($conn->query($sql) === TRUE) {
   // echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();



echo  "<meta http-equiv='refresh' content='0; url=show_detail_review.php?pg=3&sysid=".$sys_nameid."' />";
die();
 ?>

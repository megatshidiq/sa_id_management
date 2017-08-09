<?php
$dbname = 'sa_review';
$link = mysqli_connect("172.30.240.9","idsa","adslprod") or die("Couldn't make connection.");
$db = mysqli_select_db($dbname, $link) or die("Couldn't select database");
?>

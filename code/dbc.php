<?php
$dbname = 'sa_review';
$link = mysql_connect("localhost","idsa","adslprod") or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");
?>

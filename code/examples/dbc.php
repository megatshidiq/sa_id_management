<?php
$dbname = 'sa_review';
$link = mysql_connect("10.43.16.66","user_review","vodafone") or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");
?>

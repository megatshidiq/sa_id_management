<?php
include 'dbc.php';
$id = $_GET['sysid'];
$sys_nameid = $_GET['sys_nameid'];

$sql = "delete from user_detail where sysid='".$id."'";
mysql_query($sql);
echo  "<meta http-equiv='refresh' content='0; url=show_detail_review.php?pg=3&sysid=".$sys_nameid."' />";
die();
 ?>

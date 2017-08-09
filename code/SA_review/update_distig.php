<?
include "dbc.php";



$result = mysql_query("SELECT * FROM distination");

while($row = mysql_fetch_array($result))
{
$sql= "update user_detail SET Designation='".$row['C2']."',Remarks='".$row['C3']."' where staff_id='".$row['C1']."'";
//echo $sql;

mysql_query($sql);
}
?>

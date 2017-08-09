<?
include 'dbc.php';

$id=$_GET['sysid'];

echo "<table border='1' width='100%'>
<tr>
<th bgcolor='#FFFF00'>No</th>
<th bgcolor='#FFFF00'>UserID</th>
<th bgcolor='#FFFF00'>StaffID</th>
<th bgcolor='#FFFF00'>User Fullname</th>
<th bgcolor='#FFFF00'>User Email</th>
<th bgcolor='#FFFF00'>Flag</th>
<th bgcolor='#FFFF00'>Review Date</th>
</tr>";
$no=1;
$result = mysql_query("SELECT * FROM user_detail Where sys_nameid='$id' ORDER BY fullname DESC ");

while($row = mysql_fetch_array($result)){

  {
if($row[review_flag]=="0")
  {
    $color_status = "#FFCCFF";
    $op = "<td bgcolor=$color_status width=50><a target=_top href=op_close?report_by=".$row['report_by']."&date_opened=".$row['date_opened']."&close=".$row[close].">CLOSE</a></td>" ;
  }
elseif($row[review_flag]=="1")            #FF0000
{
       $color_status = "#FF0000";
       $op = "<td bgcolor=$color_status width=100    >Closed</td>";

}
elseif($row[review_flag]=="2")
{
       $color_status = "#99CCFF";
       $op = "<td bgcolor=$color_status width=100    >Closed</td>";
}
elseif($row[review_flag]=="3")
{
       $color_status = " #FF0000";
       $op = "<td bgcolor=$color_status width=100    >Closed</td>";
}
  }
 echo "<tr>";
  echo "<td bgcolor=$color_status height=50>" . $no . "</td>";
  echo "<td bgcolor=$color_status height=50>" . $row['userid'] . "</td>";
  echo "<td bgcolor=$color_status width=200>" . $row['staff_id'] . "</td>";
  echo "<td bgcolor=$color_status width=100>" . $row['fullname'] . "</td>";
  echo "<td bgcolor=$color_status width=200>" . $row['email'] . "</td>";
  echo "<td bgcolor=$color_status>" . $row['review_flag'] . "</td>";
  echo "<td bgcolor=$color_status width=217>" . $row['date_flag_update'] . "</td>";



  //echo $op;
  echo "</tr>";
    $no = $no+1;
  }
?>

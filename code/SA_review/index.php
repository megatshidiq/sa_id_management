<?

include 'dbc.php';
 $result1 = mysql_query("SELECT * FROM system_detail group by server_name");
 echo "<center>";
    while($row1 = mysql_fetch_array($result1))
  {

    echo "<p align='center'><a href='show_detail_review.php?sysid=".$row1['id']."'>".$row1['server_name']."</a></p>";

   }
   
   echo "/<center>";
?>

<?
//include '../checkip.php';
include 'dbc.php';


//$get_id = $_GET['id'];
//$get_email = $_GET['email'];
//$get_c = $_GET['c'];

####    get total count

$result = mysql_query("SELECT count(*) FROM user_detail WHERE review_flag=0");

    while($row = mysql_fetch_array($result))
  {
    $count= $row['count(*)'];

  }

#### check total and redirect
  
  if ($count == 0)
{
      echo "<meta http-equiv='REFRESH' content='0;url=selesai.php'>" ;
       die();
  }
#### GET DETAIL FROM TEMP TABLE

   $result1 = mysql_query("SELECT * FROM user_detail WHERE review_flag=0 LIMIT 1");

    while($row1 = mysql_fetch_array($result1))
  {
    $id = $row1['sysid'];
    $sys_nameid= $row1['sys_nameid'];
    $userid = $row1['userid'];
    $email_sent = trim(preg_replace('/\t+/', '', $row1['email']));
    $fullname = trim(preg_replace('/\t+/', '', $row1['fullname']));
    
   }

   #### GET DETAIL SERVER NAME

   $result2 = mysql_query("SELECT * FROM system_detail WHERE id='$sys_nameid'");

    while($row2 = mysql_fetch_array($result2))
  {
      $server_name= $row2['server_name'];
      $owner_email= $row2['email'];
      $owner_name= $row2['owner'];

   }
 //echo $email_sent;
 //echo $fullname;

//echo $email_sent;

   // die();
include 'mail1.php';
sleep(1);

mysql_query("UPDATE user_detail SET review_flag=1 WHERE sysid =$id");

?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<p align="center">
<img border="0" src="../images/loading-1%20(1).gif" width="508" height="381"></p>
<p align="center">
<marquee behavior="alternate" width="329" bgcolor="#C0C0C0">SENDING EMAIL IN PROGRESS</marquee>
</p>
<p align="center"><font color="#FF0000"><b><font size="5"><? echo $count;?></font> USER
REMAINING </b></font></p>

</body>

</html>



//<meta http-equiv='REFRESH' content='2;url=mail_sent.php'>

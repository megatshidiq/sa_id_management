<?

include '../dbc.php';
include '../dbc_mysql.php';


mysql_query("TRUNCATE bms_pass");

$stid = oci_parse($conn, 'select * from netxoper JOIN netxoper_detail ON netxoper.netxoper = netxoper_detail.netxoper ORDER BY NAME');
oci_execute($stid);


while (($row = oci_fetch_array($stid, OCI_BOTH))) {

 
$fullname = $row['FULL_NAME'];
$email = strtolower($row['EMAIL']);
$pass_old =$row['LAST_PASWRD'];
$pass_new =$row['PASSWORD'];

if($pass_old == $pass_new)
{
    //$flag =0;
    //$chk = "checked";
    mysql_query("INSERT INTO bms_pass (sysid, full_name, email) VALUES('', '$fullname', '$email')");
}
}
oci_free_statement($stid);
oci_close($conn);

header('Location: ../index.php');

?>



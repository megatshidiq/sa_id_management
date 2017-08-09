<?

//require("http://10.43.42.79/PHPMailer_v5.1/class.phpmailer.php");
require("class.phpmailer.php");

//include ('http://10.43.42.79/PHPMailer_v5.1/class.phpmailer.php');
/*$flag = $_GET['f'];

$body = $_GET['body'];
$subject = $_GET['subj'];
$ayat = $_GET['msg'];
$redirect = $_GET['r'];  */
$ayat_detail = '<p><font face="Arial"><b>Assalamualaikum w.b.t. dan Salam Sejahtera. '.$fullname.'</b><br>
&nbsp;<br>
Adalah dimaklumkan bahawa pihak System Administrator (SA), ANM akan mengemaskini
User ID Bagi System/Server</font></p>
<p><font face="Arial"><br><b> '.$server_name.'</b></font></p>
<p><font face="Arial"><br>
&nbsp;<br>
Sekiraya anda masih menggunakan lagi sistem-sistem tersebut, sila buat
pengesahan melalui <br>
<br>
<font color="#FF0000"><a href="http://10.43.16.66/review.php?systemid='.$sys_nameid.'&id='.$userid.'">
http://10.43.16.66/review.php?systemid='.$sys_nameid.'&id='.$userid.'</a> </font><br>
<br>
(Buka di Pelayan Web)<br>
<br>
<br>
Pengesahan perlu dibuat sebelum <b>22 March 2017,</b> kegagalan membuat pengesahan
dalam tempoh masa yang ditetapkan akan menyebabkan tuan/puan tidak dapat masuk
ke sistem-sistem tersebut.<br>
Kerjasama dari tuan/puan amat diperlukan bagi memastikan kelancaran tugas-tugas
harian.<br>
&nbsp;<br>
&nbsp;<br>
Untuk sebarang pertanyaan berkaitan dengan aktiviti ini, sila hubungi <b>SYSTEM ADMINISTRATOR</b>:<br>
&nbsp;<br><b>'.$owner_name.'</b> (<a href="mailto:'.$owner_email.'">'.$owner_email.')</a><br>

<br>
<br>
TERIMA KASIH</font><br>
&nbsp;</p>';


$email = $email_sent;

$body = "test";
$subject = "<NO REPLY> ".$server_name." : KEMASKINI ID PENGGUNA";
//$ayat = "<p>SELAMAT SEJAHTERA <b>".$fullname.",</b></p><p>&nbsp;</p><p>Anda didapati masih tidak mengemaskini <b>katalaluan</b> bagi System Broadband Management System (BMS),</p><p>Sila Kemaskini sebelum <b>1 July 2012,</b></p><p><b>Klik <a target='_blank' href='http://10.43.16.66/pass.jpg'>disini</a> untuk cara menukar katalaluan</b></p><p>Sebarang Pertanyaan Sila Hubungi System Administrator ( <a href='mailto:shidiq.bahar@tm.com.my'>shidiq.bahar@tm.com.my</a> )</p> <p>Terima Kasih.</p><p>&nbsp;</p>";
//$ayat = nl2br($ayat_detail);

$ayat = $ayat_detail;

$redirect = $_GET['r'];


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "10.48.7.3";
$mail->Port = 25;
//$mail->SMTPAuth = true;
$mail->Username = "TMMASTER\saalert";
$mail->Password = "tm1234";

$mail->From = "sa_alert@tm.com.my";
$mail->FromName = "System Admistrator Support System";
//$mail->AddReplyTo("shidiq.bahar@tm.com.my");
$mail->AddAddress($email);
$mail->IsHTML(true);

$mail->Subject = $subject;
$mail->Body = $ayat;

$mail->Send();
//echo "<center>ELOG EMAIL MODULE</center>";


?>


<?php 
session_start();
require_once('../config/connect.php');
if(!isset($_SESSION['username'])||$_SESSION['position']!=3){
	header('Location: ../index.php');

}
$accountid = $_SESSION['id'];

$bodysc = $_POST['body'];
$subjectsc = $_POST['subject'];
$studentid = $_POST['idst'];
$claimid = $_POST['idclaim'];
$sqle = "select * from account where AccountID='$studentid'";
$resulte = mysqli_query($connection,$sqle);
$rowe = mysqli_fetch_object($resulte);
if(isset($_POST['answerclaim'])){
	require '../lib/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hungntph00695@gmail.com';                 // SMTP username
$mail->Password = 'Hungdung810';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; 
$mail->CharSet = "utf8";
$mail->setFrom('hungntph00695@gmail.com');
$mail->addAddress($rowe->AccountEmail); 

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subjectsc;
$mail->Body    = $bodysc;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	$sqlsent = "UPDATE studentclaim SET Status ='1', Accepted ='2' Where StudentClaimID = '$claimid'";
  	$resultut = mysqli_query($connection,$sqlsent);
    echo "<script>";
							echo "alert('Sent Claim success');";    
							echo "countDown(100,'countdown');";
								echo "function countDown(t,i){";
									echo "var start = new Date().getTime();";
									echo "var interval = setInterval(function() {";
									echo "	var now = t-(new Date().getTime()-start);";
										echo "if(now >= 0) {";
											echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
										echo "}else{";
											echo "clearInterval(interval);";
												echo"window.location='viewclaim.php'";
										echo "}";
									echo "},100);";
								echo "}";
						
							echo "</script>";
}
}
?>

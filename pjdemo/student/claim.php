<?php 
session_start();
require_once('../config/connect.php');
if(!isset($_SESSION['username'])||$_SESSION['position']!=1){
	header('Location: ../index.php');

}
$accountid = $_SESSION['id'];

$bodys = $_POST['body'];
$title = $_POST['title'];
$subject = $_POST['subjectssj'];

if(isset($_POST['sentclaim'])){
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
$mail->addAddress('hungntph00695@gmail.com'); 

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'There is a claim from the students of the CMS system';
$mail->Body    = 'Have a request required to reply from Stuent just sending claim for you!';



if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	if($_FILES['file']['name'] != NULL){ // Đã chọn file
           // Tiến hành code upload file
		   if($_FILES['file']['type'] == "application/pdf" ||$_FILES["file"]["type"] == "image/gif"|| $_FILES["file"]["type"] == "image/jpeg"|| $_FILES["file"]["type"] == "image/png"|| $_FILES["file"]["type"] == "image/pjpeg"|| $_FILES['file']['type'] == "application/msword"||$_FILES['file']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
			){
			  // là file ảnh
			  // Tiến hành code upload
			  if($_FILES['file']['size'] > 1048576){
			      echo "File không được lớn hơn 1mb";
			  }else{
			      // file hợp lệ, tiến hành upload
			      $path = "../file_upload/teacher/"; // ảnh upload sẽ được lưu vào thư mục data
			      $tmp_name = $_FILES['file']['tmp_name'];
			      $name = $_FILES['file']['name'];
			      $type = $_FILES['file']['type']; 
			      $size = $_FILES['file']['size']; 
			      // Upload file
			      move_uploaded_file($tmp_name,$path.$name);
			      	$linkupload = $path.$name;
  						$sqlsent = "INSERT INTO studentclaim(StudentID,StudentClaimSubject,StudentClaimBody,SubjectID,Fileup) VALUES('$accountid','$title','$bodys','$subject','$linkupload')";
  						$resultut = mysqli_query($connection,$sqlsent);
				      	if($resultut){
							echo "<script>";
							echo "alert('Upload success');";
							echo "countDown(100,'countdown');";
								echo "function countDown(t,i){";
									echo "var start = new Date().getTime();";
									echo "var interval = setInterval(function() {";
									echo "	var now = t-(new Date().getTime()-start);";
										echo "if(now >= 0) {";
											echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
										echo "}else{";
											echo "clearInterval(interval);";
												echo"window.location='viewoldclaim.php'";
										echo "}";
									echo "},100);";
								echo "}";    
							echo "</script>";
							
							
						}else{
							echo "<script>";
							echo "alert('Upload Failed');";
							echo "countDown(100,'countdown');";
								echo "function countDown(t,i){";
									echo "var start = new Date().getTime();";
									echo "var interval = setInterval(function() {";
									echo "	var now = t-(new Date().getTime()-start);";
										echo "if(now >= 0) {";
											echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
										echo "}else{";
											echo "clearInterval(interval);";
												echo"window.location='form_upload.php?id=$subjectid'";
										echo "}";
									echo "},100);";
								echo "}";       
							echo "</script>";
						}
			  }
			}else{
			  echo "<script>";
							echo "alert('Type file is wrong');";
							echo "countDown(100,'countdown');";
								echo "function countDown(t,i){";
									echo "var start = new Date().getTime();";
									echo "var interval = setInterval(function() {";
									echo "	var now = t-(new Date().getTime()-start);";
										echo "if(now >= 0) {";
											echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
										echo "}else{";
											echo "clearInterval(interval);";
												echo"window.location='form_upload.php?id=$subjectid'";
										echo "}";
									echo "},100);";
								echo "}";       
							echo "</script>";
			}
	  }else{
           $linkupload = "";
  						$sqlsent = "INSERT INTO studentclaim(StudentID,StudentClaimSubject,StudentClaimBody,SubjectID,Fileup) VALUES('$accountid','$title','$bodys','$subject','$linkupload')";
  						$resultut = mysqli_query($connection,$sqlsent);
				      	if($resultut){
							echo "<script>";
							echo "alert('Upload success');";
							echo "countDown(100,'countdown');";
								echo "function countDown(t,i){";
									echo "var start = new Date().getTime();";
									echo "var interval = setInterval(function() {";
									echo "	var now = t-(new Date().getTime()-start);";
										echo "if(now >= 0) {";
											echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
										echo "}else{";
											echo "clearInterval(interval);";
												echo"window.location='viewoldclaim.php'";
										echo "}";
									echo "},100);";
								echo "}";    
							echo "</script>";
							
							
						}else{
							echo "<script>";
							echo "alert('Upload Failed');";
							echo "countDown(100,'countdown');";
								echo "function countDown(t,i){";
									echo "var start = new Date().getTime();";
									echo "var interval = setInterval(function() {";
									echo "	var now = t-(new Date().getTime()-start);";
										echo "if(now >= 0) {";
											echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
										echo "}else{";
											echo "clearInterval(interval);";
												echo"window.location='form_upload.php?id=$subjectid'";
										echo "}";
									echo "},100);";
								echo "}";       
							echo "</script>";
						}
      }
}
}
?>

<?php 
session_start();
require_once('../config/connect.php');
if(!isset($_SESSION['username'])||$_SESSION['position']!=1){
	header('Location: ../index.php');

}
$accountid = $_SESSION['id'];
$subjectid = $_POST['subjectid'];
$nameoffile = $_POST['nameoffile'];
$idt = $_POST['idt'];

	if(isset($_POST['ok'])){ // Người dùng đã ấn submit
      if($_FILES['file']['name'] != NULL){ // Đã chọn file
           // Tiến hành code upload file
		   if($_FILES['file']['type'] == "application/pdf"
			){
			  // là file ảnh
			  // Tiến hành code upload
			  if($_FILES['file']['size'] > 1048576){
			      echo "File không được lớn hơn 1mb";
			  }else{
			      // file hợp lệ, tiến hành upload
			      $path = "../file_upload/student/"; // ảnh upload sẽ được lưu vào thư mục data
			      $tmp_name = $_FILES['file']['tmp_name'];
			      $name = $_FILES['file']['name'];
			      $type = $_FILES['file']['type']; 
			      $size = $_FILES['file']['size']; 
			      // Upload file
			      move_uploaded_file($tmp_name,$path.$name);
			      	$linkupload = $path.$name;
  						$sqlut = "INSERT INTO studentupload(SubjectID,StudentID,Name,LinkUpload) VALUES('$subjectid','$accountid','$nameoffile','$linkupload')";
  						$resultut = mysqli_query($connection,$sqlut);
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
												echo"window.location='courseview.php?idsj=$subjectid&idt=$idt'";
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
												echo"window.location='form_upload.php?idsj=$subjectid&ida=$accountid&idt=$idt'";
										echo "}";
									echo "},100);";
								echo "}";   
							echo "</script>";
						}
			  }
			}else{
			  echo "<script>";
							echo "alert('file wrong');"; 
							echo "countDown(100,'countdown');";
								echo "function countDown(t,i){";
									echo "var start = new Date().getTime();";
									echo "var interval = setInterval(function() {";
									echo "	var now = t-(new Date().getTime()-start);";
										echo "if(now >= 0) {";
											echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
										echo "}else{";
											echo "clearInterval(interval);";
												echo"window.location='form_upload.php?idsj=$subjectid&ida=$accountid&idt=$idt'";
										echo "}";
									echo "},100);";
								echo "}";   
							echo "</script>";
			}
	  }else{
           echo "Please input file";
      }
  }
  
?>

<?php 
session_start();
require_once('../config/connect.php');
if(!isset($_SESSION['username'])||$_SESSION['position']!=1){
	header('Location: ../index.php');

}
$accountid = $_SESSION['id'];
$id = $_POST['ideds'];
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
  						$sqlsent = "UPDATE studentclaim SET Fileup ='$linkupload' WHERE StudentClaimID = '$id' ";
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
							echo "alert('update evident Failed');";
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
          echo "<script>";
							echo "alert('request file input');";
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

?>

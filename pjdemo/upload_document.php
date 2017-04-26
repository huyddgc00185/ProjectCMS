<?php 
session_start();
require_once('../config/connect.php');
if(!isset($_SESSION['username'])||$_SESSION['position']!=2){
	header('Location: ../index.php');

}
$accountid = $_SESSION['id'];
$subjectid = $_POST['subjectid'];
$nameoffile = $_POST['nameoffile'];
$folderfile = $_POST['folderfile'];

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
			      $path = "../file_upload/teacher/"; // ảnh upload sẽ được lưu vào thư mục data
			      $tmp_name = $_FILES['file']['tmp_name'];
			      $name = $_FILES['file']['name'];
			      $type = $_FILES['file']['type']; 
			      $size = $_FILES['file']['size']; 
			      // Upload file
			      move_uploaded_file($tmp_name,$path.$name);
			      	$linkupload = $path.$name;
  						$sqlu = "INSERT INTO teacherupload (SubjectID,AccountID,Name,folder,LinkUploadTeacher) VALUES('$subjectid','$accountid','$nameoffile','$folderfile','$linkupload')";
  						$resultu = mysqli_query($connection,$sqlu);
				      	if($resultu){
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
												echo"window.location='courseview.php?id=$subjectid'";
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
           echo "Please input file";
      }
  }
  
?>

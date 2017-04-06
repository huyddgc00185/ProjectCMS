<?php 

session_start();

require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=1){

	header('Location: ../index.php');



}

if(isset($_POST) & !empty($_POST)){

	$title = $_POST['title'];

	$messagefb = $_POST['messagefb'];

	$selecte = $_POST['selecte'];

	$accountid = $_SESSION['id'];

$sql = "INSERT INTO studentfeedback(StudentID, TeacherID, MessageTitle, MessageContent)VALUES('$accountid','$selecte','$title','$messagefb' )";

	$result = mysqli_query($connection, $sql);

	if($result){
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
													echo"window.location='viewfeedback.php'";
											echo "}";
										echo "},100);";
									echo "}";
						
							echo "</script>";

	}else{

		$fmsg = "User sent feedback failed";

		header('Location:index.php');

	}

}





?>
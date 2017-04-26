<?php 

session_start();

require_once('../../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=3){

	header('Location: ../index.php');



}

if(isset($_POST) & isset($_POST['editaccount'])){
	$idac = $_POST['idaccount'];
	$account = $_POST['account'];
	$fullname = $_POST['name'];
	$position = $_POST['position'];
	$email = mysqli_real_escape_string($connection, $_POST['email']);

	$password = $_POST['password'];

	$address = $_POST['address'];

	$phone = $_POST['phone'];

	$day = $_POST['day'];



  	

$sql = "UPDATE `account` SET  Position = '$position',AccountFullName = '$fullname',AccountAcc = '$account',AccountEmail ='$email', AccountPassword ='$password', AccountAddress ='$address', PhoneNumber ='$phone', DateOfBirth ='$day' where AccountID = '$idac'";

	$result = mysqli_query($connection, $sql);

	if($result){

		echo "<script>";
								echo "alert('Edit Account  success');";    
								echo "countDown(100,'countdown');";
									echo "function countDown(t,i){";
										echo "var start = new Date().getTime();";
										echo "var interval = setInterval(function() {";
										echo "	var now = t-(new Date().getTime()-start);";
											echo "if(now >= 0) {";
												echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
											echo "}else{";
												echo "clearInterval(interval);";
													echo"window.location='../viewall.php'";
											echo "}";
										echo "},100);";
									echo "}";
						
							echo "</script>";

	}else{

		echo "<script>";
								echo "alert('Edit Account Failed');";    
								echo "countDown(100,'countdown');";
									echo "function countDown(t,i){";
										echo "var start = new Date().getTime();";
										echo "var interval = setInterval(function() {";
										echo "	var now = t-(new Date().getTime()-start);";
											echo "if(now >= 0) {";
												echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
											echo "}else{";
												echo "clearInterval(interval);";
													echo"window.location='../viewall.php'";
											echo "}";
										echo "},100);";
									echo "}";
						
							echo "</script>";

	}

}





?>
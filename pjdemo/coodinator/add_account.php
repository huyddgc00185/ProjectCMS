<?php 

session_start();

require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=3){

	header('Location: ../index.php');



}

if(isset($_POST) & isset($_POST['addaccount'])){
	$account = $_POST['account'];
	$fullname = $_POST['name'];
	$position = $_POST['position'];
	$email = mysqli_real_escape_string($connection, $_POST['email']);

	$password = $_POST['password'];

	$address = $_POST['address'];

	$phone = $_POST['phone'];

	$day = $_POST['day'];



  	

$sql = "INSERT INTO account(AccountAcc,AccountPassword,AccountFullName,DateOfBirth,AccountAddress,AccountEmail,PhoneNumber,Position)VALUES('$account','$password','$fullname','$day','$address','$email','$phone','$position')";

	$result = mysqli_query($connection, $sql);

	if($result){

		echo "<script>";
								echo "alert('Add New Account  success');";    
								echo "countDown(100,'countdown');";
									echo "function countDown(t,i){";
										echo "var start = new Date().getTime();";
										echo "var interval = setInterval(function() {";
										echo "	var now = t-(new Date().getTime()-start);";
											echo "if(now >= 0) {";
												echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
											echo "}else{";
												echo "clearInterval(interval);";
													echo"window.location='viewall.php'";
											echo "}";
										echo "},100);";
									echo "}";
						
							echo "</script>";

	}else{

		echo "<script>";
								echo "alert('Add New Account Failed');";    
								echo "countDown(100,'countdown');";
									echo "function countDown(t,i){";
										echo "var start = new Date().getTime();";
										echo "var interval = setInterval(function() {";
										echo "	var now = t-(new Date().getTime()-start);";
											echo "if(now >= 0) {";
												echo "document.getElementById(i).innerHTML = Math.floor(now/1000);";
											echo "}else{";
												echo "clearInterval(interval);";
													echo"window.location='viewall.php'";
											echo "}";
										echo "},100);";
									echo "}";
						
							echo "</script>";

	}

}





?>
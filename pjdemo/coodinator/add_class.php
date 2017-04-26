<?php 

session_start();

require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=3){

	header('Location: ../index.php');



}

if(isset($_POST) & isset($_POST['addclass'])){

	$nameclass = $_POST['nameclass'];

	$selectsm = $_POST['selectsm'];


$sql = "INSERT INTO classes(ClassName, SemesterID)VALUES('$nameclass','$selectsm')";

	$result = mysqli_query($connection, $sql);

	if($result){
							echo "<script>";
								echo "alert('Add New Class success');";    
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
								echo "alert('Add New Class Failed');";    
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
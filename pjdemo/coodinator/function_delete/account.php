<?php 

session_start();

require_once('../../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=3){

	header('Location: ../index.php');



}
	$id = $_GET['idst'];


$sql = "DELETE FROM account WHERE AccountID='$id'";

	$result = mysqli_query($connection, $sql);

							echo "<script>";
								echo "alert('Delete Account success');";    
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

	






?>
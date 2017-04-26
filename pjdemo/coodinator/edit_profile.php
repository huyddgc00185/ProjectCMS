<?php 

session_start();

require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=3){

	header('Location: ../index.php');



}

if(isset($_POST) & !empty($_POST)){

	$email = mysqli_real_escape_string($connection, $_POST['email']);

	$password = $_POST['password'];

	$address = $_POST['address'];

	$phone = $_POST['phone'];

	$day = $_POST['day'];



  	$id=$_GET['id'];

$sql = "UPDATE `account` SET AccountEmail ='$email', AccountPassword ='$password', AccountAddress ='$address', PhoneNumber ='$phone', DateOfBirth ='$day' where AccountID = '$id'";

	$result = mysqli_query($connection, $sql);

	if($result){

		$smsg = "User update successfull";

		 header('Location:index.php');

	}else{

		$fmsg = "User update failed";

	}

}





?>
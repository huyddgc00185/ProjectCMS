<?php 

session_start();

require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=2){

	header('Location: ../index.php');



}

$id = $_GET['id'];

$sqldelfb = "DELETE FROM studentfeedback where StudentFeedbackID = '$id'";
mysqli_query($connection,$sqldelfb);
header('Location:feedback.php');






?>
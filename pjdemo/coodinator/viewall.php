<?php 

session_start();

require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=3){

	header('Location: ../index.php');



}else{

	$id =$_SESSION['id'];

      $sqls="SELECT * FROM Account where AccountID = $id";

			$results = mysqli_query($connection,$sqls);

			$row=mysqli_fetch_object($results);

}

$id =$_SESSION['id'];

$name = $_SESSION['username'];

$fullname = $_SESSION['fullname'];

$email = $_SESSION['email'];



?>



<!DOCTYPE html>

<html>



<head>

	<title>index</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>

	<link rel="stylesheet" type="text/css" href="../css/style.css"/>

	<link rel="stylesheet" type="text/css" href="../font/font-awesome/css/font-awesome.min.css"/>

	<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->

    <link rel="stylesheet" type="text/css" href="../css/style2.css" />

    <link rel="shortcut icon" href="../favicon.ico">



	<script src="../jquery/jquery-3.1.1.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="../jquery/jquery.cslider.js"></script>

	<script type="text/javascript" src="../jquery/modernizr.custom.28468.js"></script>

	<script src="../jquery/bootstrap.min.js" type="text/javascript"></script>



	<noscript>

		<link rel="stylesheet" type="text/css" href="../css/nojs.css" />

	</noscript>



	<script type="text/javascript">

		$(function() {

		    var $modalAnimateTime = 300;

		    var $msgAnimateTime = 150;

		    var $msgShowTime = 2000;

		    

		    function modalAnimate ($oldForm, $newForm) {

		        var $oldH = $oldForm.height();

		        var $newH = $newForm.height();

		        $divForms.css("height",$oldH);

		        $oldForm.fadeToggle($modalAnimateTime, function(){

		            $divForms.animate({height: $newH}, $modalAnimateTime, function(){

		                $newForm.fadeToggle($modalAnimateTime);

		            });

		        });

		    }

		    

		    function msgFade ($msgId, $msgText) {

		        $msgId.fadeOut($msgAnimateTime, function() {

		            $(this).text($msgText).fadeIn($msgAnimateTime);

		        });

		    }

		    

		    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {

		        var $msgOld = $divTag.text();

		        msgFade($textTag, $msgText);

		        $divTag.addClass($divClass);

		        $iconTag.removeClass("glyphicon-chevron-right");

		        $iconTag.addClass($iconClass + " " + $divClass);

		        setTimeout(function() {

		            msgFade($textTag, $msgOld);

		            $divTag.removeClass($divClass);

		            $iconTag.addClass("glyphicon-chevron-right");

		            $iconTag.removeClass($iconClass + " " + $divClass);

		  		}, $msgShowTime);

		    }



		    $('#da-slider').cslider({

				autoplay	: true,

				// slideshow on / off

				

				interval	: 4000  

				// time between transitions				

			});

		});

	</script>

</head>

<body>

	<div class="wrapper">

		<div id="header">

			<div class="container">

				<div class="row">

					<div class="col-md-5 col-sm-12 col-xs-12">

						<div class="logo">

							<a href="#"><img src="../images/logo.jpg"></a>

							<span>COURSE MANAGEMENT SYSTEM</span>

						</div>					

					</div>

					<div class="col-md-2 col-sm-4 col-xs-4">

						<div class="app-mb">

							<h3>Mobie App</h3>

							<ul>

								<li>

									<a class="ap" href="#"><i class="fa fa-apple" aria-hidden="true"></i></a>

								</li>

								<li>

									<a class="and" href="#"><i class="fa fa-android" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>						

					</div>

					<div class="col-md-2 col-sm-4 col-xs-4">

						<div class="app-mb">

							<h3>Social Networks</h3>

							<ul>

								<li>

									<a class="tw" class="ap" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

								</li>

								<li>

									<a class="ytb" class="and" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

								</li>

								<li>

									<a class="fb" class="and" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>		

					</div>

					<div class="col-md-3 col-sm-4 col-xs-4">

						<div class="login-user">

							<a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i><?php echo$fullname;?></a>

						</div>						

					</div>

				</div>

			</div>

		</div>

		<div id="na">

			<div class="container">

				<nav class="navbar navbar-default">

					<div class="container-fluid">

	<!-- Brand and toggle get grouped for better mobile display -->

						<div class="navbar-header">

							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

								<span class="sr-only">Toggle navigation</span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

							</button>

							<a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>

						</div>

	<!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav">

								<li><a href="#">Link</a></li>

								<li class="dropdown">

									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>

									<ul class="dropdown-menu">

										<li><a href="#">Action</a></li>

										<li><a href="#">Another action</a></li>

										<li><a href="#">Something else here</a></li>

									</ul>

								</li>

							</ul>

							<form class="navbar-form navbar-left">

								<div class="form-group">

									<input type="text"  class="form-control">

								</div>

								<button type="submit" class="btn btn-info">Search</button>

							</form>

							<ul class="nav navbar-nav navbar-right">

								<li>

									<div class="login-pop">

				                        <a href="../logout.php" class="loginButton" >Log out</a>

				                    </div>

								</li>	

							</ul>

						</div><!-- /.navbar-collapse -->

					</div><!-- /.container-fluid -->

				</nav>

			</div>

		</div>

		<div id="main">
			<div class="container-fluid">
				<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>				  
					  <li class="active">Manager</li>
					  <li><a href="profile.php">View Profile</a></li>
				</ol>
				<div class="row">
					<div class="col-md-2" >

					<h4 class="title-tbl-viewout">Table Semester</h4><a href="form_add_semester.php">Add New</a>
						<table  class="tbl-viewout" >
							<tr>
								<th class="thfu">Stt</th>
								<th class="thfu">SemesterNo</th>
								<th  colspan="2">Action</th>
							</tr>
							<?php 
							$sqlsem = "select * from semester";
							$resultsem = mysqli_query($connection,$sqlsem);
							$isem=0;
							while ($rowsem=mysqli_fetch_object($resultsem)) {
									$isem++;
								?>

								<tr >
									<td><?php echo $isem; ?></td>
									<td><?php echo $rowsem->SemesterNo; ?></td>
									<td class="thfu"><a href="function_delete/semester.php?idsem=<?php echo$rowsem->SemesterID?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
									<td><a class="thfu" href="form_edit_semester.php?idsem=<?php echo$rowsem->SemesterID?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
								</tr>
							<?php } ?>
							
						</table>
					</div>
					<div class="col-md-3">
					<h4 class="title-tbl-viewout">Table Class</h4><a href="form_add_class.php">Add New</a>
						<table class="tbl-viewout">
							<tr>
								<th class="thfu">Stt</th>
								<th class="thfu">Class Name</th>
								<th class="thfu">SemesterNo</th>
								<th colspan="2">Action</th>
							</tr>
							<?php 
							$sqlcl = "select * from classes inner join semester on classes.SemesterID = semester.SemesterID";
							$resultcl = mysqli_query($connection,$sqlcl);
							$icl=0;
							while ($rowcl=mysqli_fetch_object($resultcl)) {
									$icl++;
								?>
							<tr>
								<td><?php echo$icl?></td>
								<td><?php echo$rowcl->ClassName?></td>
								<td><?php echo$rowcl->SemesterNo?></td>
								<td><a  href="function_delete/class.php?idcl=<?php echo$rowcl->ClassID?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								<td><a href="form_edit_class.php?idcl=<?php echo$rowcl->ClassID?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<div class="col-md-7">
					<h4 class="title-tbl-viewout">Table Subject</h4><a href="form_add_subject.php">Add New</a>
						<table class="tbl-viewout">
							<tr>
								<th>Stt</th>
								<th style="width: 400px" class="thfu">Subject Name</th>
								<th class="thfu">Class Name</th>
								<th class="thfu"> Teacher Name</th>
								<th colspan="2">Action</th>
							</tr>
							<?php 
							$sqlsj = "SELECT * FROM subjects JOIN classes on subjects.ClassID = classes.ClassID JOIN account on subjects.AccountID = account.AccountID";
							$resultsj = mysqli_query($connection,$sqlsj);
							$isj=0;
							while ($rowsj=mysqli_fetch_object($resultsj)) {
									$isj++;
								?>
							<tr>
								<td><?php echo$isj?></td>
								<td><?php echo$rowsj->SubjectName?></td>
								<td><?php echo$rowsj->ClassName?></td>
								<td><?php echo$rowsj->AccountFullName?></td>
								<td><a href="function_delete/subject.php?idsj=<?php echo$rowsj->SubjectID?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								<td><a href="form_edit_subject.php?idsj=<?php echo$rowsj->SubjectID?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
					<h4 class="title-tbl-viewout">Table Account</h4><a href="form_add_account.php">Add New</a>
						<table   class="tbl-viewout" >
							<tr>
								<th>Stt</th>
								<th class="thfu">Account Acc</th>
								
								<th class="thfu">Full Name</th>
								<th>Birthday</th>
								<th>Address</th>
								<th class="thfu">Email</th>
								<th>Phone</th>
								<th>Position</th>
								<th colspan="2">Action</th>
							</tr >
							<?php 
							$sqlst = "SELECT * FROM account where Position <3";
							$resultst = mysqli_query($connection,$sqlst);
							$ist=0;
							while ($rowst=mysqli_fetch_object($resultst)) {
									$ist++;
								?>
							<tr >
								<td><?php echo$ist?></td>
								<td><?php echo$rowst->AccountAcc?></td>
								
								<td><?php echo$rowst->AccountFullName?></td>
								<td><?php echo$rowst->DateOfBirth?></td>
								<td><?php echo$rowst->AccountAddress?></td>
								<td><?php echo$rowst->AccountEmail?></td>
								<td><?php echo$rowst->PhoneNumber?></td>
								<td>
									<?php
									 	if(($rowst->Position)=='1'){
									 		echo'Student';
									 	}else if(($rowst->Position)=='2'){
									 		echo'Teacher';	
									 	}
									 ?>
								</td>
								<td><a href="function_delete/account.php?idst=<?php echo$rowst->AccountID?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								<td><a href="form_edit_account.php?idst=<?php echo$rowst->AccountID?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<div class="col-md-4">
					<h4 class="title-tbl-viewout">Table Student Learn About Subject</h4><a href="form_add_student_subject.php">Add New</a>
						<table   class="tbl-viewout" >
							<tr>
								<th>Stt</th>
								<th>Account Acc</th>
								<th>Full Name</th>
								<th>Subject</th>
								<th colspan="2">Action</th>
							</tr >
							<?php 
							$sqlst = "SELECT * FROM studentintosubject JOIN account on studentintosubject.StudentID = account.AccountID JOIN subjects on studentintosubject.SubjectID = subjects.SubjectID ORDER BY StudentIntoSubjectID";
							$resultst = mysqli_query($connection,$sqlst);
							$ist=0;
							while ($rowst=mysqli_fetch_object($resultst)) {
									$ist++;
								?>
							<tr >
								<td><?php echo$ist?></td>
								<td><?php echo$rowst->AccountAcc?></td>
								<td><?php echo$rowst->AccountFullName?></td>								
								<td><?php echo$rowst->SubjectName?></td>					
								
								<td><a href="function_delete/studentsubject.php?idss=<?php echo$rowst->StudentIntoSubjectID?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								<td><a href="form_edit_student_subject.php?idsss=<?php echo$rowst->StudentIntoSubjectID?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					
				</div>	

			</div>
		</div>

		

	</div>

</body>

</html>
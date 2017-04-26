<?php

session_start();



require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=1){

	header('Location: ../index.php');

	

}

     

$id =$_SESSION['id'];

$name = $_SESSION['username'];

$fullname = $_SESSION['fullname'];

$email = $_SESSION['email'];



 $sqls="SELECT * FROM Account where AccountID = $id";

			$results = mysqli_query($connection,$sqls);

			$row=mysqli_fetch_object($results);

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

							<a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i><?php echo $fullname ;?></a>

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

							<a class="navbar-brand" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>

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

							
							<form action="search.php" method="POST" class="navbar-form navbar-left">

								<div class="form-group">

									<input name="searchcate" type="text" class="form-control">

								</div>

								<button type="submit" class="btn btn-default">Search</button>

							</form>

							<ul class="nav navbar-nav navbar-right">

								<li>

									<div class="login-pop">

				                         <a href="../logout.php"  data-target="#login-modal">Log out</a>

				                    </div>

								</li>	

							</ul>

						</div><!-- /.navbar-collapse -->

					</div><!-- /.container-fluid -->

				</nav>

			</div>

		</div>

		<div id="main">

			<div class="container">

				<ol class="breadcrumb">

				  <li><a href="index.php">Home</a></li>				  

				  <li>My Profile Setting</a></li>

				  <li ><a href="form_edit_profile.php">Edit Profile</a></li>

				</ol>

				<div class="row">

					<div class="col-md-8">

						<div class="row">

							<div class="col-md-2 col-sm-2">

								

							</div>

							<div class="col-md-10 col-sm-10">

								<div class="content-user">
									<table class="table">
										<tr>
											<td><label>STT</label></td>
											<td><label>Title</label></td>
											<td><label>Body</label></td>
											<td><label>Subject</label></td>
											<td><label>File</label></td>
											<td><label>Time post</label></td>
											<td><label>Status</label>
											<td><label>Accepted?</label>
											
										</tr>
										<?php 
										$sqlclaim = "select * from studentclaim join subjects on studentclaim.SubjectID = subjects.SubjectID where StudentID = $id";
										$resultclaim = mysqli_query($connection,$sqlclaim);
										$i = 0;
										while($rowfb = mysqli_fetch_object($resultclaim)){
										$i++;?>
										<tr>
											<td><?php echo$i ?></td>
											<td><?php echo$rowfb->StudentClaimSubject ?></td>
											<td><?php echo$rowfb->StudentClaimBody ?></td>
											<td><?php echo$rowfb->SubjectName ?></td>
											<td><?php 
													if($rowfb->Fileup ==""){
														$date_upload = strtotime($rowfb->StudentClaimTime);
														$date_deadline = strtotime(date('Y-m-d'));
														$datediff = abs($date_deadline-$date_upload);
														$daypass = floor($datediff / (60*60*24));
														if($daypass>3){?>
															No File(you can't upload evident because over 3 day)
												<?php }else{ ?>
															<a href="form_edit_claim.php?id=<?php echo$rowfb->StudentClaimID?>">No File(you can upload evident)</a>
													<?php } ?>

														
											<?php }else{?>
														<a href="<?php echo$rowfb->Fileup ?>">File Uploaded</a>
													<?php }
												?>
												</td>
											<td><?php echo$rowfb->StudentClaimTime ?></td>
											
											<td><?php 
													if($rowfb->Status ==0){
														echo'<b style="color:red">Waiting...</b>';
													}else{
														echo'<b style="color:green">Done</b>';
													}


												?></td>
												<td><?php 
													if($rowfb->Accepted ==0){
														echo'<b style="color:red">Waiting...</b>';
													}else if($rowfb->Accepted ==1){
														echo'<b style="color:green">Yes</b>';
													}else{
														echo'<b style="color:green">Not</b>';
													}


												?></td>
											
										</tr>
										<?php } ?>
									</table>
									
									

								</div>

							</div>

						</div>

					</div>

					<div class="col-md-4">
						<div class="administration">
							<h3><i class="fa fa-cogs" aria-hidden="true"></i>MANAGER INFORMATION</h3>
							<ul>
								<li>
									<i class="fa fa-circle-o" aria-hidden="true"></i><a href="form_edit_profile.php">Edit profile</a>
								</li>
								<li><i class="fa fa-circle-o" aria-hidden="true"></i><a href="#">Claim</a>
									<ul style="margin-left:17px">
										<i class="fa fa-circle-o" aria-hidden="true"></i><a href="form_claim.php">Upload Claim</a>

									</ul>
									<ul style="margin-left:17px">
										<i class="fa fa-circle-o" aria-hidden="true"></i><a href="viewoldclaim.php">View Claim</a>
									</ul>
									
								</li>
								<li><i class="fa fa-circle-o" aria-hidden="true"></i><a href="#">Feedback to teacher</a>
									<ul style="margin-left:17px">
										<i class="fa fa-circle-o" aria-hidden="true"></i><a href="form_feedback.php">Upload feedback</a>

									</ul>
									<ul style="margin-left:17px">
										<i class="fa fa-circle-o" aria-hidden="true"></i><a href="viewfeedback.php">View feedback</a>
									</ul>
									
								</li>
								<li>
									<i class="fa fa-circle-o" aria-hidden="true"></i><a href="categories.php">My Categories</a>
								</li>
							</ul>
						</div>
					</div>

				</div>

			</div>

		</div>

		<div id="footer">

			<div class="container">

				© 2017 FPT UNIVERSITY

			</div>

		</div>	

	</div>

</body>

</html>
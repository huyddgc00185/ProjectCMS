<?php 

session_start();

require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=3){

	header('Location: ../index.php');



}else{

	$id =$_SESSION['id'];

      $sqls="SELECT * FROM account where AccountID = $id";

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

				                        <a href="../logout.php" class="loginButton" role="button" >Log out</a>

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

				  

				  

				</ol>

				<div class="edit-pf">

					

					<div class="row">

						<div class="col-md-8">

							<form class="form-signin" method="POST" enctype="multipart/form-data" action="add_account.php">

								<ul>

									<li>
									
										<label>

											Account:

											<img src="http://cms.fpt.edu.vn/elearning/theme/image.php/essential/core/1486604992/req"> :

										</label>
										<input type="text" name="account"  class="form-control"  required>

										

									</li>

									<li>

										<label>

											Name

											<img src="http://cms.fpt.edu.vn/elearning/theme/image.php/essential/core/1486604992/req"> :

										</label>
										<input type="text" name="name"  class="form-control"  required>

										

										

									</li>
										
									<li>

										<label>

											Position:

											<img src="http://cms.fpt.edu.vn/elearning/theme/image.php/essential/core/1486604992/req"> :

										</label>

									<select name="position" >
												  <option value="1">Student</option>
												  <option value="2">Teacher</option>
												  <option value="3">Coordinator</option>
												  
												</select>

									</li>

									

									

									<li>

										<label>

											Email

											<img src="http://cms.fpt.edu.vn/elearning/theme/image.php/essential/core/1486604992/req"> :

										</label>

										<input type="email" name="email" id="inputEmail" class="form-control"  placeholder="Email address" required autofocus>

									</li>

									<li>

										<label>

											Password:

											<img src="http://cms.fpt.edu.vn/elearning/theme/image.php/essential/core/1486604992/req"> :

										</label>

										<input type="text" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

									</li>

									<li>

										<label>

											Address:

											<img src="http://cms.fpt.edu.vn/elearning/theme/image.php/essential/core/1486604992/req"> :

										</label>

										<input type="text" name="address"  class="form-control"  required>

									</li>

									<li>

										<label>

											Phone:

											<img src="http://cms.fpt.edu.vn/elearning/theme/image.php/essential/core/1486604992/req"> :

										</label>

										<input type="text" name="phone" class="form-control" required>

									</li>

									<li>

										<label>

											Date of birth:

											<img src="http://cms.fpt.edu.vn/elearning/theme/image.php/essential/core/1486604992/req"> :

										</label>

										<input class="form-control" id="date"  name="day"  type="text"/>

									</li>

								</ul>

								<button class="btn-form" type="submit" name="addaccount">Add new account</button>

							</form>

						</div>

						<div class="col-md-4">

							<div class="administration">

								<h3><i class="fa fa-cogs" aria-hidden="true"></i>MANAGER INFORMATION</h3>

								<ul>

									<li>

										<i class="fa fa-circle-o" aria-hidden="true"></i><a href="form_edit_profile.php">Edit profile</a>

									</li>

									<li><i class="fa fa-circle-o" aria-hidden="true"></i><a href="viewclaim.php">View Claim</a>

																			

									</li>

										

									</li>

									<li>

										<i class="fa fa-circle-o" aria-hidden="true"></i><a href="viewall.php">Manager view all</a>

									</li>

								</ul>

							</div>

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
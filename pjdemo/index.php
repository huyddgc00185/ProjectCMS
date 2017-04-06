<?php
session_start();
require_once('config/connect.php');
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = ($_POST['password']);

	$sql = "SELECT * FROM `account` WHERE AccountAcc='$username' AND AccountPassword='$password'";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);
	if($count == 1){
		$row = mysqli_fetch_object($result);
		$_SESSION['username'] = $username;
		$_SESSION['position'] =$row->Position;
		$_SESSION['id'] = $row->AccountID;
		$_SESSION['fullname']=$row->AccountFullName;
		$_SESSION['email'] = $row->AccountEmail;
	}else{
		echo "<script>";
		echo "alert('Invalid Username/Password');";    
		echo "</script>";
	}
}
if(isset($_SESSION['username'])){

	switch ($_SESSION['position']) {
    case "1":
        header('Location:student/index.php');
        break;
    case "2":
        header('Location:teacher/index.php');
        break;
    case "3":
        header('Location:coodinator/index.php');
        break;
    case "4":
        header('Location:manager/index.php');
        break;
    default:
       header('Location:index.php');
}	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="font/font-awesome/css/font-awesome.min.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="shortcut icon" href="../favicon.ico">

	<script src="jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="jquery/jquery.cslider.js"></script>
	<script type="text/javascript" src="jquery/modernizr.custom.28468.js"></script>
	<script src="jquery/bootstrap.min.js" type="text/javascript"></script>

	<noscript>
		<link rel="stylesheet" type="text/css" href="css/nojs.css" />
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
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                 <!-- Begin # Login Form -->
                    <form id="login-form" method="POST">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg">
                                	<i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                                <span id="text-login-msg">Input username and password.</span>
                            </div>
				    		<input name="username" id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
				    		<input name="password" id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    </form>                 
                </div>
                <!-- End # DIV Form -->              
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="logo">
							<a href="#"><img src="images/logo.jpg"></a>
							<span>COURSE MANAGEMENT SYSTEM</span>
						</div>					
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
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
					<div class="col-md-2 col-sm-6 col-xs-6">
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
							<a class="navbar-brand" href="index(login).php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
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
									<input type="text" class="form-control">
								</div>
								<button type="submit" class="btn btn-default">Search</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<div class="login-pop">
				                        <a href="#" class="loginButton" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
				                    </div>
								</li>	
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				<!-- <div class="row">
					<div class="col-md-6 col-xs-6">
						<div class="el">						
							eLearning
						</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="login-pop">
	                        <a href="#" class="loginButton" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
	                    </div>
					</div>
				</div> -->
			</div>
		</div>
		<div id="banner">
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Warm welcome</h2>
					<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
					<div class="da-img"><img src="images/1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Easy management</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<div class="da-img"><img src="images/2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Revolution</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<div class="da-img"><img src="images/3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Quality Control</h2>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<div class="da-img"><img src="images/4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
		</div>
		<div id="sv">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service">
							<h5><i class="fa fa-star" aria-hidden="true"></i>Client</h5>
							<div class="image-sv">
								<img src="images/imgsv.png">
							</div>
							<div class="right">
								<a href="#">View</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service">
							<h5><i class="fa fa-star" aria-hidden="true"></i>Client</h5>
							<div class="image-sv">
								<img src="images/imgsv.png">
							</div>
							<div class="right">
								<a href="#">View</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="service">
							<h5><i class="fa fa-star" aria-hidden="true"></i>Client</h5>
							<div class="image-sv">
								<img src="images/imgsv.png">
							</div>
							<div class="right">
								<a href="#">View</a>
							</div>
						</div>
					</div>
				</div>
				<div class="dot"></div>
			</div>
		</div>
		<div id="main">
			<div class="container">
				<div class="content">
				<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Courses</h3>
					<ul>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">Fundamental</a>
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">Examination</a>
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">Software Engineering</a>
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">Greenwich Programme</a>
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">Business Administration</a>
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">International Programs</a>
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">FSchool</a>
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">Master of Software Engineering</a>
						</li>
						<li>
							<i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="#">Professional Certification</a>
						</li>
					</ul>
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
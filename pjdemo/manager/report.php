<?php 

session_start();

require_once('../config/connect.php');

if(!isset($_SESSION['username'])||$_SESSION['position']!=4){

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

    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

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
					<div class="col-md-4" >
					<div id="container1" >
					<br/>
					<p></p>
					<br/>
					<p></p>
					<br/>

						This comparsion is showing how many CLAIM is sent in each subject.
The purpose of this comparsion is compare how many Claim existed in each subject.
Manager can view the comparsion to evaluate the problem in here. If the Claim is just 1 or 2 Claim, it reflect is everything is fine. But if the Claim appear too much in any subject, it reflect that we got a problems in here, why too many students send Claim to this subject. From that, Manager will meet the Coordinator, Teacher of this subject to dicuss, exchange and give out the solution to solve the problem is existing.
					</div>

					</div>
					<div class="col-md-8">
					<div id="container2" style="min-width: 800px; height: 400px; max-width: 600px; margin: 0 auto" >

					<?php 
						$notevident = mysqli_num_rows(mysqli_query($connection,('SELECT * FROM `studentclaim` WHERE Fileup =""')));
						$notaccept = mysqli_num_rows(mysqli_query($connection,('SELECT * FROM `studentclaim` WHERE Status ="1" and Accepted ="2"')));
						$accept = mysqli_num_rows(mysqli_query($connection,('SELECT * FROM `studentclaim` WHERE Status ="1" and Accepted ="1"')));
						
						$sqlover = "SELECT * FROM `studentclaim` WHERE Status ='0' and Accepted ='0'";
						$resultover = mysqli_query($connection,$sqlover);
						$over14 = 0;
						$waiting =0;
						while ($rowsover = mysqli_fetch_object($resultover)) {
							$date_upload = strtotime($rowsover->StudentClaimTime);
							$date_deadline = strtotime(date('Y-m-d'));
							$datediff = abs($date_deadline-$date_upload);
							$daypass = floor($datediff / (60*60*24));
							if($daypass >14){
								$over14 = $over14 + 1;
							}
							if($daypass<14){
								$waiting = $waiting+1;
							}
							
						}

						$total = $notaccept + $notevident + $accept +$waiting + $over14;
						$notevidentpersen = ($notevident *100)/$total;
						$notacceptpersen = ($notaccept*100)/$total;
						$acceptpersen = ($accept *100)/$total;
						$waitingpersen = ($waiting *100)/$total;
						$over14persen = ($over14 *100)/$total;
					?>
					<script type="text/javascript">
							 Highcharts.chart('container2', {
							    chart: {
							        plotBackgroundColor: null,
							        plotBorderWidth: null,
							        plotShadow: false,
							        type: 'pie'
							    },
							    title: {
							        text: 'Browser market shares January, 2015 to May, 2015'
							    },
							    tooltip: {
							        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							    },
							    plotOptions: {
							        pie: {
							            allowPointSelect: true,
							            cursor: 'pointer',
							            dataLabels: {
							                enabled: true,
							                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
							                style: {
							                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
							                }
							            }
							        }
							    },
							    series: [{
							        name: 'Brands',
							        colorByPoint: true,
							        data: [{
							            name: 'so claim ko được chấp nhận ',
							            y: <?php echo$notacceptpersen ?>
							        }, {
							            name: 'số claim quá hạn 14 ngày',
							            y: <?php echo$over14persen ?>
							        }, {
							            name: 'số claim ko evident',
							            y: <?php echo$notevidentpersen ?>
							        },{
							            name: 'số claim được chấp nhận',
							            y: <?php echo$acceptpersen ?>
							        },{
							            name: 'số claim Chưa giải quyết',
							            y: <?php echo$waitingpersen ?>
							        }]
							    }]
							});
						</script>		
					</div>
					</div>
					
				</div>
					

			</div>
		</div>

		

	</div>

</body>

</html>
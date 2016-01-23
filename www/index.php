<!DOCTYPE html>
<html lang="en">

<?php
    include "conn.php";
    include "register.php";
    include "contactus.php";
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teknack 2016</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--<link href="css/prettyPhoto.css" rel="stylesheet">-->
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
	<!--Google Fonts-->
	<!-- <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Ruda:400,700'> -->
	<!--<link href="css/responsive.css" rel="stylesheet">-->
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar" style="padding-top: 10px;padding-bottom: 10px;">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img style="height:70px;" src="img/logo.png" data-active-url="img/logo.png" alt="Teknack 2016"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul style="padding-top:10px;" class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Intro</a></li>
					<li><a href="#teknacksofar">Teknack So Far</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#sponsors">Sponsors</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-black">Register</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro" style="max-height:100vh;">
		<div style="width:100%;position:fixed;"><img style="width:inherit;" src="img/header.jpg"  alt="Teknack 2016"></div>
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 style="font-family:'VT323'" class="light white">The world isn't the same anymore.</h3>
							<h1 style="font-family:'VT323'" class="white typed">But there is a chance to save it!</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section style="background:#FFF;">
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h3 class="white heading">Teknack 2016</h3>
						<h5 style="padding: 0px 30px" class="white heading text-justify">A Post-Apocalyptic world is where all that we know – people, places, comforts is gone. All that remains of the world is a shadow of its former self. It takes place in a non-technological future world, or a world where only scattered elements of society and technology remain.</h5>
						<!--
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
						</div>
					-->
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h3 class="white heading hide-hover">Have You Registered Yet?</h3>
						<div class="bottom">
							<!-- <h4 style="font-size:18px;" class="white small-pt no-margin regular">Going Live at 12am</h4> -->
							<h4 style="font-family:'VT323';" class="white no-margin small-pt regular"><span class="open-blink"></span>Going Live at 12am</h4>
							<h4 style="font-family:'VT323';" class="white no-margin small-pt regular">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on 13th February, 2016!</h4>
							<h4 style="font-family:'VT323';" class="white no-margin small-pt regular">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register Now</h4>
							<a href="#" class="btn btn-white-fill expand">Register</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h3 class="white heading">In The Press</h3>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">Teknack 2015 on Digit.in</h4>
								<h5 style="margin-left: 30px;margin-bottom: 30px;padding-right: 15px;" class="white content">"To go live with a tech fest is no small task."</h4>
								<a style="margin-left:30px;margin-bottom:30px;" target="_blank" href="http://www.digit.in/general/10-trailers-to-watch-this-weekend-28313.html" class="btn btn-white-fill expand">Read More</a>
							</div>
							<div class="item">
								<h4 class="white heading content">Teknack In the Mirror</h4>
								<h5 style="margin-left: 30px;margin-bottom: 30px;padding-right: 15px;" class="white content">We were talked about in Mumbai Mirror.</h4>
								<a style="margin-left:30px;margin-bottom:30px;" href="files/mirror.pdf" class="btn btn-white-fill expand">Read More</a>
							</div>
							<div class="item">
								<h4 class="white heading content">Afternoon Despatch and Teknack</h4>
								<h5 style="margin-left: 30px;margin-bottom: 30px;padding-right: 15px;" class="white content">Afternoon Despatch covers Teknack.</h4>
								<a style="margin-left:30px;margin-bottom:30px;" href="files/adc.pdf" class="btn btn-white-fill expand">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="teknacksofar" class="section">
		<div class="container">
		<h1 style="font-family:'VT323';font-size:96px;" class="text-center">Teknack So Far</h1>
			<div class="row text-center title">
				<div class="col col-md-offset-2 col-md-8">
					<p style="font-size:17px;" class="light muted">Think of a college festival. Now think of it on your laptop. That is Teknack - An inter-collegiate ONLINE tech-fest organized by the ACM Student Chapter of Don Bosco Institute Of Technology, Kurla. The fest provides a global arena, encouraging students to emancipate their minds and bring forth the technical as well as the creative genius within them. We give students the opportunity to boost their analytical and creative skills while keeping them engaged in a fun competition.</p>
					<br /><h4 class="light muted">What We Did In The Last Three Years?</h4>
				</div>
			</div>
			<div class="row services" style="margin: 0px 0px">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/2013.jpg" alt="" class="icon">
						</div>
						<h4 class="heading">Star Wars</h4>
						<p style="font-size:15px;margin-top:-110px;" class="description">“It's Star Wars at tech institute's online festival”, these were the lines quoted about Teknack 2013 in a full page article published for the event on 16th February 2013 in a popular news paper, Mumbai Mirror. Teknack'14 witnessed yet another successful and bigger rendition, with students from all over the globe participating with enthusiasm.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/2014.jpg" alt="" class="icon">
						</div>
						<h4 class="heading">Around The World</h4>
						<p style="font-size:15px;margin-top:-110px;" class="description">Teknack'14 followed a different approach by making the events more fun filled rather than more technical, in order to make it suitable for students from various disciplines to participate. The theme for Teknack'14 was "Around the world", giving the participants a virtual tour of various places in the world around us. </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/2015.jpg" alt="" class="icon">
						</div>
						<h4 class="heading">Sustainability</h4>
						<p style="font-size:15px;margin-top:-110px;" class="description">The highlight event of the Festival revolves around turning a city that is in ruins to an eco-friendly one, thereby instilling a sense of sustainable development in every player while making it fun.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="events" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h1 style="font-family:'VT323';font-size:96px;" class="margin-top:0px;">Events for Teknack 2016</h1>
				<!--<h4 class="light muted">We're a dream team!</h4>-->
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/events/treasure.png'); background-size:contain;background-repeat:no-repeat;background-position:center;">
							<div class="overlay text-center">
								<h3 class="white">Online Treasure Hunt</h3>
								<h5 class="light light-white">Can you find the lost treasure of the internet? You could try.</h5>
							</div>
						</div>
						<!--
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar"> -->
						<div class="title">
							<!--<h4>Online Treasure Hunt</h4>-->
							<h5 class="muted regular">Online Treasure Hunt</h5>
						</div>
						<!--
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
						-->
					</div>
				</div>
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/events/vsm.png'); background-size:contain;background-repeat:no-repeat;background-position:center;">
							<div class="overlay text-center">
								<h3 class="white">Virtual Stock Market</h3>
								<h5 class="light light-white">BUY, SELL, TRADE. Be the wolf.</h5>
							</div>
						</div>
						<!--
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar"> -->
						<div class="title">
							<!--<h4>Online Treasure Hunt</h4>-->
							<h5 class="muted regular">Virtual Stock Market</h5>
						</div>
						<!--
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
						-->
					</div>
				</div>
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/events/sixty.png'); background-size:contain;background-repeat:no-repeat;background-position:center;">
							<div class="overlay text-center">
								<h3 class="white">Sixty Seconds</h3>
								<h5 class="light light-white">What would you do if you have sixty seconds to save yourself?</h5>
							</div>
						</div>
						<!--
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar"> -->
						<div class="title">
							<!--<h4>Online Treasure Hunt</h4>-->
							<h5 class="muted regular">Sixty Seconds</h5>
						</div>
						<!--
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
						-->
					</div>
				</div>
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/events/auctionit.png');background-size:contain;background-repeat:no-repeat;background-position:center;">
							<div class="overlay text-center">
								<h3 class="white">Auction It</h3>
								<h5 class="light light-white">Buy. Sell. Win. A simulation of auction on your screen</h5>
							</div>
						</div>
						<!--
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar"> -->
						<div class="title">
							<!--<h4>Online Treasure Hunt</h4>-->
							<h5 class="muted regular">Auction It</h5>
						</div>
						<!--
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
						-->
					</div>
				</div>
			</div>
			<div class="row">
				<!-- <div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/events/defuse.png'); background-size:contain;background-repeat:no-repeat;background-position:center;">
							<div class="overlay text-center">
								<h3 class="white">Defuse The Bomb</h3>
								<h5 class="light light-white">You have little time. Can you save the internet?</h5>
							</div>
						</div>
							<h5 class="muted regular">Defuse The Bomb</h5>
						</div>
					</div>
				</div> -->
				
				<div class="col-md-3">
					<div class="team text-center">
						<div class="cover" style="background:url('img/events/acoustica5.png'); background-size:contain;background-repeat:no-repeat;background-position:center;">
							<div class="overlay text-center">
								<h3 class="white">Acoustica</h3>
								<h5 class="light light-white">Music to the internet.</h5>
							</div>
						</div>
						<!--
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar"> -->
						<div class="title">
							<!--<h4>Online Treasure Hunt</h4>-->
							<h5 class="muted regular">Acoustica</h5>
						</div>
						<!--
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
						-->
					</div>
				</div>
				<div class="col-md-3">
					<div class="team text-center" style="padding-bottom:5px;">
						<div class="cover" style="background:url('img/events/miss.png'); background-size:contain;background-repeat:no-repeat;background-position:center;">
							<div class="overlay text-center">
								<h3 class="white">More events</h3>
								<h5 class="light light-white">Many more exciting events to be added shortly</h5>
							</div>
						</div>
						<!--
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar"> -->
						<div class="title">
							<!--<h4>Online Treasure Hunt</h4>-->
							<h5 class="muted regular">More events</h5>
						</div>
						<!--
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
						-->
					</div>
				</div>
			</div>
		
		</div>
	</section>
	<!--
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pricing</h2>
				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<section id="sponsors" class="section section-padded black-bg">
		<div class="container">
			<div class="row">
				<!--
				<div class="col-md-8 col-md-offset-2">
					
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
					</div>
				
				</div>
				-->
				<h1 style="font-family:'VT323';font-size:96px;" class="text-center white">Past Sponsors</h1>
				<div class="col-md-4 text-center" style="margin-bottom:10px;">
					<img src="img/sponsors/spykar.png" style="width:200px;height:100px;" alt="client logo 2">
				</div>
				<div class="col-md-4 text-center" style="margin-bottom:10px;">
					<img src="img/sponsors/kic.JPG" style="width:200px;height:100px;" alt="client logo 3">
				</div>
				<div class="col-md-4 text-center" style="margin-bottom:10px;">
					 <img src="img/sponsors/atlanta.jpeg" style="width:200px;height:100px;" alt="client logo 4">
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i style="font-size: 30px;" class="icon_close_alt2"></i></a>
				<h3 class="white">Register</h3>
				<form name="register" action="" method="POST" class="popup-form" onsubmit="return validateForm()">
					<input name="pname" type="text" class="form-control form-white" placeholder="Full Name" required>
					<input name="pemail" type="text" class="form-control form-white" placeholder="Email Address" required>
					<input name="ptelnum" type="tel" class="form-control form-white" placeholder="Mobile Number" required>
					<input name="ptkcode" type="text" class="form-control form-white" placeholder="Teknack Code" required>
					<input name="ppass" type="password" class="form-control form-white" placeholder="Enter Password" required>
					<input name="prepass" type="password" class="form-control form-white" placeholder="Re-enter Password" required>
					<?php /*<!--
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pricing Plan
						</button>

						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
						</ul>
					</div>
				-->
				<!--
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
				--> */?>
					<button style="color:#FFF;background:#222;border-color:#222" type="submit" name="register" id="register" class="btn btn-submit">Submit</button>
				</form>
				<p style="color:white">Don't have a Code?<br><a style="color:yellow" href="#">Contact Us</a> to get one!</p>
			</div>
		</div>
	</div>
	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<!--
					<h3 class="white">Reserve a Free Trial Class!</h3>
					<h5 class="light regular light-white">Shape your body and improve your health.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
				-->
				<h3 class="white">Contact Us</h3>
				<form name="contact" action="" method="POST" class=""  onsubmit="return validateContactUs()">
					<input name="cname" type="text" class="form-control form-white" placeholder="Full Name">
					<input name="cemail" type="text" class="form-control form-white" placeholder="Email Address">
					<input name="ctelnum" type="text" class="form-control form-white" placeholder="Mobile Number">
					<input name="ccolnm" type="text" class="form-control form-white" placeholder="College Name &amp; Location">
					<textarea name="cmessage" style="resize: none;" rows="2"class="form-control form-white" placeholder="Message"></textarea>
					<button style="color:#FFF;background:#222;border-color:#222" type="submit" name="contact" id="contact" class="btn btn-submit">Submit</button>
				</form>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Going Live<span class="open-blink"></span></h3>
					<div class="row opening-hours">
							<!--<h5 class="light-white light">12 am</h5>-->
							<h4 style="margin-left:15px;" class="regular white">13th - 14th February, 2016</h4>
						<!--
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">10pm</h5>
							<h3 class="regular white">23rd February, 2015</h3>
						</div>
					-->
					</div>
				</div>
				
					<div class="col-sm-6 text-center-mobile">
						<br><br><br>
						<div class="col-sm-6 text-center-mobile">
							<img src="img/acm_dbit_white_vector.png" height="120px" width="120px">
						</div>
						<div class="col-sm-6 text-center-mobile">
							<img src="img/dbit_white_vector.png" height="120px" width="120px">
						</div>

					</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by ACM-DBIT</p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/Teknack"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/teknackdbit"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/TeknackDBIT"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
    <script src="js/regvalid.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

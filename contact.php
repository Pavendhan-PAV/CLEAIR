<?php
	require_once "connect.php";
session_start();
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Agronomics Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
<div class="header header1" >
	<div class="head" style="height: inherit;" >
		
		<div class="container"  style="padding-top: inherit;">
				<div class="navbar-top">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header" >
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					<div class="navbar-brand logo ">
							<h1 class="animated wow pulse" data-wow-delay=".5s">
							<a href="index.php"><img src="cleair_new.png" style="height: 3em;height: 3em;margin-top: -.5em;margin-bottom: -.5em;margin-left: 1em;"></a></h1>
						</div>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav link-effect-4">
					<li ><a href="index.php" data-hover="Home">Home</a> </li>
						<li ><a href="index.php#two" data-hover="About">About </a> </li>
						
						<?php
							if(isset($_SESSION['fusername']))
							{
						?>
						<a href="f_dashboard.php" class="naming" ><?php echo($_SESSION['fusername'])  ?><b ></b></a>
						<a href="logout.php" class="naming" >Logout<b ></b></a>
						<?php }
						else if(isset($_SESSION['fusername2']))
						{?>
							<a href="f_dashboard.php" class="naming" ><?php echo($_SESSION['fusername2'])  ?><b ></b></a>
						<?php
					}
						else if(isset($_SESSION['iusername']))
							{
						?>
						<a href="f_dashboard.php" class="naming" ><?php echo($_SESSION['iusername'])  ?><b ></b></a>
						<a href="logout.php" class="naming" >Logout<b ></b></a>
						<?php }
						else if(isset($_SESSION['iusername2']))
						{?>
							<a href="f_dashboard.php" class="naming" ><?php echo($_SESSION['iusername2'])  ?><b ></b></a>
						<?php 
					} else{ ?>

						<li class="dropdown">
							<a href="codes.html" class="dropdown-toggle" data-hover="Login" data-toggle="dropdown">Login<b class="caret"></b></a>
							 <ul class="dropdown-menu" style="text-align: center;padding-top: 0px;padding-bottom: 0px;padding-left: 1e;padding-top: 0px;padding-bottom: 0px;right: 12px;left: 0px;top: 2em; min-width: fit-content;;">
								<li><a href="f_log.php">Farmer</a></li>
								<li><a href="i_log.php">Industry</a></li>
							</ul>
						</li>

					<?php } ?>
						<li class="dropdown" id="new">
							<a href="codes.html" class="dropdown-toggle" data-hover="Register" data-toggle="dropdown">Register <b class="caret"></b></a>
							 <ul class="dropdown-menu" style="text-align: center; padding-top: 0px;padding-bottom: 0px;padding-left: 1e;padding-top: 0px;padding-bottom: 0px;right: 12px;left: 0px;top: 2em; min-width: 2em;">
								<li><a href="f_pincheck.php">Farmer</a></li>
								<li><a href="i_signup.php">Industry</a></li>
							</ul>
					  </li>
						<li class="active"><a href="contact.php" data-hover="Contact">Contact</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</div>
	
			<div class="header-left animated wow fadeInLeft animated" data-wow-delay=".5s" >
					<ul>
						<li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">cleair08@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone"></i>+91 7358481410</li>
						
					</ul>
				</div>
			  <div class="clearfix"></div>	
		</div>
	</div>
	<!---->	
</div>


<!-- contact -->
	<div class="contact w3layouts-agile">
		<div class="container">
			<h2 >Contact Us</h2>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
			<form action="#" method="post">
			<div class="contact-grids1">
						<div class="col-md-6 contact-form1">
							<h4>Name</h4>
							<input type="text"  name="Name" placeholder="" required="">
						</div>
						<div class="col-md-6 contact-form1">
							<h4>Email</h4>
							<input type="email" name="Email" placeholder="" required="">
						</div>
						
						<div class="clearfix"> </div>
				<div class="contact-me animated wow slideInUp" data-wow-delay=".5s">
					<h4>Message</h4>
				
						<textarea name="Message"  placeholder="" required=""> </textarea>
						
				
				</div>
				<div class="contact-form">
							<input type="submit" value="Submit" >
						</div>
			</div>
			</form>
			<div class="contact-grids wthree">
				<div class="col-md-4 contact-grid w3-agileits ">
					<div class="contact-grid1">
						<div class="con-ic">
							<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						</div>
						
							<h4>Address</h4>
							<p>22nd street, Bio enclave<span>Uttar Pradesh.</span></p>
						
					</div>
				</div>
				<div class="col-md-4 contact-grid w3-agileits">
					<div class="contact-grid1">
						<div class="con-ic">
							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
					</div>
							<h4>Call Us</h4>
							<p>044 25269878<span>044 25269880</span></p>
						
					</div>
				</div>
				<div class="col-md-4 contact-grid w3-agileits">
					<div class="contact-grid1">
						<div class="con-ic">
							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						</div>
							<h4>Email</h4>
							<p><a href="mailto:info@example.com">cleair@gamil.com</a><span>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!-- //contact -->

<!--footer-->
<div class="footer wthree">
	<div class="container"  style="margin-left: 600px;">
		
			<div class="col-md-5 footer-bottom1 " style="text-align: center;"	>
			<h4>Follow Us</h4>
				<ul class="social">
						
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="icon"></i></a></li>
						<li><a href="#"><i class="icon1"></i></a></li>
						<li><a href="#"><i class="icon2"></i></a></li>
						
					</ul>
			</div>
				<div class="clearfix"> </div>
	</div>	
</div>
<div class="map w3layouts-agile">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636272.6675768807!2d78.63407029940336!3d27.123312969113858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39994e9f7b4a09d3%3A0xf6a5476d3617249d!2sUttar%20Pradesh!5e0!3m2!1sen!2sin!4v1612942955291!5m2!1sen!2sin"  allowfullscreen></iframe>
</div>
<div class="copy w3layouts-agile">
		<p class="footer-grid ">AGRONOMICS | Design by B1-08</a> </p>
	</div>
	
<!-- for bootstrap working -->
	<script src="js/bootstrap.min.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
s<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Agronomics An Agriculture Category Flat Bootstrap responsive Website Template | Font Icons :: w3layouts</title>
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
<script src="js/bootstrap.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

<!-- //font-awesome icons -->

</head>
<body>
<!--header-->
<div class="header" >
	<div class="head" style="padding-bottom: 12px;">
		<div class="container">
			<div class="navbar-top">
			<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						 <div class="navbar-brand logo ">
							<h1 class="animated wow pulse" data-wow-delay=".5s">
							<a href="index.php"><img src="cleair_new.png" style="height: 3em;height: 3em;margin-top: -.5em;margin-bottom: -.5em;margin-left: 1.5em;"></a></h1>
						</div>

					</div>


					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav link-effect-4">
					<li ><a href="index.php" data-hover="Home">Home</a> </li>
						<li ><a href="index.php#two" data-hover="About">About </a> </li>
						<li><a href="gallery.html"  data-hover="Gallery">Gallery</a></li>
						<li class="dropdown active">
							<a class="active" href="codes.html" class="dropdown-toggle" data-hover="Login" data-toggle="dropdown">Login<b class="caret"></b></a>
							 <ul class="dropdown-menu" >
								<li><a href="f_log.php">Farmer</a></li>
								<li><a href="i_log.php">Industry</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="codes.html" class="dropdown-toggle" data-hover="Register" data-toggle="dropdown">Register <b class="caret"></b></a>
							 <ul class="dropdown-menu" style="text-align: center; padding-top: 0px;padding-bottom: 0px;padding-left: 1e;padding-top: 0px;padding-bottom: 0px;right: 12px;left: 0px;top: 2em; min-width: 2em;">
								<li><a href="icons.html">Farmer</a></li>
								<li><a href="codes.html">Industry</a></li>
							</ul>
					  </li>
						<li><a href="contact.php" data-hover="Contact">Contact</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</div>
	
			<div class="header-left animated wow fadeInLeft animated" data-wow-delay=".5s" >
					<ul>
						<li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">cleair08@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone"></i>+91 73584 81410</li>
						
					</ul>
				</div>
			  <div class="clearfix"></div>	
		</div>
	</div>
	<!---->	

	<!---->
	<div class="log">
	<div class="container">
	<div class="page contact" style="min-width: max-content;">
	<div class="ser-top ser-top-c" style="background: transparent;">
		<h2 style="font-weight: normal;color: white;">Farmer Login</h2>
					<div class="ser-t" style="width: 30%;">
						<b></b>
						<span style="background-color: transparent;"><i></i></span>
						<b class="line"></b>
					</div>
				 </div>
<form  method="POST">
		<h4>
<?php
	if(isset($_SESSION['complaint']))
		{echo("You Have to login before you can register our service:");}?>

?></h4>
		<input type="text" placeholder="USERNAME"  style="color: #1b1b1b; text-transform: capitalize;" required="" name="username">
		<input type="password" placeholder="PASSWORD" required="" name="password">
		<input type="submit" value="Log in"> 
	</form>
</div></div>
</body>
</html>
<?php
session_start();
$pinc=mysqli_connect("127.0.0.1","root","root","cleair2");
$pincode=$_POST['PINCODE'];
$_SESSION['pin']=$pincode;

$sql="SELECT * from pincode where pin='$pincode'";
$result=mysqli_query($pinc,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup redirect</title>
<script type="text/javascript">
		var submitted=false;
	</script>
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
			<div class="navbar-top" style="width: 70%">
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
							<li class="dropdown">
							<a  href="codes.html" class="dropdown-toggle" data-hover="Login" data-toggle="dropdown">Login<b class="caret"></b></a>
							 <ul class="dropdown-menu" style="text-align: center; padding-top: 0px;padding-bottom: 0px;padding-left: 1e;padding-top: 0px;padding-bottom: 0px;right: 0.5px;left: 0px;top: 2em; min-width: 2em;">
								<li><a href="f_log.php">Farmer</a></li>
								<li><a href="i_log.php">Industry</a></li>
							</ul>
						</li>
						<li class="dropdown active">
							<a class="active" href="codes.html" class="dropdown-toggle" data-hover="Register" data-toggle="dropdown">Register <b class="caret"></b></a>
							 <ul class="dropdown-menu" style="text-align: center;padding-top: 0px;padding-bottom: 0px;padding-left: 1e;padding-top: 0px;padding-bottom: 0px;right: 12px;left: 0px;top: 2em; min-width: fit-content;;">
								<li><a href="f_pincheck.php">Farmer</a></li>
								<li><a href="i_signup.php">Industry</a></li>
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
	<div class="log">
		<div class="container">
	<div class="page contact" style="min-width: max-content;">
	<div class="ser-top ser-top-c" style="background: transparent; margin-bottom: 0px;">


					<h2 style="font-weight: normal;color: white;">Pincode verification</h2>
					<div class="ser-t" style="width: 30%;">
						<b></b>
						<span style="background-color: transparent;"><i></i></span>
						<b class="line"></b>
					</div>
				 </div>
	
	
	<div class="reg2">
		
		<h2 style="font-weight: normal;color: white; font-size: 1.75em; margin-top: 2em;"><?php 
			if(@@mysqli_num_rows($result)>0)
{
	echo("Your pincode is Available for service.Please wait while we redirect you to the signup page.");

//header("refresh:5;url=f_signup.php");
?><p><br><br><a class="red" href="f_signup.php">Click here to proceed!</a></p><?php
}
else
{
	echo("Sorry.");
	echo("<br>");
	echo("Currently your area is not serviceable but you can still join with us by providing your details and we will intimate you when we are available.");
	echo("<br>");
	echo("If you would like to join, click on the link below");
	echo("<br><br>");?>
	<p>
	<a class="red" href="f_signup.php">Signup_Form</a></p><?php
}
		?></h2>
</div> 
</div>
</div>
</div>
</div>
<div class="copy w3layouts-agile" style="padding: 3em 0;">
		<p class="footer-grid ">AGRONOMICS | Design by B1-08</a> </p>
	</div>
</body></html>
	<!---->

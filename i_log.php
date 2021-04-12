<?php
require_once "connect.php";
session_start();

if(isset($_POST["iID"]) && isset($_POST["password"]) && !isset($_SESSION['iID2'] ) )
	{
		
		
		$iID = $_POST["iID"];
		$sql = "SELECT ipassword FROM industry WHERE iID='$iID'";
		$query = $pdo->query($sql);
	
		if($query)
		{
			$row = $query->fetch(PDO::FETCH_ASSOC);
			if($row['ipassword']==$_POST["password"])
			{
				$_SESSION["iusername"]=$_POST["iusername"];
				$_SESSION["iID"]=$_POST["iID"];
				unset($_SESSION['complaint']);
				header("Location: i_dashboard.php");
				return;
			}
			else
			{
				$_SESSION["pwerror"] = "INVALID PASSWORD";
				$_SESSION['log']=0;
			}
		}
		else
		{
			$_SESSION["pwerror"] = "INVALID USERNAME";
			
		}
	}
	else
	{
		if(isset($_SESSION['iID2'] ))
		$_SESSION["pwerror"] = "You have Already signed in as an Employee.Please log out and log in as customer if you want to file a complaint.";
	}

?>



<!DOCTYPE html>
<html>
<head>
<title>Industrialist | Login</title>
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
<div class="header" style="height: 820px;" >
	<div class="head" style="padding-bottom: 12px;">
		
		<div class="container">
			<div class="navbar-top" style="width: 70%">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header" style="margin-left: 40px; position: relative;">
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
					<li class="active"><a href="index.php" data-hover="Home">Home</a> </li>
						<li ><a href="index.php#two" data-hover="About">About </a> </li>
						
						<li class="dropdown">
							<a href="codes.html" class="dropdown-toggle" data-hover="Login" data-toggle="dropdown">Login<b class="caret"></b></a>
							 <ul class="dropdown-menu" style="text-align: center;padding-top: 0px;padding-bottom: 0px;padding-left: 1e;padding-top: 0px;padding-bottom: 0px;right: 12px;left: 0px;top: 2em; min-width: fit-content;;">
								<li><a href="f_log.php">Farmer</a></li>
								<li><a href="i_log.php">Industry</a></li>
							</ul></li>
						<li class="dropdown-active">
							<a href="codes.html" class="dropdown-toggle" data-hover="Register" data-toggle="dropdown">Register <b class="caret"></b></a>
							 <ul class="dropdown-menu" style="text-align: center; padding-top: 0px;padding-bottom: 0px;padding-left: 1e;padding-top: 0px;padding-bottom: 0px;right: 12px;left: 0px;top: 2em; min-width: 2em;">
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
	<div class="ser-top ser-top-c" style="background: transparent;">


					<h2 style="font-weight: normal;color: white;">Indutrialist Login</h2>
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
		<input type="text" placeholder="ID"  style="color: #1b1b1b; text-transform: capitalize;" required="" name="iID">
		<input type="text" placeholder="USERNAME"  style="color: #1b1b1b; text-transform: capitalize;" required="" name="iusername">
		<input type="password" placeholder="PASSWORD" required="" name="password">
		<input type="submit" value="Log in"> 

	</form>
</div>
</div>
</div>
</div>
</div>
<div class="copy w3layouts-agile">
		<p class="footer-grid ">AGRONOMICS | Design by B1-08</a> </p>
	</div>
	</body></html>
	<!---->

<?php
	require_once "connect.php";
	session_start();
	if(isset($_POST["name"]))
	{
		$farmer=mysqli_connect("127.0.0.1","root","root","cleair2");
		$id=$_POST["name"];
		$user=$_POST["username"];	
		$sql="SELECT * from farmers where fID = '$id'";
			//$sql = "SELECT username FROM customer  WHERE username=\"".$_POST["username"]."\"";
			
			$query = $pdo->query($sql);
			
			if(!$query->fetch(PDO::FETCH_ASSOC))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$contact=$_POST['contact'];
				$address=$_POST['address'];
				$city=$_POST['city'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$pincode=$_SESSION['pin'];
				//echo($name,$email,$contact,$address,$pincode,$city,$username,$password);
				
				$final="INSERT INTO farmers(fID,fEmailID,fcontact,faddress,fpin,fcity,fName,fpassword) 
									values('$name','$email','$contact','$address','$pincode','$city','$username','$password') ";
				
				$pdo->query($final);

				header("Location: f_log.php");
				return;
			}
			else
			{
				$_SESSION["error"] = "error";
				header("Location: f_signup.php");
				return;
			}
		
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Farmer | Signup</title>
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
							 <ul class="dropdown-menu" style="text-align: center;padding-top: 0px;padding-bottom: 0px;padding-left: 1e;padding-top: 0px;padding-bottom: 0px;right: 12px;left: 0px;top: 2em; min-width: fit-content;">
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
	<div class="reg">
	<div class="container">
	<div class="page contact" style=" padding-top: 30px; min-width: max-content;">
	<div class="ser-top ser-top-c" style="margin-bottom: 40px; background: transparent;">


					<h2 style="font-weight: normal;color: white;">Farmer Signup</h2>
					<div class="ser-t" style="width: 80%;">
						<b></b>
						<span style="background-color: transparent;"><i></i></span>
						<b class="line"></b>
					</div>
				 </div>
	
	
	
		<h2 style="font-weight: normal;color: white; font-size: 1.8em">
		<?php
				if(isset($_SESSION["error"]))
				{
					echo 'ID ALREADY EXISTS<br />';
					unset($_SESSION["error"]);
				}
				
			?></h2>
		<form  method="POST" style="margin-top: 0px;">
		<input type="text" placeholder="ID" required="" style="color: #1b1b1b; text-transform: capitalize;" name="name"><br><br>
		<input type="Email" placeholder="Email id" required="" style="color: #1b1b1b;" name="email"><br><br>
		<input type="tel" placeholder="Contact" required="" style="color: #1b1b1b;" pattern="[0-9]{10}" name="contact"><br><br>
		<textarea style="text-transform: capitalize;font-family: 'Muli';font-weight: bolder;  color: rgba(0,0,0,0.8);" placeholder="Address" required="" rows="2" cols="15" style="text-transform: capitalize;" name="address"></textarea><br><br>
		<input type="text" placeholder="City" required="" style="color: #1b1b1b;" name="city"><br><br>
		
		
		
	<input type="text" placeholder="Enter a username" required="" style="color: #1b1b1b;" name="username"><br><br>
		<div class="error">		
			
		</div>
		<input type="password" placeholder="Enter a password" required="" style="color: #1b1b1b;" name="password">
		<br><br>
  		<input type="submit" name="submit" value="Register">
	</form></div>
</div>
</div>
</div>
</div>
<div class="copy w3layouts-agile">
		<p class="footer-grid ">AGRONOMICS | Design by B1-08</a> </p>
	</div>
</body></html>
	<!---->

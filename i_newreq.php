<?php
	require_once "connect.php";
	session_start();
	if(isset($_SESSION['iID']))
	{
		
		$farmer=mysqli_connect("127.0.0.1","root","root","cleair2");

		$isql = "SELECT * from industry where iID= ".$_SESSION['iID']."";
		$iresult = mysqli_query($farmer, $isql);

		if (@mysqli_num_rows($iresult) > 0) {
			while($irow = mysqli_fetch_assoc($iresult)) {
				$sql= "SELECT * from farmers where fstatus=1 AND fpin=".$irow['ipin']."" ;
			}

		$result = mysqli_query($farmer, $sql);	
		$result2 = mysqli_query($farmer, $sql);

		if (@mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				if(isset($_POST['yes']))
				{
					$iquery="UPDATE industry SET fid=0";
					$isql = mysqli_query($farmer, $iquery);

					$fquery="UPDATE farmers SET fstatus=0";
					$fsql = mysqli_query($farmer, $fquery);

					header("Location: i_newreq.php");
				}
			}
		}

	}
}
?>
							


<!DOCTYPE html>
<html>
<head>
<title>Farmer | Ongoing request</title>
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
<div class="header" style="min-height: 47em;">
	<div class="head" >
		
		<div class="container" style="margin-left: 240px; margin-right: 240px;">
			<div class="navbar-top" >
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
						<!--li><a href="gallery.html"  data-hover="Gallery">Gallery</a></li-->
						<?php
							if(isset($_SESSION['iID']))
							{
						?>
						<a class="naming" id="active2" href="f_dashboard.php"  ><?php echo($_SESSION['iusername'])  ?><b ></b></a>
						<a href="logout.php" class="naming" >Logout<b ></b></a>
						<?php }
						else if(isset($_SESSION['fID2']))
						{?>
							<a href="f_dashboard.php" class="naming" ><?php echo($_SESSION['fID2'])  ?><b ></b></a>
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
					
						<li class="dropdown">
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
		
		<div class="reg">
	<div class="container">
	<div class="page contact" style=" padding-top: 30px; min-width: max-content;">
	<div class="ser-top ser-top-c" style="margin-bottom: 40px; background: transparent;">



					<h2 style="font-weight: normal;color: white; ">Ongoing Request</h2>
					<div class="ser-t" >
						<b></b>
						<span style="background-color: transparent;"><i></i></span>
						<b class="line"></b><br><br>
						
						</div>
				 </div>			
				 				<?php
				 				if (@mysqli_num_rows($result2) > 0) {
									while($row = mysqli_fetch_assoc($result2)) {
				 				?>
									<h2 class="red" style="font-weight: normal;color: white; font-size: 1.4em; text-align: left; padding: 15px 15px; ">
									<?php
    								echo("IDENTIFICATION
    									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : " .$row["fID"]. "
    									<br><br>CROP SOWN
    									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " .$row["fcrop"]. "
    									<br><br>LAND (in acres)
    									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: "  .$row["fland"]. "
    									<br><br>DAYS LEFT
    									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : "  .$row["ftime"]. "
    									<br><br>ADDRESS
    									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : "  .$row["faddress"]. "
    									<br><br>CONTACT
    									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : "  .$row["fcontact"]. "
    									<br><br>PINCODE
    									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: "  .$row["fpin"]);
    									?>
    								
    								<form method="POST" style="font-weight: normal;margin-top: 0em; color: white; font-size: 1em; text-align: left;">
  									Tap YES if the request is satisfied? 
  									<input  type="submit" style="min-width: 60px; justify-content: center;
  									background-color: (0,255,28,.6)" name="yes" value="YES">
  								</form>
  								</h2>
  								<?php
  								}
  								
  								
  							}
  							else{
  								?>
									<h2 style="font-weight: normal;color: white; font-size: 1.6em; ">
									<?php
  								echo("No New request right now. <br>Kindly check again later.");
  							
  							}	
						?></h2>
						
	
	
		</div>
	</div></div></div>
	<!---->
	<div class="copy w3layouts-agile">
		<p class="footer-grid ">AGRONOMICS | Design by B1-08</a> </p>
	</div>
<!-- for bootstrap working -->
	<script src="js/bootstrap.min.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
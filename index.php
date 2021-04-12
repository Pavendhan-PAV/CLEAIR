<?php
	require_once "connect.php";
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>CLEAIR | Home</title>
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

<script type="text/javascript">
     	function check(){	
     		$(document).ready(function() {
        		$('html, body').hide();
				if (window.location.hash) {
            		setTimeout(function() {
                		$('html, body').scrollTop(0).show();
               			$('html, body').animate({
                    		scrollTop: $(window.location.hash).offset().top
                    	}, 100)
            		}, 0);
        		}
       			 else {
            		$('html, body').show();
        		}
    		});
    	}	
</script>

<link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<body>
<!--header-->
<div class="header" >
	<div class="head" >
		
		<div class="container" >
			<div class="navbar-top" >
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
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
						
						<li ><a href="#elements" onclick="document.getElementById('two').scrollIntoView({ behavior: 'smooth', block: 'start' });"  data-hover="About">About </a> </li>
						
						<!--li><a href="gallery.html"  data-hover="Gallery">Gallery</a></li-->
						<?php
							if(isset($_SESSION['fID']))
							{
						?>
						<a href="f_dashboard.php" class="naming" ><?php echo($_SESSION['fusername'])  ?><b ></b></a>
						<a href="logout.php" class="naming" >Logout<b ></b></a>
						<?php }
						else if(isset($_SESSION['fID2']))
						{?>
							<a href="f_dashboard.php" class="naming" ><?php echo($_SESSION['fID2'])  ?><b ></b></a>
						<?php
					}
						else if(isset($_SESSION['iID']))
							{
						?>
						<a href="f_dashboard.php" class="naming" ><?php echo($_SESSION['iusername'])  ?><b ></b></a>
						<a href="logout.php" class="naming" >Logout<b ></b></a>
						<?php }
						else if(isset($_SESSION['iID2']))
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
						<li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:cleair08@gmail.com">cleair08@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone"></i>+91 73584 81410</li>
						
					</ul>
				</div>
		<div class="clearfix"></div>	
		</div>
	</div>
	<!---->
	<div class="banner" style="margin-bottom: 250px;">
		<div class="container">
			<div class="banner-text"><h2>C</h2></div><br><br><br>
			<p class="inner-banner text" style="font-size: 2em;"><b>Give Stubble, Earn Money</b></p>
			<span><img src="images/li-1.png" alt=""></span>
			<p>Alternate method to prevent harmful pollution caused by stubble burning, through collaboration with paper industries</p>
		</div>							
	</div>
	</div>

<!--content-->
 <div class="service w3layouts-agile" id="two">
 <div class="container">
 <div class="ser-top">
	<h3>Services</h3>
	<div class="ser-t">
		<b></b>
		<span><i></i></span>
		<b class="line"></b>
	</div>
 </div>
  <div class="ser-head agile-info">
    <div class="ser-grid ">
    <div class="ser-grid1">
     <i class="glyphicon glyphicon-leaf"> </i>
			<h3>Stubble Pickup</h3>
    </div>
    </div>
  </div>
  <div class="ser-head agile-info">
    <div class="ser-grid ">
    <div class="ser-grid2">
    <i class="glyphicon glyphicon-map-marker"> </i>
			<h3>Stubble Locations</h3>
    </div>
    </div>
  </div>
  <div class="ser-head agile-info">
    <div class="ser-grid ">
    <div class="ser-grid3">
     <i class="glyphicon glyphicon-user"> </i>
			<h3>Customer Queries</h3>
    </div>
    </div>
  </div>
  <div class="ser-head agile-info">
    <div class="ser-grid ">
    <div class="ser-grid4">
     <i class="glyphicon glyphicon-piggy-bank"> </i>
			<h3>Incentive Provision</h3>
    </div>
    </div>
  </div>
  <div class="clearfix"> </div>
</div>
</div>
<!-- //services -->
<div class="col-grid agilew3l">
			<div class="col-md-6 col-grid-left" style="padding: 9em 5em;" >
				<h3 style="font-size: 3em;">Wealth out of Stubble</h3>
				<h5 style="font-size: 1.5em;">Stubble is used by various industries to produce paper and used by biothermal industries. </h5>
				
			</div>
			<div class="col-md-6 col-grid-right agile-info-wthree">
			<div class="col-md-6 col-grid-1">
				<div class="col-1 bottom">
							<div class="col-1-top">
							<img src="images/cc.jpg" class="img-responsive" alt="">
							</div>
							
						</div>
						</div>
						<div class="col-md-6 col-grid-1">
				<div class="col-1 bottom">
							<div class="col-1-top">
							<img src="images/cc1.jpg" class="img-responsive" alt="">
							</div>
							
						</div>
						</div>
						<div class="col-md-6 col-grid-1">
						<div class="col-1 bottom">
							<div class="col-1-top">
							<img src="images/cc2.jpg" class="img-responsive" alt="">
							</div>
							
						</div>
						</div>
						<div class="col-md-6 col-grid-1">
						<div class="col-1 bottom">
							<div class="col-1-top">
							<img src="images/cc3.jpg" class="img-responsive" alt="">
							</div>
							
						</div>
						</div>
						<div class="clearfix"></div>
						
			</div>
				<div class="clearfix"></div>
		
	</div>
	<div class="col-grid agilew3l">
		
			<div class="col-md-6 col-grid-right agile-info-wthree">
			<div class="col-md-6 col-grid-1">
				<div class="col-1 bottom">
							<div class="col-1-top">
							<img src="images/cc4.jpg" class="img-responsive" alt="">
							</div>
							
						</div>
						</div>
						<div class="col-md-6 col-grid-1">
						<div class="col-1 bottom">
							<div class="col-1-top">
							<img src="images/cc5.jpg" class="img-responsive" alt="">
							</div>
							
						</div>
						</div>
						<div class="col-md-6 col-grid-1">
						<div class="col-1 bottom">
							<div class="col-1-top">
							<img src="images/cc6.jpg" class="img-responsive" alt="">
							</div>
							<div class="col-1-bottom">
								<div class="info-text">
								
									
								</div>
							</div>
						</div>
						</div>
						<div class="col-md-6 col-grid-1">
						<div class="col-1 bottom">
							<div class="col-1-top">
							<img src="images/cc7.jpg" class="img-responsive" alt="">
							</div>
							
						</div>
			</div>
			<div class="clearfix"></div>
			</div>
			
				<div class="col-md-6 col-grid-left" style="padding: 9em 5em;" >
				<h3 style="font-size: 3em;">Purify Air</h3>
				<h5 style="font-size: 1.5em;">Let's do our part by not burning stubble and finding its correct usage.  </h5>
				
			</div>
				<div class="clearfix"></div>
		
	</div>
<!--content-->


	<!---->

		<!---->
<!--//content-->

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
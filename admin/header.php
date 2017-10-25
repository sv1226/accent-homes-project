<?php 
session_start(); 
ob_start();
$pagename = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Sunil Homes| Home :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		    <script type="text/javascript" src="js/camera.min.js"></script>
				<script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					height: '500px',
					pagination: false,
				});
			});
		  </script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
	<!----start-wrap----->
	<div class="wrap">
		<!----start-header----->
		<div class="header"  id="top">
			<!----top-header----->
			<div class="top-header">
				<!----start-logo----->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!----End-logo----->
				<!----start-social-icons----->
				<div class="social-icons">
					<ul>
						<li><a href="www.facebook.com/sunil.verma1226"><img src="images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="images/twitter.png" title="twitter" /></a></li>
						<li><a href="#"><img src="images/google.png" title="google pluse" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<!----End-social-icons----->
			</div>
			<!----End-top-header----->
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					<ul>
						<li class="<?php if($pagename == "index.php"){echo "active";} ?>"><a href="index.php">Home</a>
						</li>

						<li class="<?php if($pagename == "about.php"){echo "active";} ?>"><a href="about.php" class="active">About</a></li>
						<!-- <li class="<?php if($pagename == "services.php"){echo "active";} ?>"><a href="services.php">Services</a></li> -->
						<li class="<?php if($pagename == "gallery.php"){echo "active";} ?>"><a href="gallery.php">Gallery</a></li>
						<li class="<?php if($pagename == "contact.php"){echo "active";} ?>"><a href="contact.php">Contact</a></li>
						<?php if(!isset($_SESSION['user_id'])){ ?>
						<li class="<?php if($pagename == "signup.php"){echo "active";} ?>" align="right"><a href="signup.php">Create Account</a></li>
							<li class="<?php if($pagename == "login.php"){echo "active";} ?>" align="right"><a href="login.php">Login</a></li>
						<?php } else { ?>
						<li><a href="logout.php">logout</a></li>
						<?php }  ?>
						<div class="clear"> </div>
					</ul>
				</div>
				<!-- <div class="top-nav-right">
					<form>
						<input type="text"><input type="submit" value="" />
					</form>
				</div> -->
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>

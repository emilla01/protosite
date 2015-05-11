<!DOCTYPE html>
<html>
  <head>
    <title> <?php include('includes/titles.php');?> | Cascade Meadows Camp </title>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow"/>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width" />
    <!-- Remy Sharp Shim -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- BEGIN STYLES -->
   <link href="styles/style.css" rel="stylesheet" type="text/css" media="all" />
   <link href="styles/media-queries.css" rel="stylesheet" />
	 <link href="styles/flexslider.css" rel="stylesheet" type="text/css" />
<!-- END STYLES -->
		
<!-- BEGIN SCRIPTS -->
		<script src="http://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<script src="scripts/jquery.flexslider.js"></script>

		<script type="text/javascript">
		<!--
		//image rollover change on class="rollover"
			$(document).ready(function() {
			$("img.rollover").hover( 
			function() { this.src = this.src.replace("_off", "_on"); 
			}, 
			function() { this.src = this.src.replace("_on", "_off"); 
			});
			}); 
		-->
		</script>
		
		<script type="text/javascript"> 
		<!--
		var originalNavClasses;
		
		function toggleNav() {
				var elem = document.getElementById('nav-toggle');
				var classes = elem.className;
				if (originalNavClasses === undefined) {
						originalNavClasses = classes;
				}
				elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
		}
		-->  
		</script>
		
		<script type="text/javascript">
		<!--
		//flexslider
		$(window).load(function() {
		$('.flexslider').flexslider();	
		});
		-->
		</script>
		
		
<!-- END SCRIPTS -->
		
  </head>

<body id="main">
<div id="wrapper"> <!-- begin wrapper -->

  <header>  <!-- begin header -->
	
		<nav id="nav-social">  <!-- begin nav-social -->
			<ul>
				<li><a href="javascript:;"><img src="images/insta.png" alt="instagram" class="social"/> </a></li>
				<li><a href="javascript:;"><img src="images/twitter.png" alt="twitter" class="social"/> </a></li>
				<li><a href="javascript:;"><img src="images/fb.png" alt="fb" class="social"/> </a></li>
				<li><a href="javascript:;"><img src="images/email.png" alt="email" class="social"/> </a></li>
			</ul>
		</nav>  <!-- end nav-social -->
				
			<nav id="nav-tog-main">  <!-- begin nav-tog-main -->
    <a class="menu-button" href="#nav-footer" onclick="toggleNav(); return false;">&#9776;  MENU</a>
				<ul id="nav-toggle">
					<li><a href="about.php">About</a></li>
					<li><a href="facilities.php">Facilities</a></li>
					<li><a href="recreation.php">Recreation</a></li>
					<li class="last"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>  <!-- end nav-tog-main -->
					
		<h1 class="logo">
			<a href="index.php">
				<span>Cascade Meadows Camp</span>
				<img src="images/logo.png" alt="Cascade Meadows Logo" class="logo"/>
			</a>
		</h1>

		
<?php include('includes/nav-main.php');?>
	</header>  <!-- end header -->

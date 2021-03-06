<!DOCTYPE html>
<html>
  <head>
    <title> <?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> </title>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow"/>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width" />
    <!-- Remy Sharp Shim -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- BEGIN STYLES -->
   <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />
   <link href="<?php bloginfo('template_directory'); ?>/styles/media-queries.css" rel="stylesheet" />
	 <link href="<?php bloginfo('template_directory'); ?>/styles/flexslider.css" rel="stylesheet" type="text/css" />
<!-- END STYLES -->
		
<!-- BEGIN SCRIPTS -->
		<script src="http://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
		
		<!-- begin rollover -->
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
		<!-- end rollover -->
		
		<!-- begin nav-toggle -->
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
		<!-- end nav-toggle -->
		
		<!-- begin flexslider -->
		<script type="text/javascript">
		<!--
		//flexslider
		$(window).load(function() {
		$('.flexslider').flexslider();	
		});
		-->
		</script>
		<!-- end flexslider -->
		
<!-- END SCRIPTS -->
		
		<!-- begin WP head -->
		<?php wp_head();?>
		<!-- end WP head -->
		
  </head>

<body <?php body_class(); ?>>
<div id="wrapper"> <!-- begin wrapper -->

  <header>  <!-- begin header -->
	
		<nav id="nav-social">  <!-- begin nav-social -->
			<ul>
				<li><a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/insta.png" alt="instagram" class="social"/> </a></li>
				<li><a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter" class="social"/> </a></li>
				<li><a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/fb.png" alt="fb" class="social"/> </a></li>
				<li><a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/email.png" alt="email" class="social"/> </a></li>
			</ul>
		</nav>  <!-- end nav-social -->
				
			<nav id="nav-tog-main">  <!-- begin nav-tog-main -->
    <a class="menu-button" href="#nav-footer" onclick="toggleNav(); return false;">&#9776;  MENU</a>
				<ul id="nav-toggle">
					<li><a href="main.html">About</a></li>
					<li><a href="javascript:;">Facilities</a></li>
					<li><a href="javascript:;">Recreation</a></li>
					<li class="last"><a href="javascript:;">Contact</a></li>
				</ul>
			</nav>  <!-- end nav-tog-main -->
					
		<h1 class="logo">
			<a href="../wordpress/">
				<span>Cascade Meadows Camp</span>
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Cascade Meadows Logo" id="logo-lrg"/>
			</a>
		</h1>
		
			<a href="#nav-home">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrow.png" alt="Arrow" id="arrow"/>
			
			</a>
		 <!-- begin nav-home -->
		 <?php wp_nav_menu(array(
				'theme_location' => 'home-menu', 
				'container' => 'div',
				'container_id' => 'nav-home',
				'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>',
			)); ?>
		 <!-- end nav-home -->
	</header>  <!-- end header -->

  <div id="middle">  <!-- begin middle -->		 
		 <!-- begin widgets -->
		 <div id="widgets">
		 	<section class="widget-item">
				<h2>About the Camp:</h2>
					<?php if(have_posts()) : while(have_posts()) : the_post(); //start loop one ?>
					<?php the_content(''); //get the home page's content ?>
					<?php endwhile; endif; //end loop one ?>
			</section>
			<section class="widget-item">
				<h2>Camp Updates</h2>
					<ul>
						<?php rewind_posts(); //stop loop one ?>
						<?php query_posts('showposts=4'); //give directinos to loop two ?>
						<?php while(have_posts()) : the_post(); //start loop two ?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
						</li>
						<?php endwhile; //end loop two ?>
					</ul>
			</section>		
			<section>
				<h2>Contact Us:</h2>
				<p>
					<strong>Phone: </strong><a href="#">999.123.4567</a><br>
					<strong>Email: </strong><a href="#">email@email.com</a>
				</p>
				<p>123 Camp Road<br>Leavenworth, WA 98012</p>
			</section> 
		 </div>
		 <!-- end widgets -->
  </div>  <!-- end middle -->

<?php get_footer(); ?>
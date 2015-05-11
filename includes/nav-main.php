<?php $page = basename($_SERVER['SCRIPT_NAME']);?>	
	
			<nav id="nav-main">  <!-- begin nav-main -->
			<h1><?php include('includes/titles.php') ?></h1>
				<ul>
					<li><a href="about.php" <?php if ($page == 'about.php' || $page == 'about-mission.php' || $page == 'about-history.php') {print'class="main-on"';} ?> >About</a></li>
					<li><a href="facilities.php" <?php if ($page == 'facilities.php' || $page == 'facilities-lodging.php' || $page == 'facilities-meals.php') {print 'class="main-on"';} ?> >Facilities</a></li>
					<li><a href="recreation.php" <?php if ($page == 'recreation.php' || $page == 'recreation-seasonal.php' || $page == 'recreation-local.php') {print 'class="main-on"';} ?> >Recreation</a></li>
					<li><a href="contact.php" <?php if ($page == 'contact.php' || $page == 'contact-thx.php' || $page == 'contact-location.php' || $page == 'contact-rates.php' || $page == 'contact-booking') {print 'class="main-on"';} ?> >Contact</a></li>
				</ul>
			</nav>  <!-- end nav-main -->



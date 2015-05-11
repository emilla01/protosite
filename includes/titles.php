<?php

$page = basename ($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') {print 'Home';}

if ($page == 'about.php') {print 'About';}

if ($page == 'about-mission.php') {print 'Mission';}

if ($page == 'about-history.php') {print 'History';}

if ($page == 'facilities.php') {print 'Facilities';}

if ($page == 'facilities-lodging.php') {print 'Lodging';}

if ($page == 'facilities-meals.php') {print 'Meals';}

if ($page == 'recreation.php') {print 'Recreation';}

if ($page == 'recreation-seasonal.php') {print 'Seasonal';}

if ($page == 'recreation-local.php') {print 'Local';}

if ($page == 'contact.php' || $page == 'contact-thx.php') {print 'Contact';}

if ($page == 'contact-location.php') {print 'Location';}

if ($page == 'contact-rates.php') {print 'Rates';}

if ($page == 'contact-booking.php') {print 'Booking';}


?>
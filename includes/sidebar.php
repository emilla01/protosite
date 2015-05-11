<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

      <div id="nav-sub">  <!-- begin nav-sub -->
          <ul>
					<?php if ($page == 'about.php' || $page == 'about-mission.php' || $page == 'about-history.php') { print '
            <li class="one-two"><a href="about-mission.php"><img src="images/mission_off.png" class="rollover" alt="Mission"/></a></li>
            <li class="two-two"><a href="about-history.php"><img src="images/history_off.png" class="rollover" alt="History"/></a></li>';} ?>
				
					<?php if ($page == 'facilities.php' || $page == 'facilities-lodging.php' || $page == 'facilities-meals.php') { print '
            <li class="one-two"><a href="facilities-lodging.php"><img src="images/lodging_off.png" class="rollover" alt="Lodging"/></a></li>
            <li class="two-two"><a href="facilities-meals.php"><img src="images/meals_off.png" class="rollover" alt="Meals"/></a></li>';} ?>
				
					<?php if ($page == 'recreation.php' || $page == 'recreation-seasonal.php' || $page == 'recreation-local.php') { print '
            <li class="one-two"><a href="recreation-seasonal.php"><img src="images/seasonal_off.png" class="rollover" alt="Seasonal"/></a></li>
            <li class="two-two"><a href="recreation-local.php"><img src="images/local_off.png" class="rollover" alt="Local"/></a></li>';} ?>
					
					<?php if ($page == 'contact.php' || $page == 'contact-thx.php' || $page == 'contact-location.php' || $page == 'contact-rates.php' || $page == 'contact-booking.php') { print '
            <li class="one-three"><a href="contact-location.php"><img src="images/location_off.png" class="rollover" alt="Location"/></a></li>
            <li class="two-three"><a href="contact-rates.php"><img src="images/rates_off.png" class="rollover" alt="Rates"/></a></li>
            <li class="three-three"><a href="contact-booking.php"><img src="images/booking_off.png" class="rollover" alt="Booking"/></a></li>';} ?>
          </ul>
      </div>   <!-- end nav-sub -->
    </aside>  <!-- end aside primary -->
  </div> <!-- end middle -->


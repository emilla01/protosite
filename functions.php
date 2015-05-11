<?php

/*
Theme Name: Cascade Meadows
Author: Emily Millard
Author URL: http://www.emilymillard.com
Description: WordPress theme for camp located in the the Cascade Mountains
Version: 1.0
*/

//Register My Sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
//

//Register My Menus
register_nav_menus(array(
	'main-menu' => __('Main'),
));
//

?>
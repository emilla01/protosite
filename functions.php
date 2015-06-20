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
	'home-menu' =>__('Home'),
));

//Create Post Thumbnails
add_theme_support('post-thumbnails');

//Create Page Excerpts
add_post_type_support('page', 'excerpt');

//Get My Title Tag
function get_my_title_tag() {
	global $post;
	if (is_front_page()) {
		bloginfo('description'); //retrieve the site tagline
	}
	elseif (is_page() || is_single()) {		//for site Pages or Postings
		the_title();	//retrieve the page or posting title
	}
	else {	//for everything else
		bloginfo('description');	//retrieve site tagline
	}
	if ($post->post_parent) {		//for Parent Pages
		echo ' | '; //seperator with spaces	
		echo get_the_title($post->post_parent); //retrieve parent page title
	}
	
	echo ' | '; //seperator with spaces
	bloginfo('name'); //retrieve site name
	echo ' | '; //seperator with spaces
	echo 'Leavenworth, WA'; //location
	
}

?>
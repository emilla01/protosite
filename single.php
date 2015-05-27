<?php get_header();?>	
  <div id="middle">  <!-- begin middle -->
    <div id="content"> <!-- begin content: left-floated  -->
			
			<!-- begin the loop -->
			<?php if(have_posts()) : while (have_posts()) : the_post(); // start the loop ?>
			<article id="post-<?php the_ID(); ?>" class="post"> <!-- begin #post .post -->
				<h2><?php the_title(); //get the page or posting title ?></h2>
				<small>Posted on
					<?php the_time('F j, Y'); //get the time ?>
					by <?php the_author(); //get the author name ?>
					in <?php the_category(', '); //get the category ?>
				</small>
				<?php the_post_thumbnail('large'); //get the featured image ?>
				<?php the_content(''); // get page or posting written content ?>
				<?php endwhile; endif; // end the loop ?>
				<!-- end the loop -->
				<small>single.php</small>
			</article>	<!-- end #post .post -->
    </div> <!-- end content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
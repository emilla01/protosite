<?php get_header();?>	
  <div id="middle">  <!-- begin middle -->
    <div id="content"> <!-- begin content: left-floated  -->
			
			<!-- begin the loop -->
			<?php if(have_posts()) : while (have_posts()) : the_post(); // start the loop ?>
			<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); ?></a></h2>
			<?php the_content(''); // get page or posting written content ?>
			<?php endwhile; endif; // end the loop ?>
			<!-- end the loop -->
			<small>single.php</small>
    </div> <!-- end content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
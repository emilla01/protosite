<?php get_header();?>	
  <div id="middle">  <!-- begin middle -->
    <div id="content"> <!-- begin content: left-floated  -->
			
			<!-- begin the loop -->
			<?php if(have_posts()) : while (have_posts()) : the_post(); // start the loop ?>
			<article class="post-excerpt">	<!-- begin .post-excerpt -->
				<h2><a href="<?php the_permalink(); // link to the page or posting ?>">
				<?php the_title(); ?></a></h2>
				<small>
					Posted on <?php the_time('F j, Y'); //get the time ?>
					by <?php the_author(); //get the author name ?>
					in <?php the_category(', '); //get the category ?>  
				</small>
				<a href="<?php the_permalink(); //link to the page or posting ?>">
				<?php the_post_thumbnail('thumbnail'); ?></a>
				<?php the_excerpt(); // get the posting's excerpt ?>
				<p class="read-more"><a href="<?php the_permalink(); //link to the page or posting ?>">Read More >></a></p>
			</article>	<!-- end .post-excerpt -->
			<?php endwhile; endif; // end the loop ?>
			<!-- end the loop -->
			<small>index.php</small>
    </div> <!-- end content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
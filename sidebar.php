    <aside id="primary"> <!-- begin aside primary: right-floated column -->

      <div id="nav-sub">  <!-- begin nav-sub -->
        <?php if (is_page()) : // if we are in "pages"... ?>
				<h2 class="sub-nav-title">
				<?php echo get_the_title($post->post_parent); // ...get the gateway page title ?> </h2>
				
				<ul class="sub-nav-items"><?php
					if ($post->post_parent) {		// if the page has a parent...
						wp_list_pages(array('child_of' => $post->post_parent, 'title_li' =>__('')));	// ...list the sub-pages with no title
					} else { //	if the page does not have a parent...
						wp_list_pages(array('child_of' => $post->ID, 'title_li' =>__('')));
					}
				?></ul>
				<?php endif;	// end if we are in "pages" ?>
				
				<?php if (!(is_page())) : //if we are not in "pages"... ?>
				<h2 class="sub-nav-title">Blog</h2>
				<ul class="sub-nav-items"><?php wp_list_categories(array('title_li' =>__(''))); // ...list the categories with no title ?></ul>
				<?php endif; ?>
				
      </div>   <!-- end nav-sub -->
			
			<!-- begin Quote custom field -->
			<?php if(get_post_meta($post->ID, 'Quote', true)): //check to see if there is a quote ?>
			
			<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); //write out quote ?></blockquote>
			
			<?php endif; ?>
			<!-- end Quote custom field -->
			
			<!-- begin dynamic sidebar -->
			<?php dynamic_sidebar(1); //call widgets ?>
			<!-- end dynamic sidebar -->
			
    </aside>  <!-- end aside primary -->
  </div> <!-- end middle -->

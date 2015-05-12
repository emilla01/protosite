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
			
    </aside>  <!-- end aside primary -->
  </div> <!-- end middle -->

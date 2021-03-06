<sidebar>
			
			<?php if (is_page()) : // if we are in "pages"... ?>
				<h2 class="sub-navigation-title">
					<?php echo get_the_title($post->post_parent); // ...get the gateway page title ?>
				</h2>
				<ul class="sub-navigation-items">
				<?php  if ($post->post_parent) { // if the page has a parent...
							wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // ...list the sub-pages with no title
						} else { // if the page does not have a parent...
							wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // ...list the sub-pages with no title
								} ?>
				</ul>
				<?php endif; // end if we are in "pages" ?>
				<?php if (!(is_page())) : // if we are not in "pages"... ?>
				<h2 class="sub-navigation-title">Blog</h2>
				<ul class="sub-navigation-items">
					<?php wp_list_categories(array('title_li' => __(''))); // ...list the categories with no title ?>
				</ul>
				<?php endif; ?>
			
			<br />
	<!--Begin Quote -->
	
			<?php if (get_post_meta($post->ID, 'Quote', true)) : //check to see if there is a quote ?>
			
			<blockquote><?php echo (get_post_meta($post->ID, 'Quote', true)); //write the quote ?></blockquote>
	
			<?php endif; ?>
	
	<!--End Quote -->
	<br />
	
	<!--Begin Dynamic Sidebar Widget -->
	<?php dynamic_sidebar(1); //call our widgets ?>
	<!--End Dynamic Sidebar -->
	
			<br />
             <img src="<?php bloginfo('template_directory'); ?>/images/add.JPG" /><br />
			
</sidebar>
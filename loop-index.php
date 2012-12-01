

<!-- Skip Nav -->
<a id="content"></a>

	<div id="accordion" class="news">
		<!-- Start the Loop -->	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2>
			<a href="#" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
				<img scr="<?php echo get_template_directory_uri(); ?>/images/button-read_more.png" />
			</a>
		</h2>
		<div>
			<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
					<?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>
					
					<!-- Display the Post's Content in a div box. -->
					<div class="post-thumb">
						<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
					</div>
					<div class="entry">
						<?php the_excerpt(); ?>
					</div>
		</div>
		
		<!-- Stop The Loop (but note the "else:" - see next line). -->
		<?php endwhile; else: ?>
		
			<!-- The very first "if" tested to see if there were any Posts to -->
			<!-- display.  This "else" part tells what do if there weren't any. -->
			<p>Sorry, no posts matched your criteria.</p>
		
		<!--End the loop -->
		<?php endif; ?>
	</div>
		
		<!-- Begin Pagination -->
		<?php if (function_exists("emm_paginate")) {
		    emm_paginate();
		} ?>	        	
		<!-- End Pagination -->


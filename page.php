<?php get_header(); ?>



<div class="shadow_wrap_800px">
	<div class="content_wrapper page_content">

		<div class="content_heading full twelve columns">
				<h1><?php the_title(); ?></h1>
			</div>

		<div class="page-left columns seperator">

			<div class="content-entry">
			
				<?php get_template_part( 'loop', 'page' ); ?>
			
			</div>

		</div>
		<div class="page-right columns right_seperator">
			<div class="content-entry">
				<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
			</div>
		</div>

		<div style="clear:both"></div>
	</div>
</div>
		
<?php get_footer(); ?>
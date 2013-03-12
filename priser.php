<?php 

/*
Template Name: Priser
*/

?>
<?php get_header(); ?>



<div class="shadow_wrap_800px">
	<div class="content_wrapper page_content priser">

		<div class="content_heading full twelve columns">
				<h1><?php the_title(); ?></h1>
				<h2><?php the_field('subtitle'); ?></h2>
		</div>

		<div class="page-left columns">

			<div class="content-entry">
			
				<?php get_template_part( 'loop', 'page' ); ?>
			
			</div>

		</div>
		<div class="page_splitter"></div>
		<div class="page-right columns">
			<hr class="sidebar_hr">
			<div class="content-entry">
				<?php the_field('right_row_tekst'); ?>
			</div>
		</div>

		<div style="clear:both"></div>
	</div>
	<?php get_template_part( 'banner_right'); ?>
</div>
		
<?php get_footer(); ?>
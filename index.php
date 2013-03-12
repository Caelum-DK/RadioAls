<?php get_header(); ?>

	<div id="slidershadow">
		<div id="featured">

			<?php SliderContent(); ?>
					
		</div>
	</div>
<div class="shadow_wrap_800px">
	<div class="content_wrapper">
		<div class="front-left columns seperator">
			<div class="content_heading h-left">
				<h1>Lokale nyheder</h1>
				<h2><?php echo date('d.m.Y'); ?></h2>
			</div>
			<?php get_template_part( 'loop', 'index' ); ?>

			<div class="rss content_heading h-left">
				<h1>Landsdækkende nyheder</h1>
				<h2><?php echo date('d.m.Y'); ?></h2>
			</div>
			<!-- sidebar -->
			<aside class="rss">

				<ul>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('RSS Widget')) : ?>
					
					<?php endif; ?>
				</ul>
				<div style="clear: both;"></div>
			</aside>
			<!-- sidebar -->


			<div class="weather content_heading h-left">
				<h1>Vejret</h1>
				<h2>Sønderborg</h2>
			</div>
			<!-- sidebar -->
			<aside class="weather">

				<ul>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Weather Widget')) : ?>
					
					<?php endif; ?>
				</ul>
				<div style="clear: both;"></div>
			</aside>
			<!-- sidebar -->
			
		</div>
		<div class="front-right columns right_seperator">
			<div class="poll content_heading h-right">
				<h1>Poll</h1>
			</div>
			<div id="sidebar">
				<?php get_sidebar(); ?>
				<div style="clear:both"></div>
			</div>
			
			<div class="facebook content_heading facebook_heading h-right">
				<h1>Facebook</h1>
			</div>
			<!-- facebook area -->
			<aside>

				<ul>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Facebook widget')) : ?>
			
					<?php endif; ?>
				</ul>

			</aside>
			<div style="clear:both"></div>

			<!-- facebook area -->

			<div class="kalender content_heading h-right">
				<h1>Dagens program</h1>
			</div>
			<!-- kalender area -->
			<?php 
				$args = array( 'post_type' => 'calendar', 'posts_per_page' => 1, 'name' => date('D') );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';
				endwhile;
			 ?>


			<div style="clear:both"></div>

			<!-- kalender area -->




		</div>

		<div style="clear:both"></div>
	</div>
	<?php get_template_part( 'banner_right'); ?>
</div>
		
<?php get_footer(); ?>
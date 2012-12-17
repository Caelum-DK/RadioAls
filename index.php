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
				<h1>Nyheder</h1>
			</div>
			<?php get_template_part( 'loop', 'index' ); ?>

			<div class="weather content_heading h-left">
				<h1>Vejret</h1>
				<h2>Sønderborg</h2>
			</div>

			<!-- sidebar -->
			<aside>

				<ul>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Weather Widget')) : ?>
					
					<?php endif; ?>
				</ul>

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
				<h1>Kalender</h1>
			</div>
			<!-- kalender area -->
			<aside>

				<ul>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Kalender Widget')) : ?>
			
					<?php endif; ?>
				</ul>

			</aside>
			<div style="clear:both"></div>

			<!-- kalender area -->




		</div>

		<div style="clear:both"></div>
	</div>
	<?php get_template_part( 'banner_right'); ?>
</div>
		
<?php get_footer(); ?>
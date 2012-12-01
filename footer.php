		<div class="shadow_wrap_800px">
			<div class="content_wrapper spotbox">
				
				<!-- spotbox widgets -->
				<aside>

					<ul>
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Spotbox Widget Area')) : ?>
						<li><h4>Spotbox widget area</h4></li>
						<li>Add widgets in Appearance > Widgets!</li>
						<?php endif; ?>
					</ul>

				</aside>
				<!-- spotbox widgets -->

				<div style="clear:both"></div>
			</div>
		</div>

	</div>
	<!-- Main Row -->

	<div id="banner_footer_wrap">
		
		<div id="banner_footer">
			
			<!-- banner spot1 -->
			<aside class="shadow300x">

				<ul>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner spot1: 300x100')) : ?>
					
					<?php endif; ?>
				</ul>

			</aside>
			<!-- banner spot1 -->

			<!-- banner spot2 -->
			<aside class="shadow300x">

				<ul>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner spot2: 300x100')) : ?>
										
					<?php endif; ?>
				</ul>

			</aside>
			<!-- banner spot2 -->

			<!-- banner spot3 -->
			<aside class="shadow180x">

				<ul>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner spot3: 180x100')) : ?>
										
					<?php endif; ?>
				</ul>

			</aside>
			<!-- banner spot3 -->

		</div>

	</div>
	
	<!-- Footer -->
	<footer class="row footer">
	
			<div class="row">
			
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
					<h4>Footer</h4>
					<p>Insert company info here, Go to Appearance > Widgets</p>
					<?php endif; ?>
				
			</div>
	
	</footer>
	<!-- Footer -->

	</div>
	<!-- container -->

	<!-- Included JS Files -->	
	<script src="<?php bloginfo('template_url'); ?>/javascripts/foundation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/orbit-1.3.0.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/app.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>


	<?php wp_footer(); ?>
	
</body>
</html>
<!-- sidebar -->
<aside>

	<ul>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?>
		<li><h4>Hey! You!</h4></li>
		<li>This is a widget area. To add widgets go to Appearance > Widgets!</li>
		<?php endif; ?>
	</ul>

</aside>
<!-- sidebar -->

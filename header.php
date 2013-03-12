<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="initial-scale=1.6; maximum-scale=1.0; width=device-width; "/>
	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

	<script>
	  $(function() {
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
  });
	</script>
	<script language="javascript">
		<!-- Begin
		function popUp(URL) {
		day = new Date();
		id = day.getTime();
		eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=350,height=400,left = 665,top = 225');");
		}
		// End -->
	</script>

</head>

<body <?php body_class(); ?>>

	<!-- Begin Container -->
	<div class="container">
		
		<!-- Header Row -->
		<div class="row">
			
				<!-- Header Column -->
				<div class="twelve columns">
					
					
				
					<!-- Site Description & Title -->
					<hgroup id="header">
						<h1 id="logo" class="four columns"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_radioals.png" alt="<?php echo get_bloginfo('name'); ?>" title="<?php echo get_bloginfo('name'); ?>" /></a></h1>						
						<div id="listen">							
							<div id="now_playing">
								<h2><a target="_self" href="javascript:popUp('http://radioals.dk/stream/RadioAls.html')">Hør Netradio</a></h2>
								
							</div>
						</div>
					</hgroup>	
				</div>
				<!-- Header Column -->
				
		</div>
		<!-- Header Row -->

		<!-- Navigation --> 
		<div class="nav-bar-bg">
			<div class="row" id="access" role="navigation">					
		    	<?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class' => 'nav-bar', 'container' => 'nav') ); ?>
		    </div>
		</div>
		<div class="nav-bar-shadow">
		</div>
		
		<!-- Main Row -->
		<div class="row">
		
		
				
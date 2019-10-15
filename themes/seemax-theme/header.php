<!doctype html>
<html <?php language_attributes(); ?> class="no-js loader-class">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>Mearsheimer | <?php the_title(); ?></title>

	<!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
  <link href="<?php echo get_template_directory_uri(); ?>/img/jjm-favicon.png" rel="shortcut icon">
   <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77219320-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-77219320-2');
	</script>

</head>
<body <?php body_class(); ?> >
<div class="wrapper">
	<div id="preloader">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 994 582">
		  <style>
		    #leftLoad, #middleLoad, #rightLoad {fill:white;}
		  </style>
			<path id="leftLoad" d="M179.7,3.3c0,2.2-0.4,3.3-1.1,3.3c-12.1,0-20.8,1.1-26.3,3.3c-5.5,2.2-9.2,5.9-11.2,11.2c-2,5.3-3,13.4-3,24.3
				v311.9c0,36.1-8.4,64.8-25.2,86.2c-16.8,21.3-41.1,32-72.9,32c-12.4,0-22.2-2.1-29.3-6.3C3.6,465.1,0,459.3,0,452
				c0-5.5,1.6-9.8,4.9-13.1c3.3-3.3,7.9-4.9,13.7-4.9c6.2,0,11,1.4,14.2,4.1c3.3,2.7,6.8,6.8,10.4,12.3c3.3,5.1,6.2,8.8,8.8,10.9
				c2.6,2.2,6.2,3.3,11,3.3c13.2,0,22.9-7.6,29.3-22.7c6.4-15.1,9.6-39.5,9.6-73.1V44.3c0-10.9-1.3-19-3.8-24.1
				c-2.6-5.1-7.6-8.7-15.1-10.7c-7.5-2-19.1-3-34.8-3c-0.7,0-1.1-1.1-1.1-3.3S47.5,0,48.2,0L80,0.5c16.8,0.7,29.9,1.1,39.5,1.1
				c9.5,0,21.2-0.4,35.1-1.1L178.6,0C179.4,0,179.7,1.1,179.7,3.3z"/>
			<path id="middleLoad" d="M410.8,4c0,2.7-0.4,4-1.3,4c-14.8,0-25.5,1.3-32.2,4c-6.7,2.7-11.3,7.3-13.7,13.7c-2.5,6.5-3.7,16.4-3.7,29.8
				v381.8c0,44.2-10.3,79.4-30.9,105.5C308.4,569,278.7,582,239.8,582c-15.2,0-27.2-2.6-35.9-7.7c-8.7-5.1-13.1-12.2-13.1-21.1
				c0-6.7,2-12.1,6-16.1c4-4,9.6-6,16.8-6c7.6,0,13.4,1.7,17.4,5c4,3.3,8.3,8.4,12.7,15.1c4,6.2,7.6,10.7,10.7,13.4
				c3.1,2.7,7.6,4,13.4,4c16.1,0,28.1-9.3,35.9-27.8c7.8-18.5,11.7-48.3,11.7-89.4V54.3c0-13.4-1.6-23.2-4.7-29.5
				c-3.1-6.2-9.3-10.6-18.4-13.1C283.3,9.3,269.1,8,249.9,8c-0.9,0-1.3-1.3-1.3-4s0.4-4,1.3-4l38.9,0.7C309.3,1.6,325.4,2,337,2
				C348.7,2,363,1.6,380,0.7L409.5,0C410.4,0,410.8,1.3,410.8,4z"/>
			<path id="rightLoad" d="M994,414.6c0,2.7-0.7,4-2,4c-13.9,0-24.8-0.2-32.9-0.7l-46.3-0.7l-42.9,0.7c-7.2,0.4-17.2,0.7-30.2,0.7
				c-0.9,0-1.3-1.3-1.3-4s0.4-4,1.3-4c15.2,0,26.5-1.2,33.9-3.7c7.4-2.4,12.3-6.8,14.8-13.1c2.5-6.2,3.2-16.1,2.3-29.5L878.6,59.6
				L725.7,413.9c-0.9,1.8-2.7,2.7-5.4,2.7c-2.2,0-4.3-0.9-6-2.7l-165-350.3l-6,282c-0.5,23.7,3.6,40.4,12.1,50.2
				c8.5,9.8,23.5,14.7,44.9,14.7c0.9,0,1.3,1.3,1.3,4s-0.5,4-1.3,4c-12.5,0-22.1-0.2-28.8-0.7l-36.2-0.7l-34.9,0.7
				c-6.3,0.4-15.2,0.7-26.8,0.7c-0.9,0-1.3-1.3-1.3-4s0.4-4,1.3-4c18.8,0,32.3-5,40.6-15.1c8.3-10,12.6-26.7,13.1-49.9l6-310.8
				C519.8,17,501.5,8,478.3,8c-0.9,0-1.3-1.3-1.3-4s0.4-4,1.3-4l24.8,0.7c4.5,0.4,10.7,0.7,18.8,0.7c8,0,14.9-0.2,20.5-0.7
				c5.6-0.4,9.9-0.7,13.1-0.7c5.8,0,10.6,2.1,14.4,6.4c3.8,4.3,9.3,13.7,16.4,28.5l149.6,314.8L882,16.7C886.9,5.6,893.6,0,902.1,0
				c2.2,0,5.5,0.2,9.7,0.7c4.2,0.4,9.9,0.7,17.1,0.7l31.5-0.7c4.9-0.4,12.3-0.7,22.1-0.7c1.3,0,2,1.3,2,4s-0.7,4-2,4
				c-22.4,0-38.3,3.2-48,9.7c-9.6,6.5-14.2,18.7-13.7,36.5l13.4,310.1c0.4,13.8,2.1,23.9,5,30.1c2.9,6.3,8.2,10.5,15.8,12.7
				c7.6,2.2,19.9,3.3,36.9,3.3C993.3,410.6,994,411.9,994,414.6z"/>
		</svg>
	</div>
	<header class="header" role="banner">
		<div class="content header-inner-wrap">
			<div class="header-logo">
				<a href="/">
					<div class="logo-subhead">
						R. Wendell Harrison Distinguished Professor of Political Science
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" >
					<div class="logo-subhead">
						The University of Chicago
					</div>
				</a>
			</div>
			<nav class="main-nav mainNav" role="navigation">
				<?php main_theme_nav(); ?>
			</nav>
			<div class="mobile-menu menuToggle">
				<span class="hamTop"></span>
				<span class="hamMid"></span>
				<span class="hamBot"></span>
			</div>
		</div>
	</header>
	<div class="back-to-top backToTop">
		<i class="fal fa-arrow-up"></i>
	</div>

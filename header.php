<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>WordPress Theme Building - Creating a WordPress theme from static HTML</title>
<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/main.css" />
</head>

<body>

	<header role="banner">

		<div class="site-name half left">
			
			<!-- site name and description  -->
			<h1 id="site-title" class="one-half-left">
				<a href="" title="Creating a WordPress theme from static html - home" rel="home">WordPress Theme Building</a>
			</h1>
			<h2 id="site-description">Creating a WordPress theme from static html</h2>
		
		</div>

		<!-- an aside in the header - this will be populated via a widget area later -->	
		<aside class="header widget-area half right" role="complementary">
		
			<div class="widget-container">	
				This will be a widget area in the header - address details (or anything else you like) goes here
			</div><!-- .widget-container -->

		</aside><!-- .half right -->
	
	</header><!-- header -->
	
	<!-- full width navigation menu - delete nav element if using top navigation -->
	<nav class="menu main">
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<div class="skip-link screen-reader-text"><a href="#content" title="Skip to content">Skip to content</a></div>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Latest news</a></li>
			<li><a href="#">Featured articles</a></li>
		</ul>
	</nav><!-- .main -->

	<div class="main">
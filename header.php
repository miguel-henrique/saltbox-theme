<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package design-system-medgrupo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title>Saltbox</title>
    <meta name="description" content="Located in Atlanta’s bustling Upper West Side, our Atlanta location provides a convenient, thriving environment for local business owners.">
    <meta name="author" content="Saltbox">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="canonical" href="<?php get_home_url(); ?>">
    <meta name="robots" content="index,follow">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/logo-saltbox.svg">

	<link rel="profile" href="https://gmpg.org/xfn/11">


<!-- 	Bootstrap -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="preload" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- 	Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- 	Swiper -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

 <!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	



	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
			<div class="container">
				<a class="navbar-brand" href="<?php get_home_url(); ?>">
					<img alt="Logo Saltbox" src="<?php bloginfo('template_directory'); ?>/img/logo-saltbox.svg">
				</a>


				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
					<div class="offcanvas-header">
						<a class="navbar-brand" href="#">
							<img alt="Logo Saltbox Menu Off Canvas" src="<?php bloginfo('template_directory'); ?>/img/logo-saltbox.svg">
						</a>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li>
								<a class="nav-link" href="">Locations</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">Why Saltbox</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">Workspaces</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">Fulfillment</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">About Us</a>
							</li>
						</ul>

						<button class="btn white-button" type="submit">Book a Tour</button>
					</div>
				</div>
			</div>
		</nav>

	
	</header><!-- #masthead -->

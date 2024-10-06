<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clark
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'clark' ); ?></a>


	<header>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
					data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>
	
				<div class="collapse navbar-collapse" id="ftco-nav">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class'        => 'navbar-nav nav ml-auto',
						)
					);
					?>
					<!-- <ul class="navbar-nav nav ml-auto">
						<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
						<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
						<li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
						<li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
						<li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
						<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
						<li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
						<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
					</ul> -->
				</div>
			</div>
		</nav>
	</header>
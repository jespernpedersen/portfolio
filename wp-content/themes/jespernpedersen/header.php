<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
	<?php wp_head(); ?>
</head>

<body class="not-active">
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<article class="site-titles">
		<a href="/portfolio-v3/" title="Go to frontpage">
			<img src="/portfolio-v3/wp-content/uploads/2018/12/ecclesia-logo.png" class="fadeIn" alt="Logo" />
			<span class="site-title">Jesper Pedersen</span>
			<span class="profession">- Full Stack Developer</span>
		</a>
	</article>

	<nav class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
		<a href="wp-content/uploads/2018/12/cv.pdf" class="cta-button">Download resumé</a>
	</nav>
</header>
	
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'simentor' ); ?></a>

<?php
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
?>
<header id="site-header" class="site-header" role="banner">
<div id="logo">
		<?php the_custom_logo(); ?>
	</div>
	
	<?php if (display_header_text()) : ?>
	<h1 class="site-title">
		<a href="<?php echo esc_attr( home_url( '/' ) ); ?>" title="Home" rel="home">
		<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</a>
	</h1>
	<p class="tagline"><?php bloginfo('description'); ?></p>	
<?php endif; ?>	

	<nav class="site-nav" id="nav-main" role="navigation">
		<div class="container">
			<?php
			if( has_nav_menu('main-menu') )
				wp_nav_menu(array('theme_location' => 'main-menu', 'container' => false, 'menu_class' => 'top-bar'));
			?>
		</div>
	</nav>

</header>

<?php
}
?>
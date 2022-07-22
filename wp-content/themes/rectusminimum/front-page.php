<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<span id="rec-top-anchor"></span>
		<?php wp_body_open(); ?>
		<a class="skip-link screen-reader-text" href="#page-content">
		<?php esc_html_e( 'Skip to content', 'rectusminimum' ); ?></a>
		<?php get_template_part("menu") ?>
		<span id="header"></span>
		<div class="main-image">
			<img src="<?php echo esc_attr(get_option('rectusminimum-backimage')); ?>" width="1200" alt="<?php echo bloginfo('name'); ?>" />
		</div>
		<main id="page-content" class="front-page">
			<div class="rec-archive">
				<?php get_template_part('inc/post'); ?>
			</div>
		</main>
		<?php get_template_part('inc/tagcloud'); ?>
		<?php get_footer(); ?>
	</body>
</html>

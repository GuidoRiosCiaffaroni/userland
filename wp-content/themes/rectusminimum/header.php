<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
<?php if ( is_single()): ?>
	<?php if ($post->post_excerpt){ ?>
		<meta name="description" content="<?php echo esc_attr($post->post_excerpt); ?>" />
	<?php } else {
		$summary = strip_tags($post->post_content);
		$summary = str_replace("\n", "", $summary);
		$summary = mb_substr($summary, 0, 120). "…"; ?>
		<meta name="description" content="<?php echo esc_attr($summary); ?>" />
	<?php } ?>
<?php elseif ( is_home() || is_front_page() ): ?>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php elseif ( is_category() ): ?>
	<?php if ( !empty(category_description()) ): ?>
<meta name="description" content="<?php echo category_description(); ?>" />
	<?php endif; ?>
<meta name="robots" content="noindex, follow" />
<?php elseif ( is_tag() ): ?>
	<?php if ( !empty(tag_description()) ): ?>
<meta name="description" content="<?php echo tag_description(); ?>" />
	<?php endif; ?>
<meta name="robots" content="noindex, follow" />
<?php elseif ( is_date() ): ?>
<meta name="robots" content="noindex, follow" />
<?php else: ?>
<meta name="description" content="<?php the_excerpt();?>" />
<?php endif; ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#page-content">
<?php esc_html_e( 'Skip to content', 'rectusminimum' ); ?></a>
<?php get_template_part("menu") ?>
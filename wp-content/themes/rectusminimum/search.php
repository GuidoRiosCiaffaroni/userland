<?php get_header(); ?>
<main id="page-content">
	<div id="rec-top-anchor">
<?php
if (isset($_GET['s']) && empty($_GET['s'])) {
	$rec_title = '';
} else {
	$rec_title = '['. sanitize_text_field(wp_unslash($_GET['s'])) .']';
};
?>
		<h1><?php echo esc_html($rec_title . ' Search Result'); ?></h1>
	<?php get_search_form(); ?>
	<?php if (have_posts()): ?>
		<h2><?php
	if (isset($_GET['s']) && empty($_GET['s'])) {
		echo esc_html__('No search word','rectusminimum');
	} else {
		echo esc_html__('results', 'rectusminimum') . ' ' . esc_html($wp_query->found_posts);
	}
?></h2>
<?php get_template_part('inc/post-excerpt'); ?>
<?php else: ?>
<?php esc_html_e('No match', 'rectusminimum'); ?>
<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>​

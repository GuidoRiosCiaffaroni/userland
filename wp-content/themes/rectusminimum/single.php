<?php get_header(); ?>
<main id="page-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="title"><h1 itemprop="headline"><?php the_title(); ?></h1></div>
		<?php get_template_part('inc/content'); ?>
		<?php get_template_part('comment'); ?>
		<?php wp_link_pages(); ?>
		<?php get_template_part('inc/tagcloud'); ?>
	</div>
</main>
<?php get_footer(); ?>
<?php get_header(); ?>
<main id="page-content">
	<span id="rec-top-anchor"></span>
	<div class="rec-archive">
		<?php
			the_archive_title('<h1>', '</h1>');
			the_archive_description('<div class="taxonomy-description">', '</div>');
			?>
		<?php get_template_part('inc/post'); ?>
	</div>
</main>
<?php get_template_part('inc/tagcloud'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php get_header(); ?>
<main>
	<div id="rec-top-anchor">
<?php
the_archive_title( '<h1>', '</h1>' );
the_archive_description( '<div>', '</div>' );
$number = (max(1, $paged ) - 1) * $wp_query->query_vars['posts_per_page'];
?>
		<style>
.rec-list-ranking {
	counter-reset: number <?php echo esc_html($number); ?>;
}
		</style>
		<ol class="rec-list-ranking">
<?php if(have_posts()): while(have_posts()):the_post(); ?>
			<li>
				<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
				<div class="summary">
					<a class="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
					<span class="nodeco"><?php the_tags(); ?></span><br>
Category: <?php the_category(', '); ?><br>
Create Date: <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
					<div class="excerpt">
						<?php echo esc_html(get_the_excerpt()); ?>
					</div>
				</div>
			</li>
<?php endwhile; ?>
		</ol>
<?php	
		get_template_part('inc/pagination');
	endif; ?>
	</div>
	<?php get_template_part('inc/tagcloud'); ?>
</main>
<?php get_footer(); ?>​

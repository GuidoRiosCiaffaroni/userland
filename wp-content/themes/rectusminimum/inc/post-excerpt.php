<?php
// numbering
$number = (max(1, $paged ) - 1) * $wp_query->query_vars['posts_per_page'];
?>
	<style>
.rec-list-ranking {
	counter-reset: number <?php echo esc_html($number); ?>;
}
	</style>
	<?php if (have_posts()) { ?>
		<ol class="rec-list-ranking">
		<?php while (have_posts()) : the_post(); ?>
			<li>
				<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
				<div class="summary">
					<a class="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
<?php esc_html_e('Category: ','rectusminimum'); ?><span class="nodeco"><?php the_category(', '); ?></span><br>
<?php esc_html_e('Modified: ','rectusminimum'); ?><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_modified_date('Y/m/d'); ?></time>
					<div class="excerpt">
						<?php echo esc_html(get_the_excerpt()); ?>
					</div>
				</div>
			</li>
		<?php endwhile; ?>
		</ol>
	<?php get_template_part('inc/pagination');
	}; ?>

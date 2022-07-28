<?php if (have_posts()) { ?>
	<ul class="rec-itemlist">
		<?php while (have_posts()) : the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="thumb"><?php if (has_post_thumbnail()) { the_post_thumbnail('large'); }; ?></div>
				<span class="title"><?php the_title(); ?></span>
			</a>
		</li>
		<?php endwhile; ?>
	</ul>
	<?php get_template_part('inc/pagination');
}; ?>

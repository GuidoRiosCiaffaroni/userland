<div class="mm-archive">
	<div class="rec-sectitle">
		<?php esc_html_e('RELATED ARTICLES','rectusminimum'); ?>
	</div>
<?php
$tags = get_the_tags($post->ID);
$tag_id = array();

if (is_array($tags)) {

	foreach($tags as $instag) {
		array_push($tag_id, $instag->term_id);
	};

	$args = array(
		'post__not_in' => array($post->ID),
		'posts_per_page'=> 6,
		'tag__in' => $tag_id,
		'orderby' => 'rand'
		);
	$query = new WP_Query($args);
?>
	<ul class="rec-itemlist">
<?php
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="thumb"><?php if (has_post_thumbnail()) { the_post_thumbnail('large'); }; ?></div>
				<span class="date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_modified_date('Y/m/d'); ?></time></span>
				<span class="title"><?php the_title(); ?></span>
			</a>
		</li>
<?php
		};
	};
} else {
?>
<?php esc_html_e('No related article.','rectusminimum'); ?>
<?php
}
?>
	</ul>
</div>

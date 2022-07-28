<div class="rec-contents">
<?php
$rec_year = get_the_date('Y');
$rec_month = get_the_date('m');
?>
<?php if (!is_single()) { ?>
	<h2><?php the_title(); ?></h2>
<?php } ?>
	<div class="r noprint">
		<span><?php esc_html_e('Last Modified:','rectusminimum'); ?><time datetime="<?php the_modified_date('c') ?>" itemprop="dateModified"><?php the_modified_date('Y/m/d') ?></time></span>
		<span><?php esc_html_e('Published:','rectusminimum'); ?><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date('Y/m/d'); ?></time></span>
		<a href="<?php echo esc_attr(get_month_link($rec_year, $rec_month)); ?>"><?php echo get_the_date('Y/m'); ?></a>
	</div>
<?php the_content(); ?>
	<div class="noprint">
		<div class="the-tags"><?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
	</div>
</div>

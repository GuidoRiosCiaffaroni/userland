	<div class="comment">
		<span id="comment" class="anchor">&nbsp;</span>
		<h2><?php esc_html_e('Comment','rectusminimum'); ?></h2>
<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
}
?>
	</div>

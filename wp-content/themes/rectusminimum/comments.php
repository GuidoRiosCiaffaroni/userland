<?php if (comments_open()) { ?>
	<div id="comments">
	<?php if( have_comments() ): ?>
		<?php the_comments_navigation(); ?>
		<ul class="commets-list">
		<?php wp_list_comments();?>
	</ul>
	<?php endif; ?>
	<?php
		$args = array(
			'title_reply' => esc_html__('Write Comment','rectusminimum'),
			'comment_notes_before' => '',
			'comment_notes_after' => '',
			'label_submit' => esc_html__('Send Comment','rectusminimum')
		);
		comment_form($args);
	?>
	</div>
<?php } ?>
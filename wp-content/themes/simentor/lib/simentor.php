<?php

function simentor_init() {
	add_theme_support('custom-logo');
    add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'custom-logo', array(
		'width' => 260,
		'height' => 100,
		'flex-height' => true,
		'flex-width' => true,
	) );
	add_theme_support( 'custom-header' );
	add_theme_support( 'woocommerce' );
	add_post_type_support( 'page', 'excerpt' );
	
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'simentor' ) )
	);

	load_theme_textdomain( 'simentor', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'simentor_init' );

function simentor_comment_reply() {
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_action( 'comment_form_before', 'simentor_comment_reply' );



function simentor_clean_post_class($classes) {
	foreach ($classes as $k => $class) {
		if( 0 === strpos( $class, 'tag-' )
		|| 0 === strpos( $class, 'category-' )
		|| 0 === strpos( $class, 'post-' )
		|| 0 === strpos( $class, 'type-' )
		|| $class == 'status-publish'
		|| $class == 'format-standard' )
			unset($classes[$k]);
	}
	$classes = array_diff($classes, array('hentry'));
	return $classes;
}
add_filter('post_class','simentor_clean_post_class');

if( !function_exists( 'simentor_fb_like_thumbnails' ) ) {
	function simentor_fb_like_thumbnails()
	{
		global $posts;
		$FB_thumb = get_template_directory_uri() . '/assets/img/default.png';
		if ( is_single() || is_page() ) {
			if ( has_post_thumbnail( $posts[0]->ID ) ) {
				$FB_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $posts[0]->ID), 'thumbnail' );
				$FB_thumb = $FB_thumb[0];
			}
		}
		echo "\n<link rel=\"image_src\" href=\"$FB_thumb\" />\n";
	}
}
add_action('wp_head', 'simentor_fb_like_thumbnails');


if( !function_exists( 'simentor_feed_post_thumbnail' ) ) {
	function simentor_feed_post_thumbnail($content) {
		global $post;
		if ( '' != get_the_post_thumbnail($post->ID) ) {
			$content = '<p>' . get_the_post_thumbnail($post->ID, 'thumbnail') . '</p>' . get_the_content();
		}
		return $content;
	}
}
add_filter('the_excerpt_rss', 'simentor_feed_post_thumbnail');
add_filter('the_content_feed', 'simentor_feed_post_thumbnail');

if ( !function_exists('simentor_default_avatar') ) {
	function simentor_default_avatar($avatar_defaults) {
		$simentor_avatar = get_template_directory_uri() . '/assets/img/default.png';
		$avatar_defaults[$simentor_avatar] = get_bloginfo('name');

		return $avatar_defaults;
	}
}
add_filter( 'avatar_defaults', 'simentor_default_avatar' );

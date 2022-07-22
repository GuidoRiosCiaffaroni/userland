<?php
load_theme_textdomain('rectusminimum', get_template_directory() . '/languages');

add_theme_support('title-tag');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails' );
add_theme_support('responsive-embeds');
add_theme_support('custom-logo');
add_theme_support('align-wide');
add_theme_support('custom-background');
add_theme_support('custom-header');

add_filter('run_wptexturize', '__return_false');

function rectusminimum_wp_enqueue_scripts() {
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('nav', get_template_directory_uri() . '/nav.css');
}
add_action('wp_enqueue_scripts', 'rectusminimum_wp_enqueue_scripts');

add_filter('emoji_svg_url', '__return_false');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_print_styles', 'print_emoji_styles');

// menu
function rectusminimum_after_setup_theme() {
	add_theme_support('wp-block-styles');
	add_theme_support('editor-styles');
	add_editor_style('editor-style.css');
	register_nav_menu('main-menu', __('Primary Menu', 'rectusminimum'));
};
add_action('after_setup_theme', 'rectusminimum_after_setup_theme');
$rectusminimum_inSubMenuCnt = 0;
class rectusminimum_walker_nav_menu extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = null) {
		global $rectusminimum_inSubMenuCnt;
		$output .= '<input class="opensubmenu" type="checkbox" id="menu-parent' . strval($rectusminimum_inSubMenuCnt) . '"><label for="menu-parent' . strval($rectusminimum_inSubMenuCnt) . '"><span class="pd"><span class="fas angletoggle"></span></span></label><ul>';
		$rectusminimum_inSubMenuCnt++;
	}
	function end_lvl(&$output, $depth = 0, $args = null) {
		$output .= '</ul>';
	}
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		// Restores the more descriptive, specific name for use within this method.
		$menu_item = $data_object;
		$args = (object) $args;
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
		$classes[] = 'menu-item-' . $menu_item->ID;

		$args = apply_filters( 'nav_menu_item_args', $args, $menu_item, $depth );

		$class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $menu_item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $menu_item->attr_title ) ? $menu_item->attr_title : '';
		$atts['target'] = ! empty( $menu_item->target ) ? $menu_item->target : '';
		if ( '_blank' === $menu_item->target && empty( $menu_item->xfn ) ) {
			$atts['rel'] = 'noopener';
		} else {
			$atts['rel'] = $menu_item->xfn;
		}
		$atts['href']         = ! empty( $menu_item->url ) ? $menu_item->url : '';
		$atts['aria-current'] = $menu_item->current ? 'page' : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $menu_item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $menu_item->title, $menu_item->ID );

		$title = apply_filters( 'nav_menu_item_title', $title, $menu_item, $args, $depth );

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args );
	}
}
// remove id
function rectusminimum_nav_menu_item_id( $id ){ 
	return $id = array(); 
}
add_filter('nav_menu_item_id', 'rectusminimum_nav_menu_item_id', 10);

// add and remove class li
function rectusminimum_nav_menu_css_class($classes, $item, $args, $depth) {
	if(!empty($classes[0])) {
		$classes = array(esc_attr($classes[0]));
	} else {
		$classes = array();
	}
	if($item->current == true ) {
				$classes[] = 'current';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'rectusminimum_nav_menu_css_class', 10, 4);

// Last-Modified head
function rectusminimum_template_redirect(){
	if (is_single()) {
		header(sprintf("Last-Modified: %s", gmdate('D, d M Y H:i:s T', strtotime(get_the_modified_time("c")))));
	}
}
add_action("template_redirect", "rectusminimum_template_redirect");

function rectusminimum_comment_form_before() {
	if(get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('comment_form_before', 'rectusminimum_comment_form_before');

/* front page back ground image */
function rectusminimum_widgets_init() {
	register_sidebar(array(
		'name'=>'footer bar',
		'id' => 'side-widget',
		'before_widget'=>'
		<div id="%1$s" class="%2$s sidebar-wrapper">',
		'after_widget'=>'</div>',
		'before_title' => '<h5 class="sidebar-title">',
		'after_title' => '</h5>'
	));
}
add_action('widgets_init', 'rectusminimum_widgets_init');

function rectusminimum_admin_print_scripts() {
	wp_enqueue_media();
}
add_action('admin_print_scripts', 'rectusminimum_admin_print_scripts');

function rectusminimum_admin_init() {
	register_setting('custom-menu-group', 'rectusminimum-backimage');
}
function rectusminimum_admin_menu() {
	add_theme_page('frontpage', 'FrontPage', 'manage_options', 'custom_menu_page', 'rectusminimum_add_custom_menu_page');
	add_action('admin_init', 'rectusminimum_admin_init');
}
add_action('admin_menu', 'rectusminimum_admin_menu');

function rectusminimum_add_custom_menu_page() {
?>
<div class="wrap">
	<h2><?php esc_html_e('FrontPage Setting','rectusminimum'); ?></h2>
	<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
<?php
		settings_fields('custom-menu-group');
		do_settings_sections('custom-menu-group');
?>
		<div class="metabox-holder">
			<div class="postbox ">
				<h3 class='hndle'><span><?php esc_html_e('Back Ground Image','rectusminimum'); ?></span></h3>
				<div class="inside">
					<div class="main">
						<p class="setting_description"><?php esc_html_e('Upload FrontPage BackImage.','rectusminimum'); ?></p>
						<h4>Image</h4>
						<div class="backuploader">
							<input type="text" class="backuploader-url widefat" name="rectusminimum-backimage" value="<?php echo esc_attr(get_option('rectusminimum-backimage')); ?>">
							<p>
								<button class="backuploader-select button"><?php esc_html_e('Select from media library','rectusminimum'); ?></button>
								<button class="backuploader-clear button"><?php esc_html_e('Clear','rectusminimum'); ?></button>
							</p>
							<p><img class="backuploader-image" src="<?php echo esc_attr(get_option('rectusminimum-backimage')); ?>" style="width: 400px; height: auto;"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php submit_button(); ?>
	</form>
</div>
<script>
let $uploader = document.getElementsByClassName('backuploader')
Array.from($uploader).forEach((item) => {
	const $url = item.querySelector('.backuploader-url')
	const $image = item.querySelector('.backuploader-image')
	const $select = item.querySelector('.backuploader-select')
	const $clear = item.querySelector('.backuploader-clear')
	let uploader
	$select.addEventListener('click', (e) => {
		e.preventDefault()
		if (uploader) {
			uploader.open()
			return
		}
		uploader = wp.media({
			title: 'Select or Upload the media',
			library: {
				type: 'image'
			},
			button: {
				text: 'select'
			},
			multiple: false
		})
		uploader.on('select', () => {
			const images = uploader.state().get('selection')
			images.forEach( (data) => {
				const url = data.attributes.url
				$url.value = url
				$image.setAttribute('src', url)
			})
		})
		uploader.open()
	})
	$clear.addEventListener('click', (e) => {
		e.preventDefault()
		$url.value = ''
		$image.setAttribute('src', '')
	})
})
</script>
<?php
}

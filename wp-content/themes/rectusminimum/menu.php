<header>
	<input type="checkbox" id="menu-navibtn"/>
	<div id="navi" role="navigation" aria-label="main-menu">
		<div>
			<label id="navibtn" for="menu-navibtn">
				<span>
					<span id="openmenu"></span>
				</span>
			</label>
			<?php 
			if (is_front_page() || is_home()) { ?>
			<div class="menu-left"><h1><?php bloginfo('name'); ?></h1></div>
			<?php } else { ?>
			<div class="menu-left" itemscope itemtype="https://schema.org/Organization"><a itemprop="url" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
			<?php };
			get_search_form();?>
<?php
	$args = array(
		'theme_location'=>'main-menu',
		'container'			 => false,
		'menu_class'		=>'',
		'items_wrap'		=>'<ul class="menu" id="main-menu">%3$s</ul>',
		'walker'				=> new rectusminimum_walker_nav_menu
	);
	wp_nav_menu($args);
?>
		</div>
	</div>
</header>
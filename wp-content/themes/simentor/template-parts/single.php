<?php while ( have_posts() ) : the_post(); ?>

<main id="main" class="site-main" role="main">

	<header class="page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="page-content">
		<?php the_content(); ?>
	</div>
	<div class="entry-links"><?php wp_link_pages(); ?></div>
	<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
	<nav id="nav-below" class="navigation" role="navigation">
		<div class="nav-previous"><?php next_posts_link(sprintf( __( '%s older', 'simentor' ), '<span class="meta-nav">&larr;</span>' ) ) ?></div>
		<div class="nav-next"><?php previous_posts_link(sprintf( __( 'newer %s', 'simentor' ), '<span class="meta-nav">&rarr;</span>' ) ) ?></div>
	</nav>
	<?php } ?>
</main>

<?php endwhile;

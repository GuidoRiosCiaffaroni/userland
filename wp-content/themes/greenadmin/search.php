<?php get_header();?>
	<!-- Trabajo area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-edit"></i>
									</div>
									<div class="breadcomb-ctn">
										
										<?php if ( have_posts() ) : ?>
										<header class="header">
										<h1 class="entry-title" itemprop="name"><?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
										</header>
										<?php while ( have_posts() ) : the_post(); ?>
										<?php get_template_part( 'entry' ); ?>
										<?php endwhile; ?>
										<?php get_template_part( 'nav', 'below' ); ?>
										<?php else : ?>
										<article id="post-0" class="post no-results not-found">
										<header class="header">
										<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
										</header>
										<div class="entry-content" itemprop="mainContentOfPage">
										<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
										<?php get_search_form(); ?>
										</div>
										</article>
										<?php endif; ?>


                                    </div>    
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Trabajo area End-->

<?php get_footer(); ?>


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
									    

                                        <?php                                       
                                        //get_header();
                                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                                        //get_template_part( 'entry' );
                                        ?>
	

                                        <!--
                                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        
                                        <h2>Wizard</h2>
                                        -->
										
                                        
                                        <?php 
                                        if ( is_singular() ) 
                                        { 
                                            echo '<h1 class="entry-title" itemprop="headline">'; 
                                        } 
                                        else 
                                        { 
                                            echo '<h2 class="entry-title">'; 
                                        } 
                                        ?>
                                        
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                        
                                        <?php 
                                        if ( is_singular() ) 
                                        { 
                                            echo '</h1>'; 
                                        } 
                                        else 
                                        { 
                                            echo '</h2>'; 
                                        } 
                                        ?>

                                        <!--
                                        <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                                        -->

                                        <?php edit_post_link(); ?>

                                        <?php if ( !is_search() ) { get_template_part( 'entry', 'meta' ); } ?>

                                        <?php 
                                        get_template_part('entry',( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
                                        <?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>

                                        <!--
                                        </article>
                                        -->
									

                                        <?php
                                        comments_template();
                                        endwhile; endif;
                                        get_template_part( 'nav', 'below' );
                                        //get_footer();
                                        ?>


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


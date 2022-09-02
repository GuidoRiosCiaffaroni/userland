<?php get_header();?>
<?php post_test();?>
<?php 
/*
Dependecia
PlugIn Name             :   One User Avatar
PlugIn Url              :   https://onedesigns.com/
PlugIn Url WordPress    :   https://wordpress.org/plugins/one-user-avatar/
*/
?>     
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
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<header class="header">
												<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
											</header>
											<div class="entry-content" itemprop="mainContentOfPage">	
												<div class="entry-links"><?php wp_link_pages(); ?></div>
											</div>
										</article>
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



        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Prueba</h2>
                            <p>Taxonomia</p>
                        </div>
                        <div class="bsc-tbl">
     
                        <?php

                        $taxonomies = get_taxonomies();
                        foreach( $taxonomies as $taxonomy ) {
                            echo '<p>'. $taxonomy. '</p>';
                        }
                        echo '------------------------------------------------------------- </br>';
  

                          $output = 'objects'; // or objects
                        $taxonomies = get_taxonomies( $args, $output );

                        if( $taxonomies ) {
                            foreach ( $taxonomies as $taxonomy ) {
                                echo '<p>' . $taxonomy->labels->name . '</p>';
                            }
                        }

                        echo '------------------------------------------------------------- </br>';

                        
                        $my_posts = get_posts();
                        if( ! empty( $my_posts ) )
                        {
                            foreach ( $my_posts as $p )
                            {
                                echo 'ID : '.$p->ID .'</br>';
                                echo 'post_author : '.$p->post_author .'</br>';                                
                                echo 'post_date : '.$p->post_date.'</br>';  
                                echo 'post_content : '.$p->post_content.'</br>'; 
                                $thumb = get_post_meta( $p->ID, 'japones', true );
                                echo 'Meta Japones : '.$thumb.'</br>'; 
                                $thumb = get_post_meta( $p->ID, 'ingles', true );
                                echo 'Meta Ingles: '.$thumb.'</br>'; 
                            }
                        }


                        echo '------------------------------------------------------------- </br>';














                        ?>
                    

                        </div>
                    </div>
                </div>
            </div>















		</div>
	</div>
	<!-- Trabajo area End-->

<?php get_footer(); ?>


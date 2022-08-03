<?php get_header();?>
    <!-- Trabajo area Start-->
<?php
/*
https://stackoverflow.com/questions/43062854/get-posts-with-meta-query-for-a-user-relation-acf-not-returning-any-result
https://kinsta.com/es/blog/wordpress-get_posts/
https://developer.wordpress.org/reference/functions/get_posts/
*/

?>

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
                                        $args = array(
                                            'numberposts'   => 1,
                                            'category'      => 5
                                        );
                                        $my_posts = get_posts( $args );
                                        if( ! empty( $my_posts ) )
                                        {
                                            $output = '<ul>';
                                            foreach ( $my_posts as $p )
                                            {
                                                $output .= '<li><a href="' . get_permalink( $p->ID ) . '">'. $p->post_title . '</a></li>';
                                                $output .= '<li> ID : '. $p->ID . '</li>';
                                                $output .= '<li> post_author    : '. $p->post_author . '</li>';
                                                $output .= '<li> post_date      : '. $p->post_date . '</li>';
                                                $output .= '<li>'. $p->post_date_gmt . '</li>';
                                                $output .= '<li>'. $p->post_content . '</li>';
                                                $output .= '<li>'. $p->post_excerpt . '</li>';
                                                $output .= '<li>'. $p->post_status . '</li>';
                                                $output .= '<li>'. $p->comment_status. '</li>';
                                                $output .= '<li>'. $p->ping_status. '</li>';
                                                $output .= '<li>'. $p->post_password. '</li>';
                                                $output .= '<li>'. $p->post_name. '</li>';
                                                $output .= '<li>'. $p->to_ping. '</li>';
                                                $output .= '<li>'. $p->pinged. '</li>';
                                                $output .= '<li>'. $p->post_modified. '</li>';
                                                $output .= '<li>'. $p->post_modified_gmt. '</li>';
                                                $output .= '<li>'. $p->post_content_filtered. '</li>';
                                                $output .= '<li>'. $p->post_parent. '</li>';
                                                $output .= '<li>'. $p->guid. '</li>';
                                                $output .= '<li>'. $p->menu_order. '</li>';
                                                $output .= '<li>'. $p->post_type. '</li>';
                                                $output .= '<li>'. $p->post_mime_type. '</li>';
                                                $output .= '<li>'. $p->comment_count. '</li>';
                                                $output .= '<li>'. $p->filter. '</li>';




                                            }
                                            $output .= '<ul>';
                                        }
                                        echo $output;
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


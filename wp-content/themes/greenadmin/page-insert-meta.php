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
                                            add_post_meta(49, 'dato', 'numero', false );


                                            echo '</br>';
                                            $array = get_post_meta(49,'dato',true);
                                            echo $array;
                                            echo '</br>';
                                            $array = get_post_meta(49,'dato',false);
                                            echo $array[0];

                                            delete_post_meta( 49, 'dato' );
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


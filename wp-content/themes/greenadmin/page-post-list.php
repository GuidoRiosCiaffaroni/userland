<?php get_header();?>
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Data Table</h2>
                                        <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
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
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div>



<!-- 
https://wordpress.stackexchange.com/questions/109773/how-do-i-use-wp-get-recent-posts
https://developer.wordpress.org/reference/functions/wp_delete_post/

-->


<?php
/*
        $args = array( 'numberposts' => '500' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent )
        { 
            echo the_permalink($recent["ID"]);
            echo '</br>';
            echo the_title($recent["ID"]);
            echo '</br>';
            echo the_excerpt($recent["ID"]);
            echo '</br>';
        } 
*/
?>


                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Texto</th>
                                        <th>Detalle</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $args = array( 'numberposts' => '500' );
                                    $recent_posts = wp_get_recent_posts( $args );
                                    foreach( $recent_posts as $recent )
                                    {
                                        echo '<tr>';   
                                            echo '<td>'.$recent["ID"].'</td>';
                                            echo '<td>'.$recent["post_title"].'</td>';
                                            echo '<td><a href="'.home_url().'/post-details/?ID='.$recent["ID"].'">detalle</a></td>';
                                            echo '<td><a href="https://www.w3schools.com">editar</a></td>';
                                            echo '<td><a href="'.home_url().'/post-delete/?ID='.$recent["ID"].'">borrar</a></td>';
                                        echo '</tr>';
                                   } 
                                ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Texto</th>
                                        <th>Detalle</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

<?php get_footer(); ?>




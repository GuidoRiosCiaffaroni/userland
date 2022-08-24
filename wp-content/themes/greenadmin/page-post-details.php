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

                        <?php
                            $post = get_post( $_GET['ID'] ); 

                            


                        ?>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Detalle</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <tr>   
                                    <td>ID :</td>
                                    <td><?php echo $post->ID; ?></td>
                                </tr>
                                
                                <tr>   
                                    <td>post author ID :</td>
                                    <td><?php echo $post->post_author; ?></td>
                                </tr>

                                <tr>   
                                    <td>post name :</td>
                                    <td><?php echo $post->post_name; ?></td>
                                </tr>

                                <tr>   
                                    <td>post type :</td>
                                    <td><?php echo $post->post_type; ?></td>
                                </tr>

                                <tr>   
                                    <td>post title :</td>
                                    <td><?php echo $post->post_title; ?></td>
                                </tr>

                                <tr>   
                                    <td>post date :</td>
                                    <td><?php echo $post->post_date; ?></td>
                                </tr>

                                <tr>   
                                    <td>post date gmt :</td>
                                    <td><?php echo $post->post_date_gmt; ?></td>
                                </tr>

                                <tr>   
                                    <td>post content :</td>
                                    <td><?php echo $post->post_content; ?></td>
                                </tr>  

                                <tr>   
                                    <td>post excerpt :</td>
                                    <td><?php echo $post->post_excerpt; ?></td>
                                </tr>                                  

                                <tr>   
                                    <td>post statust :</td>
                                    <td><?php echo $post->post_status; ?></td>
                                </tr>

                                <tr>   
                                    <td>comment status :</td>
                                    <td><?php echo $post->comment_status; ?></td>
                                </tr> 

                                <tr>   
                                    <td>ping status :</td>
                                    <td><?php echo $post->ping_status; ?></td>
                                </tr>                                                                                                                                
                                <tr>   
                                    <td>post passwords :</td>
                                    <td><?php echo $post->post_password; ?></td>
                                </tr>

                                <tr>   
                                    <td>post parent :</td>
                                    <td><?php echo $post->post_parent; ?></td>
                                </tr>

                                <tr>   
                                    <td>post modified :</td>
                                    <td><?php echo $post->post_modified; ?></td>
                                </tr>

                                <tr>   
                                    <td>post_modified_gmt :</td>
                                    <td><?php echo $post->post_modified_gmt; ?></td>
                                </tr>

                                <tr>   
                                    <td>comment_count :</td>
                                    <td><?php echo $post->comment_count; ?></td>
                                </tr>      
                                
                                <tr>   
                                    <td>menu_order :</td>
                                    <td><?php echo $post->menu_order; ?></td>
                                </tr>  

                                <tr>   
                                    <td>meta _translation:</td>
                                    <td><?php echo get_post_meta( $_GET['ID'], '_translation', true  ); ?></td>
                                </tr> 

                                <tr>   
                                    <td>meta _ideogram:</td>
                                    <td><?php echo get_post_meta( $_GET['ID'], '_ideogram', true  ); ?></td>
                                </tr>

                                <tr>   
                                    <td>meta _pronunciation:</td>
                                    <td><?php echo get_post_meta( $_GET['ID'], '_pronunciation', true  ); ?></td>
                                </tr>     
                                
                                <tr>   
                                    <td>meta _source_language:</td>
                                    <td><?php echo get_post_meta( $_GET['ID'], '_source_language', true  ); ?></td>
                                </tr>  
                                
                                <tr>   
                                    <td>meta _target_language:</td>
                                    <td><?php echo get_post_meta( $_GET['ID'], '_target_language', true  ); ?></td>
                                </tr> 

                                
                                <?php
                                /*
                                $tags = get_tags($_GET['ID']);
                                $html = '';
                                foreach ( $tags as $tag ) {
                                    $tag_link = get_tag_link( $tag->term_id );
                                    $html .=  "<tr><td>Tag : </td><td>{$tag->name}</td></tr>";     
                                    //$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                    //$html .= "{$tag->name}</a>";
                                    $html .= "";
                                }
                                $html .= '';
                                echo $html;
                                */

                                // https://codex.wordpress.org/es:Referencia_de_Funcion/wp_get_post_tags
                                $tags = wp_get_post_tags($_GET['ID']);
                                foreach ( $tags as $t => $tag ) 
                                {
                                    $html .=  "<tr><td>Tag : </td><td>".$tag->name."</td></tr>";     
                                }
                                echo $html;
                                


                            // https://developer.wordpress.org/reference/functions/wp_get_post_categories/
                                $post_categories = wp_get_post_categories($_GET['ID']);
                                foreach ( $post_categories as $name ) 
                                {
                                    $html .=  "<tr><td>Categories->: </td><td>".$name."</td></tr>";     
                                }
                                echo $html;

                                ?>
                                




                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Texto</th>
                                        <th>Detalle</th>
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




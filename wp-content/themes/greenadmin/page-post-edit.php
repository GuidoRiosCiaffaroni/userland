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

    <form action="<?php echo home_url().'/post-edit' ?>" method="post">
        <div class="normal-table-area">
            <div class="container">

                            <?php
                                $post = get_post( $_GET['ID'] ); 
                            ?>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="normal-table-list">
                            <div class="basic-tb-hd">
                                <h2>Basic Table</h2>
                                <p>Basic example without any additional modification classes</p>
                            </div>
                            
                            <div class="bsc-tbl">
                                <table class="table table-sc-ex">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID :</td>
                                            <td><?php echo $post->ID; ?></td>
                                        </tr>
                                        <tr>
                                            <td>post author ID :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_author; ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>post name :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_name; ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>post type :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_type; ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>post title :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_title; ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>post date :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_date; ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>post date gmt :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_date_gmt; ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>post content :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_content; ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>post excerpt :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_excerpt; ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>post statust :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_status; ?>" placeholder=""></div></td>
                                        </tr>  
                                        <tr>
                                            <td>comment status :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->comment_status; ?>" placeholder=""></div></td>
                                        </tr>  
                                        <tr>
                                            <td>ping status :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->ping_status; ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>post passwords :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_password; ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>post parent :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_parent; ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>post modified :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_modified; ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>post_modified_gmt :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->post_modified_gmt; ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>comment_count :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->comment_count; ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>menu_order :</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo $post->menu_order; ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>meta _translation:</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo get_post_meta( $_GET['ID'], '_translation', true  ); ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>meta _ideogram:</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo get_post_meta( $_GET['ID'], '_ideogram', true  ); ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>meta _pronunciation:</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo get_post_meta( $_GET['ID'], '_pronunciation', true  ); ?>" placeholder=""></div></td>
                                        </tr> 
                                        <tr>
                                            <td>meta _source_language:</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo get_post_meta( $_GET['ID'], '_source_language', true  ); ?>" placeholder=""></div></td>
                                        </tr>
                                        <tr>
                                            <td>meta _target_language:</td>
                                            <td><div class="nk-int-st"><input type="text" class="form-control" value="<?php echo get_post_meta( $_GET['ID'], '_target_language', true  ); ?>" placeholder=""></div></td>
                                        </tr>


                                    <?php
                                    $tags = wp_get_post_tags($_GET['ID']);
                                    foreach ( $tags as $t => $tag ) 
                                    {
                                        //$html .=  "<tr><td>Tag : </td><td>".$tag->name."</td></tr>";  
                                        $html .=  "<tr><td>Tag : </td><td><div class=\"nk-int-st\"><input type=\"text\" class=\"form-control\" value=\"".$tag->name."\" placeholder=\"\"></div></td></tr>"; 


                                    }
                                    echo $html;

                                    $post_categories = wp_get_post_categories( $_GET['ID'], array( 'fields' => 'names' ) );
                                    if( $post_categories )
                                    {
                                        foreach($post_categories as $name)
                                        {
                                        //echo "<tr><td>Categories : </td><td>".$name."</td></tr>";
                                        echo "<tr><td>Categories : </td><td><div class=\"nk-int-st\"><input type=\"text\" class=\"form-control\" value=\"".$name."\" placeholder=\"\"></div></td></tr>";    
                                        }
                                    }

                                    ?>



                                        <tr>
                                            <td><div class="summernote-clickable"><button class="btn btn-primary btn-sm hec-button">Actualizar</button></div></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



 








                </div>
            </div>
        </div>    
    </form>
    <!-- Data Table area End-->







<?php get_footer(); ?>




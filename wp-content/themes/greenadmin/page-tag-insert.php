<?php get_header();?>
<?php tag_insert(); ?>
<?php category_insert(); ?> 
    <!-- Form Element area Start-->
<?php
    $args = array(
    'numberposts'   => 1
    );
    $my_posts = get_posts( $args );
    if( ! empty( $my_posts ) )
    {
        foreach ( $my_posts as $p )
        {
            $ID_Post = $p->ID;
            $post_title = $p->post_title;
        }
    }

?>



    <form action="<?php echo home_url().'/tag-insert' ?>" method="post">
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">

                        <div class="row">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="normal-table-list">
                                        <div class="basic-tb-hd">
                                            <h2>Frase</h2>
                                        </div>
                        
                                        <div class="bsc-tbl">
                                            <table class="table table-sc-ex">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Frase</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $ID_Post; ?></td>
                                                        <td><?php echo $post_title; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Etiquetas Existentes</h2>
                                </div>
                                <div class="chosen-select-act fm-cmp-mg">
                                    <select name="old_tag" class="chosen" multiple data-placeholder="seleccione las etiquetas">
                                    <?php
                                        $tags = get_tags(array('get'=>'all'));
                                            $output .= '';
                                            if($tags) 
                                            {
                                                foreach ($tags as $tag):
                                                $output .= '<option value="'. $tag->name .'">'. $tag->name .'</option>';
                                                endforeach;
                                            } 
                                            else 
                                            {
                                                _e('No tags created.', 'text-domain');
                                            }
                                            $output .= '';
                                            echo  $output;
                                    ?>
                                    </select>
                                </div>
                            </div>





 











                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <h2></h2>
                                            <p></p>
                                        </div>
                                    <div class="nk-int-st">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <h2>Nueva Etiqueta</h2>
                                            <p></p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="new_tag" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <h2></h2>
                                            <p></p>
                                        </div>
                                    <div class="nk-int-st">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <h2></h2>
                                            <p></p>
                                        </div>
                                    <div class="nk-int-st">
                                        
                                    </div>
                                </div>
                            </div>


                            <input  name="ID_Post" type="hidden" value="<?php echo $ID_Post; ?>">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                                    
                                <div class="fm-checkbox">
                                    
                                </div>
                                    
                                <div class="summernote-clickable">
                                    <button class="btn btn-primary btn-sm hec-button">Ingresar</button>
                    
                                </div>    
                            </div>
                            
                        </div>



                        <!--
                        <?php echo get_the_category_list(); ?>
                        <p>Tags: <?php echo the_tags(); ?></p>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Form Element area End-->


<?php get_footer(); ?>


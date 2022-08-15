<?php get_header();?>
<?php meta_insert(); ?>
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



    <form action="<?php echo home_url().'/meta-insert' ?>" method="post">
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
                                <div class="form-group">
                                        <div class="basic-tb-hd">
                                            <h2>Traduccion</h2>
                                            <p>Traduccion directa</p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="translation" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="basic-tb-hd">
                                            <h2>Traduccion Literal</h2>
                                            <p>Traduccion literal desde el idioma de origen</p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="literal_translation" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>                            
      
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="basic-tb-hd">
                                            <h2>Ideograma</h2>
                                            <p>Caracteres asociados</p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="ideogram" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>             


                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="basic-tb-hd">
                                            <h2>Pronunciacion</h2>
                                            <p>Como suena</p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="pronunciation" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>   

 
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="basic-tb-hd">
                                            <h2></h2>
                                            <p></p>
                                        </div>
                                </div>
                            </div>  


                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="cmp-tb-hd">
                                    <h2>Idioma de Origen</h2>
                                    
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" name="source_language">
                                        <option value='es'>Español</option>
                                        <option value='en'>Ingles</option>
                                    </select>
                                </div>                                    
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="cmp-tb-hd">
                                    <h2>Idioma de Destino</h2>
                                </div>
                                    
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" name="target_language">
                                        <option value='es'>Español</option>
                                        <option value='en'>Ingles</option>
                                    </select>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Form Element area End-->


<?php get_footer(); ?>


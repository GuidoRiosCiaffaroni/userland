<?php get_header();?>
<?php post_insert(); ?>
    <!-- Form Element area Start-->
    <form action="<?php echo home_url().'/post-insert' ?>" method="post">
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Texto</h2>
                            <!-- <p>Text.</p> -->
                        </div>

                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="post_title" type="text" class="form-control" placeholder="post_title">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cmp-tb-hd">
                                    <h2>Descripción</h2>
                                    
                                </div>
                  
                                <div class="summernote-clickable">
                                    <textarea class="html-editor" name="post_content" id="summernote"></textarea>
                                </div>

                            </div>
                   
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cmp-tb-hd">
                                    <h2>Idioma de Origen</h2>
                                    
                                </div>
                                    
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker">
                                        <option>Español</option>
                                        <option>Ingles</option>
                                    </select>
                                </div>
                                    
                            </div>

 

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


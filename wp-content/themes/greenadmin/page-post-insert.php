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
                            <h2>Texto Para Ingresar</h2>
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
                                    <h2>HTML Editor</h2>
                                    <!-- <p>Super Simple WYSIWYG Editor on Bootstrap</p> -->
                                </div>
                                    
                                <div class="cmp-tb-hd bsc-smp-sm">
                                    <label>Basic Example</label>
                                </div>
                                
                                <div class="html-editor">
                                </div>
                                    

                            </div>
                   
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cmp-tb-hd">
                                    <h2>Idioma de Origen</h2>
                                    <!-- <p>Super Simple WYSIWYG Editor on Bootstrap</p> -->
                                </div>
                                    
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker">
                                        <option>Español</option>
                                        <option>Ingles</option>
                                    </select>
                                </div>
                                    
                            </div>

 

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cmp-tb-hd">
                                    <h2>Idioma de Origen</h2>
                                    <!-- <p>Super Simple WYSIWYG Editor on Bootstrap</p> -->
                                </div>
                                    
                            <div class="fm-checkbox">
                                <button class="btn btn-success notika-btn-success" class="notika-icon notika-right-arrow right-arrow-ant">Ingresar</button>
                            </div>



                                <div class="cmp-tb-hd mg-t-20">
                                    <h2>Click to edit</h2>
                                    <!-- <p>You can edit content on the fly</p>-->
                                </div>
                                    
                                <div class="summernote-clickable">
                                    <button class="btn btn-primary btn-sm hec-button">Click here to edit the content</button>
                                    <button class="btn btn-success btn-sm hec-save" style="display:none;">Save</button>
                                </div>


                                    
                            </div>


            



                            
                        </div>

                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner fm-ele-mg">
                                    <p> Ingrese al Frase o Palabra .</p>
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


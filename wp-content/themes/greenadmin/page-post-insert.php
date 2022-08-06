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
                            <p>Text.</p>
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
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="post_content" type="text" class="form-control" placeholder="post_content">
                                    </div>
                                </div>
                            </div>

                       
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Idioma de Origen</h2>
                            </div>
                            
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Español</option>
                                    <option>Ingles</option>
                                </select>
                            </div>
                       

 

                            <!--
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="tags_imput" type="text" class="form-control" placeholder="tags_imput">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="meta_input" type="text" class="form-control" placeholder="meta_input">
                                    </div>
                                </div>
                            </div>
                            -->


                            <div class="fm-checkbox">
                                <button class="btn btn-success notika-btn-success" class="notika-icon notika-right-arrow right-arrow-ant">Ingresar</button>
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


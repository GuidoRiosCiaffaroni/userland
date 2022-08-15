<?php get_header();?>
<?php category_create(); ?>
    <!-- Form Element area Start-->
    <form action="<?php echo home_url().'/category-create' ?>" method="post">
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2></h2>
                            <!-- <p>Text.</p> -->
                        </div>

                        <div class="row">

                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="basic-tb-hd">
                                            <h2>Nombre</h2>
                                            <p>cat_name : Nombre de la Categoria</p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="cat_name" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="basic-tb-hd">
                                            <h2>Descripcion</h2>
                                            <p>category_description : Descripcion de la categoria</p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="category_description" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                        <div class="basic-tb-hd">
                                            <h2>NicName</h2>
                                            <p>category_nicename : nombre corto</p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="category_nicename" type="text" class="form-control" placeholder="">
                                    </div>
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


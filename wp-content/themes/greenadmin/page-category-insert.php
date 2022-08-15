<?php get_header();?>
<?php category_insert(); ?>
    <!-- Form Element area Start-->
    <form action="<?php echo home_url().'/category-insert' ?>" method="post">
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
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Insertar Categoria</h2>
                                </div>
                                <div class="nk-int-mk sl-dp-mn">
                                    <select name="category" class="chosen" data-placeholder="">
                                    <?php
                                        $categories = get_categories(array('get'=>'all'));
                                            $outputc .= '';
                                            if($categories) 
                                            {
                                                foreach ($categories as $category):
                                                $outputc .= '<option value="'. $category->name .'">'. $category->name .'</option>';
                                                endforeach;
                                            } 
                                            else 
                                            {
                                                //_e('No tags created.', 'text-domain');
                                            }
                                            $outputc .= '';
                                            echo  $outputc;
                                    ?>
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


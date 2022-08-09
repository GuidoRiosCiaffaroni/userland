<?php get_header();?>
<?php meta_insert(); ?>
    <!-- Form Element area Start-->
    <form action="<?php echo home_url().'/post-insert' ?>" method="post">
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
                                            <h2>Basic Table</h2>
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
                                                        <td><? echo $idPost; ?></td>
                                                        <td>Alexandra</td>
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
                                            <h2>Basic Table</h2>
                                            <p>Basic example without any additional modification classes</p>
                                        </div>
                                    <div class="nk-int-st">
                                        <input name="post_title" type="text" class="form-control" placeholder="post_title">
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


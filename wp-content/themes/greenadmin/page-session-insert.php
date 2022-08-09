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
                                <div class="fm-checkbox">
                                </div>
                                    <?php
                                    $_SESSION["newsession"]='1';
                                    echo '</br>';
                                    echo $_SESSION["newsession"];
                                    echo '</br>';
                                    $_SESSION["newsession"]='2';
                                    echo $_SESSION["newsession"];
                                    ?>

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


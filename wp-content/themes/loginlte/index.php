<?php
get_header();
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">


<?php
    if(is_user_logged_in())
    {
    	echo 'logeado';
    	echo '</br>';  
        $theme_data = wp_get_theme();
        echo $theme_data->get( 'Name' );        // Theme name as given in style.css
        echo '<br>';
        echo $theme_data->get( 'ThemeURI' );
        echo '<br>';
        echo $theme_data->get( 'Description' );
        echo '<br>';
        echo $theme_data->get( 'Author' );
        echo '<br>';
        echo $theme_data->get( 'AuthorURI' );
        echo '<br>';
        echo $theme_data->get( 'Version' );
        echo '<br>';
        echo $theme_data->get( 'Template' );
        echo '<br>';
        echo $theme_data->get( 'Status' );
        echo '<br>';
        echo $theme_data->get( 'Tags' );
        echo '<br>';
        echo $theme_data->get( 'TextDomain' );
        echo '<br>';
        echo $theme_data->get( 'DomainPath' );
        switch_theme('adminlte');
    }
    else
    {
    echo 'nop';
    echo '</br>';
    switch_theme('noto-simple');
    }
?>



<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
get_template_part( 'nav', 'below' );

?>

        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

<?php
get_footer();
?>



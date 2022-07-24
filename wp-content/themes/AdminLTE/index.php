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
    	switch_theme('AdminLTE');
    }
    else
    {
    echo 'nop';
    echo '</br>';
    switch_theme('wpbstarter');
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



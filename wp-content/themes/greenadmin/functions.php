<?php
add_action( 'init', 'dcms_session_start' );
function dcms_session_start() {
    if ( ! session_id() ) {
          session_start();
    }
}



// Seguridad 
add_action( 'secure_setup_theme', 'secure_setup' );
function secure_setup() 
{
        if ( ! session_id() ) {
          session_start();
    }

    echo session_id();
    echo '</br>';
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];
    $_SESSION['loginEmail'] = $loginEmail;
    echo '</br>';
    $_SESSION['loginPassword'] = $loginPassword;
    echo '</br>';
    echo $_SESSION['loginEmail'];
    echo '</br>';
    echo $_SESSION['loginPassword'];
    echo '</br>';
echo is_page();
echo '</br>';
echo get_the_title() ;


}


/*
if($_POST['loginEmail'] && $_POST['loginPassword'] && !$_POST['wd_resendActivationButton'])
{

    
    echo $userOK = 0;
    $user = wp_authenticate( $_POST['loginEmail'] , $_POST['loginPassword'] );
    
    if(is_wp_error($user)) 
    {
      echo 'Error';
    }
    else
    {
      switch_theme('adminlte');
      //window.location.replace(get_template_directory_uri());
      header('Location: '.home_url().'');

    } 

     
}
*/
















/*
add_action( 'secure_setup_theme', 'secure_setup' );
function secure_setup() 
{
   if(is_user_logged_in())
   {
      echo 'Activo';
      echo '</br>';
      echo $old_theme = wp_get_theme();
   }
   else
   {
      echo 'Inactivo';
      switch_theme('greenadmin');
      echo '</br>';
      echo $old_theme = wp_get_theme();
   }
}


/*
add_action( 'init', 'wpdocs_check_logged_in' );
function wpdocs_check_logged_in() 
{
    $current_user = wp_get_current_user();
    if ( 0 == $current_user->ID ) 
    {
        // Not logged in.
         switch_theme('greenlogin');

    } 
    else 
    {
        // Logged in.
        switch_theme('greenadmin');

    }
}


/*

add_action( 'setup_theme', 'switch_user_theme' );
function switch_user_theme() 
{

   if(is_user_logged_in())
   {
      echo 'Activo';
      echo '</br>';
      echo $old_theme = wp_get_theme();
   }
   else
   {
      echo 'Inactivo';
      switch_theme('greenadmin');
      echo '</br>';
      echo  wp_get_theme();
   }



}
*/





/*
  if ( current_user_can( 'manage_options' ) ) {
    switch_theme('greenadmin');
  } else {
    switch_theme('greenlogin');
    echo current_user_can();

  }
*/


/******************************************************************************************************************
$current_user = wp_get_current_user();
 
/*
 * @example Safe usage: $current_user = wp_get_current_user();
 * if ( ! ( $current_user instanceof WP_User ) ) {
 *     return;
 * }
 */
/*
printf( __( 'Username: %s', 'textdomain' ), esc_html( $current_user->user_login ) ) . '<br />';
printf( __( 'User email: %s', 'textdomain' ), esc_html( $current_user->user_email ) ) . '<br />';
printf( __( 'User first name: %s', 'textdomain' ), esc_html( $current_user->user_firstname ) ) . '<br />';
printf( __( 'User last name: %s', 'textdomain' ), esc_html( $current_user->user_lastname ) ) . '<br />';
printf( __( 'User display name: %s', 'textdomain' ), esc_html( $current_user->display_name ) ) . '<br />';
printf( __( 'User ID: %s', 'textdomain' ), esc_html( $current_user->ID ) );
******************************************************************************************************************/
















/*
add_action( 'secure_setup_theme', 'secure_setup' );
function secure_setup() 
{
   if(is_user_logged_in())
   {
      echo 'Activo';
      echo '</br>';
      echo $old_theme = wp_get_theme();
   }
   else
   {
      echo 'Inactivo';
      switch_theme('greenadmin');
      echo '</br>';
      echo $old_theme = wp_get_theme();
   }
}
*/













/*
$current_user = wp_get_current_user();


printf( __( 'Username: %s', 'textdomain' ), esc_html( $current_user->user_login ) ) . '<br />';
echo '<br>';
printf( __( 'User email: %s', 'textdomain' ), esc_html( $current_user->user_email ) ) . '<br />';
echo '<br>';
printf( __( 'User first name: %s', 'textdomain' ), esc_html( $current_user->user_firstname ) ) . '<br />';
echo '<br>';
printf( __( 'User last name: %s', 'textdomain' ), esc_html( $current_user->user_lastname ) ) . '<br />';
echo '<br>';
printf( __( 'User display name: %s', 'textdomain' ), esc_html( $current_user->display_name ) ) . '<br />';
echo '<br>';
printf( __( 'User ID: %s', 'textdomain' ), esc_html( $current_user->ID ) );
echo '<br>';

/**
    if(is_user_logged_in())
    {
      echo '</br>';
      echo '----------------->';
      switch_theme('greenlogin');
      header('Location: '.home_url().'');
    }
    else
    {


    }
**/




?>
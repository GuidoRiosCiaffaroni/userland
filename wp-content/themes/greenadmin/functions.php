<?php
// Verificacion de Contraseña 
add_action( 'secure_setup_theme', 'secure_setup' );
function secure_setup() 
{
    $pagetitle = get_the_title();
    $pagepathlogin = esc_url(home_url().'/login');
    if ($pagetitle != 'Login')
    {
        if ( is_user_logged_in() ) 
        {
            $current_user = wp_get_current_user();
        } 
        else 
        {
            header('Location: '.home_url().'/login');
        }
    }
}

?>
<?php
/********************************************************************************************/
// Verificacion de Contraseña 
/*
Dependecia
PlugIn Name             :   Ultimate Member
PlugIn Url              :   https://ultimatemember.com/
PlugIn Url WordPress    :   https://wordpress.org/plugins/ultimate-member/

URLs
https://code.tutsplus.com/es/tutorials/wordpress-for-web-app-development-sessions--wp-34228
*/
/********************************************************************************************/
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
            session_destroy();
            header('Location: '.home_url().'/login');
        }
    }
}
/********************************************************************************************/

/********************************************************************************************/
// Ingreso Post
/*
URLs
https://developer.wordpress.org/reference/functions/wp_insert_post/
*/
/********************************************************************************************/
add_action( 'page_post_insert', 'post_insert' );
function post_insert() 
{


    $_SESSION['post_title'] = $_POST['post_title'];
    $_SESSION['post_content'] = $_POST['post_content'];
    $_SESSION['language'] = $_POST['language'];

    if ($_SESSION['post_title'] == null || $_SESSION['post_content'] == null)
    {
        echo ' ';
    }
    else 
    {
        $my_post = array(
        'post_title'    => wp_strip_all_tags( $_SESSION['post_title'] ),
        'post_content'  => $_SESSION['post_content'],
        'post_status'   => 'publish'
        );
 
        // Insert the post into the database
        wp_insert_post( $my_post );
        
        header('Location: '.home_url().'/meta-insert');

    }

}
/********************************************************************************************/


/********************************************************************************************/
// Ingreso Meta
/*
URLs

*/
/********************************************************************************************/
add_action( 'page_meta_insert', 'post_meta' );
function meta_insert() 
{
    $args = array(
    'numberposts'   => 1
    );
    $my_posts = get_posts( $args );
    if( ! empty( $my_posts ) )
    {
        foreach ( $my_posts as $p )
        {
            $idPost = $p->ID;
        }
    }


    /*
    $args = array(
    'numberposts'   => 1
    );
    $my_posts = get_posts( $args );
    if( ! empty( $my_posts ) )
    {
        $output = '<ul>';
            foreach ( $my_posts as $p )
            {
            $output .= '<li><a href="' . get_permalink( $p->ID ) . '">'. $p->post_title . '</a></li>';
            $output .= '<li> ID ->'. $p->ID . '</li>';
            $output .= '<li> post_author ->'. $p->post_author . '</li>';
            $output .= '<li> post_date ->'. $p->post_date . '</li>';
            $output .= '<li> post_date_gmt ->'. $p->post_date_gmt . '</li>';
            $output .= '<li> post_content ->'. $p->post_content . '</li>';
            $output .= '<li> post_excerpt ->'. $p->post_excerpt . '</li>';
            $output .= '<li> post_status ->'. $p->post_status . '</li>';
            $output .= '<li> comment_status ->'. $p->comment_status. '</li>';
            $output .= '<li> ping_status ->'. $p->ping_status. '</li>';
            $output .= '<li> post_password ->'. $p->post_password. '</li>';
            $output .= '<li> post_name ->'. $p->post_name. '</li>';
            $output .= '<li> to_ping ->'. $p->to_ping. '</li>';
            $output .= '<li> pinged ->'. $p->pinged. '</li>';
            $output .= '<li> post_modified ->'. $p->post_modified. '</li>';
            $output .= '<li> post_modified_gmt ->'. $p->post_modified_gmt. '</li>';
            $output .= '<li> post_content_filtered ->'. $p->post_content_filtered. '</li>';
            $output .= '<li> post_parent ->'. $p->post_parent. '</li>';
            $output .= '<li> guid ->'. $p->guid. '</li>';
            $output .= '<li> menu_order ->'. $p->menu_order. '</li>';
            $output .= '<li> post_type ->'. $p->post_type. '</li>';
            $output .= '<li> post_mime_type ->'. $p->post_mime_type. '</li>';
            $output .= '<li> comment_count ->'. $p->comment_count. '</li>';
            $output .= '<li> filter ->'. $p->filter. '</li>';
            }
            $output .= '<ul>';
    }
    echo $output;
    */


}
/********************************************************************************************/
































/********************************************************************************************/
// Verificacion de Contraseña 
/*
Dependecia
PlugIn Name             :   Ultimate Member
PlugIn Url              :   https://ultimatemember.com/
PlugIn Url WordPress    :   https://wordpress.org/plugins/ultimate-member/

URLs
https://code.tutsplus.com/es/tutorials/wordpress-for-web-app-development-sessions--wp-34228
*/
/********************************************************************************************/
add_action( 'logout_setup_theme', 'logout_setup' );
function logout_setup() 
{
/*
    session_reset();
    session_abort();
    session_destroy();
    echo $home = home_url();
    wp_destroy_current_session();
    wp_clear_auth_cookie();
    wp_set_current_user( 0 );
    wp_logout();
    header('Location: '.home_url().'/login');
*/
}
/********************************************************************************************/


/*
add_action( 'init', 'cyb_session_start', 1 );
add_action( 'wp_logout', 'cyb_session_end' );
add_action( 'wp_login', 'cyb_session_end' );

function cyb_session_start() {
    if( ! session_id() ) {
        session_start();
    }
}

function cyb_session_end() {
    session_destroy();
}
*/












/********************************************************************************************/
// Variables de Session 
/*
Dependecia
PlugIn Name             :   Ultimate Member
PlugIn Url              :   https://ultimatemember.com/
PlugIn Url WordPress    :   https://wordpress.org/plugins/ultimate-member/

URLs
https://code.tutsplus.com/es/tutorials/wordpress-for-web-app-development-sessions--wp-34228
*/
/********************************************************************************************/
add_action( 'session_setup_theme', 'session_setup' );
function session_setup() 
{
/*    session_start();
    $_SESSION['post_title'] = null;
    $_SESSION['post_content'] = null;
    $_SESSION["newsession"]='1';
*/
}
/********************************************************************************************/








/********************************************************************************************/
// Instalacion del sistema 
/*
Dependecia
PlugIn Name             :   
PlugIn Url              :   
PlugIn Url WordPress    :   
*/
/********************************************************************************************/
add_action( 'install_setup_theme', 'install_setup' );
function install_setup() 
{
    // Creacion de pagina Home
    $my_page = array(
    'post_title'    => 'Home',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_type'     => 'page'
    );
    wp_insert_post( $my_page );

    // Creacion de pagina Home
    $my_page = array(
    'post_title'    => 'Login',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_type'     => 'page'
    );
    wp_insert_post( $my_page );

    // Creacion de pagina Post Insert
    $my_page = array(
    'post_title'    => 'Post Insert',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_type'     => 'page'
    );
    wp_insert_post( $my_page );

    // Creacion de pagina Post Insert
    $my_page = array(
    'post_title'    => 'Meta Insert',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_type'     => 'page'
    );
    wp_insert_post( $my_page );

    // Creacion de pagina Post Insert
    $my_page = array(
    'post_title'    => 'Logout',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_type'     => 'page'
    );
    wp_insert_post( $my_page );



}
/********************************************************************************************/









/********************************************************************************************/
// Listar Post
/*
URLs
https://developer.wordpress.org/reference/functions/wp_insert_post/
*/
/********************************************************************************************/


/********************************************************************************************/








/********************************************************************************************/
// Ingreso Meta
//https://developer.wordpress.org/reference/functions/add_post_meta/
//https://www.codigonexo.com/blog/aprendiendo/wordpress/consultas-complejas-a-wp_postmeta/
/********************************************************************************************/



?>
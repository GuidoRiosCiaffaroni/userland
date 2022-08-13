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


    if ($_POST['post_title'] == null || $_POST['post_content'] == null)
    {
        echo ' ';
    }
    else 
    {
        $my_post = array(
        'post_title'    => wp_strip_all_tags( $_POST['post_title'] ),
        'post_content'  => $_POST['post_content'],
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
add_post_meta( $_POST['ID_Post'], '_translation', $_POST['translation'], false );
add_post_meta( $_POST['ID_Post'], '_ideogram', $_POST['ideogram'], false );
add_post_meta( $_POST['ID_Post'], '_pronunciation', $_POST['pronunciation'], false );
add_post_meta( $_POST['ID_Post'], '_source_language', $_POST['source_language'], false );
add_post_meta( $_POST['ID_Post'], '_target_language', $_POST['target_language'], false );

//header('Location: '.home_url().'/tag-insert');

}
/********************************************************************************************/

/********************************************************************************************/
// Ingreso tag
/*
URLs

*/
/********************************************************************************************/
add_action( 'page_tag_insert', 'tag_insert' );
function tag_insert() 
{
//wp_add_post_tags( int $post_id, string|array $tags = '' )

//add_post_meta( 68, '_color', 'red', true );

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
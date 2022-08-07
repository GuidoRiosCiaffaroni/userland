<?php
/********************************************************************************************/
// Verificacion de Contraseña 
/*
Dependecia
PlugIn Name             :   Ultimate Member
PlugIn Url              :   https://ultimatemember.com/
PlugIn Url WordPress    :   https://wordpress.org/plugins/ultimate-member/
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
    // Create post object

    if ($_POST['post_title'] == null || $_POST['post_content'] == null)
    {
        echo 'Error -------------------------------------------->';
    }
    else 
    {
        $my_post = array(
        'post_title'    => wp_strip_all_tags( $_POST['post_title'] ),
        'post_content'  => $_POST['post_content'],
        'post_status'   => 'publish'
        /*
        'post_author'   => 1,
        'post_category' => array( 4 ),
        'tags_input'    => array( $_POST['tags_imput'] ),
        'meta_input'    => array( $_POST['meta_input'] )
        */
        );
 
        // Insert the post into the database
        wp_insert_post( $my_post );
        $_POST['post_title'] = null;
        $_POST['post_content'] = null;

        //header('Location: '.home_url().'/last-post');

    }

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
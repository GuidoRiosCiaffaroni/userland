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
add_action( 'page_meta_insert', 'meta_insert' );
function meta_insert() 
{

    if ($_POST['translation'] == null || $_POST['ideogram'] == null || $_POST['pronunciation'] == null || $_POST['source_language'] == null || $_POST['target_language'] == null )
    {
        echo ' ';
    }
    else 
    {      
    add_post_meta( $_POST['ID_Post'], '_translation', $_POST['translation'], false );
    add_post_meta( $_POST['ID_Post'], '_ideogram', $_POST['ideogram'], false );
    add_post_meta( $_POST['ID_Post'], '_pronunciation', $_POST['pronunciation'], false );
    add_post_meta( $_POST['ID_Post'], '_source_language', $_POST['source_language'], false );
    add_post_meta( $_POST['ID_Post'], '_target_language', $_POST['target_language'], false );
    header('Location: '.home_url().'/tag-insert');
    }

}
/********************************************************************************************/

/********************************************************************************************/
// Ingreso tag
/*

*/
/********************************************************************************************/
add_action( 'page_tag_insert', 'tag_insert' );
function tag_insert() 
{
    if ($_POST['new_tag'] == null || $_POST['old_tag'] == null)
    {
        echo ' ';
    }
    else 
    {
        wp_add_post_tags( $_POST['ID_Post'], $_POST['new_tag'] );
        wp_add_post_tags( $_POST['ID_Post'], $_POST['old_tag'] ); 
        header('Location: '.home_url().'/category-insert');
    }    

}
/********************************************************************************************/



/********************************************************************************************/
// Ingreso categoria
/*
URLs
https://wp-kama.com/function/wp_insert_category


https://hotexamples.com/es/examples/-/-/wp_update_post/php-wp_update_post-function-examples.html
https://wp-qa.com/how-we-add-new-categories-by-wp_insert_post


*/
/********************************************************************************************/
add_action( 'page_category_insert', 'category_insert' );
function category_insert() 
{

$cat_ID = get_cat_ID($_POST['category']);
echo '------------------------></br>';
echo $_POST['category'];
echo '</br>';
echo $cat_ID;
echo '</br>';
echo '------------------------></br>';

}
/********************************************************************************************/


/********************************************************************************************/
// Crear Categoria
/*
https://wp-qa.com/how-we-add-new-categories-by-wp_insert_post
https://wpseek.com/function/wp_insert_category/
https://docs.w3cub.com/wordpress/functions/wp_insert_category
https://hitchhackerguide.com/2011/02/12/wp_insert_category/
*/
/********************************************************************************************/
add_action( 'page_category_create', 'category_create' );
function category_create() 
{

// echo $id = wp_create_category( 'Child of Uncategorized', 0 );
/*
    register_taxonomy_for_object_type('category', 'attachment');
    register_taxonomy_for_object_type('category', 'page');
    register_taxonomy_for_object_type('post_tag', 'page');
*/


require_once('wp-load.php' );
require_once(ABSPATH . 'wp-admin/includes/taxonomy.php');

$cat_defaults = array(
    'cat_name' => $_POST['cat_name'],
    'category_description' => $_POST['category_description'],
    'category_nicename' => $_POST['category_nicename'],
    'category_parent' => '',
    'taxonomy' => 'category'
 );
$someSome = wp_insert_category($cat_defaults);




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
<?php
// Seguridad 
add_action( 'secure_setup_theme', 'secure_setup' );
function secure_setup() 
{
    global $loginEmail; 
    global $loginPassword;

    $page = get_the_title();
    if ($page == 'Login')
    {
        $loginEmail = $_POST['loginEmail']; 
        $loginPassword = $_POST['loginPassword'];

        if($loginEmail && $loginPassword)
        {
            $userOK = 0;
            $user = wp_authenticate_username_password(NULL,  'admin@admin.cl' , '123' );
            //wp_authenticate( $loginEmail , $loginPassword );
            //wp_authenticate( 'admin@admin.cl' , '123' );



            if ( is_user_logged_in() ) {
                $current_user = wp_get_current_user();

                echo 'Welcome, ' . $current_user->user_login . '!';
            } else {
                echo 'Welcome, visitor!';
                //wp_logout();
            }


            /*
            wp_set_current_user($user->ID, $user->user_email);
            wp_set_auth_cookie($user->ID);
            do_action('wp_login', $user->user_email);
            if(is_wp_error($user)) 
            {
                echo $user->get_error_message();
            } 
            else 
            {
                if($user->user_status === "0") 
                {
                    wp_logout();
                    $userOK =1;
                } 
                else 
                {
                    if(is_user_logged_in()) 
                    {
                        $nonce = wp_create_nonce();
                        header('Location: '.home_url().'/home');
                    } 
                    else 
                    {
                        header('Location: '.home_url().'/home');
                    }
                }
            }
            */
        }
    }
    else 
    {

    }
}

?>
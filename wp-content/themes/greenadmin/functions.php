<?php
// Seguridad 
add_action( 'secure_setup_theme', 'secure_setup' );
function secure_setup() 
{
    global $loginEmail; 
    global $loginPassword;

    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $page = get_the_title();
    if ($page == 'Login')
    {
        if ($loginEmail !== null && $loginPassword !== null) 
        {
            global $lottoService;
            $credentials = array();
            $credentials['user_login'] = $loginEmail;
            $credentials['user_password'] = $loginPassword;
            $credentials['remember'] = true;
            $user = wp_signon($credentials, false);
            if (is_wp_error($user)) 
            {
                wp_logout();
                echo 'bad';
                //wp_send_json(array('data' => $user->get_error_message()));
            }
            else 
            {
                echo 'good';
                header('Location: '.home_url().'/home');
                if ( is_user_logged_in() ) 
                {
                    $current_user = wp_get_current_user();
                    echo 'Welcome, ' . $current_user->user_login . '!';
                    header('Location: '.home_url().'/home');
                } 
                else 
                {
                    echo 'Welcome, visitor!';
                    wp_logout();
                }
            } 
   
        }


    }
    else 
    {
 
    }
}

?>
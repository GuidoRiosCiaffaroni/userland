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
        if ($loginEmail !== null && $loginPassword !== null) 
        {
            echo '00';
            global $lottoService;
            $credentials = array();
            $credentials['user_login'] = $loginEmail;
            $credentials['user_password'] = $loginPassword;
            $credentials['remember'] = true;
            $user = wp_signon($credentials, false);
            if (is_wp_error($user)) 
            {
                wp_send_json(array('data' => $user->get_error_message()));
            } 
            else 
            {
                $userData = new User();
                $lottoPass = get_user_meta($user->id, 'lottoPass', true);
                $userData->Email = $loginEmaill;
                $userData->Password = $lottoPass;
                $response = $lottoService->loginUser($userData);
                session_start();
                $_SESSION['userData'] = $response->data;
                if ($response->success) 
                {
                    header('Location: http://wpjl.2hypnotize.com/');
                } 
                else 
                {
                    echo '0000';
                }
            }
        }


    }
    else 
    {

    }
}

?>
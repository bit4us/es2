<?php
session_start();

require_once('../../assets/php_includes/classes/database.class.php');
require_once('../../assets/php_includes/classes/User.class.php');


$user = new User;

if(isset($_POST['email']) && isset($_POST['password']))
{
    $user->setEmail($_POST['email']);
    $user->setPassword(md5($_POST['password']));
    
    if($user->authenticate()){
        $_SESSION['id'] = $user->getID();
        header('Location: ../dashboard/');
        exit;
    }
    else{
        // echo '-'.$user->findGoogleUserIdByMail().'-';
        if($user->findGoogleUserIdByMail()){
            header('Location: ./index.php?l=ge'); // google email already registered
            exit;
        }
        else{
            header('Location: ./index.php?l=a'); //authentication failed
            exit;    
        }
    }
}
else{
    header('Location: ./index.php?l=ep'); // email / password not set.
    exit;
}


?>
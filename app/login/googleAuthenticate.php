<?php
session_start();

require_once('../../assets/php_includes/classes/database.class.php');
require_once('../../assets/php_includes/classes/User.class.php');
require_once('./googleOauth2Config.php');


if(isset($_GET["code"])){
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET["code"]);
}
else {
    header('Location: ./index.php');
    exit();
}

if(isset($token["error"]) != "invalid_grant"){
    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();
    
    $user = new User;
    
    $user->setEmail($userData['email']);
    $user->setFirstName($userData['givenName']);
    $user->setLastName($userData['familyName']);
    $user->setAvatar($userData['picture']);

    if($user->googleAuthenticate()){
        // echo $user->getFirstName();
        $_SESSION['id'] = $user->getID();
        header('Location: ../dashboard/');
        exit;
    }
    else{
        header('Location: ./index.php');
    }
}

else {
    header("Location: ./index.php");
    exit();
}

?>
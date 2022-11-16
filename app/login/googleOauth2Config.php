<?php

require_once('google-api/vendor/autoload.php');

$gClient = new Google_Client();
$gClient->setClientID("1018679457930-9v18to890erh4hkmc0if223tkt6kodkq.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("EasySpeak2");
$gClient->setRedirectUri("http://localhost/es2/app/login/googleAuthenticate.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient->createAuthUrl();

?>
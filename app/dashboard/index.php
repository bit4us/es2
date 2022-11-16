<?php

session_start();

if(!isset($_SESSION['id'])){
    echo "session id not set";
    // header('Location: ../login');
    // exit;
}

require_once('../../assets/php_includes/classes/database.class.php');
require_once('../../assets/php_includes/classes/User.class.php');

$user = new USER;
$user->setID($_SESSION['id']);
$user->getUser();

?>

Welcome to the Dashboard <?=$user->getFirstName()?> <?=$user->getLastName()?>.
<a href="../login/">Logout</a>


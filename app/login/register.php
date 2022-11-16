<?php
session_start();

require_once('../../assets/php_includes/classes/database.class.php');
require_once('../../assets/php_includes/classes/User.class.php');


if($_POST['fname'] && $_POST['lname'] && $_POST['email'] && $_POST['password'] && $_POST['rpassword']){
  if($_POST['password']!=$_POST['rpassword']){
    header('Location: ./login.php?r=pc');  //password confirmation error
    exit;
  }
  $user = new User();
  $user->setFirstName($_POST['fname']);
  $user->setLastName($_POST['lname']);
  $user->setEmail($_POST["email"]);
  $user->setPassword(md5($_POST['password']));

  $registered = $user->registerUser();
  // echo "<br>registration message: ".$registrationMessage;
  if($registered){
    $user->authenticate();
    $_SESSION['id'] = $user->getID();
    header("Location: ../dashboard"); 
    exit;
  }
  else{
    header("Location: ./index.php/?r=rf"); //registration failed
    exit;
  }
}
else{
  header('Location: ./index.php/?r=mp'); //missing params
}

?>
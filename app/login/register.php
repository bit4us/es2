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
  if(!$user->findUserIdByMail()){
    try{
      $registered = $user->registerUser();
      // echo "<br>registration message: ".$registrationMessage;
      $user->authenticate();
      $_SESSION['id'] = $user->getID();
      header("Location: ../dashboard"); 
      exit;
    }
    catch(Exception $e){
      // echo '<br/>Message: ' .$e->getMessage();
      header("Location: ./index.php?r=rf"); //registration failed
      exit;
    }
  }
  else{
    header('Location: ./index.php?r=ae');
    exit;
  }
}
else{
  header('Location: ./index.php?r=mp'); //missing params
  exit;
}

?>
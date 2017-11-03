<?php
require_once('dbconfig.php');
require_once('signup_login.php'); 
$userObj = new USER(); 
session_start();
$type = $_GET['type'];
 
if(empty($type) || !isset($type)) {
 
  echo 'Request type is not set';
 
} else if($type == 'signup') {
 
   $data =  $userObj->addNewUser($_REQUEST);
   $_SESSION = $data;
} 
else if($type == 'login') {
	//$data =  $userObj->login($_REQUEST);
    //  $username = addslashes($_REQUEST['name']);
    //  $password = addslashes($_REQUEST['password']);
   // $username = mysqli_real_escape_string($conn,$_POST['name']);
   // $password = mysqli_real_escape_string($conn,$_POST['password']); die;
       $data = $userObj->login($_REQUEST);die;
	header("location:profile.php");
} 
else if($type == 'logout') {
 unset($_SESSION);
 session_destroy();
 header("location:index.php");
}
 
?>
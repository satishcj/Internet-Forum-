<?php
require_once("dbconfig.php");
require_once('function.php');
$userObj = new USER();
$userInfo = $userObj->getUserById($_SESSION['result']['id']);
session_start();

class POST extends dbconfig {
 
 public static $data;
 
  function addpost($title,$addpost) {
          print_r($title,$addpost); die;
         if($check['status'] == 'error') {
         $data = $check;
          } 
		  else {
              
        $query = "INSERT INTO `post` ( `name`, `title`, `title`, `addpost`) VALUES ('".$userInfo[$username]."', '".title."', '".$article."')";
        $result = dbconfig::run($query);
       
	   if(!$result) {
         echo  "Error to create new post.";
		  $data = array('status'=>'error', 'msg'=>$e->getMessage());
         } 
        else{		
           echo "You have been registered successfully login now.";
		   header("location:index.php");
        }
       } catch (Exception $e) {
          $data = array('status'=>'error', 'msg'=>$e->getMessage());
       } finally {
          return $data;
   }
   
  }
<?php
require_once("dbconfig.php");
class USER extends dbconfig {
 
   public static $data;
   
 
 // Create new user/signup
    function addNewUser($userData) {
		
   
        $query = "INSERT INTO `eO1` ( `name`, `password`) VALUES ('".$userData['username']."', '".$userData['password']."')";
        $result = dbconfig::run($query);
       if(!$result) {
         echo  "Error to create new user.";
		  $data = array('status'=>'error', 'msg'=>$e->getMessage());
         } 
        else{		
           echo "You have been registered successfully login now.";
		   header("location:profile.php");
        }
   }
 
 
   
 
  // login function
    public function login($userData) {
     
          $query = "SELECT name,password FROM eO1 WHERE name = '".$userData['username']."' AND password = '".md5($userData['password'])."'";
         //die;
		 $result = dbconfig::run($query);
         if(!$result) {
                  echo "Error in query!";  
           }
	      else{
		   echo "Sucessfull";  header("location:profile.php");
	       }
		}
    
}
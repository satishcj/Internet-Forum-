<?php
require_once('dbconfig.php');
require_once('signup_login.php'); 
$postObj = new POST(); 


if(isset($_POST['submit']))
            {
			   $title = $_POST['title'];
               $addpost = $_POST['addpost'];
             print_r($title,$addpost); die;
               $data =  $postObj->addpost($title,$addpost);
            }
?>
<?php
  include_once('db.php');
 
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 $id = $_GET['id'];
  
 $result = mysql_query("DELETE FROM posts WHERE id=$id")
 or die(mysql_error()); 
 
 
 header("Location: view-posts.php");
 }
 else
 {
 header("Location: view-posts.php");
 }
 
?>

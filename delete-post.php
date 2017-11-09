<?php
  include_once('db2.php');
 
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 $id = $_GET['id'];
  
 $result = mysql_query("DELETE FROM posts WHERE id=$id")
 or die(mysql_error()); 
 
 
 header("Location: view_posts.php");
 }
 else
 {
 header("Location: view_post.php");
 }
 
?>

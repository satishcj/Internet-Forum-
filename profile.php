<?php session_start(); ?>
<!DOCTYPE html>
<?php include_once('header.php');  
require_once('signup_login.php');
require_once('function.php');
$userObj = new USER();
$userInfo = $userObj->getUserByname($_SESSION['result']['name']);
session_start();

 ?>
 
 <head>
<style>
div.container {
    width: 100%;
    margin: 0px;
    border: 1px solid gray;
    line-height: 150%;
}

div.header, div.footer {
    padding: 0.5em;
    color: white;
    background-color: gray;
    clear: left;
}
div.left {
    float: left;
    width: 160px;
    margin: 0;
    padding: 1em;
}

div.content {
    margin-left: 190px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}

body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>
<div class="container">
<div class="left">
<nav>
  <ul>
    <li><a href="index.php?type=logout">LOG OUT</a></li>
    <li><a href="add_post.php">ADD POSTS</a></li>
    <li><a href="#">DELETE POST</a></li>
	<li><a href="#">EDIT POST</a></li>
    <li><a href="#">VIEW POSTS</a></li>
    <li><a href="#">VIEW FORUM</a></li>
  </ul>
</nav>
</body>
</html>

<?php include_once('footer.php'); ?>
<?php 
include_once('header.php'); 
include_once('dbconfig.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>ADD NEW POST</h1>
<form action="" method="post" action="post.php?type=add_post">
<div class="content">
<strong>Add post: *</strong> </br>
 <input type="text" name="title" placeholder="Enter the post title." required="required"></br></br>
 <textarea rows="4" cols="50" name="addpost" required="required"></textarea>
<br/><br/><br/>
<input type="submit" name="submit" value="Submit" />
</div>
</form>
</body>
</html>


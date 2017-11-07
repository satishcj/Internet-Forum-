<?php 
//include_once('profile.php'); 
include_once('dbconfig.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>ADD NEW POST</h1>
<form action="" method="post">
<div class="content">
<strong>Add post: *</strong> <input type="text" name="addpost"
value="<?php echo $add; ?>"/><br/>
<input type="submit" name="submit" value="Submit" />
</div>
</form>
</body>
</html>


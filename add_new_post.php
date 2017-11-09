<?php
include 'connect.php';
$dbhost="localhost"; // Host name 
$dbuser="root"; // Mysql username 
$dbpass=" "; // Mysql password 
$db_name="testdb"; // Database name 
$tbl_name="fquestions"; // Table name 


// Connect to server and select database.
mysql_connect("$dbhost", "$dbuser", "$dbpass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");*/

// get data that sent from form 
$posts=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(posts, detail, name, email, datetime)VALUES('$posts', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($sql);

if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your posts</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>

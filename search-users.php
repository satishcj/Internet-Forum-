<?php 
include_once('db.php'); 
include_once('functions.php');
session_start();
$type = $_SESSION['type']; 
if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
	header("location: index.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />


</head>


<div id="content-wrap">

<!-- Header -->
	<?php include_once('header.php'); ?>
    
    <div class="navi">
        <?php include_once('menu.php'); ?>
    </div>
    
    
    <div class="clear"></div>
    
    <div class="content">
    	<div class="wrapper">
        	<div class="content_main">
            <h2 class="content_head">View Users</h2>
            	<br />
            	<div class="tab">
                <table>
                    <tbody>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Date</th>
                            <th>Approve</th>
                        </tr>
                        <?
						$result = mysql_query("SELECT * FROM users where type = '1' ");
						while($row = mysql_fetch_array($result))
						{
							
						?>
                        <tr>
                            <td><? echo $row['username']; ?></td>
                            <td><? echo $row['fname']." ".$row['sname'] ; ?></td>
                            <td><? echo $row['phone']; ?></td>
                            <td><? echo $row['email']; ?></td>
                            <td><? echo $row['city']; ?></td>
                            <td><? echo $row['state']; ?></td>
                            <td><? echo $row['rdate']; ?></td>
                            <td><? echo '<a href="approve-users.php?id='.$row['id'].'" onclick="return confirm(\'Confirm to delete?\');">Disable</a>' ?></td>
                            
                            
                            
                        </tr>
                    <?	} ?>
                        
                    </tbody>
                </table>
                </div>
                
         
         		
                <div class="clear"></div>
                
                
            </div>
       	</div>
    </div>
    
    <div class="clear"></div>
    
<!-- Footer -->
<?php include_once('footer.php'); ?>
    
</div>

</body>
</html>

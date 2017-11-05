<?php
include_once('db.php');
include_once('functions.php');
session_start();
if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
	header("location: login.php");
	exit();
}


?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Extra Course</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/prettyPhoto.css"> 
    <!-- Theme CSS --><link id="theme-style" rel="stylesheet" href="css/styles.css">
    
<?php include_once('includes/analytics.php'); ?>
    
    
</head> 

<body>
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <?php include_once('header.php'); ?>
        
        <!-- ******NAV****** -->
        <?php include_once('menu.php'); ?>
        
        <!-- ******CONTENT****** --> 
    
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Edit Profile</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Edit Profile</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <?
					$sql_user = mysql_query("select * from users where id = '$userid' ");
					$row_user = mysql_fetch_array($sql_user);
					
					
					if (!isset($_POST['fname'])) {
						echo "";
					}
					
					else
					{
						$fname = $_POST['fname'];
						$sname = $_POST['sname'];
						$city = $_POST['city'];
						$state = $_POST['state'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						
						
						
						
						
						$sql = mysql_query("UPDATE users SET `fname` = '$fname', `sname` = '$sname', `city` = '$city', `state` = '$state', `phone` = '$phone', `email` = '$email', `image` = '$img_location', `resume` = '$resume_loc' WHERE id = '$userid' ");
						
						if (!$sql)
						{
							die('Error: ' . mysql_error());
						}
						else
						{
							
							echo '<script language=javascript>alert("Profile Updated")</script>';
							echo "<script type='text/javascript'>window.location='edit-profile.php'</script>";
							exit();					
						}
					}
			
				?>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                            <?php
							
								
							
							?>
                            <form action="#" method="post" enctype="multipart/form-data">
                            
                            	<div class="form-group col-md-12 username">
                                    <label for="username">Username<span class="required">*</span></label>
                                    <input name="username" type="text" class="form-control" disabled value="<?php echo $row_user['username']; ?>">
                                </div><!--//form-group-->
                                
                                
                                <div class="form-group col-md-12 password">
                                    <label for="password">Password<span class="required">*</span></label>
                                    <input name="password" type="password" class="form-control" disabled value="<?php echo $row_user['password']; ?>">
                                     <a href="change-password.php">Change Password</a>
                                </div><!--//form-group-->
                                
                                
                                <div class="clearfix"></div>
                                
                                <div class="form-group col-md-6 fname">
                                    <label for="fname">First Name<span class="required">*</span></label>
                                    <input name="fname" type="text" class="form-control" required value="<?php echo $row_user['fname']; ?>">
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-6 sname">
                                    <label for="sname">Second Name<span class="required">*</span></label>
                                    <input name="sname" type="text" class="form-control" required value="<?php echo $row_user['sname']; ?>">
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-6 city">
                                    <label for="city">City</label>
                                    <input name="city" type="text" class="form-control" value="<?php echo $row_user['city']; ?>">
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-6 state">
                                    <label for="state">State</label>
                                    <input name="state" type="text" class="form-control" value="<?php echo $row_user['state']; ?>">
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-6 phone">
                                    <label for="phone">Phone<span class="required">*</span></label>
                                    <input name="phone" type="tel" class="form-control" required value="<?php echo $row_user['phone']; ?>">
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-6 email">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input name="email" type="email" class="form-control" required value="<?php echo $row_user['email']; ?>">
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-6 image">
                                    <label for="image">Upload Image</label>
                                    <input name="image" type="file" value="<?php echo $row_user['image']; ?>" class="form-control" >
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-6 image">
                                    <label for="image">Upload Resume</label>
                                    <input name="resume" type="file" value="<?php echo $row_user['resume']; ?>" class="form-control" >
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-8">
                                <button type="submit" class="btn btn-theme">Update Profile</button> 
                                </div>
                            </form>                  
                        </article><!--//contact-form-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <!-- <section class="widget has-divider">
                                <h3 class="title">Video tour</h3>
                                <iframe class="iframe" src="//www.youtube.com/embed/3f7l-Z4NF70?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen="" =""=""></iframe>
                            </section>   -->
                            
                            <?php
								
								include_once('testimonials.php');
								
							?>  
                        </aside><!--//page-sidebar-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-wrapper--> 
        </div><!--//content-->
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
    <?php include_once('footer.php'); ?>
    <!--//footer-->
    
    <!-- Javascript -->          
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="js/back-to-top.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>             
    
    
</body>
</html> 


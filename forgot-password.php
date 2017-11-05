<?php

include_once('db.php');
session_start();

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
                    <h1 class="heading-title pull-left">Forgot Password</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Forgot Password</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                            <div class="col-md-6">
                            <?
		
								if (!isset($_POST['email'])) {
									echo "";
								}
							
								else
								{
									
									$email = $_POST['email'];
									$password = rand(0000,9999);
									$pass = md5($password);
									
									$query = mysql_query("SELECT email FROM users WHERE email = '$email' ");
									
									if (mysql_num_rows($query) <= 0)
									{
									  echo "<p class='error'>No Mail ID Exists in Our Records, Please Sign up</p>";
									}
									else
									{
									
									$sql = mysql_query("UPDATE users SET `password` = '$pass' where email = '$email' ");
						
									if (!$sql)
									{
										die('Error: ' . mysql_error());
									}
									else
									{
										
									
										$subject = "New Password for your Internet Forum Account";
										$emailTo = $email;
										$emailfrom = "info@internetforum.com"; 
										$body = "New Password for your account with $email is $password \n\n\n\nWith Regards,\nInterent Forum.";
										$headers = 'From: Internet Forum <'.$emailfrom.'>' . "\r\n" . 'Reply-To: ' . $emailfrom;
								
										mail($emailTo, $subject, $body, $headers);
										$emailSent = true;
					
					
										echo '<script language=javascript>alert("Password Updated. Please Check your Mail.")</script>';
										echo "<script type='text/javascript'>window.location='login.php'</script>";
										exit();					
									}
									}
								}
							?>
                            <form action="#" method="post" enctype="multipart/form-data">
                                
                                
                                <div class="form-group fname">
                                    <label for="email">Email ID<span class="required">*</span></label>
                                    <input name="email" type="text" class="form-control" placeholder="Enter your Email ID" required>
                                </div><!--//form-group-->
                                
                                
                                
                                <button type="submit" class="btn btn-theme">Reset Password</button> 
                            </form>     
                            
                            <br><br>
                            
                            </div>
                           
                                  
                        </article><!--//Login-form-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                             
                            
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


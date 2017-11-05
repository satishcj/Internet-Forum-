<?php

include_once('db.php');
session_start();

//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}

	
	//Check to make sure that the subject field is not empty
	if(trim($_POST['phone']) == '') {
		$hasError = true;
	} else {
		$phone = trim($_POST['phone']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	
	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject_cnt = trim($_POST['subject']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$message = stripslashes(trim($_POST['message']));
		} else {
			$message = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'info@internetforum.com'; 
		$body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nMessage: $message";
		$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
		$subject = "[Internet Forum Enquiry] ".$subject_cnt;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
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
    
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Contact us</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Contact</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                	<div class="page-row">
                        <article class="map-section">
                            <h3 class="title">How to find us</h3>
                            <div id="map"></div><!--//map-->
                        </article><!--//map-->
                    </div><!--//page-row-->
                    
                    <div class="row page-row" id="form">
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                            <?php if(isset($hasError)) { //If errors are found ?>
                            <p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
                            <?php } ?>
                            
                            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                            <p class="error"><strong>Thank you <?php echo $name; ?> </strong> for writing to us. We will get back to you shortly.</p>
                            <?php } ?>
                            <form action="#" method="post">
                                <div class="form-group col-md-6 name">
                                    <label for="name">Name<span class="required">*</span></label>
                                    <input name="name" type="text" class="form-control" placeholder="Enter your Name" required>
                                </div><!--//form-group-->
                                <div class="clearfix"></div>
                                <div class="form-group col-md-6 email">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input name="email" type="text" class="form-control" placeholder="Enter your Email" required>
                                </div><!--//form-group-->
                                <div class="clearfix"></div>
                                <div class="form-group col-md-6 phone">
                                    <label for="phone">Phone<span class="required">*</span></label>
                                    <input name="phone" type="text" class="form-control" placeholder="Enter your Phone No" required>
                                </div><!--//form-group-->
                                
                                <div class="clearfix"></div>
                                <div class="form-group col-md-6 subject">
                                    <label for="subject">Subject<span class="required">*</span></label>
                                    <select name="subject" class="form-control" required>
                                        <option>--- Select Subject ---</option>
                                        <option value="Posts">Posts</option>
                                        <option value="Notifications">Notifications</option>
                                        <option value="About Us">About Us</option>
                                       <option value="Feedback">Feedback</option>
                                    </select>
                                </div><!--//form-group-->
                                
                                
                                
                                
                                <div class="form-group col-md-12 message">
                                    <label for="message">Message<span class="required"></span></label>
                                    <textarea name="message" class="form-control" required rows="6" cols="50" placeholder="Enter Message"></textarea>
                                </div><!--//form-group-->
                                
                                <div class="form-group col-md-8">
                                <button type="submit" name="submit" class="btn btn-theme">Submit</button> &nbsp; <button type="reset" class="btn btn-theme">Reset</button>
                                </div>
                            </form>                  
                        </article><!--//contact-form-->
                             
                            
                        
                        
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">                    
                            
                            <section class="widget has-divider">
                                <h3 class="title">Address</h3>
                                <p class="adr">
                                    <span class="adr-group">       
                                        <span class="street-address">Room No: 274, D Block, 1th Floor, </span><br>
                                        <span class="region">Katpadi, Vellore - 632014</span><br>
                                        <span class="country-name"> India</span>
                                    </span>
                                </p>
                            </section><!--//widget-->     
                            
                            <section class="widget">
                                <h3 class="title">Contact</h3>
                                <p class="tel"><i class="fa fa-phone"></i>Tel: +91 9908835190</p>
                                <p class="email"><i class="fa fa-envelope"></i>Email: <a href="mailto:info@internetforum.com">info@internetforum.com</a></p>
                            </section>   
                            
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
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
    
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>   
    <script type="text/javascript" src="js/map.js"></script> 
</body>
</html> 


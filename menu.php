<?php
	if(isset($_SESSION['tloggedin']))
	{ 
?>
	<nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                    	<li class="<?php echo (basename($_SERVER['SCRIPT_FILENAME'])=='dashboard.php'? 'active' : ''); ?> nav-item"><a href="dashboard.php">Dashboard</a></li>
                        
                        <li class="nav-item dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Notifications <i class="fa fa-angle-down"></i></a>
                        	<ul class="dropdown-menu">
                                <li><a href="view_notification.php"> View notification</a></li>
                                <li><a href="mark_as_all_read.php"> Mark as all read</a></li>                                                 
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Posts <i class="fa fa-angle-down"></i></a>
                        	<ul class="dropdown-menu">
                                <li><a href="Search_Post.php"> Search Post</a></li>
                                <li><a href="Add_Post.php"> Add Post</a></li>  
                                <li><a href="Delete_Post.php"> delete Post</a></li>   
                                <li><a href="Edit_Post.php"> edit Post</a></li>   
                                                                     
                            </ul>
                        </li>
                        
                        
                        
                        
                        
                        <li class="nav-item dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">My Account <i class="fa fa-angle-down"></i></a>
                        	<ul class="dropdown-menu">
                                <li><a href="edit-profile.php"> Edit Profile</a></li>
                                <li><a href="logout.php"> Logout</a></li>                                                 
                            </ul>
                        </li>
                        <!-- <li class="nav-item"><a href="#">Guest Lectures</a></li>-->
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->
<?  } 
	else{
?>

<nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                    	
                        <li class="nav-item"><a href="#"></a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->

<? } ?>
	

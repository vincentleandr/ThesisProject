<?php
session_start();
if(!isset($_SESSION['Email'])){
   header("Location:Login.php");
}

if($_SESSION['Role']=='Admin'){
    header("Location:admin/admin.php");
}
else
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <title>MyScholarships - Profile</title>
    <link rel="icon" href="ico/myscholarships.png">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/addition.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    

    <!-- styles needed for carousel slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="js/pace.min.js"></script>
    
    
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="js/validation-change-password.js"></script>
</head>
<body>
<div id="wrapper">
    <div class="header">
        <nav class="navbar navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="index.php" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="fa fa-graduation-cap"></i> </span>
                        My<span>Scholarships </span> </a>
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span><i class="fa fa-user fa-fw"></i>
								<?php 
                                    echo $_SESSION['Firstname' ];
                                ?>
                            </span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu user-menu">
                                <li><a href="profile.php"><i class="fa fa-home fa-fw"></i> Profile</a></li>
                                <li><a href="dashboard.php"><i class="fa fa-line-chart fa-fw"></i> Dashboard</a></li>
                                <li><a href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships</a></li>
                                <li><a href="universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
                                <li class="active"><a href="setting.php"><i class="fa fa-cog fa-fw"></i> Setting</a></li>
                                <li><a href="mod/dologout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 page-sidebar">
                    <aside>
                        <div class="inner-box">
                            <div class="user-panel-sidebar">
                                <ul class="acc-list">
                                	<li><a class="" href="profile.php"><i class="fa fa-home fa-fw"></i> Profile </a></li>
                                    <li><a class="" href="dashboard.php"><i class="fa fa-line-chart fa-fw"></i> Dashboard </a></li>
                                    <li><a class="" href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships </a></li>
                                    <li><a href="universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
                                    <li><a class="active" href="setting.php"><i class="fa fa-cog fa-fw"></i> Setting</a></li>
                                </ul>
                                <!-- /.collapse-box  -->
                            </div>
                        </div>
                        <!-- /.inner-box  -->

                    </aside>
                </div>
                <!--/.page-sidebar-->

                <div class="col-sm-9 page-content">
                    <div class="inner-box">
                        <div class="welcome-msg">
                            <h3 class="page-sub-header2 clearfix no-padding">
                            Hello, 
							<?php 
								echo $_SESSION['Firstname'];
                               
							?>
                            
                             </h3>
                        </div>
                                        <form action="mod/dochangepass.php" id="change-password-form" name="profile-form"  class="form-horizontal" action="" method="post" role="form">
                                        	
                                       
                                        	<hr>
                                            
                                            <?php
												error_reporting(0);
												$msg1 = $_GET['msg1'];
												$msg2 = $_GET['msg2'];
											?>
                                            
                                        	<h3><i class="fa fa-user fa-fw"></i> Change Password <hr></h3>
                                            <div>
                                                <span style="color:#00BB5B;"><?php echo $msg1;?></span>
                                                <span style="color:#FF1313;"><?php echo $msg2;?></span>
                                            </div>
                                            <br>
                                            
                                            
                                            
                                            <div class="form-group required">
                                                <label class="col-sm-3 control-label">Old Password </label>
    
                                                <div class="col-sm-9">
                                                	<input name="OldPassword" id="OldPassword" class="form-control" placeholder="Old Password" type="password">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group required">
                                                <label class="col-sm-3 control-label">New Password </label>
    
                                                <div class="col-sm-9">
                                                	<input name="NewPassword" id="NewPassword" class="form-control" placeholder="New Password" type="password">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group required">
                                                <label class="col-sm-3 control-label">Confirm New Password </label>
    
                                                <div class="col-sm-9">
                                                	<input name="ConfirmNewPassword" id="ConfirmNewPassword" class="form-control" placeholder="Confirm New Password" type="password">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" name="submit" class="btn btn-default">Save</button>
                                                </div>
                                            </div>
                                        </form>

                    </div>
                </div>
                <!--/.page-content-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!-- /.main-container -->

    <div class="footer" id="footer">
        <div class="container">
            <ul class="navbar-link footer-nav text-center">
                <li><a href="contact.php"> Contact us </a> <a href="terms-conditions.php"> Terms and
                    Conditions </a> <a href="privacy-policy.php"> Privacy Policy </a> <a
                        href="faq.php"> FAQ </a></li>
            </ul>
            <br>
            <ul class="navbar-link footer-nav text-center">
                <li><a href=""><i class="fa fa-facebook fa-2x"></i></a>
                	<a href=""><i class="fa fa-twitter fa-2x"></i></a>
                    <a href=""><i class="fa fa-instagram fa-2x"></i></a>
                    </li>
            </ul>
        </div>

    </div>
    <!--/.footer-->
</div>
<!-- /.wrapper --> <!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script>
$(function(){
  $('.multi-check').each(function(){
    var trigger = $(this).find('.trigger');
    var dropdown = $(this).find('.dropdown-form');
    
    trigger.bind('click',function(e){
      e.preventDefault();
      dropdown.slideToggle();
    });
    var checks = dropdown.find('.checkbox input[type=checkbox]');
    var checkall = dropdown.find('.checkall');
    checkall.click(function(){
      checks.each(function() {
        $(this).prop('checked',true);
      });
    });
  });
});
</script>

<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- include carousel slider plugin  -->
<script src="js/owl.carousel.min.js"></script>


<!-- include equal height plugin  -->
<script src="js/jquery.matchHeight-min.js"></script>

<!-- include jquery list shorting plugin plugin  -->
<script src="js/hideMaxListItem.js"></script>

<!-- include jquery.fs plugin for custom scroller and selecter  -->
<script src="plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<!-- include custom script for site  -->
<script src="js/script.js"></script>

</body>
</html>
<?php
}

?>

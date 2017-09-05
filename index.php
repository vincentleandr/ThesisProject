<?php  
include("mod/connect.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <title>MyScholarships</title>
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


</head>
<body>



<div id="wrapper">

    <div class="header">
        <nav class="navbar   navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="index.php" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="fa fa-graduation-cap fa-fw"></i> </span>
                        My<span>Scholarships </span> </a>
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                    <?php  
                        if(isset($_SESSION['Email']))
                        {
                            if($_SESSION['Role'] == "Member"){
                            // if sudah login
                    ?>

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
                                <li><a href="mod/dologout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
                            </ul>
                        </li>
					<?php 
							}else{
								//dropdown admin
								
                    ?>
                    	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span><i class="fa fa-user fa-fw"></i>Admin </span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu user-menu">
                                <li><a href="admin/admin-scholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> Scholarships</a></li>
                                <li class=""><a href="admin/admin-universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
                                <li><a href="admin/admin-blog.php"><i class="fa fa-rss fa-fw"></i> Blog</a></li>
                                <li><a href=""><i class="fa fa-question fa-fw"></i> Whatever</a></li>
                                <li><a href="mod/dologout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
                            </ul>
                        </li>
						
					<?php
							}
						}else{             
						// if belum login               
                    ?>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="intro hasOverly" id="search" style="background-image: url(images/bg11.jpg); background-attachment:fixed; background-position:top;">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown"> Find Your Scholarships </h1>

                    <p class="sub animateme fittext3 animated fadeIn"> Find the scholarships that suits you from many universities registered from all around the world. <br>
                    To start, sign up for an account !</p>

                    <div class="row search-row animated fadeInUp">
                    
                    
                    <?php  
                        if(isset($_SESSION['Email']))
                        {
                            if($_SESSION['Role'] == "Member"){
                            // if sudah login
                    ?>
                    
                    	<a class="btn btn-lg btn-start-search" href="myscholarships.php">
                    <span class="">Start Searching</span></a>
                    
                    
                    <?php 
							}else{
								//dropdown admin
								
                    ?>
                    	<a class="btn btn-lg btn-start-search" href="/admin-scholarship.php">
                    <span class="">Start Searching</span></a>
                    
                    <?php
							}
						}else{             
						// if belum login               
                    ?>
                    
                    	<a class="btn btn-lg btn-start-search" href="signup.php">
                    <span class="">Start Searching</span></a>
                    
                    <?php } ?>
                    
                        
                    	<!--
                        <div class="col-lg-4 col-sm-4 search-col relative locationicon">
                            <i class="icon-location-2 icon-append"></i>
                            <input type="text" name="country" id="autocomplete-ajax"
                                   class="form-control locinput input-rel searchtag-input has-icon"
                                   placeholder="Country ..." value="">

                        </div>
                        <div class="col-lg-4 col-sm-4 search-col relative"><i class="icon-book icon-append"></i>
                            <input type="text" name="ads" class="form-control has-icon" id="autocomplete-ajax2" 
                                   placeholder="I'm looking for a ..." value="">
                        </div>
                        <div class="col-lg-4 col-sm-4 search-col">
                            <button class="btn btn-primary btn-search btn-block"><i
                                    class="icon-search"></i><strong>Find</strong></button>
                        </div>
                        -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.search -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1>Get some inspiration, information, latest news and helpful tips from our blog !</h1>
                
                
                
                <a class="btn  btn-lg btn-primary-dark" href="blog.php">
                    <span class=""><strong>Get Inspired</span></a>
                    
            </div>
        </div>
    </div>
    <!-- /.give -->
    
    <div class="intro hasOverly" style="background-image: url(images/bg11.jpg); background-attachment:fixed; background-position:top;">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown"> Everybody have an opportunity. </h1>

                    <p class="sub animateme fittext3 animated fadeIn"> College becomes more expensive from year to year. That makes only some of us have the chance to continue our education to college. But we believe that everybody have an opportunity to have a taste of college life. And we will make that happen !</p>
                    
                    <p class="about text-center mt50" style="font-size:14px;"> Find out more about us and meet our team <a href="about-us.php">here</a></p>

                </div>
            </div>
        </div>
    </div>
    <!-- /.about -->
    
    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1>College is not hard, paying for it as well.</h1>
                
                    
                <?php  
                        if(isset($_SESSION['Email']))
                        {
                            if($_SESSION['Role'] == "Member"){
                            // if sudah login
                    ?>
                    
                    	<a class="btn  btn-lg btn-primary-dark" href="myscholarships.php">
                    <span class="">Start Searching</span></a>
                    
                    
                    <?php 
							}else{
								//dropdown admin
								
                    ?>
                    	<a class="btn  btn-lg btn-primary-dark" href="/admin-scholarships.php">
                    <span class="">Start Searching</span></a>
                    
                    <?php
							}
						}else{             
						// if belum login               
                    ?>
                    
                    	<a class="btn  btn-lg btn-primary-dark" href="signup.php">
                    <span class="">Start Searching</span></a>
                    
                    <?php } ?>
                    
            </div>

        </div>
    </div>
    <!-- /.search2 -->

    <div class="page-info hasOverly" style="background: url(images/bg.jpg); background-size:cover; background-position:top;">
        <div class="bg-overly ">
            <div class="container text-center section-promo">
                <div class="row">
                    <div class="col-sm-4 col-xs-4 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-group"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>2200</span></h5>

                                    <div class="iconbox-wrap-text">Users</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-4 col-xs-4 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  fa fa-university"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>100</span></h5>

                                    <div class="iconbox-wrap-text">Universities</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-4 col-xs-4  col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  fa fa-graduation-cap"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>700</span></h5>

                                    <div class="iconbox-wrap-text">Scholarships</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /.page-info -->


    <div class="footer" id="footer">
        <div class="container">
            <ul class="navbar-link footer-nav text-center">
                <li>
                    <a href="contact.php"> Contact us </a>
                    <a href="terms-conditions.php"> Terms and Conditions </a>
                    <a href="privacy-policy.php"> Privacy Policy </a>
                    <a href="faq.php"> FAQ </a>
                </li>
            </ul>
            <br>
            <ul class="navbar-link footer-nav text-center">
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x"></i></a>
                	<a href="https://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram fa-2x"></i></a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


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


<!-- include jquery autocomplete plugin  -->

<script type="text/javascript" src="plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="plugins/autocomplete/jquery.autocomplete.js"></script>

<script type="text/javascript" src="plugins/autocomplete/countries.js"></script>
<script type="text/javascript" src="plugins/autocomplete/major.js"></script>

<script type="text/javascript" src="plugins/autocomplete/autocomplete-demo.js"></script>
<script type="text/javascript" src="plugins/autocomplete/autocomplete-major.js"></script>

</body>
</html>

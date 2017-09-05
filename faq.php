<?php  
include("mod/connect.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <title>MyScholarships - FAQ</title>
    <link rel="icon" href="ico/myscholarships.png">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

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
                                <li class="active"><a href="profile.php"><i class="fa fa-home fa-fw"></i> Profile</a></li>
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

    <div class="intro-inner">
        <div class="about-intro" style="
    background:url(images/bg2.jpg) no-repeat center;
	background-size:cover;">

            <div class="dtable hw100">
                <div class="dtable-cell hw100">
                    <div class="container text-center">

                        <h1 class="intro-title animated fadeInDown"> Frequently Asked Questions </h1>


                    </div>
                </div>
            </div>


        </div>
        <!--/.about-intro -->

    </div>
    <!-- /.intro-inner -->

    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                </div>
                <div class="faq-content">

                    <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group faq-panel">
                        <div class="panel">
                            <div id="headingOne" role="tab" class="panel-heading">
                                <h4 class="panel-title">
                                    <a aria-controls="collapseOne" aria-expanded="true" href="#collapseOne"
                                       data-parent="#accordion" data-toggle="collapse">
                                        How this website works?
                                    </a>
                                </h4>
                            </div>
                            <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse in"
                                 id="collapseOne">
                                <div class="panel-body">
                                    First, you have to make an account. And then you have to login using your account. <br> <br>
                                    We will redirect you to your profile which you have to fill as a parameter to find scholarships that suits you. <br> <br>
                                    After filling your profile, we will filter through your profile as the requirements for scholarships. Then, we will give list of scholarships that you can check and apply. <br> <br>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div id="headingTwo" role="tab" class="panel-heading">
                                <h4 class="panel-title">
                                    <a aria-controls="collapseTwo" aria-expanded="false" href="#collapseTwo"
                                       data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                        What is the dashboard for?
                                    </a>
                                </h4>
                            </div>
                            <div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse"
                                 id="collapseTwo">
                                <div class="panel-body">
                                    After you applied the scholarships your desired, the scholarships will go to your dashboard. We will automatically updated your schedule, so you know and won't miss the registration date. <br> <br>
                                    Later, if you already got the scholarships, then you can move it to 'Won' tabs via clicking 'Win It !' button.
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div id="headingThree" role="tab" class="panel-heading">
                                <h4 class="panel-title">
                                    <a aria-controls="collapseThree" aria-expanded="false" href="#collapseThree"
                                       data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                        I have a question I need to ask, how can I do it?
                                    </a>
                                </h4>
                            </div>
                            <div aria-labelledby="headingThree" role="tabpanel" class="panel-collapse collapse"
                                 id="collapseThree">
                                <div class="panel-body">
                                    You can go to our contact information on the footer. There will be a form for you to write your message and it will send us to our email. And you also have to fill in your name and email alongside the message. Then, we will reply to your email that you gave.
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div id="heading_04" role="tab" class="panel-heading">
                                <h4 class="panel-title">
                                    <a aria-controls="collapse_04" aria-expanded="false" href="#collapse_04"
                                       data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                        I write/have an helpful article which I want to be published on the blog section, how can I do it?
                                    </a>
                                </h4>
                            </div>
                            <div aria-labelledby="heading_04" role="tabpanel" class="panel-collapse collapse"
                                 id="collapse_04">
                                <div class="panel-body">
                                    You can visit our office and submit the article. Or you can also call, message or email us the article. Our address and contact information can be found at the contact section on the footer of the website.
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div id="heading_05" role="tab" class="panel-heading">
                                <h4 class="panel-title">
                                    <a aria-controls="collapse_05" aria-expanded="false" href="#collapse_05"
                                       data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                        What can I do if I lost my account?
                                    </a>
                                </h4>
                            </div>
                            <div aria-labelledby="heading_05" role="tabpanel" class="panel-collapse collapse"
                                 id="collapse_05">
                                <div class="panel-body">
                                    Pellentesque in mauris placerat, porttitor lorem id, ornare nisl. Pellentesque
                                    rhoncus convallis felis, in egestas libero. Donec et nibh dapibus, sodales nisi
                                    quis, fringilla augue. Donec dui quam, egestas in varius ut, tincidunt quis ipsum.
                                    Nulla nec odio eu nisi imperdiet dictum.
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div id="heading_06" role="tab" class="panel-heading">
                                <h4 class="panel-title">
                                    <a aria-controls="collapse_06" aria-expanded="false" href="#collapse_06"
                                       data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                        ?????
                                    </a>
                                </h4>
                            </div>
                            <div aria-labelledby="heading_06" role="tabpanel" class="panel-collapse collapse"
                                 id="collapse_06">
                                <div class="panel-body">


                                    Curabitur sed leo dictum, convallis lorem eu, suscipit mi. Mauris viverra blandit
                                    varius. Proin non sem turpis. Etiam fringilla hendrerit nunc at accumsan. Duis
                                    mollis auctor lobortis.
                                </div>
                            </div>
                        </div>


                    </div>


                </div>


            </div>
        </div>
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

<!-- include form-validation plugin || add this script where you need validation   -->
<script src="js/form-validation.js"></script>

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

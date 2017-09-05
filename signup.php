<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <title>MyScholarships - Sign Up</title>
    <link rel="icon" href="ico/myscholarships.png">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/addition.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="js/validation-signup.js"></script>

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
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
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
                <div class="col-sm-5 login-box">
                    <div class="panel panel-default">
                        <div class="panel-intro text-center">
                            <h2 class="logo-title cGray">
                                <!-- Original Logo will be placed here  -->

                                <span class="logo-icon"><i class="fa fa-graduation-cap fa-fw"></i> </span>
                        My<span>Scholarships </span> </a>
                
                            </h2>
                        </div>
                        <div class="panel-body">
                     
                            <form id="register-form" name="register-form" action='mod/doregister.php' method="POST" role="form">
                            	<div class="form-group">
                                    <label for="firstname" class="control-label">First Name:</label>

                                    <div class="input-icon"><i class="fa fa-id-badge fa-fw"></i>
                                        <input class="form-control" type="text" placeholder="First Name" name="Firstname" id="firstname" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="control-label">Last Name:</label>

                                    <div class="input-icon"><i class="fa fa-id-badge fa-fw"></i>
                                        <input class="form-control" type="text" placeholder="Last Name" name="Lastname" id="lastname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Email:</label>

                                    <div class="input-icon"><i class="fa fa-user fa-fw"></i>
                                        <input class="form-control email" type="text" placeholder="Email" name="Email" id="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Password:</label>

                                    <div class="input-icon"><i class="fa fa-lock fa-fw"></i>
                                        <input class="form-control" type="password" placeholder="Password" name="Password" id="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password" class="control-label">Confirm Password:</label>

                                    <div class="input-icon"><i class="fa fa-check-circle fa-fw"></i>
                                        <input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
                                    </div>
                                </div>
                                <div class="form-group">
                                	<div class="col-md-12">
                                		<div class="termbox mb10">
                                			<label class="checkbox-inline" for="checkboxes-1">
                                			<input name="Agreed" id="agreed" value="agreed" type="checkbox" class="required" title="Agreement on our Terms & Conditions is required">I have read and agree to the <a href="terms-conditions">Terms & Conditions</a> </label>
                                		</div>
                                        <hr>
                                		<div class="form-group">
                                			<button class="btn btn-primary  btn-block">Register</button>
                                
                                		</div>
                                	</div>
                                </div>
                            </form>
                        		</div>
                    </div>
                    <div class="login-box-btm text-center">
                        <p> Already have an account? <br>
                            <a href="login.php"><strong>Sign In !</strong> </a></p>
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
    <!--/.footer-->
</div>
<!-- /.wrapper --> <!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->



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


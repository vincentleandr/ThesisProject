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
    <title>MyScholarships - Blog</title>
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
                    <div class="container text-center animated fadeInDown">

                        <h1 class="intro-title"> Blog</h1>


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
                
                	<!--Post-->
                    <?php 
                        error_reporting(0);
                        $category = $_GET['category'];

                        $start =0;
                            $limit = 6;
                            $Id=$_GET['Id'];

                            if(isset($_GET['Id']))
                            {
                            $Id=$_GET['Id'];
                            $start=($Id-1)*$limit;
                            }

                        
                        if(!isset($category))
                        {
                             $result1 = executeQuery("select * from msblog order by BlogId desc limit $start,$limit");
                        }
                        

                        if($category == "Information"){
                        $result1 = executeQuery("select * from msblog where BCategory='Information' order by BlogId desc limit $start,$limit");

                        }elseif($category == "Inspiration"){
                        $result1 = executeQuery("select * from msblog where BCategory='Inspiration' order by BlogId desc limit $start,$limit");
                        }elseif ($category == "News") {
                            $result1 = executeQuery("select * from msblog where BCategory='News' order by BlogId desc limit $start,$limit");
                        }elseif($category=="Tips"){
                        $result1 = executeQuery("select * from msblog where BCategory='Tips' order by BlogId desc limit $start,$limit");
                        }

                        $result3 =executeQuery("select * from msblog");
                             $countp = mysql_num_rows($result3);
                             $total=ceil($countp/$limit);

                        
                                     while($row = mysql_fetch_array($result1)){
                                    
                    ?>
                    <div class="col-sm-4 col-xs-6 col-xxs-12 blog-grid mb85">
                        <div class="blog-post-wrapper box-shadow">
                            <article class="blog-post-item">
                                <div class="inner-box">

                                    <!--blog image-->
                                    <div class="blog-post-img">
                                        <a href="blog-details.php?value=<?php echo $row[0];?>">
                                            <figure>
                                                <img class="" alt="blog-post image"
                                                     src="images/blog/<?php echo $row[3];?>">
                                            </figure>
                                        </a>    
                                    </div>

                                    <!--blog content-->

                                    

                                    <div class="blog-post-content-desc">
                                        <div class="blog-post-content">
                                        <?php
                                            if($row[1]=="Information"){
                                        ?>
                                        	<span class="blog-tag p3" style="color:#E04848"><?php echo $row[1]?></span>
                                        <?php }elseif($row[1]=="Inspiration"){ ?>
                                        <span class="blog-tag p3" style="color:#EBB122"><?php echo $row[1]?></span>
                                        <?php }elseif($row[1]=="News"){ ?>
                                        <span class="blog-tag p3" style="color:#4CA3FF"><?php echo $row[1]?></span>
                                        <?php }else{ ?>
                                         <span class="blog-tag p3" style="color:#4DC057"><?php echo $row[1]?></span>
                                        <?php } ?>

                                            <!-- TAG COLOR
                                            
                                            Information : #E04848
                                            Inspiration : #EBB122
                                            News : #4CA3FF
                                            Tips : #4DC057
                                            
                                            TAG COLOR -->
                                            
                                            <h3 class="mt15" style="padding:0"><a href="blog-details.php?value=<?php echo $row[0];?>"><strong><?php echo $row[2]?></strong></a></h3>
                                            <span style="font-size:75%;">- by <?php echo $row[5]?></span>
                                            
                                            <p class="text-overflow">
                                            	<?php echo $row[4]?>
                                            </p>


                                            <div class="row">
                                                <div class="col-md-12 clearfix blog-post-bottom">
                                                    <a class="btn btn-primary pull-left" href="blog-details.php?value=<?php echo $row[0];?>">Read more ...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!--/.blog-post-wrapper-->
                        
                    </div>
                    <!--/.post-->
                    <?php 
                        }
                     ?>
                     
                    <!--page-sidebar-->

                </div>
                
                <div class="pagination-bar text-center pagination-position">
                    <ul class="pagination">
                    
                        <?php
                        if($Id>1){
                        ?>
                        
                        <li><a class="pagination-btn" href="blog.php?Id=<?php echo ($Id-1);?>">&laquo; Prev </a></li>
                        
                        <?php  
                        }
                        ?>
                        <?php  
                        for($i=1;$i<=$total;$i++){
                        ?>
                        
                        <li><a href="blog.php?Id=<?php echo $i;?>"><?php echo $i; ?></a></li> 
                         
                        <?php  
                        }
                        ?>
                        
                        <?php 
                        if(!isset($_GET['Id'])){
                        $Id=1;
                        }
                        
                        if($Id!=$total){
                        
                        ?>
                        
                        <li><a class="pagination-btn" href="blog.php?Id=<?php echo ($Id+1);?>">Next &raquo;</a></li>
                        
                        <?php  
                        }else{
                        ?>
                        
                        <li><a class="pagination-btn" href="blog.php?Id=<?php echo ($total);?>&category=<?php echo $category;?>">Next &raquo;</a></li>
                        
                        <?php
                        }
                        ?>
                        
                    </ul>
                </div>
                
                <div class="section-content mt50">
                    <div class="row text-center pt50" style="border-top:1px solid #C8C8C8;">
                        <h2 class="col-sm-12">Blog Categories</h2>
                        <span class="mb20">Explore articles organized by tags</span>
                        
                        <ul class="category mt20">
                        
                        	<a href="mod/docategory.php?category=Information">
                            <li class="col-sm-3 mb10">
                            
                                <div class="blog-category" style="color:#E04848;">
                                    <span>Information</span>
                                </div>
                            </li></a>
                            
                            <a href="mod/docategory.php?category=Inspiration">
                            <li class="col-sm-3 mb10"> 
                                <div class="blog-category" style="color:#EBB122;">
                                    <span>Inspiration</span>
                                </div>
                            </li></a>
                            
                            <a href="mod/docategory.php?category=News">
                            <li class="col-sm-3 mb10"> 
                                <div class="blog-category" style="color:#4CA3FF;">
                                    <span>News</span>
                                </div>
                            </li></a>
                            
                            <a href="mod/docategory.php?category=Tips">
                            <li class="col-sm-3 mb10"> 
                                <div class="blog-category" style="color:#4DC057;">
                                    <span>Tips</span>
                                </div>
                            </li></a>
                            
                        </ul>
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
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>


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

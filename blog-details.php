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
    <!-- /.intro-inner -->

    <?php 
    error_reporting(0);

        

        $BlogId = $_GET['ComblogId'];
        if(!isset($BlogId))
        {
        $BlogId = $_GET['value'];
         }
        $result3 = executeQuery("select * from commentblog where BlogId = '".$BlogId."'");
        $Countcom = mysql_num_rows($result3);
        

        


        $result1 = executequery("select * from msblog where BlogId='".$BlogId."' ");
        $row = mysql_fetch_array($result1);

    ?>

    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                    <div class="col-sm-8 blogLeft">
                        <div class="blog-post-wrapper">


                            <article class="blog-post-item">
                                <div class="inner-box">


                                    <!--blog image-->
                                    <div class="blog-post-img">

                                        <a href="blog-details">
                                            <figure>
                                                <img class="img-responsive" alt="blog-post image"
                                                     src="images/blog/<?php echo $row[3];?>">
                                            </figure>
                                        </a>
                                    </div>

                                    <!--blog content-->

                                    <div class="blog-post-content-desc">


                                        <span class="info-row blog-post-meta"> 
                                            <span class="author"> by <?php echo $row[5];?> - <?php echo $row[6];?> </span>
                                            
                                            <?php
                                            if($row[1]=="Information"){
											?>
												<span class="blog-tag p3 flright" style="color:#E04848"><?php echo $row[1]?></span>
											<?php }elseif($row[1]=="Inspiration"){ ?>
												<span class="blog-tag p3 flright" style="color:#EBB122"><?php echo $row[1]?></span>
											<?php }elseif($row[1]=="News"){ ?>
												<span class="blog-tag p3 flright" style="color:#4CA3FF"><?php echo $row[1]?></span>
											<?php }else{ ?>
												<span class="blog-tag p3 flright" style="color:#4DC057"><?php echo $row[1]?></span>
											<?php } ?>
                                        </span>


                                        <div class="blog-post-content">
                                            <h2><?php echo $row[2];?></h2>

                                            <div class="blog-article-text" style="white-space:pre-line;">
                                                <p>
                                                    <?php echo $row[4];?>
                                                </p>
                                            </div>
                                        </div>


                                        <div class="clearfix">
                                            <div class="col-md-12  blog-post-bottom">

                                                <ul class="share-this-post">
                                                    <li>Share: </li>

                                                    
                                                    <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=" class="facebook"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a target="_blank" href="https://twitter.com/share?url=&amp;text=Check%20this%20out%20&#33&amp;hashtags=myscholarships"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li><a target="_blank" href="https://plus.google.com/share?url=blog.details.php" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                    <li><a target="_blank" href="http://www.tumblr.com/share/link?url=&amp;title=MyScholarships"><i class="fa fa-tumblr"></i></a>
                                                    </li>
                                                    <li><a target="_blank" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" class="pinterest"><i
                                                            class="fa fa-pinterest"></i></a>
                                                    </li>
                                                    <li><a target="_blank" href="http://reddit.com/submit?url=&amp;title=MyScholarships"><i class="fa fa-reddit"></i></a>
                                                    </li>
                                                    

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="blog-post-footer">


                                        <div style="clear: both"></div>


                                        <div class="inner ">


                                            <div class="blogs-comments-area">
                                                <h3 class="list-title"><a class="post-comments" style="text-transform:none;"><?php echo $Countcom;?> Comments</a></h3>
                                            
                                                <div class="blogs-comment-respond" id="respond">
                                                    <ul class="blogs-comment-list">

                                                    <?php
                                                        while($rowcom = mysql_fetch_array($result3)){
                                                        
                                                    ?>
                                                    
                                                        <li>
                                                            <div class="blogs-comment-wrapper">
                                                                
                                                                    <div class="">
                                                                    <div class="blogs-comment-name">
                                                                        <a href="#"><?php echo $rowcom[4]?></a>
                                                                        <span class="blogs-comment-date"><?php echo $rowcom[5]?></span>
                                                                    </div>
                                                                    <div class="blogs-comment-description">
                                                                        <p><?php echo $rowcom[3]?></p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        
                                                        </li>
                                                        <?php } ?>
                                                        
                                                        
                                                    </ul>
                                                    <!--Comment list End-->
                                                
                                                
                                                    <h3 class="blogs-comment-reply-title list-title" style="text-transform:none;">Leave a Comment</h3>
                                                    
                                                    <form action="mod/doaddcomment.php" method="post" class="blogs-comment-form" id="blogs-commentform">
                                                    <?php
                                                        if(!isset($_SESSION['Email'])){

                                                    ?>
                                                        <div class="form-group">
                                                        <span>You must <a href="login.php?BlogId=<?php echo $BlogId;?>">login </a>first to comment.</span>
                                                        <textarea class="form-control" placeholder="Comment"
                                                        name="Comment" disabled></textarea></div>
                                                        


                                                        <input type="hidden" name="BlogId" value="<?php echo $row[0]?>">
                                                    
                                                        <button type="submit" name="submit" class="btn btn-primary btn-lg" disabled> Submit
                                                        </button>
                                                        <?php }else{ ?>
                                                        <div class="form-group">
                                                        
                                                        <textarea class="form-control" placeholder="Comment"
                                                        name="Comment" ></textarea></div>
                                                        


                                                        <input type="hidden" name="BlogId" value="<?php echo $row[0]?>">
                                                    
                                                        <button type="submit" name="submit" class="btn btn-primary btn-lg" > Submit
                                                        </button>
                                                        <?php } ?>
                                                        
                                                    </form>
                                                
                                                </div>
                                                <!-- #respond -->
                                            
                                            
                                            </div>
                                        </div>

                                    </div>

                                    


                                </div>
                            </article>


                        </div>
                        <!--/.blog-post-wrapper-->
                    </div>
                    <!--blogLeft-->


                    <div class="col-sm-4 blogRight page-sidebar">
                        <aside>
                            <div class="inner-box">
                                <div class="categories-list  list-filter">
                                    <h5 class="list-title uppercase"><strong><a href="#"> Recently Added</a></strong></h5>


                                    <div class="blog-popular-content">
                                        
										<?php 
                                             $result2 = executeQuery("select * from msblog order by BlogId desc limit 6");
                    
                                    while($rowrc = mysql_fetch_array($result2)){
                                
                                        ?>
                                        <div class="item-list">

                                            <div class="col-sm-4 col-xs-4 no-padding photobox">
                                                <div class="add-image"><a href="blog-details.php?value=<?php echo $rowrc[0];?>"><img class="no-margin"
                                                                                                       src="images/blog/<?php echo $rowrc[3];?>"
                                                                                                       alt="img"></a>
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-sm-8 col-xs-8 add-desc-box">
                                                <div class="add-details">
                                                    <h5 class="add-title"><a href="blog-details.php?value=<?php echo $rowrc[0];?>"><?php echo $rowrc[2];?></a></h5>
                                                    <span class="info-row">  <span class="date"><i
                                                            class=" icon-clock"> </i> <?php echo $rowrc[6];?> </span> </span>
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
                                        <!--/.add-desc-box-->


                                        

                                    


                                    </div>


                                    <div style="clear:both"></div>

                                    <!--/.categories-list-->

                                </div>
                                


                                
                                <!--/.categories-list-->
                                

                            </div>
                        </aside>
                    </div>
                    <!--page-sidebar-->

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

<?php
include("mod/connect.php");

session_start();
if(!isset($_SESSION['Email'])){
   header("Location:Login.php");
}else
{

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <title>MyScholarships - Universities</title>
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

    <!-- bxSlider CSS file -->
    <link href="plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>

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
<body class="univ-details">
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
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span><i class="fa fa-user fa-fw"></i>
                            	<?php 
                                    echo $_SESSION['Firstname' ];
                                ?>
                            </span><i class="fa fa-angle-down"></a></i>
                            <ul class="dropdown-menu user-menu">
                                <li class=""><a href="profile.php"><i class="fa fa-home fa-fw"></i> Profile</a></li>
                                <li class=""><a href="dashboard.php"><i class="fa fa-line-chart fa-fw"></i> Dashboard</a></li>
                                <li class=""><a href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships</a></li>
                                <li class="active"><a href="universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
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
    
    <?php  
        error_reporting(0);

        $UniversityId = $_GET['revid'];
        if(!isset($UniversityId))
        {
        $UniversityId = $_GET['univid'];
         }
        $result1 = executeQuery("select * from msuniversity join universityimage on msuniversity.UniversityId = universityimage.UniversityId where msuniversity.UniversityId='".$UniversityId."'");
		$result2 = executeQuery("select * from universityimage where UniversityId = '".$UniversityId."'");
		
		$result3 = executeQuery("select * from universityimage where UniversityId = '".$UniversityId."'");
		$result4 = executeQuery("select * from universitymajor where UniversityId='".$UniversityId."'");
		
		$result5 = executeQuery("select * from reviewuniversity where UniversityId = '".$UniversityId."'");
		$Countcom = mysql_num_rows($result5);

        // while($row = mysql_fetch_array($result1)){
        //     $count++;
        // }
         // while($rowimages = mysql_fetch_array($result2)){
         //    echo $rowimages[2];
         // }

         $row = mysql_fetch_array($result1);
         

    ?>
    
    
    

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
                                    <li><a class="active" href="universities.php"><i class="fa fa-university fa-fw"></i> Universities </a></li>
                                    <li><a class="" href="setting.php"><i class="fa fa-cog fa-fw"></i> Setting </a></li>
                                </ul>
                                <!-- /.collapse-box  -->
                            </div>
                        </div>
                        <!-- /.inner-box  -->
						<div class="inner-box">
                        	<div class="user-panel-sidebar">
                            	
                                <div class="panel-content user-info">
                                    <div class="panel-body">
                                        <div class="seller-info">
                                            <h3 class="no-margin">
                                                <img src="images/univ/logo/<?php echo $row[11];?>" width="100%">
                                                <hr>
                                                
                                            </h3>
                                            
                                            <div class="row">
                                            	<span class="col-sm-12 text-center"><strong>Website:</strong></span>
												<span class="col-sm-12 text-center"><a href=""><?php echo $row[4]?></a></span> <br> <hr>
                                                
                                                <span class="col-sm-12 text-center"><strong>Email:</strong></span>
												<span class="col-sm-12 text-center"><?php echo $row[5]?></span> <br> <hr>
                                            </div>
    
                                            
                                        </div>
                                        
                                        <div class="user-ads-action"><a href="#contactAdvertiser" data-toggle="modal"
                                                                        class="btn   btn-default btn-block"><i
                                                class=" icon-mail-2"></i> Send a message </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!--/.page-sidebar-->
            
            
            
                <div class="col-sm-9 page-content">
                    <div class="inner-box" style="margin-bottom:0px;">
                    	<div>
                        	<h2><?php echo $row[1]?></h2>
                            
                            <!--
                            <a href="#" class="bookmark btn btn-primary"><i class="fa fa-bookmark fa-fw"></i></a>-->
                            
                            <!--
                            <a href="#" class="bookmark-active btn btn-primary"><i class="fa fa-bookmark fa-fw"></i></a>-->
                        </div>
                    	
						<!--slider-->
                        <div class="ads-image col-sm-12">
                            <ul class="bxslider">
								<?php 
                                    while($rowimages = mysql_fetch_array($result2)){
                                 ?>
                                	<li><img src="images/univ/<?php echo $rowimages[2]?>" alt="img" width="100%"/></li>
                                <?php } ?>
                            </ul>
                            <div id="bx-pager">
								<?php  
                                    $count =0;
                                    while($rowimages2 = mysql_fetch_array($result3)){
                                ?>
                                <a class="thumb-item-link"  data-slide-index="<?php echo $count;?>" href="">
                                	<img src="images/univ/<?php echo $rowimages2[2]?>" alt="img"/>
                                </a>
                                <?php
                                $count++;
                                 } ?>
                                 
                            </div>
                        </div>
                        <!--slider-->

                        <div class="section-content">
                            <div class="row ">
                            </div>
                            
                            <div class="faq-content">
            
                                <div class="panel-group faq-panel mt50">
                                    <h2 class="title-2 text-center"><strong>Details</strong></h2>
                                    
                                    
                                    
                                    <div id="accordion" class="panel-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#collapseB1" data-toggle="collapse">
                                                    <h4 class="panel-title"> Profile </h4>
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse in" id="collapseB1">
                                                <div class="panel-body">
                                                    <p><?php echo $row[10]?></p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#collapseB3" data-toggle="collapse">
                                                    <h4 class="panel-title"> Major Available </h4>
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseB3">
                                                <div class="panel-body" id="major">
														
                                                         <!--
                                                        <ul>
                                                        	<li>
                                                            	<?php echo $rowmajor[2]  ?> : <?php echo $rowmajor[3]  ?>
                                                            </li>
                                                        </ul>
                                                        -->
                                                        
                                                        
                                                        <table class="col-sm-12 col-xs-12 table-bordered">
                                                        	<tr>
                                                            	<th class="col-sm-9 text-center">Major</th>
                                                                <td class="col-sm-3 text-center"><strong>Avg Fee</strong></td>
                                                            </tr>
                                                        <?php 
                                                        while($rowmajor = mysql_fetch_array($result4)){
                                                         ?>
                                                        	<tr>
                                                            	<th class="col-sm-9"><?php echo $rowmajor[2]  ?></th>
                                                                <td class="col-sm-3">Rp. <?php echo $rowmajor[3]  ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        </table>
                                                        
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#collapseB2" data-toggle="collapse">
                                                    <h4 class="panel-title"> Requirement </h4>
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseB2">
                                                <div class="panel-body" id="requirement">
                                                    <?php echo $row[8]?>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#collapseB4" data-toggle="collapse">
                                                    <h4 class="panel-title"> Facility </h4>
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseB4">
                                                <div class="panel-body" id="facility">
                                                	<?php echo $row[6]?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#collapseB7" data-toggle="collapse">
                                                    <h4 class="panel-title"> Achievement </h4>
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseB7">
                                                <div class="panel-body" id="achievement">
                                                	<?php echo $row[9]?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#collapseB5" data-toggle="collapse">
                                                    <h4 class="panel-title"> Fun Fact </h4>
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseB5">
                                                <div class="panel-body" id="fact">
                                                    <?php echo $row[7]?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a href="#collapseB6" data-toggle="collapse">
                                                    <h4 class="panel-title"> Location </h4>
                                                </a>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseB6">
                                                <div class="panel-body">
                                                    <?php echo $row[3]?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <!--/.accordion-->
                                </div>
                                <!--/.panelgroup-->
                            </div>
                            <!--/.faqcontent-->
            			</div>
                        <!--/.sectioncontent-->
                    </div>
                    <!--/.innerbox-->
                    
                    
                    
                    
                    <div class="blog-post-footer">


                        <div style="clear: both"></div>


                        <div class="inner ">
                            <div class="blogs-comments-area">
                                <h3 class="list-title" style="text-transform:none;"><a class="post-comments" style="text-transform:none;"><?php echo $Countcom;?> Review</a></h3>
                            
                                <div class="blogs-comment-respond" id="respond">
                                    <ul class="blogs-comment-list">
                                    <?php
                                        while($rowrev = mysql_fetch_array($result5)){
                                        
                                    ?>
                                        <li>
                                            <div class="blogs-comment-wrapper">
                                                
                                                    <div class="">
                                                    <div class="blogs-comment-name">
                                                        <a href="#"><?php echo $rowrev[4]?></a>
                                                        <span class="blogs-comment-date"><?php echo $rowrev[5]?></span>
                                                    </div>
                                                    <div class="blogs-comment-description">
                                                        <p><?php echo $rowrev[3]?></p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        
                                        
                                        </li>
                                        <?php } ?>
                                        
                                        
                                    </ul>
                                    <!--Comment list End-->
                                
                                
                                    <h3 class="blogs-comment-reply-title list-title" style="text-transform:none;">Write Your Review</h3>
                                    
                                    <form action="mod/doaddreview.php" method="post" class="blogs-comment-form" id="blogs-commentform">
                                    
                                        <div class="form-group">
                                        <textarea class="form-control" placeholder="Review"
                                        name="Review"></textarea></div>

                                        <input type="hidden" name="UniversityId" value="<?php echo $row[0]?>">
                                    
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg"> Submit
                                        </button>
                                        
                                    </form>

                                  
                                
                                </div>
                                <!-- #respond -->
                            
                            
                        	</div>
                        </div>
                    </div>
                    <!--/.blogpostfooter-->
                    
                    </div>
                    <!--/.pagecontent-->
                    
                </div>
                <!--/.row-->
            </div>
            <!-- /.container -->
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


<!-- Modal Contact -->

<div class="modal fade" id="contactAdvertiser" tabindex.php="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title"><i class=" icon-mail-2"></i> Ask Us Anything ! </h4>
            </div>
            <div class="modal-body">
                <form action="mod/domassage.php" method="post" role="form">
                    
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message</label>
                        <textarea class="form-control" id="message-text" placeholder="Your message here..."
                                  data-placement="top" data-trigger="manual"></textarea>
                    </div>

                    <input type="hidden" name="UniversityId" value="<?php echo $UniversityId?>">
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary pull-right">Send message!</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- /.modal -->

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

<!-- bxSlider Javascript file -->
<script src="plugins/bxslider/jquery.bxslider.min.js"></script>
<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });


</script>
<!-- include form-validation plugin || add this script where you need validation   -->

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

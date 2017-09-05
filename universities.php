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
    <title>BOOTCLASIFIED - Responsive Classified Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/addition.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    

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
                            </span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu user-menu">
                                <li><a href="profile.php"><i class="fa fa-home fa-fw"></i> Profile</a></li>
                                <li><a href="dashboard.php"><i class="fa fa-line-chart fa-fw"></i> Dashboard</a></li>
                                <li><a href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships</a></li>
                                <li class="active"><a href="universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
                                <li><a href="setting.php"><i class="fa fa-cog fa-fw"></i> Setting</a></li>
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
                                    <li><a class="active" href="universities.php"><i class="fa fa-university fa-fw"></i> Universities </a></li>
                                    <li><a class="" href="setting.php"><i class="fa fa-cog fa-fw"></i> Setting </a></li>
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
                            	<?php 
                                    echo $_SESSION['Firstname' ];
                                ?>
                            </h3>
                        </div>			
                        <form action="mod/dosearchuniversities.php" method="post">
                        <div  class="col-sm-12">
                        <div class="col-sm-5">
                            
                                <input type="text" name="UCountry" id="autocomplete-ajax"
                                   class="form-control"
                                   placeholder="Search for Country" value="" autofocus>
                                
                                
                                <!--
                                <div class="multi-check radio">
                                    <a href="#" class="w100 btn search-univ trigger">By Country <i class="fa fa-caret-down fa-fw"></i></a>
                                    
                                    <div class="w100 dropdown-form">
                                        <label class="display-block" for="Country">
                                            <input type="checkbox" name="Country[]" id="Country" value="Indonesia"/>
                                            <span>Indonesia</span>
                                        </label>
                                        
                                        <label class="display-block" for="Country2">
                                            <input type="checkbox" name="Country[]" id="Country2" value="Singapore"/>
                                            <span>Singapore</span>
                                        </label>
                                    </div>
                                </div>
                                -->
                            </div>
                            
                            <div class="col-sm-5">

                            
                            	<input type="text" name="UMajor" class="form-control" id="autocomplete-ajax2" 
                                   placeholder="Search for Major" value="">
                            
                            </div>

                            <div class="col-sm-2">
                                <button class="btn btn-primary w100" type="submit" name="submit"><i class="fa fa-search fa-fw p3"></i></button>
                            </div>
                        </div></form>
                        
                        
                        
                        
                        
                        
                        
                        
                                               
                        <!--/.row-box End-->

                    </div>
                    <div class="inner-box">
                    	<!--Search Result-->
                        <div class="col-sm-12">

                        <?php
                        error_reporting(0);
                        // $UCountry = 'Singapore';
                        // $UMajor = 'High School Freshman';

                        $start =0;
                            $limit = 6;
                            $Id=$_GET['Id'];

                            if(isset($_GET['Id']))
                            {
                            $Id=$_GET['Id'];
                            $start=($Id-1)*$limit;
                            }

                        $UCountry = $_GET['UCountry'];
                        $UMajor = $_GET['UMajor'];

                        if(isset($UCountry) & isset($UMajor) ){
                            $result1 = executeQuery("select * from msuniversity join universitymajor on msuniversity.UniversityId=universitymajor.UniversityId where msuniversity.UCountry='".$UCountry."' and universitymajor.UMajor='".$UMajor."' limit $start,$limit");
                        }elseif(isset($UCountry) & !isset($UMajor)){
                            $result1 = executeQuery("select * from msuniversity where msuniversity.UCountry='".$UCountry."' limit $start,$limit");
                        }elseif(!isset($UCountry) & isset($UMajor)){
                            $result1 = executeQuery("select * from msuniversity join universitymajor on msuniversity.UniversityId=universitymajor.UniversityId where universitymajor.UMajor='".$UMajor."' limit $start,$limit");
                        }else{  
                            $result1 = executeQuery("select * from msuniversity limit $start,$limit ");
                        }

                         $result3 =executeQuery("select * from msuniversity");
                             $countp = mysql_num_rows($result3);
                             $total=ceil($countp/$limit);

                        // $result1 = executeQuery("select * from msuniversity join universitymajor on msuniversity.UniversityId=universitymajor.UniversityId where msuniversity.UCountry='".$UCountry."' and universitymajor.UMajor='".$UMajor."'");

                        
                        
                        

                        while($row = mysql_fetch_array($result1))
                        {
                            $result2 = executeQuery("select * from universitymajor where UniversityId = '".$row[0]."'");
                            $count2 = 0;
                            $fund = 0;
                            while($rowfund = mysql_fetch_array($result2)){
                                $fund += $rowfund[3];
                                 $count2++;
                            }
                            $fund = $fund / $count2 / 1000000;

                        ?>
                        	
                                <div class="univ-list col-sm-5">
                                	<a href="university-details.php?univid=<?php echo $row[0]?>" class="">
                                        <div>
                                            <div class="univ-logo" style="background-image:url(images/univ/logo/<?php echo $row[11]?>);">
                                            </div>
                                            
                                            <hr>
                                            
                                            <h3 class="mt5"><?php echo $row[1] ?></h3>
                                            <span><img src="ico/flags/flags/24/<?php echo $row[2] ?>.png" alt=""> <?php echo $row[2] ?></span>
                                            <hr>
                                            <span>Avg Tuition Fee: <br>
                                            <strong>Rp.</strong> <?php echo $fund ?> Jt</span>
                                        
                                        </div>
                                    </a>
                                </div>
                                <?php 

                                }
                                 ?>

                        </div>
                        <!--Search Result-->
                        
                        
                        
                        <div class="pagination-bar text-center">
                            <ul class="pagination">
                                <?php
                                if($Id>1){
                                ?>
                                
                                <li><a class="pagination-btn" href="Universities.php?Id=<?php echo ($Id-1);?>">&laquo; Prev </a></li>
                                
                                <?php  
                                }
                                ?>
                                <?php  
                                for($i=1;$i<=$total;$i++){
                                ?>
                                
                                <li><a href="Universities.php?Id=<?php echo $i;?>"><?php echo $i; ?></a></li> 
                                 
                                <?php  
                                }
                                ?>
                                
                                <?php 
                                if(!isset($_GET['Id'])){
                                $Id=1;
                                }
                                
                                if($Id!=$total){
                                
                                ?>
                                
                                <li><a class="pagination-btn" href="Universities.php?Id=<?php echo ($Id+1);?>">Next &raquo;</a></li>
                                
                                <?php  
                                }else{
                                ?>
                                
                                <li><a class="pagination-btn" href="Universities.php?Id=<?php echo ($total);?>">Next &raquo;</a></li>
                                
                                <?php
                                }
                                ?>
                                
                            </ul>
                        </div>
                        
                        
                        
                        
                    	
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

<!-- include jquery autocomplete plugin  -->

<script type="text/javascript" src="plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="plugins/autocomplete/countries.js"></script>
<script type="text/javascript" src="plugins/autocomplete/major.js"></script>

<script type="text/javascript" src="plugins/autocomplete/autocomplete-demo.js"></script>
<script type="text/javascript" src="plugins/autocomplete/autocomplete-major.js"></script>
</body>
</html>
<?php
}

?>
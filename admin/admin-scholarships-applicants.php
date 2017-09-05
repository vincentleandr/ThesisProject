<?php
include("mod/connect.php");
session_start();
if(!isset($_SESSION['Email']))
{
   header("Location:../login.php?anda harus login");
}
if($_SESSION['Role']=='Member')
{
    header("Location:../profile.php?msg=Anda tidak dapat mengakses halaman admin !");
}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <title>MyScholarships - Admin Scholarships</title>
    <link rel="icon" href="/ico/myscholarships.png">
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/addition.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    

    <!-- styles needed for carousel slider -->
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.css" rel="stylesheet">

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
    <script src="/js/pace.min.js"></script>
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
                    <a href="/index.php" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="fa fa-graduation-cap fa-fw"></i> </span>
                        My<span>Scholarships </span> </a>
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span><i class="fa fa-user fa-fw"></i>Admin </span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu user-menu">
                                <li class="active"><a href="admin-scholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> Scholarships</a></li>
                                <li><a href="admin-universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
                                <li><a href="admin-blog.php"><i class="fa fa-rss fa-fw"></i> Blog</a></li>
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
                                    <li><a class="active" href="admin-scholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> Scholarships </a></li>
                                    <li><a class="" href="admin-universities.php"><i class="fa fa-university fa-fw"></i> Universities </a></li>
                                    <li><a class="" href="admin-blog.php"><i class="fa fa-rss fa-fw"></i> Blog </a></li>
                                </ul>
                                <!-- /.collapse-box  -->
                            </div>
                        </div>
                        <!-- /.inner-box  -->

                    </aside>
                </div>
                <!--/.page-sidebar-->

                <?php

                $applicantid=$_GET['applicantid'];
                $result4 = executeQuery("select STitle from msscholarship where ScholarshipId = '".$applicantid."'");
                $rown = mysql_fetch_array($result4);

                ?>
                

                <div class="col-sm-9 page-content">
                    <div class="inner-box">
                        <div class="welcome-msg">
                            <h3 class="page-sub-header2 clearfix no-padding mb20">Scholarships : <?php echo $rown['STitle']?></h3>
                            
                        </div>
                        
                        <!--Search-->
                        <div class="welcome-msg">
                        
                        	<ul class="">
                            	<li class="">
                                	<form action="mod/dosearch.php" method="post">
                                        <div class="search-icon"><button type="submit"><i class="fa fa-search fa-fw"></i></button>
                                            <input name="searchkey" class="search form-control" type="text" placeholder="Search..." autofocus>
                                            <input type="hidden" name="searchtype" value="4">
                                            <input type="hidden" name="applicantid" value="<?php echo $applicantid?>">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            
                            <hr>
                            
                        </div>
                        <!--Search-->
                        

                        <?php 
                        error_reporting(0);

                            

                            $start =0;
                            $limit = 10;
                            $Id=$_GET['Id'];

                            if(isset($_GET['Id']))
                            {
                            $Id=$_GET['Id'];
                            $start=($Id-1)*$limit;
                            }

                            $result1 = executeQuery("select * from trscholarship join msuser on trscholarship.UserId = msuser.UserId where ScholarshipId='".$applicantid."' order by ScholarshipId desc limit $start,$limit");

                            $result3 =executeQuery("select * from trscholarship join msuser on trscholarship.UserId = msuser.UserId where ScholarshipId='".$applicantid."'");
                            $countp = mysql_num_rows($result3);
                            $total=ceil($countp/$limit);
                            $count = mysql_num_rows($result1);
                            $collapse = 1;
                            
                            $pagar = '#';
							$popup = 'popup';

                             

                            $searchkey = $_GET['searchkey'];

                            if(isset($searchkey)){
                            $result2 = executeQuery("select * from trscholarship join msuser on trscholarship.UserId = msuser.UserId where Firstname like '%".$searchkey."%' and ScholarshipId='".$applicantid."' limit $start,$limit");
                        }
							$counts = mysql_num_rows($result2);
                            $totals = ceil($counts/$limit);



                            if(mysql_num_rows($result2))
                            {

                                while($row = mysql_fetch_array($result2)){

                         ?>
                         
                         
                        
                        <!--Tampilan Awal-->
                        <div id="accordion" class="panel-group" style="margin:0;">
                            <div class="panel panel-default">
                                <div class="panel-heading-sm">
                                    <a href="<?php echo $pagar; echo $collapse;?>" data-toggle="collapse">
                                    	<h4 class="panel-title col-sm-9 col-xs-9 col-xxs-6"><?php echo $row['Firstname'] ?></h4>
                                    </a>

                                    <a class="btn-primary btn-admin" href="mod/doapprove.php?UserId=<?php echo $row['UserId']?>&applicantid=<?php echo $applicantid?>"><i class="fa fa-check fa-fw"></i></a>
                                    
                                    <a class="btn-primary btn-admin" href="<?php  echo $pagar; echo $popup; echo $collapse;?>"><i class="fa fa-trash fa-fw"></i></a>
                                    
                                    <?php
										if($row['Status']=='Pending'){?>

											<span style="color:#DCB100"><?php echo $row['Status']?></span>

											<?php
										}else{?>

											<span style="color:#00A34F"><?php echo $row['Status']?></span>

										<?php
										}
									?>
                                    
                                    <div id="<?php echo $popup; echo $collapse;?>" class="overlay">
                                        <div class="popup">
                                            <h2>Are you sure?</h2>
                                            <a class="close" href="">&times;</a>
                                            <div class="content">

                                                <a class="btn btn-primary" href="mod/dodeletescholarship.php?namedelete=<?php echo $row[0] ?>">
                                                    <i class="fa fa-check fa-fw" style="color:#57E09A"></i> Yes
                                                </a>
                                                
                                                <a href="" class="btn btn-primary">
                                                    <i class="fa fa-times fa-fw" style="color:#FF5D5D"></i> No
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               <div class="panel-collapse collapse" id="<?php echo $collapse;?>">
                                    <div class="panel-body">
                                        Steven is a fucking idiot !
                                    </div>
                               </div>
                            </div>
                            <!--Tampilan Awal-->
                        </div>
                    	<!--/.accordion-->
                            

                            <?php
								$collapse++;
	
								}
								}else{
								while($row = mysql_fetch_array($result1)){
                            ?>

						<!--Search Result-->
						<div id="accordion" class="panel-group" style="margin:0;">
                            <div class="panel panel-default">
                                <div class="panel-heading-sm">
                                    <a href="<?php echo $pagar; echo $collapse;?>" data-toggle="collapse">
                                        <h4 class="panel-title col-sm-9 col-xs-9 col-xxs-6"><?php echo $row['Firstname'] ?></h4>
                                    </a>
                                    
                                  	<a class="btn-primary btn-admin" href="mod/doapprove.php?UserId=<?php echo $row['UserId']?>&applicantid=<?php echo $applicantid?>"><i class="fa fa-check fa-fw"></i></a>
                                    
                                    <a class="btn-primary btn-admin" href="<?php  echo $pagar; echo $popup; echo $collapse;?>"><i class="fa fa-trash fa-fw"></i></a>
                                    
                                     <?php
										if($row['Status']=='Pending'){?>

											<span style="color:#DCB100"><?php echo $row['Status']?></span>

											<?php
										}else{?>

											<span style="color:#00A34F"><?php echo $row['Status']?></span>

										<?php
										}
									?>
                                    
                                    <div id="<?php echo $popup; echo $collapse;?>" class="overlay">
                                        <div class="popup">
                                            <h2>Are you sure?</h2>
                                            <a class="close" href="">&times;</a>
                                            
                                            <div class="content">
                                            
                                            	<a class="btn btn-primary" href="mod/dodeletescholarship.php?namedelete=<?php echo $row[0] ?>">
                                                    <i class="fa fa-check fa-fw" style="color:#57E09A"></i> Yes
                                                </a>
                                                
                                                <a class="btn btn-primary" href="">
                                                    <i class="fa fa-times fa-fw" style="color:#FF5D5D"></i> No
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               <div class="panel-collapse collapse" id="<?php echo $collapse;?>">
                                    <div class="panel-body">
                                        <table>
                                        	<tr>
                                            	<th class="col-sm-2">Email </th>
                                                <td> : </td>
                                                <td><?php echo $row['Email'] ?></td>
                                            </tr>
                                            <tr>
                                            	<th class="col-sm-2">Location </th>
                                                <td> : </td>
                                                <td><?php echo $row['Location'] ?></td>
                                            </tr>
                                        </table>
                                        
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!--Search Result-->
							
                            <?php
                            $collapse++;

                            }
                        }
                                
                                // }
                            ?>
                            
                            
                            
                            <?php
                                if(!isset($searchkey)){
                            ?>

                            <div class="pagination-bar text-center">
                                <ul class="pagination">
                                <?php
                                    if($Id>1){
                                ?>
                                 <li><a class="pagination-btn" href="admin-scholarships-applicants.php?Id=<?php echo ($Id-1);?>">&laquo; Prev </a></li>
                                 <?php  
                                    }
                                  ?>
                                  <?php  
                                    for($i=1;$i<=$total;$i++){
                                   ?>
                                    <li><a href="admin-scholarships-applicants.php?Id=<?php echo $i;?>"><?php echo $i; ?></a></li>  
                                    <?php  
                                        }
                                     ?>

                                    <?php 
                                    if(!isset($_GET['Id'])){
                                                $Id=1;
                                            }
                                    
                                        if($Id!=$total){
                                            
                                     ?>
                                    <li><a class="pagination-btn" href="admin-scholarships-applicants.php?Id=<?php echo ($Id+1);?>">Next &raquo;</a></li>

                                    <?php  
                                        }else{
                                     ?>
                                      <li><a class="pagination-btn" href="admin-scholarships-applicants.php?Id=<?php echo ($total);?>">Next &raquo;</a></li>
                                      <?php
                                  }
                                      ?>
                                </ul>
                            </div>
                            <?php }else{ ?>
                            <div class="pagination-bar text-center">
                                <ul class="pagination">
                                <?php
                                    if($Id>1){
                                ?>
                                 <li><a class="pagination-btn" href="admin-scholarships-applicants.php?Id=<?php echo ($Id-1);?>">&laquo; Prev </a></li>
                                 <?php  
                                    }
                                  ?>
                                  <?php  
                                    for($i=1;$i<=$totals;$i++){
                                   ?>
                                    <li><a href="admin-scholarships-applicants.php?Id=<?php echo $i;?>"><?php echo $i; ?></a></li>  
                                    <?php  
                                        }
                                     ?>

                                    <?php 
                                    if(!isset($_GET['Id'])){
                                                $Id=1;
                                            }
                                    
                                        if($Id!=$totals){
                                            
                                     ?>
                                    <li><a class="pagination-btn" href="admin-scholarships-applicants.php?Id=<?php echo ($Id+1);?>">Next &raquo;</a></li>

                                    <?php  
                                        }else{
                                     ?>
                                      <li><a class="pagination-btn" href="admin-scholarships-applicants.php?Id=<?php echo ($totals);?>&searchkey=<?php echo $searchkey;?>">Next &raquo;</a></li>

                                      <?php
                                  }
                                      ?>
                                </ul>
                            </div>
                            <?php } ?>
                            
                            
                            
                            
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





<script src="/bootstrap/js/bootstrap.min.js"></script>

<!-- include carousel slider plugin  -->
<script src="/js/owl.carousel.min.js"></script>


<!-- include equal height plugin  -->
<script src="/js/jquery.matchHeight-min.js"></script>

<!-- include jquery list shorting plugin plugin  -->
<script src="/js/hideMaxListItem.js"></script>

<!-- include jquery.fs plugin for custom scroller and selecter  -->
<script src="/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<!-- include custom script for site  -->
<script src="/js/script.js"></script>
</body>
</html>

<?php
}

?>

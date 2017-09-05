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
    <title>MyScholarships - MyScholarships</title>
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
                                <li class="active"><a href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships</a></li>
                                <li><a href="universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
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
                                    <li><a class="active" href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships </a></li>
                                    <li><a class="" href="universities.php"><i class="fa fa-university fa-fw"></i> Universities </a></li>
                                    <li><a class="" href="setting.php"><i class="fa fa-cog fa-fw"></i> Setting </a></li>
                                </ul>
                                <!-- /.collapse-box  -->
                            </div>
                        </div>
                        <!-- /.inner-box  -->

                    </aside>
                </div>
                <!--/.page-sidebar-->
                
                <?php
					error_reporting(0);
                	$msg = $_GET['msg'];
				?>

                <div class="col-sm-9 page-content">
                    <div class="inner-box">
                        <div class="welcome-msg">
                            <h3 class="page-sub-header2 clearfix no-padding">
                            	<?php 
                                    echo $_SESSION['Firstname' ];
                                ?>
                            </h3>
                            <br>
                            <div>
                            	<span style="color:#00BB5B;"><?php echo $msg;?></span>
                            </div>
                            
                            <?php
                                error_reporting(0);
                                $UserId = $_SESSION['UserId'];
                                $result1 = executeQuery("select * from msuser where UserId = '".$UserId."' ");
                                $row=mysql_fetch_array($result1);
                                $Gender = $row[4];
                                $Location = $row[5];
                                $GPA = $row[6];
                                $Religion = $row[7];
                                $Grade = $row[11];

                                $start =0;
                                $limit = 10;
                                $Id=$_GET['Id'];

                                if(isset($_GET['Id']))
                                {
                                $Id=$_GET['Id'];
                                $start=($Id-1)*$limit;
                                }

                                $result2 = executeQuery("select distinct msscholarship.ScholarshipId,STitle,SDescription,SFund,SStart,SDeadline,SWebsite,SEmail from msscholarship join scholarshiprace on msscholarship.ScholarshipId = scholarshiprace.ScholarshipId and SRace in (select Race from userrace where UserId = '".$UserId."') 
                                    join scholarshipmajor on msscholarship.ScholarshipId = scholarshipmajor.ScholarshipId and SMajor in (select Major from usermajor where UserId = '".$UserId."') 
                                    join scholarshiptype on msscholarship.ScholarshipId = scholarshiptype.ScholarshipId and SType in (select Type from usertype where UserId = '".$UserId."')
                                    left join trscholarship on msscholarship.ScholarshipId = trscholarship.ScholarshipId and UserId = '".$UserId."' where SGender = case when SGender = 0 then SGender else  '".$Gender."' end and SLocation = case when SLocation = 'No Requirements' then SLocation else '".$Location."' end and SGrade = case when SGrade = 'No Requirements' then SGrade else '".$Grade."' end and SGPA <= '".$GPA."' and SReligion = case when SReligion = 'No Requirements' then SReligion else '".$Religion."' end and trscholarship.ScholarshipId is null limit $start,$limit");
									
									
								$result3 = executeQuery("select distinct msscholarship.ScholarshipId,STitle,SDescription,SFund,SStart,SDeadline,SWebsite,SEmail from msscholarship join scholarshiprace on msscholarship.ScholarshipId = scholarshiprace.ScholarshipId and SRace in (select Race from userrace where UserId = '".$UserId."') 
                                    join scholarshipmajor on msscholarship.ScholarshipId = scholarshipmajor.ScholarshipId and SMajor in (select Major from usermajor where UserId = '".$UserId."') 
                                    join scholarshiptype on msscholarship.ScholarshipId = scholarshiptype.ScholarshipId and SType in (select Type from usertype where UserId = '".$UserId."')
                                    left join trscholarship on msscholarship.ScholarshipId = trscholarship.ScholarshipId and UserId = '".$UserId."' where SGender = case when SGender = 0 then SGender else  '".$Gender."' end and SLocation = case when SLocation = 'No Requirements' then SLocation else '".$Location."' end and SGrade = case when SGrade = 'No Requirements' then SGrade else '".$Grade."' end and SGPA <= '".$GPA."' and SReligion = case when SReligion = 'No Requirements' then SReligion else '".$Religion."' end and trscholarship.ScholarshipId is null");
									
									
									
                                $countp = mysql_num_rows($result3);
                                $total=ceil($countp/$limit);
                                $count = mysql_num_rows($result3);
                                $collapse = 1;
                                $pagar = '#';
                                $popup = 'popup';


                            ?>
                        </div>
                        
                        <div id="accordion" class="panel-group">

                        <?php 
                            while($rowg = mysql_fetch_array($result2)){ 
                                $roundsfund = $rowg['SFund'] / 1000000;
                        ?>

                            <div class="panel panel-default">
                            
                                <div class="panel-heading-sm">
                                    <a href="<?php  echo $pagar; echo $popup; echo $collapse;?>" data-toggle="collapse">
                                    	<h4 class="panel-title col-sm-10 col-xs-10 col-xxs-8 p3 pl10"> <?php echo $rowg['STitle'] ?> </h4>
                                    </a>
                                    
                                    <form action="mod/doapplied.php" method="post" >
                                        <button class="btn-xs">Apply</button>
                                        <input type="hidden" name="sid" value="<?php echo $rowg[0]?>">
                                    </form>
                                </div>
                                
                                <div class="panel-collapse collapse" id="<?php echo $popup; echo $collapse;?>">
                                    <div class="panel-body">
                                        <?php echo $rowg[2] ?> <br><br>
                                        
                                        <table>
                                        	<tr>
                                            	<th class="col-sm-2">Fund </th>
                                                <td> : </td>
                                                <td> Rp. <?php echo $roundsfund ?> Jt</td>
                                            </tr>
                                            <tr>
                                            	<th class="col-sm-2">Start Date </th>
                                                <td> : </td>
                                                <td> <?php echo $rowg['SStart'] ?></td>
                                            </tr>
                                            <tr>
                                            	<th class="col-sm-2">Deadline </th>
                                                <td> : </td>
                                                <td> <?php echo $rowg['SDeadline'] ?></td>
                                            </tr>
                                            <tr>
                                            	<th class="col-sm-2">Website </th>
                                                <td> : </td>
                                                <td> <a href="<?php echo $rowg['SWebsite'] ?>" target="_blank"><?php echo $rowg['SWebsite'] ?></a></td>
                                            </tr><tr>
                                            	<th class="col-sm-2">Email </th>
                                                <td> : </td>
                                                <td> <?php echo $rowg['SEmail'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                

                            </div>
                            <?php $collapse++; } ?>
                           
                        </div>

                         <div class="pagination-bar text-center">
                                <ul class="pagination">
                                <?php
                                    if($Id>1){
                                ?>
                                 <li><a class="pagination-btn" href="myscholarships.php?Id=<?php echo ($Id-1);?>">&laquo; Prev </a></li>
                                 <?php  
                                    }
                                  ?>
                                  <?php  
                                    for($i=1;$i<=$total;$i++){
                                   ?>
                                    <li><a href="myscholarships.php?Id=<?php echo $i;?>"><?php echo $i; ?></a></li>  
                                    <?php  
                                        }
                                     ?>

                                    <?php 
                                    if(!isset($_GET['Id'])){
                                                $Id=1;
                                            }
                                    
                                        if($Id!=$total){
                                            
                                     ?>
                                    <li><a class="pagination-btn" href="myscholarships.php?Id=<?php echo ($Id+1);?>">Next &raquo;</a></li>

                                    <?php  
                                        }else{
                                     ?>
                                      <li><a class="pagination-btn" href="myscholarships.php?Id=<?php echo ($total);?>">Next &raquo;</a></li>
                                      <?php
                                  }
                                      ?>
                                </ul>
                            </div>
                        
                        
                        
                                               
                        <!--/.row-box End-->

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
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

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
</body>
</html>
<?php
}

?>
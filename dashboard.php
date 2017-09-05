<?php
include("mod/connect.php");
session_start();
error_reporting(0);
$UserId=$_SESSION['UserId'];

$result2 = executeQuery("select * from trscholarship where UserId = '".$UserId."'");
$rowg = mysql_num_rows($result2);

 $start =0;
 $limit = 5;
 $Id=$_GET['Id'];

                                if(isset($_GET['Id']))
                                {
                                $Id=$_GET['Id'];
                                $start=($Id-1)*$limit;
                                }

$countp = mysql_num_rows($result2);
                             $total=ceil($countp/$limit); 
                            $collapse = 1;
                            
                            $pagar = '#';
                            $popup = 'popup';


if(empty($rowg)){
    header("Location:dashboard-empty.php");
}else{

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
    <title>MyScholarships - Dashboard</title>
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
    
    <script src="js/calendar.js"></script>

    
    
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
                                <li class="active"><a href="dashboard.php"><i class="fa fa-line-chart fa-fw"></i> Dashboard</a></li>
                                <li><a href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships</a></li>
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
                                    <li><a class="active" href="dashboard.php"><i class="fa fa-line-chart fa-fw"></i> Dashboard </a></li>
                                    <li><a class="" href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships </a></li>
                                    <li><a class="" href="universities.php"><i class="fa fa-university fa-fw"></i> Universities </a></li>
                                    <li><a class="" href="setting.php"><i class="fa fa-cog fa-fw"></i> Setting </a></li>
                                </ul>
                                <!-- /.collapse-box  -->
                            </div>
                        </div>
                        <!-- /.inner-box  -->

                        <?php 
                                       

                                        $result3 = executeQuery("select * from trscholarship join msscholarship on trscholarship.ScholarshipId = msscholarship.ScholarshipId where UserId = '".$UserId."' order by SStart");
                                        
                                        while($rowf = mysql_fetch_array($result3)){
                                            $SFund += $rowf['SFund'];
                                        }

                                        $result4 = executeQuery("select * from trscholarship join msscholarship on trscholarship.ScholarshipId = msscholarship.ScholarshipId where UserId = '".$UserId."' and Status = 'Approved' order by SStart");

                                        while($rowf = mysql_fetch_array($result4)){
                                            $approved += $rowf['SFund'];

                                        }
                                        $SFund = $SFund / 1000000;
                                        $approved = $approved / 1000000;



                                     ?>
                        
                        <div class="inner-box">
                            <div class="user-panel-sidebar">
                                <ul>
                                	<li>
                                    	<h4>Won : <!--TOTAL YANG SUDAH DI APPROVE--></h4>
                                        <?php 
                                            if(empty($approved)){
                                        ?>
                                        <span class="text-bold">Rp. </span> 0
                                        <?php }else{?>
                                        
                                        <span class="text-bold">Rp. </span> <?php echo $approved; ?> Jt
                                        <?php }?>
                                    </li>
                                    <hr>
                                    <li>
                                    	<h4>Potential : <!--TOTAL YANG DI APPLY--></h4>
                                        <span class="text-bold">Rp. </span> <?php echo $SFund; ?> Jt
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.inner-box  -->
                        
                        <!-- <div class="inner-box">
                            <div class="user-panel-sidebar">
                                <ul>
                                	<li>
                                    	<h4>Your Dream University :</h4>
                                        
                                        <table>
                                        	<tr>
                                                <th>
                                                	Bina Nusantara University
                                                </th>
                                            </tr>
                                            <tr>
                                            	<th>Avg Fee :</th>
                                                <td><strong>Rp. </strong>80 Jt</td>
                                            </tr>
                                            <tr>
                                            	<th>You Need :</th>
                                                <td><strong>Rp. </strong>50 Jt</td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <table>
                                        	<tr>
                                                <th>
                                                	University of Pelita Harapan
                                                </th>
                                            </tr>
                                            <tr>
                                            	<th>Avg Fee :</th>
                                                <td><strong>Rp. </strong>200 Jt</td>
                                            </tr>
                                            <tr>
                                            	<th>You Need :</th>
                                                <td><strong>Rp. </strong>150 Jt</td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
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
                                    echo $_SESSION['Firstname'];
                                ?>
                            </h3>
                            <br>
                            <div>
                            	<span style="color:#00BB5B;"><?php echo $msg;?></span>
                            </div>
                        </div>
                        <div id="accordion" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a href="#collapseB1" data-toggle="collapse">
                                    	<h4 class="panel-title"> Schedule </h4>
                                    </a>
                                </div>
                                <div class="panel-collapse collapse in" id="collapseB1">
                                    <div class="panel-body">
                                    
                                  
                                        
                                        
                                    
                                    
                                        <!--	CALENDAR 2 -->
                                        <div class="responsive-calendar">
                                            <div class="controls">
                                                <a class="pull-left" data-go="prev"><div class="btn"><i class="icon-chevron icon-chevron-rotate"></i></div></a>
                                                <h4>
                                                	<span data-head-year></span>
                                                    <span data-head-month></span>
                                                </h4>
                                                <a class="pull-right" data-go="next"><div class="btn"><i class="icon-chevron"></i></div></a>
                                            </div><hr/>
                                            <div class="day-headers">
                                                <div class="day header">Mon</div>
                                                <div class="day header">Tue</div>
                                                <div class="day header">Wed</div>
                                                <div class="day header">Thu</div>
                                                <div class="day header">Fri</div>
                                                <div class="day header">Sat</div>
                                                <div class="day header">Sun</div>
                                            </div>
                                            <div class="days" data-group="days">
                                            
                                            
                                            </div>
                                        </div>
                                        
                                        <div class="responsive-calendar-placeholder">
                                        	
                                        </div>
                                        <!--	CALENDAR 2-->
                                    
                                    
                                    
                                    </div>
                                      <?php 
                                       

                                        $result1 = executeQuery("select * from trscholarship join msscholarship on trscholarship.ScholarshipId = msscholarship.ScholarshipId where UserId = '".$UserId."' order by SStart");
                                        
                                     
                                     ?>
                                    
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a href="#collapseB2" data-toggle="collapse">
                                    	<h4 class="panel-title"> Applied Scholarships </h4>
                                    </a>
                                </div>
                                
                                <div class="panel-collapse collapse in" id="collapseB2">
                                    <div class="panel-body">
                                        <div id="accordion" class="panel-group">
                                        <?php
                                    		while($row= mysql_fetch_array($result1)){
                                                $roundsfund = $row['SFund'] / 1000000;

                                		?>
                                        
                                            <div class="panel panel-default">
                                                <div class="panel-heading-sm">
                                                    <a href="<?php echo $pagar; echo $popup; echo $collapse;?>" data-toggle="collapse">
                                                        <h4 class="panel-title col-md-9 col-sm-8 col-xs-8 col-xxs-6 p3 pl10"> <?php echo $row['STitle']; ?> </h4>
                                                    </a>
                                                
                                                 
                                                    <div class="tanggal" style="display:none;"><?php echo $row['SStart'] ?></div>
                                                    <div class="deadline" style="display:none;"><?php echo $row['SDeadline'] ?></div>
                                                    <div class="announcement" style="display:none;"><?php echo $row['SAnnouncement'] ?></div>
    
    
                                                    <form action="mod/dodeleteapplied.php" method="post">
                                                        
                                                        <button class="btn-xs">Remove</button>
                                                        <input type="hidden" name="scid" value="<?php echo $row['ScholarshipId']?>">
                                                        
                                                        <!--
                                                        <span style="color:#DCB100">Pending</span>
                                                        -->
                                                        <!--
                                                        <span style="color:#007FDB">Submitted</span>
                                                        -->
                                                        <?php
                                                            if($row['Status']=='Pending'){?>

                                                                <span style="color:#DCB100"><?php echo $row['Status']?></span>

                                                                <?php
                                                            }else{?>

                                                                <span style="color:#00A34F"><?php echo $row['Status']?></span>

                                                            <?php
                                                            }
                                                        ?>
                                                        
                                                    </form>

                                                    
                                                </div>
                                                
                                                <div class="panel-collapse collapse" id="<?php echo $popup; echo $collapse;?>">
                                                    <div class="panel-body">
                                                        
                                        
                                                        <table>
                                                            <tr>
                                                                <th class="col-sm-2">Fund </th>
                                                                <td> : </td>
                                                                <td> Rp. <?php echo $roundsfund ;?> Jt</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-sm-2">Start Date </th>
                                                                <td> : </td>
                                                                <td> <?php echo $row['SStart'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-sm-2">Deadline </th>
                                                                <td> : </td>
                                                                <td> <?php echo $row['SDeadline'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="col-sm-2">Website </th>
                                                                <td> : </td>
                                                                <td> <a href="<?php echo $row['SWebsite'] ?>" target="_blank"><?php echo $row['SWebsite'] ?></a></td>
                                                            </tr><tr>
                                                                <th class="col-sm-2">Email </th>
                                                                <td> : </td>
                                                                <td> <?php echo $row['SEmail'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

										<?php 
                                        $SFund = $SFund + $row['SFund'];
                                        $collapse++;
                                        } ?>

                                        </div>
                                        <div class="pagination-bar text-center">
                                <ul class="pagination">
                                <?php
                                    if($Id>1){
                                ?>
                                 <li><a class="pagination-btn" href="dashboard.php?Id=<?php echo ($Id-1);?>">&laquo; Prev </a></li>
                                 <?php  
                                    }
                                  ?>
                                  <?php  
                                    for($i=1;$i<=$total;$i++){
                                   ?>
                                    <li><a href="dashboard.php?Id=<?php echo $i;?>"><?php echo $i; ?></a></li>  
                                    <?php  
                                        }
                                     ?>

                                    <?php 
                                    if(!isset($_GET['Id'])){
                                                $Id=1;
                                            }
                                    
                                        if($Id!=$total){
                                            
                                     ?>
                                    <li><a class="pagination-btn" href="dashboard.php?Id=<?php echo ($Id+1);?>">Next &raquo;</a></li>

                                    <?php  
                                        }else{
                                     ?>
                                      <li><a class="pagination-btn" href="dashboard.php?Id=<?php echo ($total);?>">Next &raquo;</a></li>
                                      <?php
                                  }
                                      ?>
                                </ul>
                            </div>
                                        
                                    </div>
                                </div>
                                

                            </div>
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
/*
TO-DO list
User stories:
1. I can add new task+
2. I can delete task+
3. I can click on done task & it changes tab to "Done"+
4. I can check my done tasks & restore some of them to main view+
5. I can set & change priority of task +/-
6. I can add tags to task
7. I can list all tasks by tag name
8. I can sort list by priority or creation date
9. I can delete all tasks in Done tab with one click
10. I can edit tasks

animations:
https://cssanimation.rocks/list-items/
*/
$(document).ready(function() {
  // var $todoContainer = $('#to-do-wrapper');
  // var $addForm = $('#add-form');
  // var $taskInput = $addForm.find('#add-task');
  // var $todoList = $('#to-do-list');
  // var fadeSpeed = 300;
  
  // function addItem() {
  //   if ($taskInput.val()) {
  //     var $doneBtn = $('<button class="done-item"><i class="fa fa-check"></i></button>');
  //     var $editBtn = $('<button class="edit-item"><i class="fa fa-pencil"></i></button>');
  //     var $removeBtn = $('<button class="remove-item"><i class="fa fa-remove"></i></button>');
  //     var $addedTime = $('<span class="added-time">' + (new Date()).toDateString() + '</span>');
  //     var $listItem = $('<li>' + $taskInput.val() +'</li>').addClass($choosePriorityBtn.attr('class')).removeClass('choose-priorety').hide();
  //     $listItem.append($removeBtn,$editBtn,$doneBtn,$addedTime);
  //     $todoList.append($listItem);
  //     $listItem.fadeIn(fadeSpeed);
  //     $taskInput.val("");
  //   }
  // }
  
  // function removeItem($item) {
  //   $item.fadeOut(fadeSpeed,function() {
  //     //alert($(this).height());
  //     //$(this).nextAll().animate({top: '-=' + $(this).height() + ''},fadeSpeed).css('top','0');
  //     $(this).remove();
  //   });
  // }
  
  // function doneItem($item) {
  //   var $restoreBtn = $('<button class="restore-item"><i class="fa fa-repeat"></i></button>');
  //   $item.fadeOut(fadeSpeed,function() {
  //     $item.appendTo($('#done-list')).find('.done-item').replaceWith($restoreBtn).end().show();;
  //   });
  // }
  
  // function restoreItem($item) {
  //   var $doneBtn = $('<button class="done-item"><i class="fa fa-check"></i></button>');
  //   $item.fadeOut(fadeSpeed,function() {
  //     $item.appendTo($('#to-do-list')).find('.restore-item').replaceWith($doneBtn).end().show();;
  //   });
  // }
  // function editItem($item) {
  //   var $editWrapper = $('<div class="edit-box" />');
  //   var $editForm = $('<form><input type="text" id="edit-task" name="edit-task" placeholder="' + $item.clone().find('.added-time').remove().end().text() + '" /></form>');
  //   $item.append($editWrapper.append($editForm));
  // }
  
  // $addForm.on('submit',function(e) {
  //   e.preventDefault();
  //   addItem();
  // });
  // $todoContainer.on('click','.remove-item',function() {
  //   var $removeItem = $(this).parent();
  //   removeItem($removeItem);
  // });
  // $todoContainer.on('click','.done-item',function() {
  //   var $doneItem = $(this).parent();
  //   doneItem($doneItem);
  // });
  // $todoContainer.on('click','.restore-item',function() {
  //   var $restoreItem = $(this).parent();
  //   restoreItem($restoreItem);
  // });
  // $todoContainer.on('click','.edit-item',function() {
  //   var $editItem = $(this).parent();
  //   editItem($editItem);
  // });
  
  
  // tabs
  // var $tabsContainer = $('#tabs');
  // var $tabs = $tabsContainer.find('.tab');
  // var $tabsContent = $('[id$="tab-content"]');
  // $tabsContent.not(':first').hide();
  // $tabs.on('click',function(e) {
  //   e.preventDefault();
  //   $tabs.removeClass('active').filter($(this)).addClass('active');
  //   var href = $(this).attr('href');
  //   $(href).show();
  //   $tabsContent.not($(href)).hide();
  // });
  
  
  //priorities btn
  // var $prioritiesContainer = $('.priorities');
  // var $prioritiesList = $prioritiesContainer.find('.priorities-list');
  // var $choosePriorityBtn = $prioritiesContainer.find('.choose-priorety');
  // var $prioritiesBtns = $prioritiesContainer.find('.priority button');
  
  // $choosePriorityBtn.on('click',function() {
  //   $prioritiesList.toggle();
  // });
  // $prioritiesBtns.on('click',function() {
  //   $choosePriorityBtn.removeClass('low medium high').addClass($(this).attr('class'));
  //   $prioritiesList.hide();
  // });
  

    var myevnts = "{";
	var before = "";
	var len = $(".tanggal").length;

    $(".tanggal").each(function(k,v){
		if(before == $(this).text()){
			myevnts += ',{ "title":"' + $(this).parent().find(".panel-title").text() + '","deadline":"' + $(this).parent().find(".deadline").text() + '","announcement":"' + $(this).parent().find(".announcement").text() + "<hr>" + '" }';
		}
		else {
			if(k != 0){
				myevnts += ']},';
			}
			
        	myevnts  += '"' + $(this).text() +'":{"dayEvents":[{ "title":"' + $(this).parent().find(".panel-title").text() + '","deadline":"' + $(this).parent().find(".deadline").text() + '","announcement":"' + $(this).parent().find(".announcement").text() + "<hr>" + '" }';
		}

		if (k == len - 1) {
              myevnts += ']},';
        }

		before = $(this).text();
    });

    myevnts = myevnts.substring(0, myevnts.length-1);

    myevnts += "}";
	
	console.log(myevnts);

    myevnts = JSON.parse(myevnts);
    
    function zero(num) {
        if (num < 10) { return "0" + num; }
        else { return "" + num; }
    }

    function fadeOutModalBox(num) {
        setTimeout(function(){ $(".responsive-calendar-modal").fadeOut(); }, num);
      }

    var $cal = $('.responsive-calendar');
    $cal.responsiveCalendar({
      events : myevnts,
       onActiveDayHover: function(events) {
        var $today, $dayEvents, $i, $isHoveredOver, $placeholder, $output;
        $i = $(this).data('year')+'-'+zero($(this).data('month'))+'-'+zero($(this).data('day'));
        $isHoveredOver = $(this).is(":hover");
        $placeholder = $(".responsive-calendar-placeholder");
        $today= events[$i];
        $dayEvents = $today.dayEvents;
        $output = '<div class="responsive-calendar-modal">';
        $.each($dayEvents, function() {
          $.each( $(this), function( key ){
            $output += '<h1>'+$(this)[key].title+'</h1><br><span>Deadline: '+$(this)[key].deadline+'</span><br><span>Announcement: '+$(this)[key].announcement+'</span>';
          });
        });
        $output + '</div>';
        
        if ( $isHoveredOver ) {
          $placeholder.html($output);
        }
        else {
          fadeOutModalBox(0); /* fade out animation timer */
        }
        
        }, /* end events */
    });

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    setTimeout(function(){
        $("a").filter(function(){ return $(this).attr("data-day") == dd && $(this).attr("data-month") == mm && $(this).attr("data-year") == yyyy;}).parent().css("background-color","red");
    },1);
	
	$(".btn").click(function(){
		 setTimeout(function(){
			$("a").filter(function(){ return $(this).attr("data-day") == dd && $(this).attr("data-month") == mm && $(this).attr("data-year") == yyyy;}).parent().css("background-color","red");
		},1000);
	});
    
});
//tabs plugin
/*
(function($) {
  $.fn.tabbedPanel = function(options) {
    var settings = $.extend({
      mainContainer: '',
    });
  }
}(jQuery));
*/
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
}}

?>
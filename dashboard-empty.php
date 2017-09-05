<?php
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
    
    
    <script src="js/calendar2.js"></script>
    
    
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
                        
                        <div class="inner-box">
                            <div class="user-panel-sidebar">
                                <ul>
                                	<li>
                                    	<h4>Won :</h4>
                                        <span class="text-bold">Rp. </span> 0
                                    </li>
                                    <hr>
                                    <li>
                                    	<h4>Potential :</h4>
                                        <span class="text-bold">Rp. </span> 0
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.inner-box  -->
                        
                        
                        <!-- /.inner-box  -->

                    </aside>
                </div>
                <!--/.page-sidebar-->

                <div class="col-sm-9 page-content">
                    <div class="inner-box">
                        <div class="welcome-msg">
                            <h3 class="page-sub-header2 clearfix no-padding">
								<?php 
                                    echo $_SESSION['Firstname'];
                                ?>
                            </h3>
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
                                    
                                    
                                    
                                    	<!--	CALENDAR 1
                                        <div id="calendar">
                                            <h1>December</h1>
                                            <table>
                                                <tr>
                                                    <td class="col-sm-2">Monday</td>
                                                    <td>Tuesday</td>
                                                    <td>Wednesday</td>
                                                    <td>Thursday</td>
                                                    <td>Friday</td>
                                                    <td>Saturday</td>
                                                    <td class="red">Sunday</td>
                                                </tr>
                                                <tr>
                                                    <td class="lastmonth">30</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td class="hastask event">4 <span class="eventtext">Event 1</span></td>
                                                    <td>5</td>
                                                    <td class="red">6</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td class="current">8</td>
                                                    <td class="hastask event">9 <span class="eventtext">Event 2</span></td>
                                                    <td>10</td>
                                                    <td>11</td>
                                                    <td class="hastask event">12 <span class="eventtext">Event 3</span></td>
                                                    <td class="red">13</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td class="hastask event">15 <span class="eventtext">Event 4</span></td>
                                                    <td>16</td>
                                                    <td>17</td>
                                                    <td>18</td>
                                                    <td>19</td>
                                                    <td class="red">20</td>
                                                </tr>
                                                <tr>
                                                    <td class="hastask event">21 <span class="eventtext">Event 5</span></td>
                                                    <td>22</td>
                                                    <td>23</td>
                                                    <td>24</td>
                                                    <td class="red event">25 <span class="eventtext">Christmas Day</span></td>
                                                    <td class="hastask event">26 <span class="eventtext">Event 6</span></td>
                                                    <td class="red event">27</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>29</td>
                                                    <td class="hastask event">30 <span class="eventtext">Event 7</span></td>
                                                    <td>31</td>
                                                    <td class="nextmonth">1</td>
                                                    <td>2</td>
                                                    <td class="red">3</td>
                                                </tr>
                                            </table>
                                        </div>
                        				<span><i class="fa fa-square fa-fw" style="color:#2a3744;"></i>Today</span> <br>
                                        <span><i class="fa fa-square fa-fw" style="color:#91BEE7;"></i>Event</span>
                                        -->
                                    </div>
                                    
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
                                    	<span>You haven't apply for any scholarship. To apply, go to <a href="myscholarships.php">MyScholarships</a>.</span>
                           

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                        <!--
                                        <div id="accordion" class="panel-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading-sm">
                                                    <a href="#collapseB3" data-toggle="collapse">
                                                        <h4 class="panel-title col-sm-9 col-xs-9 col-xxs-12 p3"> Scholarship 1 </h4>
                                                    </a>
                                                    <button class="btn-xs">Remove</button>
                                                    <button class="btn-xs">Win It!</button>
                                                </div>
                                                
                                                <div class="panel-collapse collapse" id="collapseB3">
                                                    <div class="panel-body">
                                                        Scholarship 1 is a scholarship that very scholarship but also sometimes can be quite scholarship because the scholarship itself is very scholarship.
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="panel panel-default">
                                                <div class="panel-heading-sm">
                                                    <a href="#collapseB4" data-toggle="collapse">
                                                        <h4 class="panel-title col-sm-9 col-xs-9 col-xxs-12 p3"> Scholarship 2 </h4>
                                                    </a>
                                                    <button class="btn-xs">Remove</button>
                                                    <button class="btn-xs">Win It!</button>
                                                </div>
                                                
                                                <div class="panel-collapse collapse" id="collapseB4">
                                                    <div class="panel-body">
                                                        Scholarship 2 is a scholarship that very scholarship but also sometimes can be quite scholarship because the scholarship itself is very scholarship.
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="panel panel-default">
                                                <div class="panel-heading-sm">
                                                    <a href="#collapseB5" data-toggle="collapse">
                                                        <h4 class="panel-title col-sm-9 col-xs-9 col-xxs-12 p3"> Scholarship 3 </h4>
                                                    </a>
                                                    <button class="btn-xs">Remove</button>
                                                    <button class="btn-xs">Win It!</button>
                                                </div>
                                                
                                                <div class="panel-collapse collapse" id="collapseB5">
                                                    <div class="panel-body">
                                                        Scholarship 3 is a scholarship that very scholarship but also sometimes can be quite scholarship because the scholarship itself is very scholarship.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        -->
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
  var $todoContainer = $('#to-do-wrapper');
  var $addForm = $('#add-form');
  var $taskInput = $addForm.find('#add-task');
  var $todoList = $('#to-do-list');
  var fadeSpeed = 300;
  
  function addItem() {
    if ($taskInput.val()) {
      var $doneBtn = $('<button class="done-item"><i class="fa fa-check"></i></button>');
      var $editBtn = $('<button class="edit-item"><i class="fa fa-pencil"></i></button>');
      var $removeBtn = $('<button class="remove-item"><i class="fa fa-remove"></i></button>');
      var $addedTime = $('<span class="added-time">' + (new Date()).toDateString() + '</span>');
      var $listItem = $('<li>' + $taskInput.val() +'</li>').addClass($choosePriorityBtn.attr('class')).removeClass('choose-priorety').hide();
      $listItem.append($removeBtn,$editBtn,$doneBtn,$addedTime);
      $todoList.append($listItem);
      $listItem.fadeIn(fadeSpeed);
      $taskInput.val("");
    }
  }
  
  function removeItem($item) {
    $item.fadeOut(fadeSpeed,function() {
      //alert($(this).height());
      //$(this).nextAll().animate({top: '-=' + $(this).height() + ''},fadeSpeed).css('top','0');
      $(this).remove();
    });
  }
  
  function doneItem($item) {
    var $restoreBtn = $('<button class="restore-item"><i class="fa fa-repeat"></i></button>');
    $item.fadeOut(fadeSpeed,function() {
      $item.appendTo($('#done-list')).find('.done-item').replaceWith($restoreBtn).end().show();;
    });
  }
  
  function restoreItem($item) {
    var $doneBtn = $('<button class="done-item"><i class="fa fa-check"></i></button>');
    $item.fadeOut(fadeSpeed,function() {
      $item.appendTo($('#to-do-list')).find('.restore-item').replaceWith($doneBtn).end().show();;
    });
  }
  function editItem($item) {
    var $editWrapper = $('<div class="edit-box" />');
    var $editForm = $('<form><input type="text" id="edit-task" name="edit-task" placeholder="' + $item.clone().find('.added-time').remove().end().text() + '" /></form>');
    $item.append($editWrapper.append($editForm));
  }
  
  $addForm.on('submit',function(e) {
    e.preventDefault();
    addItem();
  });
  $todoContainer.on('click','.remove-item',function() {
    var $removeItem = $(this).parent();
    removeItem($removeItem);
  });
  $todoContainer.on('click','.done-item',function() {
    var $doneItem = $(this).parent();
    doneItem($doneItem);
  });
  $todoContainer.on('click','.restore-item',function() {
    var $restoreItem = $(this).parent();
    restoreItem($restoreItem);
  });
  $todoContainer.on('click','.edit-item',function() {
    var $editItem = $(this).parent();
    editItem($editItem);
  });
  
  
  // tabs
  var $tabsContainer = $('#tabs');
  var $tabs = $tabsContainer.find('.tab');
  var $tabsContent = $('[id$="tab-content"]');
  $tabsContent.not(':first').hide();
  $tabs.on('click',function(e) {
    e.preventDefault();
    $tabs.removeClass('active').filter($(this)).addClass('active');
    var href = $(this).attr('href');
    $(href).show();
    $tabsContent.not($(href)).hide();
  });
  
  
  //priorities btn
  var $prioritiesContainer = $('.priorities');
  var $prioritiesList = $prioritiesContainer.find('.priorities-list');
  var $choosePriorityBtn = $prioritiesContainer.find('.choose-priorety');
  var $prioritiesBtns = $prioritiesContainer.find('.priority button');
  
  $choosePriorityBtn.on('click',function() {
    $prioritiesList.toggle();
  });
  $prioritiesBtns.on('click',function() {
    $choosePriorityBtn.removeClass('low medium high').addClass($(this).attr('class'));
    $prioritiesList.hide();
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
}

?>
<?php
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
    <title>MyScholarships - Add Universities</title>
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
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    
    
<script>
	$(document).ready(function () {
	
	$('.addButton')
	.on('click', function () {
	  $(this).parents('.optionRow')
		.clone(true)
		.prependTo('.newOptions')
	})
	
	});
</script>




<script>
config.removeButtons = 'Underline,JustifyCenter,About';
$('#bold').on('click', function() {
   document.execCommand('bold', false, null);
});

$('#italic').on('click', function() {
   document.execCommand('italic', false, null);
});

$('#underline').on('click', function() {
   document.execCommand('underline', false, null);
});

$('#align-left').on('click', function() {
   document.execCommand('justifyLeft', false, null);
});

$('#align-center').on('click', function() {
   document.execCommand('justifyCenter', false, null);
});

$('#align-right').on('click', function() {
   document.execCommand('justifyRight', false, null);
});

$('#list-ul').on('click', function() {
   document.execCommand('insertUnorderedList', false, null);
});

$('#list-ol').on('click', function() {
   document.execCommand('insertOrderedList', false, null);
});

$('#fonts').on('change', function() {
   var font = $(this).val();
   document.execCommand('fontName', false, font);
});

$('#size').on('change', function() {
   var size = $(this).val();
   $('.editor').css('fontSize', size + 'px');
});

$('#color').spectrum({
   color: '#000',
   showPalette: true,
   showInput: true,
   showInitial: true,
   showInput: true,
   preferredFormat: "hex",
   showButtons: false,
   change: function(color) {
      color = color.toHexString();
      document.execCommand('foreColor', false, color);
   }
});

$('.editor').perfectScrollbar();
    </script>



    
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
                                <li><a href="admin-scholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> Scholarships</a></li>
                                <li class="active"><a href="admin-universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
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
                                    <li><a class="" href="admin-scholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> Scholarships </a></li>
                                    <li><a class="active" href="admin-universities.php"><i class="fa fa-university fa-fw"></i> Universities </a></li>
                                    <li><a class="" href="admin-blog.php"><i class="fa fa-rss fa-fw"></i> Blog </a></li>
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
                            <h3 class="page-sub-header2 clearfix no-padding mb20">Add New Universities </h3>
                        </div>
                        <form action="../admin/mod/doadduniversity.php" method="post" class="form-horizontal col-sm-12"  enctype="multipart/form-data" role="form" >
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Name</label>

                                                <div class="col-sm-9">
                                                    <input name="UName" type="text" class="form-control" placeholder="Name" autofocus>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Country</label>

                                                <div class="col-sm-9">
                                                    <input name="UCountry" type="text" class="form-control" placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Location</label>

                                                <div class="col-sm-9">
                                                    <input name="ULocation" type="text" class="form-control" placeholder="Location">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Website</label>
                                                
                                                <div class="col-sm-9">
                                                    <input name="UWebsite" type="url" class="form-control" placeholder="Website">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Email</label>

                                                <div class="col-sm-9">
                                                    <input name="UEmail" type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Facility</label>
												
                                                <div class="col-sm-9">
                                                	
                                               
                                                    
                                                    
                                                    <textarea id="facility" name="UFacility" class="form-control" placeholder="Facility" cols="10" rows="5"></textarea>
                                                    
                                                    
                                                    <script>
														// Replace the <textarea id="editor1"> with a CKEditor
														// instance, using default configuration.
														CKEDITOR.replace( 'facility' );
														

													</script>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Fact</label>

                                                <div class="col-sm-9">
                                                    <textarea id="fact" name="UFact" class="form-control" placeholder="Fact" cols="10" rows="5"></textarea>
                                                    
                                                    <script>
														// Replace the <textarea id="editor1"> with a CKEditor
														// instance, using default configuration.
														CKEDITOR.replace( 'fact' );
														

													</script>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Requirement</label>

                                                <div class="col-sm-9">
                                                    <textarea id="requirement" name="URequirement" class="form-control" placeholder="Requirements" cols="10" rows="5"></textarea>
                                                    
                                                    <script>
														// Replace the <textarea id="editor1"> with a CKEditor
														// instance, using default configuration.
														CKEDITOR.replace( 'requirement' );
														

													</script>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Achievement</label>

                                                <div class="col-sm-9">
                                                    <textarea id="achievement" name="UAchievement" class="form-control" placeholder="Achievement" cols="10" rows="5"></textarea>
                                                    
                                                    <script>
														// Replace the <textarea id="editor1"> with a CKEditor
														// instance, using default configuration.
														CKEDITOR.replace( 'achievement' );
														

													</script>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Description</label>

                                                <div class="col-sm-9">
                                                    <textarea id="description" name="UDescription" class="form-control" placeholder="Description" cols="10" rows="5"></textarea>
                                                    
                                                    <script>
														// Replace the <textarea id="editor1"> with a CKEditor
														// instance, using default configuration.
														CKEDITOR.replace( 'description' );
														

													</script>
                                                </div>
                                            </div>

                                            <div class="form-group optionRow">
                                                <label class="col-sm-3 control-label">Major</label>
                                                
                                                <div class="col-sm-7">
                                                
                                                
                                                
                                                	
                                                    <select name="UMajor[]" class="form-control">
                                                        <option selected disabled>Major</option>
                                                        <option value="Agriculture, Agriculture Operations, and Related Sciences">Agriculture, Agriculture Operations, and Related Sciences</option>
                                                        <option value="Architecture and Related Sciences">Architecture and Related Sciences</option>
                                                        <option value="Area, Ethnic, Cultural, Gender, and Group Studies">Area, Ethnic, Cultural, Gender, and Group Studies</option>
                                                        <option value="Basic Skills and Developmental/Remedial Education">Basic Skills and Developmental/Remedial Education</option>
                                                        <option value="Business, Management, Marketing, and Related Support Services">Business, Management, Marketing, and Related Support Services</option>
                                                        <option value="Citizenship Activities">Citizenship Activities</option>
                                                        <option value="Communication, Journalism, and Related Programs">Communication, Journalism, and Related Programs</option>
                                                        <option value="Communication Technologies/Technicians and Support Services">Communication Technologies/Technicians and Support Services
</option>
                                                        <option value="Computer and Information Sciences and Support Services">Computer and Information Sciences and Support Services</option>
                                                        <option value="Construction Tools">Construction Tools</option>
                                                        <option value="Education">Education</option>
                                                        <option value="Engineering">Engineering</option>
                                                        <option value="Engineering Technologies and Engineering-Related Fields">Engineering Technologies and Engineering-Related Fields</option>
                                                        <option value="English Language and Literature/Letters">English Language and Literature/Letters</option>
                                                        <option value="Foreign Languages, Literatures, and Linguistics">Foreign Languages, Literatures, and Linguistics</option>
                                                        <option value="Family and Consumer Sciences/Human Sciences">Family and Consumer Sciences/Human Sciences</option>
                                                        <option value="Health Professions and Related Programs">Health Professions and Related Programs</option>
                                                        <option value="Health-Related Knowledge and Skills">Health-Related Knowledge and Skills</option>
                                                        <option value="High School/Secondary Diplomas and Certificates">High School/Secondary Diplomas and Certificates</option>
                                                        <option value="History">History</option>
                                                        <option value="Homeland Security, Law Enforcement, Firefighting and Related Protective Services">Homeland Security, Law Enforcement, Firefighting and Related Protective Services</option>
                                                        <option value="Interpersonal and Social Skills">Interpersonal and Social Skills</option>
                                                        <option value="Legal Professions and Studies">Legal Professions and Studies</option>
                                                        <option value="Leisure and Recreational Activities">Leisure and Recreational Activities</option>
                                                        <option value="Liberal Arts and Sciences, General Studies and Humanities">Liberal Arts and Sciences, General Studies and Humanities</option>
                                                        <option value="Library Science">Library Science</option>
                                                        <option value="Mathematics and Statistics">Mathematics and Statistics</option>
                                                        <option value="Mechanic and Repair Technologies/Technicians">Mechanic and Repair Technologies/Technicians</option>
                                                        <option value="Military Science, Leadership and Operational Art">Military Science, Leadership and Operational Art</option>
                                                        <option value="Military Technologies and Applied Sciences">Military Technologies and Applied Sciences</option>
                                                        <option value="Multi/Interdisciplinary Studies">Multi/Interdisciplinary Studies</option>
                                                        <option value="Parks, Recreation, Leisure, and Fitness Studies">Parks, Recreation, Leisure, and Fitness Studies</option>
                                                        <option value="Personal Awareness and Self-Improvement">Personal Awareness and Self-Improvement</option>
                                                        <option value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                                                        <option value="Physical Sciences">Physical Sciences</option>
                                                        <option value="Precision Production">Precision Production</option>
                                                        <option value="Psychology">Psychology</option>
                                                        <option value="Public Administration and Social Service Professions">Public Administration and Social Service Professions</option>
                                                        <option value="Residency Programs">Residency Programs</option>
                                                        <option value="Science Technologies/Technicians">Science Technologies/Technicians</option>
                                                        <option value="Social Sciences">Social Sciences</option>
                                                        <option value="Technology Education/Industrial Arts">Technology Education/Industrial Arts</option>
                                                        <option value="Theology and Religious Vocations">Theology and Religious Vocations</option>
                                                        <option value="Transportation and Materials Moving">Transportation and Materials Moving</option>
                                                        <option value="Visual and Performing Arts">Visual and Performing Arts</option>
                                                    </select>
                                                    
                                                    
                                                    
                                                    <input type="text" name="TutionFee[]" class="form-control" placeholder="TutionFee">
                                                    
                                                </div>
                                                
                                                <div class="col-sm-2">
                                                    <button class="btn addButton w100" type="button">
                                                        <i class="fa fa-plus fa-fw"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <span class="newOptions"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Logo</label>

                                                <div class="col-sm-9">
                                                	<input name="ULogo" class="form-control p11" type="file" accept="image/*">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Image</label>

                                                <div class="col-sm-9">
                                                	<input name="file_array[]" class="form-control p11" type="file" multiple>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                </div>
                                            </div>
                                            
                                        
                                        </form>

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

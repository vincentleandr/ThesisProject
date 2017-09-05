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
    <title>MyScholarships - Update Scholarships</title>
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
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    
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
                                <li><a href="../admin/mod/dologout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
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
    $value = $_GET['name'];
    // $_SESSION['ScholarshipId'] = $_POST['name'];  
    $result1 = executeQuery("select * from msscholarship where ScholarshipId = $value");
    $row = mysql_fetch_array($result1);
    // $result2 = executeQuery("select * from scholarshiprace where ScholarshipId = $value");
    // $rowr = mysql_fetch_array($result2);
    // $checked = (',',$rowr['SRace']);
?>
                <div class="col-sm-9 page-content">
                    <div class="inner-box">
                        <div class="welcome-msg">
                            <h3 class="page-sub-header2 clearfix no-padding mb20">Update Scholarships : <?php echo $row['STitle'];?> </h3>
                        </div>
                        <form action="../admin/mod/doupdatescholarship.php" method="post" class="form-horizontal col-sm-12" role="form">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Title</label>

                                                <div class="col-sm-9">
                                                    <input name="STitle" type="text" class="form-control" placeholder="Title..">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Description</label>

                                                <div class="col-sm-9">
                                                    <textarea name="SDescription" class="form-control" placeholder="Description..." cols="10" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Fund (IDR)</label>

                                                <div class="col-sm-9">
                                                    <input name="SFund" type="number" class="form-control" placeholder="Rp. ">
                                                </div>
                                            </div>
                                            <hr>
                                            <h3><i class="fa fa-check-square-o fa-fw"></i> Requirements <hr></h3>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Gender</label>
                                                <div class="col-sm-9">
                                                    <div class="radio">
                                                        <label for="Gender-0">
                                                            <input name="SGender" id="Gender-0" value="0" checked="checked"
                                                               type="radio">
                                                            Both </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="Gender-1">
                                                            <input name="SGender" id="Gender-1" value="1" type="radio">
                                                            Male </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="Gender-2">
                                                            <input name="SGender" id="Gender-2" value="2" type="radio">
                                                             Female </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Location</label>

                                                <div class="col-sm-9">
                                                    <select name="SLocation" class="form-control">
                                                        <option selected disabled>Province</option>
                                                        <option value="No Requirements">No Requirements</option>
                                                        <option value="Aceh">Aceh</option>
                                                        <option value="Bali">Bali</option>
                                                        <option value="Banten">Banten</option>
                                                        <option value="Bengkulu">Bengkulu</option>
                                                        <option value="Gorontalo">Gorontalo</option>
                                                        <option value="Jakarta">Jakarta</option>
                                                        <option value="Jawa Barat">Jawa Barat</option>
                                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                                        <option value="Jawa Timur">Jawa Timur</option>
                                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                        <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                                                        <option value="Lampung">Lampung</option>
                                                        <option value="Maluku">Maluku</option>
                                                        <option value="Maluku Utara">Maluku Utara</option>
                                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                                        <option value="Papua">Papua</option>
                                                        <option value="Papua Barat">Papua Barat</option>
                                                        <option value="Riau">Riau</option>
                                                        <option value="Sulawesi">Sulawesi Barat</option>
                                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                                                        <option value="Sumatera Utara">Sumatera Utara</option>
                                                        <option value="Daerah Istimewa Yogyakarta">Daerah Istimera Yogyakarta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            	<label class="col-sm-3 control-label pt7 text-right">Grade Level</label>

                                                <div class="col-sm-9">
                                                    <select name="SGrade" class="form-control">
                                                        <option selected disabled>Program</option>
                                                        <option value="No Requirements">No Requirements</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                        	</div>
                                            <div class="form-group required">
                                                <label class="col-sm-3 control-label pt7 text-right">Minimum GPA </label>
    
                                                <div class="col-sm-9">
                                                	<input name="SGPA" class="form-control" type="number" placeholder="Minimum GPA">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group required">
                                                <label class="col-sm-3 control-label pt7 text-right">Religion</label>
    
                                                <div class="col-sm-9">
                                                    <select name="SReligion" class="form-control">
                                                        <option selected disabled value="">Religion</option>
                                                        <option value="No Requirement">No Requirement</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Protestant">Protestant</option>
                                                        <option value="Catholic">Catholic</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Buddhist">Buddhist</option>
                                                        <option value="Confucian">Confucian</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Race</label>

                                                <div class="col-sm-9">
                                                    <div class="multi-check radio">
                                                        <a href="#" class="w100 btn btn-default btn-sm trigger">Can choose more than one <i class="fa fa-caret-down fa-fw"></i></a>
                                                        
                                                        <div class="w100 dropdown-form">
                                                        	<label class="display-block" for="NRRace">
                                                                <input type="checkbox" name="SRace[]" id="NRRace" value="No Requirements" onClick="toggleRace(this)"/>
                                                                <span>No Requirements</span>
                                                            </label>

                                                            <!--  <label class="display-block" for="Race">
                                                                <input type="checkbox" name="SRace[]" id="Race" value="Acehnese" <?php in_array('Acehnese','$checked') ? print "checked" : "";?> />
                                                                <span>Acehnese</span>
                                                            </label> -->
                                                        
                                                            <label class="display-block" for="Race">
                                                                <input type="checkbox" name="SRace[]" id="Race" value="Acehnese"/>
                                                                <span>Acehnese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race2">
                                                                <input type="checkbox" name="SRace[]" id="Race2" value="Balinese"/>
                                                                <span>Balinese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race3">
                                                                <input type="checkbox" name="SRace[]" id="Race3" value="Banjarese"/>
                                                                <span>Banjarese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race4">
                                                                <input type="checkbox" name="SRace[]" id="Race4" value="Bantenese"/>
                                                                <span>Bantenese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race5">
                                                                <input type="checkbox" name="SRace[]" id="Race5" value="Batak"/>
                                                                <span>Batak</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race6">
                                                                <input type="checkbox" name="SRace[]" id="Race6" value="Betawi"/>
                                                                <span>Betawi</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race7">
                                                                <input type="checkbox" name="SRace[]" id="Race7" value="Bugis"/>
                                                                <span>Bugis</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race8">
                                                                <input type="checkbox" name="SRace[]" id="Race8" value="Chinese"/>
                                                                <span>Chinese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race9">
                                                                <input type="checkbox" name="SRace[]" id="Race9" value="Cirebonese"/>
                                                                <span>Cirebonese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race10">
                                                                <input type="checkbox" name="SRace[]" id="Race10" value="Foreign"/>
                                                                <span>Foreign</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race11">
                                                                <input type="checkbox" name="SRace[]" id="Race11" value="Javanese"/>
                                                                <span>Javanese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race12">
                                                                <input type="checkbox" name="SRace[]" id="Race12" value="Madurese"/>
                                                                <span>Madurese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race13">
                                                                <input type="checkbox" name="SRace[]" id="Race13" value="Makassarese"/>
                                                                <span>Makassarese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race14">
                                                                <input type="checkbox" name="SRace[]" id="Race14" value="Malay"/>
                                                                <span>Malay</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race15">
                                                                <input type="checkbox" name="SRace[]" id="Race15" value="Minahasan"/>
                                                                <span>Minahasan</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race16">
                                                                <input type="checkbox" name="SRace[]" id="Race16" value="Minangkabau"/>
                                                                <span>Minangkabau</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race17">
                                                                <input type="checkbox" name="SRace[]" id="Race17" value="Sasak"/>
                                                                <span>Sasak</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race18">
                                                                <input type="checkbox" name="SRace[]" id="Race18" value="Sundanese"/>
                                                                <span>Sundanese</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Race19">
                                                                <input type="checkbox" name="SRace[]" id="Race19" value="Other"/>
                                                                <span>Other</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Major/Field of Study</label>
    
                                                <div class="col-sm-9">
                                                	<div class="multi-check radio">
                                                        <a href="#" class="w100 btn btn-default btn-sm trigger">Can choose more than one <i class="fa fa-caret-down fa-fw"></i></a>
                                                        
                                                        <div class="w100 dropdown-form">
                                                        	<label class="display-block" for="NRMajor">
                                                                <input type="checkbox" name="SMajor[]" id="NRMajor" value="No Requirements" onClick="toggleMajor(this)"/>
                                                                <span>No Requirements</span>
                                                            </label>
                                                        
                                                            <label class="display-block" for="Major">
                                                                <input type="checkbox" name="SMajor[]" id="Major" value="Agriculture, Agriculture Operations, and Related Sciences"/>
                                                                <span>Agriculture, Agriculture Operations, and Related Sciences</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major2">
                                                                <input type="checkbox" name="SMajor[]" id="Major2" value="Architecture and Related Sciences"/>
                                                                <span>Architecture and Related Sciences</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major3">
                                                                <input type="checkbox" name="SMajor[]" id="Major3" value="Area, Ethnic, Cultural, Gender, and Group Studies"/>
                                                                <span>Area, Ethnic, Cultural, Gender, and Group Studies</span>
                                                            </label>
                                                            
                                                            
                                                            <label class="display-block" for="Major4">
                                                                <input type="checkbox" name="SMajor[]" id="Major4" value="Basic Skills and Developmental/Remedial Education"/>
                                                                <span>Basic Skills and Developmental/Remedial Education</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major5">
                                                                <input type="checkbox" name="SMajor[]" id="Major5" value="Biological and Biomedical Sciences"/>
                                                                <span>Biological and Biomedical Sciences</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major6">
                                                                <input type="checkbox" name="SMajor[]" id="Major6" value="Business, Management, Marketing, and Related Support Services"/>
                                                                <span>Business, Management, Marketing, and Related Support Services</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major7">
                                                                <input type="checkbox" name="SMajor[]" id="Major7" value="Citizenship Activities"/>
                                                                <span>Citizenship Activities</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major8">
                                                                <input type="checkbox" name="SMajor[]" id="Major8" value="Communication, Journalism, and Related Programs"/>
                                                                <span>Communication, Journalism, and Related Programs</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major9">
                                                                <input type="checkbox" name="SMajor[]" id="Major9" value="Communication Technologies/Technicians and Support Services"/>
                                                                <span>Communication Technologies/Technicians and Support Services</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major10">
                                                                <input type="checkbox" name="SMajor[]" id="Major10" value="Computer and Information Sciences and Support Services"/>
                                                                <span>Computer and Information Sciences and Support Services</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major11">
                                                                <input type="checkbox" name="SMajor[]" id="Major11" value="Construction Tools"/>
                                                                <span>Construction Tools</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major12">
                                                                <input type="checkbox" name="SMajor[]" id="Major12" value="Education"/>
                                                                <span>Education</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major13">
                                                                <input type="checkbox" name="SMajor[]" id="Major13" value="Engineering"/>
                                                                <span>Engineering</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major14">
                                                                <input type="checkbox" name="SMajor[]" id="Major14" value="Engineering Technologies and Engineering-Related Fields"/>
                                                                <span>Engineering Technologies and Engineering-Related Fields</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major15">
                                                                <input type="checkbox" name="SMajor[]" id="Major15" value="English Language and Literature/Letters"/>
                                                                <span>English Language and Literature/Letters</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major16">
                                                                <input type="checkbox" name="SMajor[]" id="Major16" value="Foreign Languages, Literatures, and Linguistics"/>
                                                                <span>Foreign Languages, Literatures, and Linguistics</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major17">
                                                                <input type="checkbox" name="SMajor[]" id="Major17" value="Family and Consumer Sciences/Human Sciences"/>
                                                                <span>Family and Consumer Sciences/Human Sciences</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major18">
                                                                <input type="checkbox" name="SMajor[]" id="Major18" value="Health Professions and Related Programs"/>
                                                                <span>Health Professions and Related Programs</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major19">
                                                                <input type="checkbox" name="SMajor[]" id="Major19" value="Health-Related Knowledge and Skills"/>
                                                                <span>Health-Related Knowledge and Skills</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major20">
                                                                <input type="checkbox" name="SMajor[]" id="Major20" value="High School/Secondary Diplomas and Certificates"/>
                                                                <span>High School/Secondary Diplomas and Certificates</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major21">
                                                                <input type="checkbox" name="SMajor[]" id="Major21" value="History"/>
                                                                <span>History</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major22">
                                                                <input type="checkbox" name="SMajor[]" id="Major22" value="Homeland Security, Law Enforcement, Firefighting and Related Protective Services"/>
                                                                <span>Homeland Security, Law Enforcement, Firefighting and Related Protective Services</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major23">
                                                                <input type="checkbox" name="SMajor[]" id="Major23" value="Interpersonal and Social Skills"/>
                                                                <span>Interpersonal and Social Skills</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major24">
                                                                <input type="checkbox" name="SMajor[]" id="Major24" value="Legal Professions and Studies"/>
                                                                <span>Legal Professions and Studies</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major25">
                                                                <input type="checkbox" name="SMajor[]" id="Major25" value="Leisure and Recreational Activities"/>
                                                                <span>Leisure and Recreational Activities</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major26">
                                                                <input type="checkbox" name="SMajor[]" id="Major26" value="Liberal Arts and Sciences, General Studies and Humanities"/>
                                                                <span>Liberal Arts and Sciences, General Studies and Humanities</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major27">
                                                                <input type="checkbox" name="SMajor[]" id="Major27" value="Library Science"/>
                                                                <span>Library Science</span>
                                                            </label>
                                                            
                                                            
                                                            <label class="display-block" for="Major28">
                                                                <input type="checkbox" name="SMajor[]" id="Major28" value="Mathematics and Statistics"/>
                                                                <span>Mathematics and Statistics</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major29">
                                                                <input type="checkbox" name="SMajor[]" id="Major29" value="Mechanic and Repair Technologies/Technicians"/>
                                                                <span>Mechanic and Repair Technologies/Technicians</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major30">
                                                                <input type="checkbox" name="SMajor[]" id="Major30" value="Military Science, Leadership and Operational Art"/>
                                                                <span>Military Science, Leadership and Operational Art</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major31">
                                                                <input type="checkbox" name="SMajor[]" id="Major31" value="Military Technologies and Applied Sciences"/>
                                                                <span>Military Technologies and Applied Sciences</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major32">
                                                                <input type="checkbox" name="SMajor[]" id="Major32" value="Multi/Interdisciplinary Studies"/>
                                                                <span>Multi/Interdisciplinary Studies</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major33">
                                                                <input type="checkbox" name="SMajor[]" id="Major33" value="Parks, Recreation, Leisure, and Fitness Studies"/>
                                                                <span>Parks, Recreation, Leisure, and Fitness Studies</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major34">
                                                                <input type="checkbox" name="SMajor[]" id="Major34" value="Personal Awareness and Self-Improvement"/>
                                                                <span>Personal Awareness and Self-Improvement</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major35">
                                                                <input type="checkbox" name="SMajor[]" id="Major35" value="Philosophy and Religious Studies"/>
                                                                <span>Philosophy and Religious Studies</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major36">
                                                                <input type="checkbox" name="SMajor[]" id="Major36" value="Physical Sciences"/>
                                                                <span>Physical Sciences</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major37">
                                                                <input type="checkbox" name="SMajor[]" id="Major37" value="Precision Production"/>
                                                                <span>Precision Production</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major38">
                                                                <input type="checkbox" name="SMajor[]" id="Major38" value="Psychology"/>
                                                                <span>Psychology</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major39">
                                                                <input type="checkbox" name="SMajor[]" id="Major39" value="Public Administration and Social Service Professions"/>
                                                                <span>Public Administration and Social Service Professions</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major40">
                                                                <input type="checkbox" name="SMajor[]" id="Major40" value="Residency Programs"/>
                                                                <span>Residency Programs</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major41">
                                                                <input type="checkbox" name="SMajor[]" id="Major41" value="Science Technologies/Technicians"/>
                                                                <span>Science Technologies/Technicians</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major42">
                                                                <input type="checkbox" name="SMajor[]" id="Major42" value="Social Sciences"/>
                                                                <span>Social Sciences</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major43">
                                                                <input type="checkbox" name="SMajor[]" id="Major43" value="Technology Education/Industrial Arts"/>
                                                                <span>Technology Education/Industrial Arts</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major44">
                                                                <input type="checkbox" name="SMajor[]" id="Major44" value="Theology and Religious Vocations"/>
                                                                <span>Theology and Religious Vocations</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major45">
                                                                <input type="checkbox" name="SMajor[]" id="Major45" value="Transportation and Materials Moving"/>
                                                                <span>Transportation and Materials Moving</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Major46">
                                                                <input type="checkbox" name="SMajor[]" id="Major46" value="Visual and Performing Arts"/>
                                                                <span>Visual and Performing Arts</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                            	</div>
                                        	</div>
                                      	<div class="form-group">
                                            <label class="col-sm-3 control-label pt7 text-right">Preferred Scholarship Types</label>

                                            <div class="col-sm-9">
                                                <div class="multi-check radio">
                                                        <a href="#" class="w100 btn btn-default btn-sm trigger">Can choose more than one <i class="fa fa-caret-down fa-fw"></i></a>
                                                        
                                                        <div class="w100 dropdown-form">
                                                        	<label class="display-block" for="NRType">
                                                                <input type="checkbox" name="SType[]" id="NRType" value="No Requirements" onClick="toggleType(this)"/>
                                                                <span>No Requirements</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Type">
                                                                <input type="checkbox" name="SType[]" id="Type" value="Academic Scholarships"/>
                                                                <span>Academic Scholarships</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Type2">
                                                                <input type="checkbox" name="SType[]" id="Type2" value="Average Academic Performance Scholarships"/>
                                                                <span>Financial Scholarships</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Type3">
                                                                <input type="checkbox" name="SType[]" id="Type3" value="Athletic Scholarships"/>
                                                                <span>Athletic Scholarships</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Type4">
                                                                <input type="checkbox" name="SType[]" id="Type4" value="Creative Scholarships"/>
                                                                <span>Creative Scholarships</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Type6">
                                                                <input type="checkbox" name="SType[]" id="Type6" value="Military Scholarships"/>
                                                                <span>Military Scholarships</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Type7">
                                                                <input type="checkbox" name="SType[]" id="Type7" value="Scholarships for Minorities"/>
                                                                <span>Scholarships for Minorities</span>
                                                            </label>
                                                            
                                                            <label class="display-block" for="Type8">
                                                                <input type="checkbox" name="SType[]" id="Type8" value="Scholarships for Women"/>
                                                                <span>Scholarships for Women</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                        	</div>
                                    	</div>
                                        <hr>
                                        <h3><i class="fa fa-info-circle fa-fw"></i> Information <hr></h3>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Start Date</label>

                                                
                                                <div class="col-sm-9">
                                                    <input name="SStart" type="date" class="form-control p11">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Deadline</label>

                                                
                                                <div class="col-sm-9">
                                                    <input name="SDeadline" type="date" class="form-control p11">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Announcement Date</label>

                                                
                                                <div class="col-sm-9">
                                                    <input name="SAnnouncement" type="date" class="form-control p11">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Website</label>

                                                
                                                <div class="col-sm-9">
                                                    <input name="SWebsite" type="url" class="form-control" placeholder="Website">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label pt7 text-right">Email</label>

                                                
                                                <div class="col-sm-9">
                                                    <input name="SEmail" type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>

                                            <input type="hidden" name="name" value="<?php echo $row[0]; ?>">
                                            
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                                    <button onClick="goBack()" type="submit" name="submit" class="btn btn-primary">Cancel</button>
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
<script>
<!-- For checkbox to check all options -->
function toggleRace(source) {
  checkboxes = document.getElementsByName('SRace[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
	checkboxes[i].checked = source.checked;
  }
}

function toggleMajor(source) {
  checkboxes = document.getElementsByName('SMajor[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
	checkboxes[i].checked = source.checked;
  }
}

function toggleType(source) {
  checkboxes = document.getElementsByName('SType[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
	checkboxes[i].checked = source.checked;
  }
}
		
<!-- For the dropdown animations and stuff -->		
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

<script>
	function goBack() {
		window.history.back();	
	}
</script>



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

<?php

include("connect.php");
session_start();

$UserId = $_SESSION['UserId'];
$UniversityId = $_REQUEST['name'];
$UserRole = 'Admin';
$UName = $_REQUEST['UName'];
$UCountry = $_REQUEST['UCountry'];
$ULocation = $_REQUEST['ULocation'];
$UWebsite = $_REQUEST['UWebsite'];
$UEmail = $_REQUEST['UEmail'];
$UFacility = $_REQUEST['UFacility'];
$UFact = $_REQUEST['UFact'];
$URequirement = $_REQUEST['URequirement'];
$UAchievement = $_REQUEST['UAchievement'];
$UDescription = $_REQUEST['UDescription'];
$UMajor = $_REQUEST['UMajor'];
// $UStartDate = $_REQUEST['UStartDate'];
// $UEndDate = $_REQUEST['UEndDate'];
$Date = date('Y-m-d H:i:s');
$TutionFee = $_REQUEST['TutionFee'];

$ULogo = $_FILES['ULogo']['name'];
$tmp_name_logo = $_FILES["ULogo"]["tmp_name"];
$type_logo = $_FILES["ULogo"]["type"];
$filepathlogo = "../../images/logo/".$ULogo;
move_uploaded_file($tmp_name_logo, $filepathlogo);


$Result1 = executeQuery("update msuniversity set UName='".$UName."',UCountry='".$UCountry."',ULocation='".$ULocation."',UWebsite='".$UWebsite."',UEmail='".$UEmail."',UFacility='".$UFacility."',UFact='".$UFact."',URequirement='".$URequirement."',UAchievement='".$UAchievement."',UDescription='".$UDescription."',ULogo='".$ULogo."',URegisteredDate='".$Date."' where UniversityId='".$UniversityId."'");



//insert university major and tutionfee

$result22 = executeQuery("select * from universitymajor where UniversityId='".$UniversityId."'");

if(!mysql_num_rows($result22))
{
  $Count1 = sizeof($UMajor);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count1; $i++)
          {
              $result2 =executeQuery("INSERT INTO universitymajor (UniversityId,UMajor,TutionFee) VALUES ('".$UniversityId."','" . $UMajor[$i] . "','" . $TutionFee[$i] . "')");  
          }
  }
}else
{

 $result4 = executeQuery("delete from universitymajor where UniversityId='".$UniversityId."'");

  $Count1 = sizeof($UMajor);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count1; $i++)
          {
              $result2 =executeQuery("INSERT INTO universitymajor (UniversityId,UMajor,TutionFee) VALUES ('".$UniversityId."','" . $UMajor[$i] . "','" . $TutionFee[$i] . "')"); 
          }
  }

}

// insert images

$result33 = executeQuery("select * from universityimage where UniversityId='".$UniversityId."'");

if(!mysql_num_rows($result33)){


 if(isset($_POST['submit']))
  {
  
     for($i=0;$i<count($_FILES["file_array"]["name"]); $i++)
     {
       $name_array = $_FILES["file_array"]["name"][$i];
       $tmp_name_array = $_FILES["file_array"]["tmp_name"][$i];
        $type_array = $_FILES["file_array"]["type"][$i];
        $filepath = "../../images/univ/".$name_array;
        move_uploaded_file($tmp_name_array, $filepath);


     $result3 =executeQuery("insert into universityimage (UniversityId,Images) VALUES ('".$UniversityId."','".$name_array."')"); 

      }
  }
}else{

  $result5 = executeQuery("delete from universityimage where UniversityId='".$UniversityId."'");

  if(isset($_POST['submit']))
  {
  
     for($i=0;$i<count($_FILES["file_array"]["name"]); $i++)
     {
       $name_array = $_FILES["file_array"]["name"][$i];
       $tmp_name_array = $_FILES["file_array"]["tmp_name"][$i];
        $type_array = $_FILES["file_array"]["type"][$i];
        $filepath = "../../images/univ/".$name_array;
        move_uploaded_file($tmp_name_array, $filepath);


     $result3 =executeQuery("insert into universityimage (UniversityId,Images) VALUES ('".$UniversityId."','".$name_array."')"); 

      }
  }
}


$msg ='University succesfully updated';

  header("Location:../admin-universities.php?msg=$msg");

?>
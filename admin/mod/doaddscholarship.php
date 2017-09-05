<?php

include("connect.php");
session_start();

$UserId = $_SESSION['UserId'];
$UserRole = 'Admin';
$STitle = $_REQUEST['STitle'];
$SDescription = $_REQUEST['SDescription'];
$SFund = $_REQUEST['SFund'];
$SLocation = $_REQUEST['SLocation'];
$SGrade = $_REQUEST['SGrade'];
$SGender = $_REQUEST['SGender'];
$SGPA = $_REQUEST['SGPA'];
$SReligion = $_REQUEST['SReligion'];
$SStart = $_REQUEST['SStart'];
$SRace = $_REQUEST['SRace'];
$SMajor = $_REQUEST['SMajor'];
$SType = $_REQUEST['SType'];
$SDeadline = $_REQUEST['SDeadline'];
$SAnnouncement = $_REQUEST['SAnnouncement'];
$SWebsite = $_REQUEST['SWebsite'];
$SEmail = $_REQUEST['SEmail'];
$Date = date('Y-m-d H:i:s');

$Result1 = executeQuery("insert into msscholarship (STitle,SDescription,SFund,SGender,SLocation,SGrade,SGPA,SReligion,SStart,SDeadline,SAnnouncement,SWebsite,SEmail,SRegisteredDate) values ('".$STitle."','".$SDescription."','".$SFund."','".$SGender."','".$SLocation."','".$SGrade."','".$SGPA."','".$SReligion."','".$SStart."','".$SDeadline."','".$SAnnouncement."','".$SWebsite."','".$SEmail."','".$Date."')");

$ScholarshipId = mysql_insert_id();

//insert scholarship race

$result22 = executeQuery("select * from scholarshiprace where ScholarshipId='".$ScholarshipId."'");

if(!mysql_num_rows($result22))
{
  $Count1 = sizeof($SRace);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count1; $i++)
          {
             $result2 =executeQuery("INSERT INTO scholarshiprace (ScholarshipId,SRace) VALUES ('".$ScholarshipId."','" . $SRace[$i] . "')");     
          }
  }
}else
{

  $result5 = executeQuery("delete from scholarshiprace where ScholarshipId='".$ScholarshipId."'");

  $Count1 = sizeof($SRace);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count1; $i++)
          {
              $result2 =executeQuery("INSERT INTO scholarshiprace (ScholarshipId,SRace) VALUES ('".$ScholarshipId."','" . $SRace[$i] . "')");      
          }
  }

}

//insert scholarship major

$result33 = executeQuery("select * from scholarshipmajor where ScholarshipId='".$ScholarshipId."'");

if(!mysql_num_rows($result33))
{
  $Count2 = sizeof($SMajor);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count2; $i++)
          {
             $result3 =executeQuery("INSERT INTO scholarshipmajor (ScholarshipId,SMajor) VALUES ('".$ScholarshipId."','" . $SMajor[$i] . "')");      
          }
  }


}else
{
  $result7 = executeQuery("delete from scholarshipmajor where ScholarshipId='".$ScholarshipId."'");
  $Count2 = sizeof($SMajor);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count2; $i++)
          {
             $result3 =executeQuery("INSERT INTO scholarshipmajor (ScholarshipId,SMajor) VALUES ('".$ScholarshipId."','" .$SMajor[$i]."')");      
          }
  }

}

//insert scholarship type

$result44 = executeQuery("select * from scholarshiptype where ScholarshipId='".$ScholarshipId."'");

if(!mysql_num_rows($result44))
{

 $Count3 = sizeof($SType);
 if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count3; $i++)
          {
             $result4 =executeQuery("INSERT INTO scholarshiptype (ScholarshipId,SType) VALUES ('".$ScholarshipId."','" . $SType[$i] . "')");     
          }
  }

}else
{

  $result8 = executeQuery("delete from scholarshiptype where ScholarshipId='".$ScholarshipId."'");

  $Count3 = sizeof($SType);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count3; $i++)
          {
             $result4 =executeQuery("INSERT INTO scholarshiptype (ScholarshipId,SType) VALUES ('".$ScholarshipId."','" . $SType[$i] . "')");     
          }
  }

}

$msg ='Scholarship succesfully added';


	header("Location:../admin-scholarships.php?msg=$msg");

?>
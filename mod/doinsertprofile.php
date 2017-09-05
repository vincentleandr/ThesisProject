<?php
include("connect.php");
session_start();

$UserId = $_SESSION['UserId'];
$UserRole = 'Member';
$Gender = $_REQUEST['Gender'];
$Location = $_REQUEST['Location'];
$Grade = $_REQUEST['Grade'];
$GPA = $_REQUEST['GPA'];
$Religion = $_REQUEST['Religion'];
$Race = $_REQUEST['Race'];
$Date = date('Y-m-d H:i:s');
$Major = $_REQUEST['Major'];
$Type = $_REQUEST['Type'];
$Skill = $_REQUEST['Skill'];
$_Skill = mysql_real_escape_string($Skill);
$Achievement = $_REQUEST['Achievement'];
$_Achievement = mysql_real_escape_string($Achievement);
$Goals = $_REQUEST['Goals'];
$_Goals = mysql_real_escape_string($Goals);

//input ke table user
$result1 = executeQuery("update msuser set Gender='".$Gender."' , Location='".$Location."' , Grade='".$Grade."' , GPA='".$GPA."',Religion='".$Religion."',RegisteredDate='".$Date."',Skill='".$_Skill."',Achievement='".$_Achievement."',Goals='".$_Goals."' where Userid ='$UserId'");

//cek userid di userrace
$result22 = executeQuery("select * from userrace where UserId='".$UserId."'");

if(!mysql_num_rows($result22))
{
  $Count1 = sizeof($Race);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count1; $i++)
          {
             $result2 =executeQuery("INSERT INTO UserRace (UserId,Race) VALUES ('".$UserId."','" . $Race[$i] . "')");     
          }
  }
}else
{

  $result5 = executeQuery("delete from userrace where UserId='".$UserId."'");

  $Count1 = sizeof($Race);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count1; $i++)
          {
             $result2 =executeQuery("INSERT INTO UserRace (UserId,Race) VALUES ('".$UserId."','" . $Race[$i] . "')");     
          }
  }

}

//cek userid di usermajor

$result33 = executeQuery("select * from UserMajor where UserId='".$UserId."'");

if(!mysql_num_rows($result33))
{
  $Count2 = sizeof($Major);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count2; $i++)
          {
             $result3 =executeQuery("INSERT INTO UserMajor (UserId,Major) VALUES ('".$UserId."','" . $Major[$i] . "')");      
          }
  }


}else
{
  $result7 = executeQuery("delete from usermajor where UserId='".$UserId."'");
  $Count2 = sizeof($Major);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count2; $i++)
          {
             $result3 =executeQuery("INSERT INTO UserMajor (UserId,Major) VALUES ('".$UserId."','" . $Major[$i] . "')");      
          }
  }

}

//cek userid di usertype

$result44 = executeQuery("select * from usertype where UserId='".$UserId."'");

if(!mysql_num_rows($result44))
{

 $Count3 = sizeof($Type);
 if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count3; $i++)
          {
             $result4 =executeQuery("INSERT INTO UserType (UserId,Type) VALUES ('".$UserId."','" . $Type[$i] . "')");     
          }
  }

}else
{

  $result8 = executeQuery("delete from usertype where UserId='".$UserId."'");

  $Count3 = sizeof($Type);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count3; $i++)
          {
             $result4 =executeQuery("INSERT INTO UserType (UserId,Type) VALUES ('".$UserId."','" . $Type[$i] . "')");     
          }
  }

}



  

//input ketable race


//input ketable major

//input ketable type



//ambil ID terakhir, user yang barusan di input
// $result2 = executeQuery("select * from msuser");

 // $result2 = executeQuery("select userid from msuser where UserId='$UserId' ");
 // $row2 = mysqli_fetch_array($result2);
 // $User = $row2[0];

// //input lagi ke table race
// $jumlahrace = 10;
// for($i=0;$i<$jumlahrace;$i++){
//  $result3 = executeQuery("insert into UserRace (UserId,Race) values ('$User','$Race')");
// }

// if (isset($_POST['Race'])) {
// 	# code...
// 	foreach ($_POST['Race'] as $key ) 
// 	{
// 		$result2 =executeQuery("INSERT INTO UserRace (UserId,Race) VALUES ('".$UserId."','" . $Race[$key] . "')");
// 	}
// }

$msg ='Profile succesfully updated';
	header("Location:../myscholarships.php?msg=$msg");

?>
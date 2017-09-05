<?php

include("connect.php");
session_start();

$UserId = $_SESSION['UserId'];
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
$filepathlogo = "../../images/univ/logo/".$ULogo;
move_uploaded_file($tmp_name_logo, $filepathlogo);

$Result1 = executeQuery("insert into msuniversity (UName,UCountry,ULocation,UWebsite,UEmail,UFacility,UFact,URequirement,UAchievement,UDescription,ULogo,URegisteredDate) values ('".$UName."','".$UCountry."','".$ULocation."','".$UWebsite."','".$UEmail."','".$UFacility."','".$UFact."','".$URequirement."','".$UAchievement."','".$UDescription."','".$ULogo."','".$Date."')");

$UniversityId = mysql_insert_id();

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

 $result22 = executeQuery("select * from universitymajor where UniversityId='".$UniversityId."'");

  $Count1 = sizeof($Umajor);
  if(isset($_POST['submit']))
  {
      for ($i=0; $i<$Count1; $i++)
          {
          		$result2 =executeQuery("INSERT INTO universitymajor (UniversityId,UMajor,TutionFee) VALUES ('".$UniversityId."','" . $UMajor[$i] . "','" . $TutionFee[$i] . "')"); 
          }
  }

}
//insert university images 

$result33 = executeQuery("select * from universityimage where UniversityId='".$UniversityId."'");

if(!mysql_num_rows($result33)){


 if(isset($_POST['submit']))
  {
    
     // if(!empty($name_array)){
     //   $result3 =executeQuery("insert into universityimage (UniversityId,Images) VALUES ('".$UniversityId."')"); 
     // }
    
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


// $result33 = executeQuery("select * from universityimage where UniversityId='".$UniversityId."'");
//  if(!mysql_num_rows($result33)){
// while($arr = $_FILES['file_array']){
//   $temp = $_FILES['file_array']['name'][$key];
//   # code...
//    $result3 =executeQuery("INSERT INTO UniversityImage (UniversityId) VALUES ('".$UniversityId."')");  
// }
// }

//
//     
//   if(isset($_POST['submit']))
//   {
//       for ($i=0; $i<$Count2; $i++)
//           {
//             $result3 =executeQuery("INSERT INTO UniversityImage (UniversityId,Images) VALUES ('".$UniversityId."','" . $_FILES["file_array"]["name"][$i]."')");  
//           }
//         }

   
//   }

//   }else{
//     $result33 = executeQuery("select * from universityimage where UniversityId='".$UniversityId."'");
//     $Count1 = sizeof($Images);
//   if(isset($_POST['submit']))
//   {
//       for ($i=0; $i<$Count1; $i++)
//           {
//               $result3 =executeQuery("INSERT INTO universityimage (UniversityId,Images) VALUES ('".$UniversityId."','" . $Images[$i]."')");  
//           }
//   }

// }



$msg ='University succesfully added';

	header("Location:../admin-universities.php?msg=$msg");

?>


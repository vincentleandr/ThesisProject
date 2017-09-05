<?php
include("connect.php");

$UserRole = 'Member';
$Email =$_REQUEST['Email'];
$Password = $_REQUEST['Password'];
$Firstname = $_REQUEST['Firstname'];
$Lastname = $_REQUEST['Lastname'];

 $Password = md5($Password);
//input ke table user
$result1 = executeQuery("insert into MsUser (Role,Email,Password,Firstname,Lastname) Values ('$UserRole','$Email','$Password','$Firstname','$Lastname')");

//ambil ID terakhir, user yang barusan di input
 //$result2 = executeQuery("select * from msuser");

   // $result2 = executeQuery("select UserId msuser order by UserId desc limit 1");

 // $row2 = mysqli_fetch_array($result2);
 // $iduser = $row2[0];
// $UserId = $result2;

// $UserId = mysql_insert_id();

// // // //input lagi ke table race
// $result3 = executeQuery("insert into userrace (UserId) values ('".$UserId."')");

//  // //input lagi ke table major
//  $result4 = executeQuery("insert into usermajor (UserId) values ('".$UserId."')");

//  // //input lagi ke table type
//  $result5 = executeQuery("insert into usertype (UserId) values ('".$UserId."')");

	header('Location:../login.php');
?>
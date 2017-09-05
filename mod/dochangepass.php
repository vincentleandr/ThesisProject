<?php 
include("connect.php");
session_start();

$UserId = $_SESSION['UserId'];
$OldPassword = $_POST['OldPassword'];
$NewPassword = $_POST['NewPassword'];
$ConfirmNewPassword = $_POST['ConfirmNewPassword'];
$oldpasswordmd5 = md5($OldPassword);

$result1 = executequery("select * from msuser where UserId='".$UserId."'");
$row = mysql_fetch_array($result1);
$Password = $row['Password'];



if($oldpasswordmd5==$Password && $NewPassword==$ConfirmNewPassword){

$newpasswordmd5 = md5($NewPassword);

$result2 = executequery("update msuser set Password = '".$newpasswordmd5."' where UserId='".$UserId."'");

$msg1 = 'Password successfully changed';
}else{
	$msg2 = 'Incorrect old password';
}

header("Location:../setting.php?msg1=$msg1&msg2=$msg2");



 ?>
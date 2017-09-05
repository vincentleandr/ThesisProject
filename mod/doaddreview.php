<?php
include("connect.php");
session_start();
$UserId = $_SESSION['UserId'];
$Author = $_SESSION['Firstname'];
$Review = $_POST['Review'];
$UniversityId = $_POST['UniversityId'];
$Date = date('Y-m-d H:i:s');

$result1 = executeQuery("insert into reviewuniversity (UserId,UniversityId,Review,Author,Date) values('".$UserId."','".$UniversityId."','".$Review."','".$Author."','".$Date."') ");

	header("Location:../university-details.php?revid=$UniversityId");



?>